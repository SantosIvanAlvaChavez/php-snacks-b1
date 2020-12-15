<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack php</title>
</head>
<body>
    
<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$message = 'Acceso riuscito';

//query string: ?name=elisabetta&mail=elisabetta@hotmail.com&age=35

if (empty($name) || empty($mail) || empty($age) ) {
  $message = 'Accesso negato, riprova';
} elseif (strlen($name) <= 3) {
  $message = 'Accesso negato, il nome e troppo corto';
} elseif (strpos($mail, '@') === false || strpos($mail, '.') === false ) {
  $message = 'Accesso negato, email non valida';
} elseif (!is_numeric($age)) {
  $message ='Accesso negato, eta non valida';
} else {
  $message;
}

?>

<p> <?php echo $message; ?></p>

</body>
</html>