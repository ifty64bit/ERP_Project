<?php include("../controller/Profile.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <title>Profile</title>
</head>
<body>
    <?php include('./components/Header.php') ?>
    <div>
        <div class="flex-center my">
            <form action="" method="POST">
            <table class="blur-bg">
                    <tr>
                        <td colspan="3" style="text-align: center">
                            <h3>Profile</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="uname">Username</label>
                        </td>
                        <td>
                            <input type="text" name="uname" disabled id="uname" <?php echo "value=".$uname ?>>
                        </td>
                        <td>You can not change username</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="photo">Photo</label>
                        </td>
                        <td>
                            <input type="file" name="photo">
                        </td>
                        <td>
                            <img <?php echo "src='../assets//uploads/$photo'" ?> alt="user" width="100px">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="pass">Password</label>
                        </td>
                        <td>
                            <input type="password" name="pass" id="password" <?php echo "value=".$pass ?>>
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
                    <tr>
                        <td colspan='2' style='text-align: center;'>
                            <input type='submit' name='update' id='add' class='btn' value='Update'>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>