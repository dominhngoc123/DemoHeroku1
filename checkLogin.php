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

		$connection = pg_connect("host=ec2-34-197-141-7.compute-1.amazonaws.com dbname=d27fb1npujtjac user=mubdeioelkvfbs password=6c60949584821757776a6c754b281e60bb333eb75190a9ee99493bef29b1373d");
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		$sql = "SELECT * FROM tblAdmin WHERE _user = '".$username."' AND _password = '".$password."'";
		$result = pg_query($connection, $sql);
		$row = pg_num_rows($result);
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
