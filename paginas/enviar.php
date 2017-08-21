<?php

// Acessa os valores dos formulário de contato
$EmailFrom = "Website Contact Form";
$EmailTo = "andre.lepesteur@gmail.com,flaviorsm@gmail.com";    //E-mail de contato
$Subject = "YOUR SUBJECT HERE"; // insert your Subject here
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message'])); 


// Atribuições dos valores ás variáveis. 
$Body = "";

$Body .= "name: ";
  $Body .= $name;

$Body .= "\n";

$Body .= "email: ";
  $Body .= $email;

$Body .= "\n";

$Body .= "phone: ";
  $Body .= $phone;

$Body .= "\n";

$Body .= "message: ";
  $Body .= $message;

$Body .= "\n";

// Envio de e-mail
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// Condicional de redicionamento para a index.html.
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
?>