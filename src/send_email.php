<?php
session_start();

$errors = [];

if(!array_key_exists('contact_email', $_POST) | $_POST['contact_email'] == '' || !filter_var($_POST['contact_email'], FILTER_VALIDATE_EMAIL))
{
    $errors['contact_email'] = "Vous n'avez pas renseigné email valide.";
}
if(!array_key_exists('contact_goal', $_POST) | $_POST['contact_goal'] == 'Objectif ...')
{
    $errors['contact_goal'] = "Vous n'avez pas renseigné d'objectif.";
}
if(!array_key_exists('contact_message', $_POST) | $_POST['contact_message'] == '')
{
    $errors['contact_message'] = "Vous n'avez pas renseigné de message.";
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: ../index.php?=#signup');
}else{

    $from = $_POST["contact_email"];
    $contact_goal = $_POST["contact_goal"];
    $contact_message = $_POST["contact_message"];
    $to    = "jbloup@hotmail.fr";

    ini_set("SMTP", "smtp.franckmalecki.com");

// -------------------------

    $JOUR  = date("d-m-Y");
    $HEURE = date("H:i");

    $Subject = $contact_goal . " | " . $JOUR . " - " . $HEURE;

    $mail_Data = "";

    $mail_Data .= "<html> \n";

    $mail_Data .= "<head> \n";

    $mail_Data .= "<title> Subject </title> \n";

    $mail_Data .= "</head> \n";

    $mail_Data .= "<body> \n";


    $mail_Data .= "<b>Pour une $Subject </b> <br> \n";

    $mail_Data .= "<br> \n";

    $mail_Data .= $contact_message;

    $mail_Data .= "<br> \n";

    $mail_Data .= "</body> \n";

    $mail_Data .= "</HTML> \n";


    $headers  = "MIME-Version: 1.0 \n";

    $headers .= "Content-type: text/html; charset=utf-8 \n";

    $headers .= "From: $from  \n";

    $headers .= "Disposition-Notification-To: $from  \n";

// -------------------------

    $headers .= "X-Priority: 1  \n";

    $headers .= "X-MSMail-Priority: High \n";

    $CR_Mail = TRUE;

    $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);

    if ($CR_Mail === FALSE)
    {
        $error = "le mail n'a pas été envoyé !";
        $_SESSION['errors'] = $error;
        header('location: ../index.php?=#signup');
    }
    else
    {
        $_SESSION['success'] = 1;
        //echo " *** CR_Mail=$CR_Mail - Mail envoyé<br> \n";
        header('location: ../index.php?=#signup' );
    }
}