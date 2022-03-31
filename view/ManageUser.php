<?php
    include("../controller/ManageUser.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/global.css">
    <title>Manage User</title>
</head>
<body>
    <?php include("./components/Header.php") ?>
    <?php if(count($data)==0)
            {
                echo "<h2 style='text-align:center'>No User Record Found</h2>";
            }
        ?>
    <div class="main-wrapper flex-center">
        <table class="table-border blur-bg">
            <tr class="table-border">
                <td class="table-border">Photo</td>
                <td class="table-border">User Name</td>
                <td class="table-border">First Name</td>
                <td class="table-border">Last Name</td>
                <td class="table-border">Date of Birth</td>
                <td class="table-border">Role</td>
                <td class="table-border">Phone</td>
                <td class="table-border">Email</td>
                <td class="table-border">Salary</td>
                <td class="table-border">Status</td>
                <td class="table-border">Action</td>
            </tr>
            <?php
             foreach ($data as $d)
             {
                $dob="$d[birthDate]/$d[birthMonth]/$d[birthYear]";
                 echo  "
                    <tr class='table-border'>
                        <td class='table-border'> <img src=../assets/uploads/".$d["photoName"]." width='75px' ></td>
                        <td class='table-border'>".$d["username"]."</td>
                        <td class='table-border'>".$d["firstName"]."</td>
                        <td class='table-border'>".$d["lastName"]."</td>
                        <td class='table-border'>".$dob."</td>
                        <td class='table-border'>".$d["type"]."</td>
                        <td class='table-border'>".$d["phone"]."</td>
                        <td class='table-border'>".$d["email"]."</td>
                        <td class='table-border'>".$d["salary"]."</td>
                        <td class='table-border'>".$d["accountStatus"]."</td>
                        <td class='table-border''><a href='../controller/Delete.php?username=".$d["username"]."'><button class='btn bg-red'>Delete</button></a><a href='./AddUser.php?username=".$d['username']."'><button class='btn bg-red space-x'>Edit</button></a></td>
                    </tr>
                 ";
             }
            ?>
        </table>
    </div>
</body>
</html>