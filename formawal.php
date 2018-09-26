<form action=" " method="POST">
	<table border="1">
		<tr>
			<td>
				Username : <input type="text" name="username[]">
				
			</td>
			<td>
				Password : <input type="password" name="password[]">
			</td>
		</tr>
	</table>
	<input type="submit" name="submit" value="Login">
</form>
<?php
session_start();
	$user = array(
				array(
					"id" => "1",
					"username" => "Ade",
					"password" => "Ade"
				),
				array(
					"id" => "2",
					"username" => "pangestu",
					"password" => "pangestu"
				)
					);
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
			$_SESSION['username'] = $username;
			
		}else{
			header("location:proses.php");
		}
	}
?>
