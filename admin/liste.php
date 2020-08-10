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

        <div class="content-header-right col-md-3 col-xs-12 mb-1">
            <a href="user-create.php" class="btn btn-primary">Ajouter un nouveau Membre</a>
        </div>
        


        <div class="content-header-right breadcrumbs-right offset-md-2 breadcrumbs-top col-md-3 col-xs-12">
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

<!-- projects table with monthly chart -->
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Liste des Inscrits (<?= $nbUser?>)</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom et prenoms</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require'../config/config.php';
                            $req = $bd->prepare('SELECT * from users ORDER BY id DESC');
                            $req->execute();
                                while ($users = $req->fetch(PDO::FETCH_ASSOC)) {?>
                            <tr>
                                <td class="text-truncate"><?= $users['id'] ?></td>
                                <td class="text-truncate"><?= $users['nom'] ?></td>
                                <td class="text-truncate"><?= $users['telephone'] ?></td>
                                <td class="text-truncate"><?= $users['email'] ?></td>
                                <td class="valign-middle">
                                    <a class="btn btn-primary" href="user-update.php?id=<?= $users['id'] ?>">Modiffier</a>
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?= $users['id'] ?>">Supprimer</a>

                                    <!-- modal -->
<div class="modal fade" id="exampleModal<?= $users['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel"><?= $users['nom'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="color: black">Action Irréversible. Vous pouvez Annuler </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                <form method="POST" action="treatments/user-delete.php?id=<?= $users['id'] ?>" class="d-inline">
                    <input class="btn btn-xs btn-danger" type="submit" value="🗑️">
                </form>
            </div>
        </div>
    </div>
</div>
                                    <!-- fin modal -->






                                </td>
                            </tr>

                            <?php } ?>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
      </div>
    </div>





<?php
include_once('inc/footer.php');
include_once('inc/script.php');

 ?>