<?php

session_start();

include_once('../../../helpers/database.php');

$connection = connectDatabase();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Redireciona para a página de perfil com mensagem de erro
    $_SESSION['message'] = 'Erro ao editar o perfil.';
    $_SESSION['message_type'] = 'danger';
    header('Location: ../../profile.php');
}

// Tratamento das entradas do formulário
$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$about = mysqli_real_escape_string($connection, $_POST['about']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$password_confirm = mysqli_real_escape_string($connection, $_POST['password_confirm']);
$actual_image = mysqli_real_escape_string($connection, $_POST['actual_image']);

$query = "UPDATE users SET ";

// Verifica se o campo de senha foi preenchido
if($password != ''){
    // Verificar se a senha e a confirmação são iguais
    if($password == $password_confirm){
        // Criptografa a senha
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Adiciona a senha à query
        $query .= "password = '$password_hashed'";
    }else{
        // Redirecionar para a página do perfil
        $_SESSION['message'] = 'As senhas não são iguais';
        $_SESSION['message_type'] = 'danger';
        header('Location: ../../profile.php');
        exit;
    }
}

// Verifica se uma nova imagem foi enviada
//  Configuração para o upload da imagem
$targetDir = "../../../src/img/profile/";
$randomName = uniqid() . "_" . basename($_FILES['image']['name']);
$targetFile = $targetDir . $randomName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Validação da imagem
if($_FILES['image']['error'] !== UPLOAD_ERR_OK){
    // Redirecionar para a página do perfil
    $_SESSION['message'] = 'Erro no upload da imagem';
    $_SESSION['message_type'] = 'danger';
    header('Location: ../../profile.php');
}else{
    // Se tudo estiver ok, tnta fazer o upload
    if(move_uploaded_file($_FILES["image"]['tmp_name'], $targetFile)){
        $image_path = 'src/img/profile/' . basename($_FILES["image"]["name"]);

        // Adiciona a imagem à query
        $query .= "image = '$image_path, ";
    }else{
    // Redirecionar para a página do perfil
    $_SESSION['message'] = 'Erro no upload da imagem';
    $_SESSION['message_type'] = 'danger';
    header('Location: ../../profile.php');
    }
}

// Complementa as demais informações na nossa query
$query .= "name = '$name', email = '$email', about = '$about' WHERE id = '$user_id'";

// Executa a query no banco de dados
if(mysqli_query($connection, $query)){
    $_SESSION['message'] = 'Perfil editado com sucesso';
    $_SESSION['message_type'] = 'success';
    header('Location: ../../profile.php');
}else{
    $_SESSION['message'] = 'Perfil editado com sucesso';
    $_SESSION['message_type'] = 'danger';
    header('Location: ../../profile.php');
}