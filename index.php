<?php
// název proměnné, operátor přiřazení, hodnota kterou ukládáme od proměnné
$name = "Jan Hladik";
$gender = "Muž";
$school = "4.ZS";
$birthday = "22.07.2002";
$email = "jan.hladik@student.ossp.cz";
$phone = "721 926 888";
$hobbies = "Fotbal, Airsoft, PC";

?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name; ?></h1>
  <li>  <?php echo $gender; ?>
  <li>  <?php echo $school; ?>
  <li>   <?php echo $birthday; ?>
  <li>  <?php echo $email; ?>
  <li>   <?php echo $phone; ?>
  <li>   <?php echo $hobbies; ?>


</body>
</html>