<?php

require_once 'config/connect.php';




?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>images</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>filename</th>
        </tr>

        <?php
            $images = mysqli_query($connect, "SELECT * FROM `images`");
            $images = mysqli_fetch_all($images);
            foreach($images as $image) {
                ?>
                
        <tr>
            <td><?= $image[0] ?></td>
            <td><?= $image[1] ?></td>
            <td><?= $image[2] ?></td>
            <td><?= $image[3] ?></td>
            <td><a href="update.php?id=<?= $image[0] ?>">Update</a></td>
            <td><a href="vendor/delete.php?id=<?= $image[0] ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>

    </table>

    <h3>New image</h3>
    <form action="vendor/create.php" method="post">
            <p>Title</p>
            <input type="text" name="title">
            <p>Description</p>
            <textarea name="description"></textarea>
            <p>filename</p>
            <input type="text" name="fileName"> <br><br>
            <button type="submit">Add new image</button>
    </form>

    
</body>
</html>