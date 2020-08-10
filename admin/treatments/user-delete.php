<?php
if (isset($_GET['id'])) {
	require '../../config/config.php';
	$sql = "DELETE FROM users WHERE id = ? ";
	$req = $bd->prepare($sql);
	$req->execute([$_GET['id']]);
	echo '<script> document.location.replace("../liste.php"); </script>';
}