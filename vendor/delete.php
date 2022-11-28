<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `images` WHERE `images`.`id` = '$id'");

header('Location: /');

?>
