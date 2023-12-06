<?php 

$currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');

function isActivePage($currentPage, $pageName){
if($currentPage == $pageName){
    return 'active';
}
return '';
}