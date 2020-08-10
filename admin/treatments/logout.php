<?php 
session_start();

unset($_SESSION['auth']);

$_SESSION['flash']['success'] = 'Déconecté !';

header('Location: ../../index.php');