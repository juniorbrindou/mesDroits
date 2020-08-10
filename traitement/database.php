<?php 
/**
 * database :  host qui correspond au nom de l’hôte et à de la base de données.
 * username: user;
 * variable bdd utilser pour la connexion a la base de donnees
 */
		// class database
		// {
		// 	private $_host = 'mysql:host=localhost;dbname=mes_droits;charset=utf8';
		// 	private $_username = 'root';
		// 	private $_password = '';
		// 	private $_bdd;
			
		// 	public function gethost()
		// 	{
		// 		return $this->_host;
		// 	}
		// 	public function setHost($host)
		// 	{
		// 		$this->_host = $host;
		// 	}
		// }


/**
 * Connexion a la base de donnees
 * les getters(accesseurs) : permettent de récupérer la valeur assignée
 * les setters(mutateurs) : modifier la valeur de la variable
 */
function connexion()
{
	try {
		$this->setbdd(new PDO ($this->gethost(), $this->getUsername(), $this->getPassword() ));
	} catch (Exception $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	}
}

/**
 * Requete d'ajout de membres
 */
function addMember()
{
return 'INSERT INTO message (mes_id, mes_contenu, mes_mail, mes_prenom, mes_tel, mes_nom) VALUES (:id, :message, :mail, :prenom, :tel, :nom)';
}





try
{
    // initilisation de PDO
    // On stocke la connection à MySQL dans une variable en précisant le type de table, l'hote, le mon de la bdd, le pseudo et mot de passe
    $bdd = new PDO('mysql:host=localhost;dbname=db_ventes', 'root', '');
}
catch (Exception $e)
{
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
}