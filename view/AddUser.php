<?php
    include('../controller/common/redir.php');
    if(isset($_GET['username']))
    {
        include('../controller/UpdateUser.php');
    }
    else{
        include('../controller/AddUser.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <script src="./addUser.js"></script>
    <title>Add User</title>
</head>
<body>
    <?php include("./components/Header.php")?>
    <div class="flex-center" style="height: 90vh;">
        <form action="" method="post" enctype="multipart/form-data" style="margin-top: 70px;">
            <fieldset  class="blur-bg">
                <table>
                    <tr>
                        <td colspan="3" style="text-align: center">
                            <?php
                                if(isset($_GET['username']))
                                {
                                    echo "<h2>Edit User</h2>";
                                }
                                else{
                                    echo "<h2>Add User</h2>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="uname">Username</label>
                        </td>
                        <td>
                            <input type="text" name="uname" id="uname" oninput="checkUsername(this)" <?php echo "value=".$uname ?>>
                        </td>
                        <td><?php echo $unameErr ?></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="photo">Photo</label>
                        </td>
                        <td>
                            <input type="file" name="photo">
                        </td>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="pass">Password</label>
                        </td>
                        <td>
                            <input type="password" name="pass" id="password" oninput="checkP(this)" <?php echo "value=".$pass ?>>
                            <span><?php echo $passErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="firstname" oninput="checkFname(this)" <?php echo "value=".$fname ?>>
                            <span><?php echo $fnameErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lastname" oninput="checkLname(this)" <?php echo "value=".$lname ?>>
                            <span><?php echo $lnameErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phone">Phone</label>
                        </td>
                        <td>
                            <input type="text" name="phone" id="phone" oninput="checkPhone(this)" <?php echo "value=".$phone ?>>
                            <span><?php echo $phoneErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email" oninput="checkEmail(this)" <?php echo "value=".$email ?>>
                            <span><?php echo $emailErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dateOfBirth">Date Of Birth</label>
                        </td>
                        <td>
                            <select name="date">
                                <option value="----" disabled selected>----</option>
                                <?php
                                    for($i = 1; $i <= 31; $i++) {
                                        echo "<option value='$i' ",$date==''?'':'selected'," >$i</option>";
                                    }
                                ?>
                            </select>
                            <select name="month">
                                <option value="----" disabled selected>----</option>
                                <?php
                                    for($i = 1; $i <= 12; $i++) {
                                        echo "<option value='$i' ",$month==''?'':'selected'," >$i</option>";
                                    }
                                ?>
                            </select>
                            <select name="year">
                                <option value="----" disabled selected>----</option>
                                <?php
                                    for($i = 1900; $i <= 2005; $i++) {
                                        echo "<option value='$i' ",$year==''?'':'selected'," >$i</option>";
                                    }
                                ?>
                            </select>
                        </td>
                        <td>
                            <?php echo $dateErr."<br>".$monthErr."<br>".$yearErr ?>
                        </td>
                    </tr>
                    <?php
                    if(isset($_GET['username'])) {
                        echo "
                        <tr>
                            <td>
                                <label for='status'>Status</label>
                            </td>
                            <td>
                                <select name='status' id='status'>
                                    <option value='----' disabled selected>----</option>
                                    <option value='active'", $status == 'inactive' ? '' : 'selected', ">Active</option>
                                    <option value='inactive'", $status == 'active' ? '' : 'selected', ">Inactive</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' style='text-align: center;'>
                                <input type='submit' name='submit' id='add' class='btn' value='Update User'>
                            </td>
                        </tr>
                        ";
                    }
                    else{
                        echo "
                        <tr>
                            <td colspan='2' style='text-align: center;'>
                                <input type='submit' name='submit' id='add' class='btn' value='Add User'>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>