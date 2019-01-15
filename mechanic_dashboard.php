<?php 

require_once "base.php";

if(!$user->logged_in()) {

	redirect::to('login.php');
}


?>



<?php 


require_once "header.php";

?>


<div class="container">
	


	<h1 class="display-4">Mechanic Dashboard!</h1>


	<?php 

	if(session::exist('error')) {


		?>

		<p class="alert alert-danger text-center"><?php echo session::flash('error'); ?></p>

		<?php 
	}

	?>
	<div class="row">
		
		
		<div class="col-md-4">
			
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ullam dicta dolor sit est asperiores corporis eum sint deserunt, impedit provident velit, necessitatibus, ab praesentium aperiam vitae! Corporis, atque, cum.
		</div>


		<div class="col-md-4">
			
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ullam dicta dolor sit est asperiores corporis eum sint deserunt, impedit provident velit, necessitatibus, ab praesentium aperiam vitae! Corporis, atque, cum.
		</div>



		<div class="col-md-4">
			
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ullam dicta dolor sit est asperiores corporis eum sint deserunt, impedit provident velit, necessitatibus, ab praesentium aperiam vitae! Corporis, atque, cum.
		</div>







	</div>



</div>