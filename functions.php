<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// // echo "<script> alert("working"); </script>";
	if (isset($_POST['submit'])) {
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
			    $mail->setFrom('yasir.shakeel@cooperativecomputing.com', 'Mailer');
			    $mail->addAddress('yasir.shakeel@cooperativecomputing.com', 'Joe User');     // Add a recipient
			    $mail->addAddress('yasir.shakeel@cooperativecomputing.com');               // Name is optional
			    $mail->addReplyTo('yasir.shakeel@cooperativecomputing.com', 'Information');
			    // $mail->addCC('cc@example.com');
			    // $mail->addBCC('bcc@example.com');

			    // Attachments
			    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Here is the subject';
			    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		//echo "DONE";
		// $from      = "Pearson Limo Service";
		// $webmaster = "info@pearsonlimoservice.ca";
		// $to        = "m.yasirshakil@gmail.com";
		// $subject   = "Contact Us form Pearsonlimoservice";
		// $headers   = "From: " . $from . "<" . $webmaster . ">\r\n";
		// $headers   .= "X-Mailer: PHP/". phpversion() . "\r\n";
		// $headers   .= "MIME-Version: 1.0" . "\r\n";
		// $headers   .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		// $message   = "<html><body>";
		// $message   .= "<p> Date:". $_POST['date'] . "<p>";
		// $message   .= "<p> Hours:". $_POST['hours'] . "<p>";
		// $message   .= "<p> Minutes:". $_POST['minutes'] . "<p>";
		// $message   .= "<p> Period:". $_POST['period'] . "<p>";
		// $message   .= "<p> Select Car:". $_POST['select-car'] . "<p>";
		// $message   .= "<p> Name:". $_POST['name'] . "<p>";
		// $message   .= "<p> Email:". $_POST['email'] . "<p>";
		// $message   .= "<p> Phone Number:". $_POST['telephone'] . "<p>";
		// $sendmail  = mail($to, $subject, $message, $headers);
		// echo "<script> alert("Thank you") </script>";
		}
	}

	// if (isset($_POST) && isset($_POST['form_of']) && $_POST['form_of'] == 'contact'):
	// 	echo json_encode([
	// 		"status_code" => 200,
	// 		"message" => "Thank you for submitting your response."
	// 	]);
	// else:
	// 	return json_encode([
	// 		"status_code" => 400,
	// 		"message" => "Error"
	// 	]);
 // 	endif;
?>
