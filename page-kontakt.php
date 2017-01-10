<?php
/*
  Template Name: Kontakt
*/

// $senden = null;
//
// if (!empty(filter_input_array(INPUT_POST))) {
//     $zieladresse = 'smadback@gmail.com';
//     $name = filter_input(INPUT_POST, 'name');
//     $email = filter_input(INPUT_POST, 'email');
//     $nachricht = filter_input(INPUT_POST, 'nachricht');
//     $betreff = 'Kontakt per Webseitenformular';
//     $timestamp = time();
//     $tag = date("d.m.y", $timestamp);
//     $uhrzeit = date("H:i", $timestamp);
//     $header = array(
//       'From' . $name . ' <' . $email . '>',
//       'Content-Type: text/html; charset=UTF-8'
//     );
//
//     if (filter_input(INPUT_POST, 'telefon') === "") {
//         $telefon = "Keine Telefonnumer angegeben.";
//     } else {
//         $telefon = filter_input(INPUT_POST, 'telefon');
//     }
//
//     $inhalt = 'Sendedatum: ' . $tag . ' - ' . $uhrzeit . '<br><br>' .
//         '<b>Absender</b>: <br>' .
//         '<b>Name</b>: ' . $name . '<br>' .
//         '<b>E-Mail</b>: ' . $email . '<br>' .
//         '<b>Telefon</b>: ' . $telefon . '<br><br>' .
//         '<b>Nachricht</b>: <br>' .
//         $nachricht;
//
//     $senden = wp_mail($zieladresse, $betreff, $inhalt, $header);
// }

  //response generation function
  $response = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //function to generate response
  function my_contact_form_generate_response($type, $message){
    global $response;

    if($type == "success") $response = '<p style="background-color: green; color: white; text-align: center;
        padding: 5px 10px; width: 100%; margin: 0 auto; margin-bottom: 20px;">' . $message . '</p>';
    else $response = '<p style="background-color: red; color: white; text-align: center;
        padding: 5px 10px; width: 100%; margin: 0 auto; margin-bottom: 20px;">' . $message . '</p>';

  }

  //response messages
  $missing_content = "Es wurde keine Nachricht eingegeben.";
  $email_invalid   = "Email-Adresse ungültig.";
  $message_unsent  = "Die Nachricht konnte nicht gesendet werden. Versuche es erneut.";
  $message_sent    = "Die Nachricht wurde erfolgreich gesendet.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = 'kontakt@garntante.de';
  $subject = 'Kontakt per Webseitenformular';
  $timestamp = time();
  $tag = date("d.m.y", $timestamp);
  $uhrzeit = date("H:i", $timestamp);
  if (filter_input(INPUT_POST, 'telefon') === "") {
    $telefon = "Keine Telefonnumer angegeben.";
  } else {
    $telefon = filter_input(INPUT_POST, 'telefon');
  }
  $headers = array(
    'From: ' . $name . ' <' . $email . '>',
    'Content-Type: text/html; charset=UTF-8'
  );

  $inhalt = 'Sendedatum: ' . $tag . ' - ' . $uhrzeit . '<br><br>' .
        '<b>Absender</b>: <br>' .
        '<b>Name</b>: ' . $name . '<br>' .
        '<b>E-Mail</b>: ' . $email . '<br>' .
        '<b>Telefon</b>: ' . $telefon . '<br><br>' .
        '<b>Nachricht</b>: <br>' .
        $nachricht;


  //validate email
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    my_contact_form_generate_response("error", $email_invalid);
  else if(empty($name) || empty($message)){
    my_contact_form_generate_response("error", $missing_content);
  } else {
    $sent = wp_mail($to, $subject, strip_tags($inhalt), $headers);
    if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
    else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
  }
}
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
                    <?php echo $response; ?>
                    <form action="<?php the_permalink(); ?>" method="post">
                      <p><label for="name">Name: <span style="color:red">*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
                      <p><label for="message_telephone">Telefonnummer: <br><input type="text" name="message_telephone" value="<?php echo esc_attr($_POST['message_telephone']); ?>"></label></p>
                      <p><label for="message_email">Email: <span style="color:red">*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
                      <p><label for="message_text">Message: <span style="color:red">*</span> <br><textarea type="text" name="message_text" class="materialize-textarea"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
                      <input type="hidden" name="submitted" value="1">
                      <p><input type="submit" class="btn garntante waves-effect waves-light right"></p>
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
