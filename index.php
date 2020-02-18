<?php
// název proměnné, operátor přiřazení, hodnota kterou ukládáme od proměnné

$firstname = "Jan";
$lastname = "Hladik";
$gender = "Muž";
$school = "4.ZS";
$birthday = "22.07.2002";
$email = "jan.hladik@student.ossp.cz";
$phone = "721 926 888";
$hobbies = "Fotbal, Airsoft, PC";

/*
$name = "Martin Ledl";
$gender = "Muž";
$school = "Karlova Univerzita";
$birthday = "20.6.2002";
$email = "martin.ledl@student.ossp.cz";
$phone = "123 456 780";
$hobbies = "Psani fanfikci a hrani videoher";
*/

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
    <h1><?php echo $firstname;   ?></h1>
    <h1><?=$lastname; ?></h1>
<ul>
    <li>Pohlaví: <?=$gender; ?></li>
    <li>Zakladni skola: <?=$school; ?> </li>
    <li>Datum narozeni: <?=$birthday; ?> </li>
    <li>E-mail: <?=$email; ?></li>
    <li>Tel. cislo: <?=$phone; ?></li>
    <li>Konicky:  <?=$hobbies; ?></li></li>
</ul>

</body>
</html>