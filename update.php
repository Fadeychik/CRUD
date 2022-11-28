<?php

require_once 'config/connect.php';

$image_id = $_GET['id'];
$image = mysqli_query($connect, "SELECT * FROM `images` WHERE  `id` = '$image_id'");
$image = mysqli_fetch_assoc($image);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h3>Update</h3>
    <form action="vendor/Update.php" method="post">
        <input type="hidden" name="id" value="<?= $image['id'] ?>">
            <p>Title</p>
            <input type="text" name="title" value="<?= $image['title'] ?>">
            <p>Description</p>
            <textarea name="description"><?= $image['description'] ?></textarea>
            <p>filename</p>
            <input type="text" name="fileName" value="<?= $image['fileName'] ?>"> <br> <br>
            <button type="submit">Update</button>
    </form> 



</body>
</html>