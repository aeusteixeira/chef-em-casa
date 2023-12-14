<?php 
session_start();

// Verifica se o usuário está logado
if(!isset($_SESSION['user_id'])){
    header('Location: ../login.php');
}


include_once ('../../helpers/database.php');

$connection = connectDatabase();
$user_id = $_SESSION['user_id'];

$post_id = mysqli_real_escape_string($connection, $_GET['post_id']);

$query = "DELETE FROM likes WHERE post_id = '$post_id' AND user_id = '$user_id'";
$result = mysqli_query($connection, $query);

if($result){
    header('Location: ../../post.php?post_id=' . $post_id);
}