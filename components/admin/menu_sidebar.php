<?php 

include_once('../helpers/isActivePage.php');

?>

<div class="list-group">
    <a href="index.php" class="list-group-item list-group-item-action <?= isActivePage($currentPage, 'index') ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
    <a href="users.php" class="list-group-item list-group-item-action <?= isActivePage($currentPage, 'users') ?>"><i class="fa fa-users"></i> Usuários</a>
    <a href="posts.php" class="list-group-item list-group-item-action <?= isActivePage($currentPage, 'posts') ?>"><i class="fa fa-utensils"></i> Postagens</a>
    <a href="comments.php" class="list-group-item list-group-item-action <?= isActivePage($currentPage, 'comments') ?>"><i class="fa fa-comments"></i> Comentários</a>
    <a href="chef-ia.php" class="list-group-item list-group-item-action <?= isActivePage($currentPage, 'chef-ia') ?>"><i class="fa fa-robot"></i> Chef IA</a>
</div>
