
<?php
	
	session_start();
	if ($_SESSION['user']) {
	header('Location: Usermain.php');
	}

	require_once 'Pages/connectdb.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	
	$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
	$check_un = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username'");
	if (mysqli_num_rows($check_email)>0 || mysqli_num_rows($check_un)>0) {
		if (mysqli_num_rows($check_un)>0) {
			$_SESSION['message']='Diese Benutzername ist schon besetzt';
			header('Location: Pages/reg.php');
		}
		if (mysqli_num_rows($check_email)>0) {
			$_SESSION['message']='Dieses email ist schon besetzt';
			header('Location: Pages/reg.php');
		}
		
	}
	else{
		if ($password == $password_confirm) {
		

			$password = md5($password);
	
			mysqli_query($connect, "INSERT INTO `users`
			(`username`, `email`, `password`) 
			VALUES ('$username', '$email', '$password')");
	
			$_SESSION['message']='Erfolg';
			header('Location: Pages/Login.php');
	
		}
		else{
			$_SESSION['message']='Passwörter sind ungleich';
			header('Location: Pages/reg.php');
		}
	}
	
?>

