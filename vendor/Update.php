<?php 

require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$fileName = $_POST['fileName'];

mysqli_query($connect, "UPDATE `images` SET `title` = '$title', `description` = '$description', `filename` = '$fileName' WHERE `images`.`id` = '$id'");

header('Location: /');


?>