<?php
/*
  Template Name: Startseite
*/
?>

<?php get_header(); ?>

<main>

    <div class="rslides_container">
        <ul id="rslides_index" class="rslides">
            <li>
                <img class="responsive-img" alt="Geschäft von innen" src="<?php echo DIR_IMAGES ?>slider1.jpg">
            </li>
            <li>
                <img class="responsive-img" alt="Wolle" src="<?php echo DIR_IMAGES ?>slider2.jpg">
            </li>
            <li>
                <img class="responsive-img" alt="Schaufenster" src="<?php echo DIR_IMAGES ?>slider3.jpg">
            </li>
            <li>
                <img class="responsive-img" alt="Wolle" src="<?php echo DIR_IMAGES ?>slider4.jpg">
            </li>
        </ul>
    </div>

    <div class="container">

        <div class="row">
            <div class="section">
                <div class="col s12 light">
                    <h2 class="text_h2"><blockquote>Aktuelles</blockquote></h2>
                </div>

                <div class="col s12 light">
                    <div class="card" id="socken-strickkurs">
                        <div class="card-content">
                            <span class="card-title"><b>STRICKTREFF VOM 17.01. VERSCHOBEN</b></span>
                            <p style="font-size: 20px">
                                Leider m&uuml;ssen wir den Stricktreff vom 17.01. um 2 Wochen nach hinten verschieben und
                                freuen uns am 31. Januar auf Euren Besuch!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <h2 class="text_h2">
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
