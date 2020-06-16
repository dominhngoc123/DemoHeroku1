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

		$connection = mysqli_connect("ec2-34-197-141-7.compute-1.amazonaws.com","mubdeioelkvfbs","6c60949584821757776a6c754b281e60bb333eb75190a9ee99493bef29b1373d","d27fb1npujtjac");
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
