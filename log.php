<?php
	session_start();
	require_once 'Pages/connectdb.php';

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
	
	if (mysqli_num_rows($check_user)>0) {

		$user = mysqli_fetch_assoc($check_user);

		$_SESSION['user'] = [
			"id" => $user['id'],
			"login" => $user['username'],
			"email" => $user['email'],
			"avatar" => $user['avatar']

		];
		header('Location: Pages/Usermain.php');
	}
	else{
		$_SESSION['message'] = 'Falsches password oder login';
		echo $password;
		header('Location: Pages/Login.php');

	}


?>