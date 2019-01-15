<?php 


		function get_brands() {

				$file = "data/brands.txt";

				if(file_exists($file)) {

					$brands =  json_decode(file_get_contents($file), true);


					if(!empty($brands)) {


						return $brands['data'];
					}


				}

		}

 ?>