<?php
	include("./controller/login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/login.css">
	<title>Login</title>
</head>
<body>
	<section id="header">
		<div class="wrapper">
			<h1>ERP System</h1>
		</div>
	</section>
	<section id="main">
		<div class="main_wrapper">
			<form action="" method="POST">
				<table>
					<tr>
						<td>Login As:</td>
						<td>
							<select name="login_as">
								<option value="stuff">Stuff</option>
								<option value="admin">Admin</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td>
							<input type="text" name="uname">
						</td>
						<td><?php echo $uname_error ?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>
							<input type="password" name="pass">
						</td>
						<td><?php echo $pass_error ?></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;">
							<input class="btn" type="submit" name="login" value="Log in">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</section>
</body>
</html>