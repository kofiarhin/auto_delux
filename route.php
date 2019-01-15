<?php 


require_once "base.php";


if($user->logged_in()) {

	if($user->has_role("admin")) {

		redirect::to("admin_dashboard.php");

		exit();
	}


	if($user->has_role("customer")) {

		redirect::to("customer_dashboard.php");

		exit();
	}



	if($user->has_role("customer")) {

		redirect::to("customer_dashboard.php");

		exit();
	}


	if($user->has_role("mechanic")) {

		redirect::to("mechanic_dashboard.php");

		exit();
	}




}




