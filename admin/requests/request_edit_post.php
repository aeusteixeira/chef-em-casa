<?php
session_start();

include_once('../../helpers/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $post_id = $_POST["post_id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $connection = connectDatabase();

    // Usar prepared statements para proteger contra SQL injection
    $title = mysqli_real_escape_string($connection, $title);
    $content = mysqli_real_escape_string($connection, $content);

    // Verifica se uma nova imagem foi enviada
    if ($_FILES["image"]["size"] > 0) {
        // Processar o upload da nova imagem
        $targetDir = "../../src/img";  // Substitua pelo diretório correto
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verificar se o arquivo é uma imagem real ou um arquivo falso
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        // Verificar se o arquivo já existe
        if (file_exists($targetFile)) {
            $uploadOk = 0;
        }

        // Verificar o tamanho do arquivo
        if ($_FILES["image"]["size"] > 500000) {
            $uploadOk = 0;
        }

        // Permitir apenas alguns formatos de arquivo
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }

        // Verificar se $uploadOk é setado como 0 por um erro
        if ($uploadOk == 0) {
            echo "Erro no upload da imagem.";
        } else {
            // Se tudo estiver ok, tentar fazer o upload
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $image_path = "src/img/" . basename($_FILES["image"]["name"]);
                // Atualizar os dados do post no banco de dados
                $query = "UPDATE posts SET title = '$title', content = '$content', image = '$image_path' WHERE id = '$post_id'";
                if (mysqli_query($connection, $query)) {
                    $_SESSION['message'] = 'Post editado com sucesso.';
                    $_SESSION['message_type'] = 'success';
                } else {
                    $_SESSION['message'] = 'Erro ao editar o post.';
                    $_SESSION['message_type'] = 'danger';
                }
            } else {
                echo "Erro ao fazer upload da imagem.";
            }
        }
    } else {
        // Se nenhuma nova imagem foi enviada, apenas atualize os dados do post no banco de dados
        $query = "UPDATE posts SET title = '$title', content = '$content' WHERE id = '$post_id'";
        if (mysqli_query($connection, $query)) {
            $_SESSION['message'] = 'Post editado com sucesso.';
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = 'Erro ao editar o post.';
            $_SESSION['message_type'] = 'danger';
        }
    }

    // Redirecionar de volta para a página de edição ou para a lista de posts
    header("Location: ../admin/edit_post.php?post_id=$post_id");
    exit();
}
?>
