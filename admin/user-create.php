<?php
include_once('inc/head.php');
include_once('inc/topbar.php');
include_once('inc/sidebar.php');
require'../config/config.php';
$req = $bd->prepare('SELECT * from users ORDER BY id DESC');
$req->execute();
$users = $req->fetchObject();
$nbUser= $req->rowCount();

?>




    <div class="app-content content container-fluid">
      <div class="content-wrapper">

        <!-- <div class="row">
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>hjh</strong></a>.
            </div>
        </div> -->

    <div class="content-header row">
        <div class="content-header-left col-md-4 col-xs-12 mb-1">
            <h2 class="content-header-title">Gestion des Membres</h2>
        </div>

        <div class="content-header-right breadcrumbs-right offset-md-5 breadcrumbs-top col-md-3 col-xs-12">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Membres
            </li>
            </ol>
        </div>
        </div>
    </div>




        <div class="content-body"><!-- Statistics -->


        <div class="col-md-12">
            <div class="card" style="height: 420px;">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control">Creation de Tribut</b></h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">



<form class="form" method="POST">
    <div class="form-body">
        <div class="row">
            <div class="col-md-6">


                <div class="form-group">
                    <label for="tribut">Nom et prénoms</label>
                    <input type="text" id="tribut" autofocus class="form-control border-primary" required placeholder="Nom et prénoms" name="name">
                    
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" maxlength="8" minlength="8" required class="form-control border-primary" placeholder="telephone" name="telephone">
                    
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" autofocus class="form-control border-primary" required placeholder="Email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="text" id="password" autofocus class="form-control border-primary" required placeholder="Mot de passe" name="password">
                </div>
                <!-- <div class="form-goup">
                    <label for="check" title="Utilisez quand vous désirez effectuer plusieurs enregistrements" data-placement="bottom" data-toggle="tooltip">Enregistrement Multiple</label>
                    <input type="checkbox" name="check" id="check">
                </div> -->
                

            </div>
        </div>
    </div>

    <div class="form-actions right">
        <a href="liste.php" type="button" class="btn btn-warning mr-1">
            <i class="icon-cross2"></i> Annuler & Retourner
        </a>
        <button type="submit" name="enregistrer" class="btn btn-primary">
            <i class="icon-check2"></i> Enregistrer
        </button>
    </div>
</form>
                        


        </div>
      </div>





<?php
include_once('inc/footer.php');
include_once('inc/script.php');

 ?>