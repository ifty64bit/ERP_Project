<?php
    include("../controller/Signup.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/global.css">
    <title>Signup</title>
</head>
<body>
    <section id="header">
		<div class="wrapper">
			<h1>Auction System</h1>
		</div>
	</section>
    <section>
        <div class="flex-center" style="height: 90vh;">
            <form action="" method="post" enctype="multipart/form-data" style="margin-top: 70px;">
                <fieldset class="blur-bg">
                    <table>
                        <tr>
                            <td colspan="3" style="text-align: center">
                                <h2>Signup</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="username">Username</label>
                            </td>
                            <td>
                                <input type="text" name="username" id="uname" <?php echo "value=".$username ?>>
                            </td>
                            <td><?php echo $usernameErr ?></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="photo">Photo</label>
                            </td>
                            <td>
                                <input type="file" name="photo">
                            </td>
                            <td>
                            <?php echo $photoErr ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="pass">Password</label>
                            </td>
                            <td>
                                <input type="password" name="pass" id="password" <?php echo "value=".$password ?>>
                                <span><?php echo $passwordErr ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="fname">First Name</label>
                            </td>
                            <td>
                                <input type="text" name="fname" id="firstname" <?php echo "value=".$firstname ?>>
                                <span><?php echo $firstnameErr ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="lname">Last Name</label>
                            </td>
                            <td>
                                <input type="text" name="lname" id="lastname" <?php echo "value=".$lastname ?>>
                                <span><?php echo $lastnameErr ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phone">Phone</label>
                            </td>
                            <td>
                                <input type="text" name="phone" id="phone" <?php echo "value=".$phone ?>>
                                <span><?php echo $phoneErr ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="text" name="email" id="email" <?php echo "value=".$email ?>>
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
                                            echo "<option value='$i' ",$birthDate==''?'':'selected'," >$i</option>";
                                        }
                                    ?>
                                </select>
                                <select name="month">
                                    <option value="----" disabled selected>----</option>
                                    <?php
                                        for($i = 1; $i <= 12; $i++) {
                                            echo "<option value='$i' ",$birthMonth==''?'':'selected'," >$i</option>";
                                        }
                                    ?>
                                </select>
                                <select name="year">
                                    <option value="----" disabled selected>----</option>
                                    <?php
                                        for($i = 1900; $i <= 2005; $i++) {
                                            echo "<option value='$i' ",$birthYear==''?'':'selected'," >$i</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <?php echo $birthDateErr."<br>".$birthMonthErr."<br>".$birthYearErr ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' style='text-align: center;'>
                                <input type='submit' name='submit' id='signup' class='btn' value='Signup'>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>