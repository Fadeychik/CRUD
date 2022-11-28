<?php

require_once '../config/connect.php';


$title = $_POST['title'];
$description = $_POST['description'];
$fileName = $_POST['fileName'];


mysqli_query($connect, "INSERT INTO `images` (`id`, `title`, `description`, `fileName`) VALUES (NULL, '$title', '$description', '$fileName')");

header('Location: /');



?>