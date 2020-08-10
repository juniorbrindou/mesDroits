<?php
function logged_only(){

    if (session_status() == PHP_SESSION_NONE)
    	{
    		session_start();
    	}

    if (!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Vous n'êtes pas authentifé";
        echo '<script> document.location.replace("../login.php"); </script>';
        exit();
    }
}

function isAdmin(){
    $admin = $_SESSION['auth']->id;
    if ($admin == 1) {
        return true;
    }
}