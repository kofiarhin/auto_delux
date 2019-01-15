<?php 

	

	

	class Mail {


			public function __construct() {


				/*


				$mail = new PHPMailer();

				//set host
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 587;


				//smtp settings
				$mail->isSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "tls";


				//gmail settings
				$mail->Username = "kofiarhin69@gmail.com";
				$mail->Password = "Illmatic69";

		
				
				//mail details
				$mail->setFrom("kofiarhin69@gmail.com");
				$mail->addAddress("test@kofiarhin.com");
				$mail->Subject = "test subject";
				$mail->Body = "test body stuff";


				if($mail->send()){

					echo "mail sent";
				} else {

					echo $mail->ErrorInfo;
				}
				*/
			}

			public static function send($to, $subject, $body) {

					$mail = new PHPMailer();

					
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 587;

					//smtp setting

					$mail->isSMTP();
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = "tls";

					$mail->isHTML();

					//gmail settigs

					$mail->Username = "kofiarhin69@gmail.com";
					$mail->Password = "Illmatic69";

					//message details 


					$mail->setFrom('kofiarhin69@gmail.com');
					$mail->addAddress($to);
					$mail->Subject = $subject;
					$mail->Body = $body;

					if(!$mail->send()) {

						return false;
					}


					return true;


			}
	}