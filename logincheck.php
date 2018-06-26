<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$file = file('registration.txt');

foreach ($file as $key => $value) {
	
	$details = explode(';',$value);
	$login = 0;

	if($details[0] == $username && trim($details[1]) == $password){
		$login = 1;
		break;
	}
}


	if ($login) {
		header( 'Location: login_register.php?action=success' );
	}else{
		header( 'Location: login_register.php?action=failed' );
	}
?>