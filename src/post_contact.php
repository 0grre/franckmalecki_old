<?php

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

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: ../index.php?=#signup');
}else{
    $contact_email = $_POST["contact_email"];
    $contact_goal = $_POST["contact_goal"];
    $contact_message = $_POST["contact_message"];
    $headers = 'FROM: '. $contact_email;
    mail('postmaster@ninon-pf.fr', $contact_goal, $contact_message, $headers);
    header('location: ../index.php?=#signup' );
}