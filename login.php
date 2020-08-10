<?php include_once('includes/header.php');


if (isset($_POST['connexion']) && isset($_POST['email']) && isset($_POST['password'])) {

    require 'config/config.php';
    $req = $bd->prepare('SELECT * FROM users WHERE email = :email');
    $req->execute(['email' => $_POST['email']]);
    $user = $req->fetchObject();
    var_dump($_POST);
    
    if($user == null){
      $_SESSION['flash']['danger'] = 'Identifiant ou Mot de passe Incorrecte';
    }elseif( password_verify ($_POST['password'], $user->password ) ){
      $_SESSION['auth'] = $user;
      $_SESSION['flash']['success'] = 'Vous Êtes Connecté';
      echo '<script> document.location.replace("admin/dashboard.php"); </script>';
      
      exit();
    }else{
      $_SESSION['flash']['danger'] = 'Identifiant ou Mot de passe Incorrecte';  
    }
    
  }


if (isset($_POST['incription']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['phone'])&& isset($_POST['nom'])) {
      
      require_once'config/config.php';

      $errors = array();


      if (empty($_POST['nom'])) {
          $errors['nom'] = "Nom Invalide (Alpha-Numerique)";
      }

      
      if (empty($_POST['phone']) || !preg_match('/^[0-9_]+$/',$_POST['phone'])) {
          $errors['phone'] = "Erreur (Numerique Ex: 01020304)";
      }

      // si email est vide   ou    email ne respecte pas email format
      if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
          // tableau errors ajoute le message
        $errors['email'] = "Email Invalide";
      }else{
        // si email n'est pas vide, et email respecte le format 
        // verification si email deja dans bd
          $req = $bd->prepare('SELECT id FROM users WHERE email = ? ');
          $req->execute([$_POST['email']]);
          $user = $req->fetch();
          // ajoute l'erreur dans le tableau erreur
          if ($user) {
            $errors['email'] = 'Cette E-mail existe déjà'; 
          }
      }

      if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
          $errors['password'] = "Mot de Passe Invalide";
      }


      if (empty($errors)) {
        // Si le tabeau des erreurs est vide
        // debut de l'enregistrement
          $req = $bd->prepare("INSERT INTO users
          SET nom = :nom,telephone = :phone,email =:email, password =:password, id_role= 2");

          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
          $req->execute(['nom'=>$_POST['nom'],'phone'=>$_POST['phone'],'email'=>$_POST['email'],'password'=>$password]);

          $req = $bd->prepare('SELECT * from users WHERE email = :email');
          $req->execute(['email' => $_POST['email']]);
          $user = $req->fetchObject();
          $_SESSION['auth'] = $user;
          $_SESSION['flash']['success'] = 'Vous Êtes Connecté'; 
          echo '<script> document.location.replace("admin/dashboard.php"); </script>';
          exit();
      }

    }


?>






    </header>
    <!-- Page Contents-->
    <main class="page-content">
      <!-- Get in Touch-->
      <section class="section-90 section-md-122 text-sm-left">
        <div class="shell-wide">
          <div class="range range-xs-center">
            <div class="cell-xs-12 cell-sm-6 cell-md-6 cell-xl-6">
              <div class="inset-lg-right-40">


        <?php if (!empty($_SESSION['flash']['danger'])) { ?>
        
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">×</font>
              </font>
            </button>
            <div class="alert-message">
              <span>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;"><?= $_SESSION['flash']['danger'] ?> <br></font>
                </font>
              </span>
            </div>
          </div>

        <?php }if (!empty($_SESSION['flash']['success'])) { ?>
        
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">×</font>
              </font>
            </button>
            <div class="alert-message">
              <span>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;"><?= $_SESSION['flash']['success'] ?> <br></font>
                </font>
              </span>
            </div>
          </div>
        <?php } $_SESSION['flash'] = null; ?>



                <h4>Connexion</h4>
                <form data-form-output="form-output-global" data-form-type="contact" method="POST"
                  class=" text-left">

                  <div class="range range-xs-center">

                    <div class="cell-sm-12">

                      <div class="form-group form-group-label-outside offset-top-20">
                        <label for="connexion-email" class="form-label form-label-outside text-dark">Email</label>
                        <input id="connexion-email" type="email" name="email" required="required" class="form-control">
                      </div>

                    </div>

                    <div class="cell-sm-12">

                      <div class="form-group form-group-label-outside">
                        <label for="connexion-password" class="form-label form-label-outside text-dark">Mot de passe</label>
                        <input id="connexion-password" type="password" name="password" required="required" class="form-control">
                      </div>

                    </div>

                  </div>
                  
                  <div class="text-center text-sm-left" style="margin:15px auto">
                    <button type="submit" name="connexion" style="min-width: 130px;" class="btn btn-primary">Se connecter</button>
                  </div>
                </form>



              </div>
            </div>


            <div class="cell-xs-12 cell-sm-6 cell-md-6 cell-xl-6">
              <div class="inset-lg-right-40">
                <!-- <div class="row">
                  <div class="col-md-12 bg-danger">
                    <p class="alert alert-danger"></p> -->

<?php if (!empty($errors)) {?>

      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font>
        </button>
        <div class="alert-message">
        <?php foreach ($errors as $error ) {?>
          <span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"><?= $error ?> <br></font>
            </font>
          </span>
        <?php } ?>

        </div>
      </div>
<?php } ?>
          <!--         </div>
                </div> -->
                <h4>Inscription</h4>


<form data-form-output="form-output-global" data-form-type="contact" method="POST"
class=" text-left">

<div class="range range-xs-center">

  <!-- nom -->
  <div class="cell-sm-12">
    <div class="form-group form-group-label-outside">
      <label for="nom" class="form-label form-label-outside text-dark">Nom et prenoms</label>

      <input id="nom" type="text" name="nom" required="required" class="form-control">
      
    </div>
  </div>

  <!-- phone -->
  <div class="cell-sm-12">
    <div class="form-group form-group-label-outside">
      <label for="phone" class="form-label form-label-outside text-dark">Téléphone</label>

      <input id="phone" maxlength="8" minlength="8" type="tel" name="phone" class="form-control">
      
    </div>
  </div>

  <!-- email -->
  <div class="cell-sm-12">
    <div class="form-group form-group-label-outside offset-top-20">
      <label for="email" class="form-label form-label-outside text-dark">Email</label>

      <input id="email" type="email" name="email" required="required" class="form-control">

    </div>
  </div>

<!-- password -->
  <div class="cell-sm-12">
    <div class="form-group form-group-label-outside">
      <label for="inscription-password" class="form-label form-label-outside text-dark">Mot de passe</label>

      <input id="inscription-password" type="password" name="password" required="required" class="form-control">

    </div>
  </div>

<!-- password_confirm -->
  <div class="cell-sm-12">
    <div class="form-group form-group-label-outside">
      <label for="password_confirm" class="form-label form-label-outside text-dark">Confimez le mot de passe</label>

      <input id="password_confirm" type="password" name="password_confirm" required="required" class="form-control">

    </div>
  </div>

</div>

<!-- incription -->
<div class="text-center text-sm-left" style="margin-top: 15px; margin:15px auto">
  <button type="submit" name="incription" style="min-width: 130px;" class="btn btn-primary">S'inscrire</button>
</div>
</form>



              </div>
            </div>




          </div>
        </div>
      </section>



    </main>
    <!-- Page Footer-->
    <!-- Footer Default-->
     <?php include_once('includes/footer.php') ?>