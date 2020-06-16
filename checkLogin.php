<?php	
	if (($_POST["txtUsername"] == '') && ($_POST["txtPassword"] == ''))
	{
		?>
			<script>
				alert("Username or password cannot be blank");
				location.assign("index.php");
			</script>
		<?php
	}
	else
	{

		$connection = mysqli_connect("localhost","root","","trainingfptcompany");
		$username = stripslashes($_POST["txtUsername"]);
		$username = mysqli_real_escape_string($connection, $username);
		$password = stripslashes($_POST["txtPassword"]);
		$password = mysqli_real_escape_string($connection, $password);
		$sql = "SELECT * FROM tblAdmin WHERE _user = '".$username."' AND _password = '".$password."'";
		$result = mysqli_query($connection, $sql) or die(mysqli_errno($connection));
		$row = mysqli_num_rows($result);
		if ($row == 1)
		{
			?>
				<script>
					alert("Login success");
					location.assign("success.php");
				</script>
			<?php
		} 
		else
		{
			?>
				<script>
					alert("Login failed");
					location.assign("index.php");
				</script>
			<?php
		}
	}
?>