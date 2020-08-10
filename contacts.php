<?php include_once('includes/header.php'); ?>

      <!-- Modern Breadcrumbs-->
      <section class="section-height-700 breadcrumb-modern rd-parallax context-dark bg-gray-darkest">
        <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-06-1920x950.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
          <div class="bg-overlay-lg-darker">
            <div class="shell section-top-50 section-bottom-34 section-md-top-90 section-lg-bottom-34 section-lg-top-128">
              <div class="veil reveal-md-block">
                <h5 class="reveal-inline-block font-default both-lines text-italic">Promulguons les Droits Humains
                  ensemble</h5>
              </div>
              <div class="veil reveal-md-block offset-top-8">
                <h1 class="text-bold">Contactez-nous</h1>
              </div>
              <ul class="list-inline list-inline-icon p offset-top-35 offset-md-top-63 offset-lg-top-108">
                <li class="text-warning"><a href="index.php">Accueil</a></li>
                <li>Contactez-nous
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </header>
    <!-- Page Contents-->
    <main class="page-content">
      <!-- Get in Touch-->
      <section class="section-90 section-md-122 text-sm-left">
        <div class="shell-wide">
          <div class="range range-xs-center">
            <div class="cell-xs-10 cell-sm-8 cell-md-9 cell-xl-6">
              <div class="inset-lg-right-40">
                <hr class="divider divider-lg hr-sm-left-0 bg-primary">
                <p class="offset-top-30 offset-md-top-63">Vous pouvez nous contacter de la manière qui vous convient.
                  Nous sommes disponibles 24 heures sur 24, 7 jours sur 7, par fax ou par courrier électronique. Vous
                  pouvez également utiliser un formulaire de contact rapide ci-dessous ou visiter notre bureau
                  personnellement. Nous serons heureux de répondre à vos questions.</p>


                <!-- RD Mailform-->
                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="traitement/ajout_message.php"
                  class=" text-left offset-top-18 offset-md-top-30">
                  <div class="range range-xs-center">
                    <div class="cell-sm-6">
                      <div class="form-group form-group-label-outside">
                        <label for="contacts-first-name" class="form-label form-label-outside text-dark">Prénom</label>
                        <input id="contacts-first-name" type="text" name="prenom" required="required"
                          class="form-control">
                      </div>
                      <div class="form-group form-group-label-outside offset-top-20">
                        <label for="contacts-email" class="form-label form-label-outside text-dark">Email</label>
                        <input id="contacts-email" type="email" name="mail"  required="required" class="form-control">
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                      <div class="form-group form-group-label-outside">
                        <label for="contacts-last-name" class="form-label form-label-outside text-dark">Nom de famille</label>
                        <input id="contacts-last-name" type="text" name="nom" required="required" class="form-control">
                      </div>
                      <div class="form-group form-group-label-outside offset-top-20">
                        <label for="contacts-phone" class="form-label form-label-outside text-dark">Téléphone</label>
                        <input id="contacts-phone" type="text" name="tel" required="required"
                          class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group-label-outside offset-top-20">
                    <label for="contacts-message" class="form-label form-label-outside text-dark">Message</label>
                    <textarea id="contacts-message" name="message" required="required" style="max-height: 150px;"
                      class="form-control"></textarea>
                  </div>
                  <div class="offset-top-18 offset-sm-top-30 text-center text-sm-left">
                    <button type="submit" name="ok" style="min-width: 130px;" class="btn btn-primary">envoyer</button>
                  </div>
                </form>
              </div>
            </div>




            <div class="cell-xs-10 cell-sm-8 cell-md-3 cell-xl-2 offset-top-66 offset-lg-top-0">
              <!-- Sidebar-->
              <aside class="text-left">
                <div class="inset-md-left-50 inset-lg-left-75">
                  <h4 class="text-bold">Suivez nous</h4>
                  <div class="text-subline offset-top-10"></div>
                  <ul class="list-inline list-inline-2 offset-top-18 inset-left-10">
                    <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-boulder-filled-inverse icon-circle fa fa-facebook"></a></li>
                    <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-boulder-filled-inverse icon-circle fa fa-twitter"></a></li>
                    <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-boulder-filled-inverse icon-circle fa fa-google-plus"></a></li>
                    <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-boulder-filled-inverse icon-circle fa fa-instagram"></a></li>
                  </ul>
                  <div class="offset-top-40 offset-md-top-63">
                    <h4 class="text-bold">Téléphones</h4>
                  </div>
                  <div class="text-subline offset-top-10"></div>
                  <div class="unit unit-horizontal unit-spacing-xs offset-top-20">
                    <div class="unit-left">
                      <div class="icon icon-xxs icon-warning icon-circle mdi mdi-phone"></div>
                    </div>
                    <div class="unit-body"><a href="callto:#" class="text-dark reveal-block">(+225)22-42-21-42</a><a
                        href="callto:#" class="text-dark reveal-block">(+225)45-67-54-48</a></div>
                  </div>
                  <div class="offset-top-40 offset-md-top-63">
                    <h4 class="text-bold">Adresse</h4>
                  </div>
                  <div class="text-subline offset-top-10"></div>
                  <div class="unit unit-horizontal unit-spacing-xs offset-top-20">
                    <div class="unit-left">
                      <div class="icon icon-xxs icon-warning icon-circle mdi mdi-map-marker"></div>
                    </div>
                    <div class="unit-body"><a href="#" class="text-dark">Abidjan II Plateaux, les Oscars, Résidences
                        Aurore, APT B-21</a></div>
                  </div>
                  <div class="offset-top-40 offset-md-top-63">
                    <h4 class="text-bold">E-mail</h4>
                  </div>
                  <div class="text-subline offset-top-10"></div>
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs offset-top-20">
                    <div class="unit-left">
                      <div class="icon icon-xxs icon-warning icon-circle mdi mdi-email-outline"></div>
                    </div>
                    <div class="unit-body"><a href="mailto:contact@raidhci.org" class="text-atlantis">contact@raidhci.org</a></div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>



      <section>
        <!-- RD Google Map-->
        <div class="rd-google-map" id="carte">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3972.145770622954!2d-3.9943678865081784!3d5.39474737474701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc195af7579349f%3A0x8aec4516ba4e3bab!2sRAIDH!5e0!3m2!1sfr!2sci!4v1548865226522" width="1600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </section>
    </main>
    <!-- Page Footer-->
    <!-- Footer Default-->
     <?php include_once('includes/footer.php') ?>
    