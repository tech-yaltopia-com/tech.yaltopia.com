<?php
$errors = '';
$myemail = 'tech@yaltopia.com';
if (empty($_POST['email'])) {
    $errors .= "\n Error: all fields are required";
}
$email_address = $_POST['email'];

if (empty($errors)) {

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    mail($to, $email_address, $email_address, $headers);

}
