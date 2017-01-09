<?php
/*
  Template Name: Öffnungszeiten
*/
?>

<?php get_header(); ?>

<?php
$message = "";
date_default_timezone_set("Europe/Berlin");
$heute = getdate();
$wochentag = $heute['weekday'];
$stunde = $heute['hours'];
$minute = $heute['minutes'];

switch ($wochentag) {
    /*
     * Wochentag ist Samstag
     */
    case "Saturday":
        /*
         * Seite wird vor den Geschäftszeiten geöffnet
         */
        if ($stunde < 9) {
            if (9 - $stunde > 1) {
                $message = "Heute &ouml;ffnet unser Gesch&auml;ft <b>um 9 Uhr</b>. Das ist in " . (8 - $stunde) . " Stunde(n) und " . (60 - $minute) . " Minuten.";
            } else {
                $message = "Heute &ouml;ffnet unser Gesch&auml;ft <b>um 9 Uhr</b>. Das ist in " . (60 - $minute) . " Minuten.";
            }

            /*
             * Seite wird zu den Geschäftszeiten geöffnet
             */
        } else if ($stunde > 9 && $stunde < 14) {
            if (14 - $stunde > 1) {
                $message = "Wir haben heute <b>bis 14 Uhr</b> auf. Das sind noch " . (13 - $stunde) . " Stunde(n) und " . (60 - $minute) . " Minuten.";
            } else {
                $message = "Wir haben heute <b>bis 14 Uhr</b> auf. Das sind noch " . (60 - $minute) . " Minuten.";
            }
        } /*
             * Seite wird nach den Geschäftszeiten geöffnet
             */ else if ($stunde >= 14) {
            $message = "Wir haben für heute bereits <b>geschlossen</b> und &ouml;ffnen wieder <b>morgen um 10 Uhr</b>.";
        }
        break;

    /*
     * Wochentag ist Sonntag oder Montag
     */
    case "Sunday":
        $message = "Wir haben für heute bereits <b>geschlossen</b> und &ouml;ffnen wieder <b>Montag um 10 Uhr</b>";
        break;


    /*
     * Wochentag ist Dienstag - Freitag
     */
    default:
        /*
         * Seite wird vor den Geschäftszeiten geöffnet
         */
        if ($stunde < 10) {
            if (10 - $stunde > 1) {
                $message = "Heute &ouml;ffnet unser Gesch&auml;ft <b>um 10 Uhr</b>. Das ist in " . (9 - $stunde) . " Stunde(n) und " . (60 - $minute) . " Minuten.";
            } else {
                $message = "Heute &ouml;ffnet unser Gesch&auml;ft <b>um 10 Uhr</b>. Das ist in " . (60 - $minute) . " Minuten.";
            }

            /*
             * Seite wird zu den Geschäftszeiten geöffnet
             */
        } else if ($stunde > 10 && $stunde < 19) {
            if (19 - $stunde > 1) {
                $message = "Wir haben heute <b>bis 19 Uhr</b> auf. Das sind noch " . (18 - $stunde) . " Stunde(n) und " . (60 - $minute) . " Minuten.";
            } else {
                $message = "Wir haben heute <b>bis 19 Uhr</b> auf. Das sind noch " . (60 - $minute) . " Minuten.";
            }
        } /*
             * Seite wird nach den Geschäftszeiten geöffnet
             */ else if ($stunde >= 19) {
            $temp = "10 Uhr.";
            if ($wochentag == "Friday") {
                $temp = "9 Uhr.";
            }

            $message = "Wir haben für heute bereits <b>geschlossen</b> und &ouml;ffnen wieder <b>morgen um " . $temp . "</b>";
        }
        break;
}
?>

<main>
    <div class="container">
        <div class="section">

            <p class="flow-text center"><?php print $message ?></p>


            <div class="card">
                <div class="card-content">
                    <table class="striped centered">
                        <thead>
                        <tr>
                            <th data-field="tag">Wochentag</th>
                            <th data-field="oeffnungszeiten">&Ouml;ffnungszeiten</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Montag</td>
                            <td>10:00 - 19:00 Uhr</td>
                        </tr>
                        <tr>
                            <td>Dienstag</td>
                            <td>10:00 - 19:00 Uhr</td>
                        </tr>
                        <tr>
                            <td>Mittwoch</td>
                            <td>10:00 - 19:00 Uhr</td>
                        </tr>
                        <tr>
                            <td>Donnerstag</td>
                            <td>10:00 - 19:00 Uhr</td>
                        </tr>
                        <tr>
                            <td>Freitag</td>
                            <td>10:00 - 19:00 Uhr</td>
                        </tr>
                        <tr>
                            <td>Samstag</td>
                            <td>09:00 - 14:00 Uhr</td>
                        </tr>
                        <tr>
                            <td>Sonntag</td>
                            <td>geschlossen</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</main>

<?php get_footer(); ?>
