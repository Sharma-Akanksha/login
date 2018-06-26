<?php



$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$filename = 'registration.txt';

if (file_exists($filename)) {

	$file = fopen("registration.txt", "a+");
	$details = $username.';'.$password."\n";
	fwrite($file, $details);
	fclose($file);

	header("Location:login_register.php");
}else{
	echo "File not exist";
}

?>