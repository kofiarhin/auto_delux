<?php 


require_once "base.php";


if(input::exist('post', 'register_submit')) {


	$errors = array();


	$validation = new validation;

	$fields = array(

		'email' => array(


			'required' => true, 
			'unique' => 'logins'
		),

		'first_name' => array(

			'required' => true,
			'min' => 2,
			'max' => 50

		),

		'last_name' => array(


			'required' => true,
			'min' => 2,
			'max' => 50
		),

		'password' => array(

			'required' => true,
			'min' => 8

		)

	);


	$checks = $validation->check($_POST, $fields);

	if($checks->passed()) {

		$errors = array();


		$customer = new Customer;


		$customer_fields= array(

			'email' => input::get("email"),
			'first_name' => input::get('first_name'),
			'last_name' => input::get('last_name'),
			'password' => input::get("password"),

		);

		$account = $customer->create($customer_fields);

		if($account) {



			redirect::to("login.php");


		} else {

			$errors[] = "There was a problem creating account!";
		}

	} else {

		$errors = $checks->errors();
	}


	


}

?>


<?php 

require_once "header.php";

?>



<section id="register">
	
	<div class="container">

		<h1 class="display-4 text-center">Create An Account</h1>



		<div class="row justify-content-center">



			<div class="col-md-4">



				<?php 


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

						<label for="first_name"><strong>First Name</strong></label>
						<input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="<?php echo input::get('first_name'); ?>">
					</div>


					<div class="form-group">

						<label for="last_name"><strong>Last Name</strong></label>
						<input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value='<?php echo input::get("last_name"); ?>'>

					</div>

					<div class="form-group">

						<label for="username"><strong>Email Address</strong></label>
						<input type="email" class="form-control" name="email" placeholder="Enter Email" value='<?php echo input::get('email'); ?>'>
					</div>


					<div class="form-group">


						<label for="password"><strong>Password</strong></label>
						<input type="password" class="form-control" name="password" placeholder="Enter Password" value='<?php echo input::get('password'); ?>'>
						
					</div>


					<div class="form-group">


						<label for="password"><strong>Contact</strong></label>
						<input type="number" class="form-control" name="contact" placeholder="Enter Contact eg 0508025370" value='<?php echo input::get('contact'); ?>'>
					</div>

					

					<div class="form-group">
						

						<button class="btn btn-primary btn-lg btn-block" type="submit" name="register_submit">Create</button>
					</div>



					<div class="form-group">
						
						<p class="lead">Sign up as a  <strong><a href="register_mechanic.php">Mechanic</a></strong></p>
					</div>

				</form>					
			</div>




		</div>


	</div>



</section>


