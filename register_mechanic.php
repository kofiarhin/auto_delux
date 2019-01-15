<?php 

require_once "base.php";


$brands = get_brands();
//var_dump($brands);

$errors = array();


//check if user has submitted data

if(input::exist('post', 'register_submit')) {

		$validation = new validation;

		$fields = array(

			'first_name' => array(

				'required' => true,
				'min' => 2,
				'max' => 40

			),

			'last_name' => array(

				'required' => true,
				'min' => 2,
				'max' => 50

			),

			'email' => array(


				'required' => true,
				

			),

			'password' => array(

				'required' => true

			),

			'contact' => array(

				'required' => true

			),

			'specialty' => array(

				'required' => true

			)


		);


		$checks = $validation->check($_POST, $fields);

		if($checks->passed()) {

			$errors = array();

			$mechanic = new  Mechanic;

			$salt = hash::salt(32);
			$password = hash::make(input::get('password'), $salt);

			$fields = array(

				'first_name' => input::get('first_name'),
				'last_name' => input::get("last_name"),
				'email' => input::get("email"),
				'password' => $password,
				'salt' => $salt,
				'specialty' => (int) input::get("specialty")

			);
			$account =  $mechanic->create($fields);


		} else {

			$errors = $checks->errors();
		}


		
	

}

?>





<?php 

require_once "header.php";

?>

<h1 class="display-4 text-center">Create An Account</h1>

<div class="row justify-content-center">



	<div class="col-md-5">

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

				<input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo input::get("first_name"); ?>">

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
				<input type="number" class="form-control" name="contact" placeholder="Enter Contact eg 0508025370" value='<?php echo input::get('contact');?>'>
			</div>


			<div class="form-group">


				<label for="password"><strong>Specialty</strong></label>
				<select name="specialty" id="" class="form-control">

					<?php 

					if($brands) {


						foreach($brands as $brand) {

							?>

							<option value="<?php echo $brand['id']; ?>"><?php echo $brand['name']; ?></option>

							<?php 

						}
					}

					?>

				</select>
			</div>


			<div class="form-group">

				<button class="btn btn-block btn-lg btn-primary" type="submit" name="register_submit">Create Account</button>


			</div>


		</form>

	</div>




</div>