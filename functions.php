<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

	if (isset($_POST['form_of']) && $_POST['form_of'] == 'contact') {
		$date      = $_POST['date'];
		$hours     = $_POST['hours'];
		$minutes   = $_POST['minutes'];
		$period    = $_POST['period'];
		$selectcar = $_POST['select-car'];
		$name      = $_POST['name'];
		$email     = $_POST['email'];
		$telephone = $_POST['telephone'];
		if ($date == '' || $hours == '' || $minutes == '' || $period == '' || $selectcar == '' || $name == '' || $email == '' || $telephone == '') {
				echo "<script> alert('all fields required'); </script>";
				return false;
		} else {
			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);
			try {
			    //Server settings
			    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			    $mail->isSMTP();                                            // Send using SMTP
			    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = '14cf77dc15ef18';                     // SMTP username
			    $mail->Password   = 'c64b6edbd5acb7';                               // SMTP password
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			    //Recipients
			    $mail->setFrom('info@pearsonlimoservice.ca', 'Mailer');
			    $mail->addAddress('info@pearsonlimoservice.ca', 'Joe User');     // Add a recipient
			    $mail->addAddress('yasir.shakeel@cooperativecomputing.com');               // Name is optional
			    $mail->addReplyTo('yasir.shakeel@cooperativecomputing.com', 'Information');

			    // Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Here is the subject';
				$mail->Body    = "<html><body>";
				$mail->Body    .= "<p> Date:". $_POST['date'] . "<p>";
				$mail->Body    .= "<p> Time:". $_POST['hours'] .":". $_POST['minutes'] . $_POST['period']  ."<p>";
				$mail->Body    .= "<p> Select Car:". $_POST['select-car'] . "<p>";
				$mail->Body    .= "<p> Name:". $_POST['name'] . "<p>";
				$mail->Body    .= "<p> Email:". $_POST['email'] . "<p>";
				$mail->Body    .= "<p> Phone Number:". $_POST['telephone'] . "<p>";
				$mail->AltBody  = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo json_encode([
			    	'status_code' => 200,
			    	'message' => 'Thank you for your response'
			    ]);
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	} else if (isset($_POST['form_of']) && $_POST['form_of'] == 'get-a-quote') {
		$pickup_date = $_POST['pickup-date'];
		$pickup_time = $_POST['pickup-time'];
		$pickup      = $_POST['pickup'];
		$dropoff     = $_POST['drop-off'];
		$name        = $_POST['name'];
		$email       = $_POST['email'];
		$contact     = $_POST['contact'];
		if ($pickup_date == '' || $pickup_time == '' || $pickup == '' || $dropoff == '' || $name == '' || $email == '' || $contact == '') 
		{
			echo json_encode([
		    	'status_code' => 400,
		    	'message' => 'All Fields need to be filled.'
		    ]);
		} else {
			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);
			try {
			    //Server settings
			    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			    $mail->isSMTP();                                            // Send using SMTP
			    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = '14cf77dc15ef18';                     // SMTP username
			    $mail->Password   = 'c64b6edbd5acb7';                               // SMTP password
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			    //Recipients
			    $mail->setFrom('info@pearsonlimoservice.ca', 'Mailer');
			    $mail->addAddress('info@pearsonlimoservice.ca', 'Joe User');     // Add a recipient
			    $mail->addAddress('yasir.shakeel@cooperativecomputing.com');               // Name is optional
			    $mail->addReplyTo('yasir.shakeel@cooperativecomputing.com', 'Information');

			    // Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Here is the subject';
				$mail->Body    = "<html><body>";
				$mail->Body    .= "<p> Pick up Date:". $pickup_date . "<p>";
				$mail->Body    .= "<p> Pick up Time:". $pickup_time  ."<p>";
				$mail->Body    .= "<p> Pickup:". $pickup . "<p>";
				$mail->Body    .= "<p> Dropoff:". $dropoff . "<p>";
				$mail->Body    .= "<p> Name:". $name . "<p>";
				$mail->Body    .= "<p> Email:". $email . "<p>";
				$mail->Body    .= "<p> Phone Number:". $contact . "<p>";
				$mail->AltBody  = 'This is the body in plain text for non-HTML mail clients';

			    if($mail->send()) {
				    echo json_encode([
				    	'status_code' => 200,
				    	'message' => 'Thank you for your response'
				    ]);
			    }
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	}
?>
