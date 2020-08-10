        <?php 
            require'../../config/config.php';
            $req = $bd->prepare('SELECT * FROM users WHERE id = ? ');
            // $req->execute([$_GET['id']]);
            $user = $req->fetch();

            if (!empty($_POST)) {
                var_dump($_POST);
                $errors = array(); 
     
                if (empty($_POST['name'])) {
                    $errors['name'] = "Nom Invalide (Alpha-Numerique)";
                }

                if (empty($_POST['firstname'])) {
                    $errors['firstname'] = "Prénom Invalide (Alpha-Numerique)";
                }
                
                if (empty($_POST['tel']) || !preg_match('/^[0-9_]+$/',$_POST['tel'])) {
                    $errors['tel'] = "Erreur (Numerique Ex: 01020304)";
                }

                // si email est vide     ou      email ne respecte pas email format
                if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
                    // tableau errors ajoute le message
                    $errors['email'] = "Email Invalide";
                }else{
                    // si email n'est pas vide, et email respecte le format 
                    // verification si l'email est deja prise par un other user
                    $req = $bd->prepare('SELECT id FROM users WHERE email = :email and id <> :id');
                    $req->execute(['email' =>$_POST['email'],'id' =>$_GET['id']]);
                    $otherUser = $req->fetch();
                    // ajoute l'erreur dans le tableau erreur
                    if ($otherUser) {
                        $errors['email'] = 'Cette E-mail existe déjà Pour un autre compte'; 
                    }
                    }

                    if (empty($_POST['password'])) {
                            $errors['password'] = "Mot de Passe Invalide";
                    }


                    if (empty($errors)) {
                        // Si le tabeau des erreurs est vide
                        // debut de l'enregistrement

                            $req = $bd->prepare("UPDATE utilisateur 
                            SET nom = ?,prenom = ?, telephone = ?,email = ?, motpass = ? WHERE id = ".$_GET['id']);

                            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

                            $req->execute( [ $_POST['name'],$_POST['firstname'],$_POST['tel'],$_POST['email'],$password  ]);
                            $_SESSION['flash']['success'] = 'Modiffication Reusie!';
                            echo '<script> document.location.replace("user.php"); </script>';
                            exit();

                    }
            }
         ?>