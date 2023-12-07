<?php
session_start();

include_once ('../../helpers/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $image = 'imagem.png';
    $user_id = $_SESSION['user_id'];

    $connection = connectDatabase();

    // Usar prepared statements para proteger contra SQL injection
    $title = mysqli_real_escape_string($connection, $title);
    $content = mysqli_real_escape_string($connection, $content);
    $image = mysqli_real_escape_string($connection, $image);

    
    $query = "INSERT INTO posts (user_id, title, content, image, views) VALUES ('$user_id', '$title', '$content', '$image', 0)";

    if(mysqli_query($connection, $query)) {
        echo 'Post cadastrado';
    }else{
        echo 'erro ao cadastrar';
    }

}