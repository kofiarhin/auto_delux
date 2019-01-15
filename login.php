<?php 

require_once 'base.php';






?>


<?php 

require_once "header.php";


if(input::exist('post', 'login_submit')) {

	$validation = new validation;

	$fields = array(

		'email' => array(

			'required' => true

		),

		'password' => array(

			'required' => true

		)

	);


	$checks = $validation->check($_POST, $fields);


	if($checks->passed()) {

			
			$user = new User;

			$login = $user->login(input::get('email'), input::get("password"));


			if($login) {
				$errors = array();
				redirect::to("route.php");
			} else {


				$errors[] = "Invalid Email/Password Combination";
			}


	} else {

		$errors = $checks->errors();
	}
}


?>


<div class="container">

	<h1 class="display-4 text-center">Login</h1>

	<div class="row justify-content-center">

		<div class="col-md-5">
		
			<?php 

					//check if account was creatad

					if(session::exist('success')) {


						?>

					<p class="alert alert-success text-center"><?php echo session::flash('success'); ?></p>

						<?php 
					}


					// display errors 


					if(!empty($errors)) {

						foreach($errors as $error) {


							?>
		<p class="alert alert-danger"><?php echo $error; ?></p>

							<?php  
						}
					}


			 ?>
			<form action="" method="post">

				<div class="form-group">

					<label for="username">Email Address</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email Address" value='<?php echo  input::get('email'); ?>'>
				</div>


				<div class="form-group">
					

					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password" value='<?php echo input::get('password'); ?>'>
				</div>

				<button class="btn btn-primary btn-lg" type="submit" name="login_submit">Login</button>

			</form>					
		</div>

	</div>


</div>