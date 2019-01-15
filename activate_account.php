<?php 

	require_once "base.php";

	require_once "header.php";

	$hash = input::get("hash");

	$email = input::get("email");


	$activation = new activation;


	$activate = $activation->activate($email, $hash);

	if($activate) {

		redirect::to('login.php');
	} else {

		redirect::to("error.php");
	}



 ?>