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

		$connection = pg_connect("ec2-52-20-248-222.compute-1.amazonaws.com dbname=de5ugtq8r5s3s4 user=rzbltrsfgxfmpi password=f1609ea5b6f86c01655cd98bd6dad7df491506a6aa7f5351a15fa6f1045c504b");
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
