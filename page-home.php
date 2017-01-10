<?php
/*
  Template Name: Startseite
*/

/* Prepare the WP_Query for the News CPT */
$neuigkeit_query_args = array(
    'post_type'         => 'neuigkeit',
    'post_status'       => 'publish'
);
$neuigkeit_query = new WP_Query($neuigkeit_query_args);
?>

<?php get_header(); ?>

<main>

    <div class="rslides_container">
        <ul id="rslides_index" class="rslides">
            <li>
                <img class="responsive-img" alt="Geschäft von innen" src="<?= get_template_directory_uri(); ?>/images/slider1.jpg">
            </li>
            <li>
                <img class="responsive-img" alt="Wolle" src="<?= get_template_directory_uri(); ?>/images/slider2.jpg">
            </li>
            <li>
                <img class="responsive-img" alt="Schaufenster" src="<?= get_template_directory_uri(); ?>/images/slider3.jpg">
            </li>
            <li>
                <img class="responsive-img" alt="Wolle" src="<?= get_template_directory_uri(); ?>/images/slider4.jpg">
            </li>
        </ul>
    </div>

    <div class="container">

        <div class="row">
            <div class="section">
                <div class="col s12 light">
                    <h2><blockquote>Aktuelles</blockquote></h2>
                </div>

                <?php while($neuigkeit_query->have_posts()): $neuigkeit_query->the_post();
                if (get_post_meta(get_the_id(), 'neuigkeit_anzeigen', true) == true): ?>
                  <div class="col s12 light">
                      <div class="card">
                          <div class="card-content">
                              <span class="card-title"><b><?= the_title(); ?></b></span>
                              <div class="neuigkeit-content"><?= the_content(); ?></div>
                              <div class="chip">verfasst am <?= get_the_date(); ?></div>
                          </div>
                      </div>
                  </div>
                <?php
                endif;
                endwhile;
                ?>

                <div class="col s12">
                    <h2>
                        <blockquote>Willkommen in der Garntante</blockquote>
                    </h2>

                    <div class="col s12">
                        <p class="flow-text">
                            Die Garntante ist ein neues Wollfachgeschäft im Stadteil Hamm in Hamburg. Seit Dezember 2015
                            sind wir am Hammer Steindamm 119 ansässig
                            und bieten Ihnen dort Produkte hoher Qualität, darunter auch ein großes Sortiment an
                            Biowolle, zu erschwinglichen Preisen von unterschiedlichen Herstellern an.
                            Bei der bunten Auswahl ist für jeden etwas dabei!<br>
                            Die Garntante ist mehr als ein Geschäft in dem Sie Wolle kaufen können, bei einer Tasse
                            Kaffee haben Sie die Möglichkeit: <br><br>
                            &#8226; in unseren Kursen das Stricken von Grund auf oder spezielle Techniken zu
                            erlernen,<br>
                            &#8226; für Ihre Modelle die passende Wolle auszusuchen,<br>
                            &#8226; in unseren Stricktreffs mit Gleichgesinnten Erfahrungen auszutauschen und<br>
                            &#8226; uns jederzeit Fragen zu stellen, wenn Sie z.B. Probleme bei der Umsetzung Ihrer
                            Strickanleitung haben.<br>
                        </p>
                        <p class="flow-text">
                            Wir unterstützen Sie gern und nehmen uns Zeit für Sie. Kommen Sie einfach mal vorbei, wir
                            freuen uns!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

</main>


<?php get_footer(); ?>
