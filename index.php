<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Heroku</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="checkLogin.php" method="POST">
		<table>
			<tr>
				<th colspan="2">Login</th>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="txtUsername"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="txtPassword"/></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btnSubmit" value="Login">
					<input type="reset" name="btnReset" value="Cancel">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>