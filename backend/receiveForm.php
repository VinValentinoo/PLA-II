<?php

$name = $_POST['name'];

$surname = $_POST['surname'];

$title = $_POST['title'];

$message = $_POST['message'];

echo"hello you".", " . $name. ", ". $surname. ", ". $title .", " . $message. "! ";

file_put_contents('form.txt', $name. ", ". $surname. ", ". $title .", " . $message. "\n" , FILE_APPEND);

$msg = "bedankt voor het invullen fijnedag!";

header("Location: ../index.php?msg=$msg");

?>