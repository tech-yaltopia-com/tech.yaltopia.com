<?php
$errors = '';
$myemail = 'tech@yaltopia.com';
if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['subject']) ||
    empty($_POST['message'])) {
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if (empty($errors)) {

    $to = $myemail;

    $email_subject = "Contact form submission: $subject";

    $email_body = "You have received a new message. " .

        " Here are the details:\n Name: $name \n " .

        "Email: $email_address\n Message \n $message";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    mail($to, $email_subject, $email_body, $headers);

}
