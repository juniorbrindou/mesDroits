	<?php 
	$prenom =null;
	$mail =null;
	$nom =null;
	$tel =null;
	$message =null;
	$id =null;

	if (isset($_POST['ok'])) {
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$nom = $_POST['nom'];
		$tel = $_POST['tel'];
		$message = $_POST['message'];
		$bdd = new PDO('mysql:host=localhost;dbname=mes_droits', 'root', '');
		$requete = "INSERT INTO message VALUES('$id','$nom','$prenom','$mail','$tel','$message')";
		$ligne=$bdd->query($requete);
		$bdd=null;

	}
	header('Location:../contacts.php');

	?>
