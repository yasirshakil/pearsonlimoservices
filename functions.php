<?php
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
			try {
				$to = $email;
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Query</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email;
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);

			    echo json_encode([
			    	'status_code' => 200,
			    	'message' => 'Thank you for your response'
			    ]);
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: $e->getMessage()";
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
			try {
			    
				$to = $email;
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Get a Qoute</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email;
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);

			    echo json_encode([
			    	'status_code' => 200,
			    	'message' => 'Thank you for your response'
			    ]);
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: $e->getMessage()";
			}
		}
	} else if (isset($_POST['form_of']) && $_POST['form_of'] == 'reservation_form') {
		$input = $_POST;
		$email = $_POST['Drop-Your-Email'];
		if (false) 
		{
			echo json_encode([
		    	'status_code' => 400,
		    	'message' => 'All Fields need to be filled.'
		    ]);
		} else {
			try {
				$to = $email;
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Reservation Form</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email;
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);

				echo json_encode([
			    	'status_code' => 200,
			    	'message' => 'Thank you for your response'
			    ]);
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: $e->getMessage()";
			}
		}
	} else if (isset($_POST['form_of']) && $_POST['form_of'] == 'home-get-a-qoute') {
		$input = $_POST;
		$email = $_POST['email'];
		if (false) 
		{
			echo json_encode([
		    	'status_code' => 400,
		    	'message' => 'All Fields need to be filled.'
		    ]);
		} else {
			try {
				$to = $email;
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Get a Qoute Form</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email;
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);

				echo json_encode([
			    	'status_code' => 200,
			    	'message' => 'Thank you for your response'
			    ]);
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: $e->getMessage()";
			}
		}
	}
?>