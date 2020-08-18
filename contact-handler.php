<?php
function reCaptcha($recaptcha){
    $secret = "6Ld_ELAZAAAAAIr8c2V4rvhNwqDqPPnX3pcHezth";
    $ip = $_SERVER['localhost/contact-handler.php'];
  
    $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    $data = curl_exec($ch);
    curl_close($ch);
  
    return json_decode($data, true);
}

$errors="";
$myemail = 'middletonry@gmail.com';
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['message'])){
    $errors.="\nError: all field are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
if(!preg_match(“/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i”, $email_address)){
    $errors.="\nError:Invalid email address";
}

$recaptcha = $_POST['g-recaptcha-response'];
$res = reCaptcha($recaptcha);
if(!$res['success']){
  $error.="/Error:Failed reCaptcha Test";
}

if(empty($errors)){
    $to = $myemail;

    $email_subject = "Contact form submission: $name";

    $email_body = "You have received a new message. ".

    "Here are the details:\n Name: $name \n ".

    "Email: $email_address\n Message \n $messag";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);

    header('Location: contact-thank-you.html');
}
?> 