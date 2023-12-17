<?php

session_start();

include_once('../../../helpers/database.php');

$connection = connectDatabase();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Lidar com a ausência da chave 'user_id' na sessão
    exit;
}

// Sanitização das entradas do formulário
$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$about = mysqli_real_escape_string($connection, $_POST['about']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$password_confirm = mysqli_real_escape_string($connection, $_POST['password_confirm']);
$actual_image = mysqli_real_escape_string($connection, $_POST['actual_image']);

// Inicia a query de atualização
$query = "UPDATE users SET ";

// Verifica se o campo de senha foi preenchido
if ($password != '') {
    // Verifica se a senha e a confirmação são iguais
    if ($password == $password_confirm) {
        // Criptografa a senha
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Adiciona a senha à query
        $query .= "password = '$password_hashed', ";
    } else {
        // Redireciona para a página de perfil com mensagem de erro
        $_SESSION['message'] = 'As senhas não são iguais.';
        $_SESSION['message_type'] = 'danger';
        header('Location: ../../profile.php');
        exit;
    }
}

// Verifica se uma nova imagem foi enviada
if ($_FILES["image"]["size"] > 0) {
    // Processar o upload da nova imagem
    $targetDir = "../../../src/img/profile/"; // Corrigido o caminho
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verificar se ocorreu algum erro durante o upload
    if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
        $_SESSION['message'] = 'Erro no upload da imagem.';
        $_SESSION['message_type'] = 'danger';
        header('Location: ../../profile.php');
        exit;
    } else {
        // Se tudo estiver ok, tentar fazer o upload
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $image_path = "src/img/profile/" . basename($_FILES["image"]["name"]);
            // Adiciona a imagem à query
            $query .= "image = '$image_path', ";
        } else {
            $_SESSION['message'] = 'Erro ao fazer upload da imagem.';
            $_SESSION['message_type'] = 'danger';
            header('Location: ../../profile.php');
            exit;
        }
    }
}

// Adiciona os outros campos à query
$query .= "name = '$name', email = '$email', about = '$about' WHERE id = '$user_id'";

// Executar a query de atualização
if (mysqli_query($connection, $query)) {
    $_SESSION['message'] = 'Perfil editado com sucesso.';
    $_SESSION['message_type'] = 'success';
} else {
    $_SESSION['message'] = 'Erro ao editar o perfil.';
    $_SESSION['message_type'] = 'danger';
}

header('Location: ../../profile.php');
exit;
