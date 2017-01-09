<?php
/*
  Template Name: Kontakt
*/
?>

<?php get_header(); ?>

<main>
  <!--start container-->
  <div class="container">

      <p class="caption">Haben Sie eine Frage? Z&ouml;gern Sie nicht uns eine Nachricht zu schicken. Unser Team
          freut sich Ihnen helfen zu können.</p>
      <div class="divider"></div>

      <div class="section">
          <div id="contact-page" class="card">
              <div class="card-image">
                  <div id="map-canvas"></div>
              </div>

              <div class="card-content">
                  <div class="row">
                      <div class="col s12 m6">
                          <form class="contact-form" action="" method="post" accept-charset="utf-8">
                              <div class="row">
                                  <div class="input-field col s12">
                                      <input id="name" name="name" type="text" required>
                                      <label for="name">Name</label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s12">
                                      <input id="email" name="email" type="email" required>
                                      <label for="email">Email</label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s12">
                                      <input id="telefon" name="telefon" type="text">
                                      <label for="telefon">Telefon (optional)</label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s12">
                                      <textarea id="nachricht" name="nachricht" class="materialize-textarea"
                                                required></textarea>
                                      <label for="nachricht">Nachricht</label>
                                  </div>
                                  <div class="row">
                                      <div class="input-field col s12">
                                          <button class="btn garntante waves-effect waves-light right"
                                                  type="submit" name="action">Absenden
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="col s12 m6">
                          <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                              <li class="active">
                                  <div class="collapsible-header active"><i class="material-icons">help</i>
                                      Benötigen Sie Hilfe?
                                  </div>
                                  <div class="collapsible-body" style="display: none;"><p>
                                    Wir sind auch Telefonisch (<i class="material-icons md-18">phone</i> 60 43 35 00) und
                                    per Fax (<i class="material-icons">local_printshop</i> 60 43 35 42) zu erreichen.<br><br>

                                    Wir begrüßen au&szlig;erdem Ihre Anfragen unter der Email-Adresse <a
                                        href="mailto:kontakt@garntante.de">kontakt@garntante.de</a> oder
                                    direkt hier per Webformular. Wir werden versuchen Ihr Anliegen
                                    schnellstmöglich zu bearbeiten. Senden Sie uns auch gerne Feedback
                                    bezüglich unseres Ladens sowie dieses Internetauftrittes.<br><br>

                                    Gerne können Sie auch direkt vorbeikommen, unsere Mitarbeiter stehen
                                    Ihnen jederzeit zur Verfügung, um auch konkrete Probleme zu besprechen.
                                    Besuchen Sie uns dafür im Hammer Steindamm 119 zu unseren
                                    Geschäftszeiten (Mo.-Fr. 10-19 und Sa. 9-14).</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

</main>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek&callback=initMap"></script>

<?php get_footer(); ?>
