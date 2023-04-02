<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$objet_PDO = new PDO("mysql:host=localhost;dbname=contact",'root','');

$sql = "INSERT INTO info(name,email,message)  VALUES('$name','$email','$message')";
$objet_PDO->exec($sql);
header("location:index.html #contact");

?>