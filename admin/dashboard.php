<?php
include_once('inc/head.php');
include_once('inc/topbar.php');
include_once('inc/sidebar.php');
require'../config/config.php';
$req = $bd->prepare('SELECT * from users');
$req->execute();
$nbUser= $req->rowCount();

$req2 = $bd->prepare('SELECT * from posts');
$req2->execute();
$nbPosts= $req2->rowCount();

$req3 = $bd->prepare('SELECT * from sections');
$req3->execute();
$nbSections= $req3->rowCount();

$req4 = $bd->prepare('SELECT * from commentaires');
$req4->execute();
$nbComments= $req4->rowCount();
?>




    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Statistics -->

<!-- first row informations -->
<div class="row">
    <!-- nombre posts -->
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                        <i class="icon-pencil  font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-cyan white media-body">
                        <h5>Posts</h5>
                        <h5 class="text-bold-400"><?= $nbPosts ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nomre users-->
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-deep-orange white media-body">
                        <h5>Utilisateurs</h5>
                        <h5 class="text-bold-400"><?= $nbUser ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nomber sections -->
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                        <i class="icon-cart font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-teal white media-body">
                        <h5>Sections</h5>
                        <h5 class="text-bold-400"><?= $nbSections ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nombres commentaires -->
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                        <i class="icon-chat1 font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-pink white media-body">
                        <h5>Commentaires</h5>
                        <h5 class="text-bold-400"><?= $nbComments ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- first row informations -->



<!-- projects table with monthly chart -->
<div class="row">

    <div class="col-xl-6 col-lg-6 col-md-6 ">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Les 5 Dernieres Inscriptions</h4>
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
                                <th>Email</th>
                                <th>Telephone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require'../config/config.php';
                            $req5 = $bd->prepare('SELECT * from users ORDER BY id DESC LIMIT 5');
                            $req5->execute();
                                while ($users = $req5->fetch(PDO::FETCH_ASSOC)) {?>
                            <tr>
                                <td class="text-truncate"><?= $users['id']?></td>
                                <td class="text-truncate"><?= $users['nom']?></td>
                                <td class="text-truncate"><?= $users['email']?></td>
                                <td class="valign-middle">
                                    <progress value="88" max="100" class="progress progress-xs progress-success m-0">88%</progress>
                                </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- fin user liste  -->
<div class="col-xl-6 col-lg-6 col-md-6 ">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Les 5 Derniers Posts</h4>
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
                                <th>Titre</th>
                                <th>date</th>
                                <th>section</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            require'../config/config.php';
                            $req5 = $bd->prepare('SELECT * from posts ORDER BY id DESC LIMIT 5');
                            $req5->execute();
                                while ($posts = $req5->fetch(PDO::FETCH_ASSOC)) {?>
                            <tr>
                                <td class="text-truncate"><?= $posts['id']?></td>
                                <td class="text-truncate"><?= $posts['titre']?></td>
                                <td class="text-truncate"><?= $posts['date']?></td>
                                <td class="valign-middle"><?= $posts['id_section']?></td>
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