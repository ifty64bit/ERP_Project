<?php
 include("../controller/AddAuction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <title>Add Auction</title>
</head>
<body>
    <?php include("./components/Header.php") ?>
    <div id="main">
        <div class="main-wrapper blur-bg">
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Photo</td>
                        <td><input type="file" name="photo" id="photo"></td>
                        <td><?php echo $photoErr ?></td>
                    </tr>
                    <tr>
                        <td>Title: </td>
                        <td><input type="text" name="title" id="title" <?php echo "value=$title" ?>></td>
                        <td><?php echo $titleErr ?></td>
                    </tr>
                    <tr>
                        <td>Description: </td>
                        <td><textarea name="description" id="description" cols="30" rows="10"><?php echo $description ?></textarea></td>
                        <td><?php echo $descriptionErr ?></td>
                    </tr>
                    <tr>
                        <td>Starting Price:</td>
                        <td><input type="number" name="startPrice" id="startPrice" <?php echo "value=$startPrice" ?>></td>
                        <td><?php echo $startPriceErr ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input class="btn" type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>