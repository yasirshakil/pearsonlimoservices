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
				$subject = "Pearson Limo Service - Contact Form";
				$template = <<<EOF
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html>
						  <head>
						    <title>Index</title>
						    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
						    <style type="text/css">
						      body {
						        font-family: 'Open Sans', sans-serif;
						        font-size: 14px;
						        color: #666666;
						        background: #f8f8f8;
						        margin: 0px;
						        padding: 0px;
						        line-height: 25px;
						      }
						      a {
						        color: #260fde;
						        text-decoration: none;
						      }
						      ul {
						        list-style: none;
						        padding: 0px;
						      }
						      ul li {
						        display: inline-block;
						      }
						      ol li {
						      }
						      .top {
						        text-align: top;
						      }
						      .right {
						        text-align: right;
						      }
						      .bottom {
						        text-align: bottom;
						      }
						      .left {
						        text-align: left;
						      }
						      .spacer {
						      }
						      @media (min-width: 320px) and (max-width: 599px) {
						        table, hr {
						          width: 100% !important;
						        }
						        table, thead, tbody, th, td, tr {
						            display: block;
						        }
						        table {
						          padding: 0px !important;
						        }
						        img {
						          max-width: 100%;
						        }
						      }
						    </style>
						  </head>
						  <body>

						    <table width="600" cellpadding="0" cellspacing="0" class="main-table" style="background: #fff;" bgcolor="#fff">
						      <tr>
						        <td colspan="2" align="center" style="padding: 20px 20px 20px 20px; background-color: #fff" bgcolor="#fff">
						          <img src="http://dev.pearsonlimoservices.ca/images/logo/Pearson-logo.png" title="Pearson Limo Service" alt="Pearson Limo Service" height="60">
						        </td>
						      </tr>
						      <tr>
						        <td colspan="2" style="background-color: #f6f6f6; padding: 20px 20px 20px 20px" bgcolor="#f6f6f6">
						        	<h4> Dear ucfirst($name), </h4>
						        	<span>Thank you for contacting us.</span>
						        </td>
						      </tr>
						      <tr>
						        <td colspan="2" align="center" style="background-color: #36404e; padding: 10px 10px 10px 10px; color: #fff;" bgcolor="#36404e">
						          <span style="display: block;">Copyright Pearsonlimoservices © 2020. All Rights Reserved</span>
						        </td>
						      </tr>
						    </table>
						  </body>
						</html>
EOF;
				$headers = "From: info@pearsonlimoservice.ca\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$template,$headers);

				$to = 'info@pearsonlimoservice.ca';
				$template = <<<EOF
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html>
						  <head>
						    <title>Index</title>
						    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
						    <style type="text/css">
						      body {
						        font-family: 'Open Sans', sans-serif;
						        font-size: 14px;
						        color: #666666;
						        background: #f8f8f8;
						        margin: 0px;
						        padding: 0px;
						        line-height: 25px;
						      }
						      a {
						        color: #260fde;
						        text-decoration: none;
						      }
						      ul {
						        list-style: none;
						        padding: 0px;
						      }
						      ul li {
						        display: inline-block;
						      }
						      ol li {
						      }
						      .top {
						        text-align: top;
						      }
						      .right {
						        text-align: right;
						      }
						      .bottom {
						        text-align: bottom;
						      }
						      .left {
						        text-align: left;
						      }
						      .spacer {
						      }
						      @media (min-width: 320px) and (max-width: 599px) {
						        table, hr {
						          width: 100% !important;
						        }
						        table, thead, tbody, th, td, tr {
						            display: block;
						        }
						        table {
						          padding: 0px !important;
						        }
						        img {
						          max-width: 100%;
						        }
						      }
						    </style>
						  </head>
						  <body>

						    <table width="600" cellpadding="0" cellspacing="0" class="main-table" style="background: #fff;" bgcolor="#fff">
						      <tr>
						        <td colspan="2" align="center" style="padding: 20px 20px 20px 20px; background-color: #fff" bgcolor="#fff">
						          <img src="http://dev.pearsonlimoservices.ca/images/logo/Pearson-logo.png" title="Pearson Limo Service" alt="Pearson Limo Service" height="60">
						        </td>
						      </tr>
						      <tr>
						        <td colspan="2" style="background-color: #f6f6f6; padding: 20px 20px 20px 20px" bgcolor="#f6f6f6">
						        	<h4> Contact Query : </h4>
						        	<p> Name: $name </p>
						        	<p> Date: $date </p>
						        	<p> Time: $hours $minutes $period </p>
						        	<p> Phone: $telephone </p>
						        	<p> Car: $selectcar </p>
						        </td>
						      </tr>
						      <tr>
						        <td colspan="2" align="center" style="background-color: #36404e; padding: 10px 10px 10px 10px; color: #fff;" bgcolor="#36404e">
						          <span style="display: block;">Copyright Pearsonlimoservices © 2020. All Rights Reserved</span>
						        </td>
						      </tr>
						    </table>
						  </body>
						</html>
EOF;
				$headers = "From: ".$email."\r\n";
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
				$message .= '<h1 style="color:#f40;">'.ucfirst($name).'</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Thank you for contacting us. We will back to you soon</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<p style="color:#080;font-size:18px;">Get a Qoute</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email."\r\n";
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
		$reg_num = (rand(10,100000));
  		$reg_num = str_pad($reg_num,6,0,STR_PAD_LEFT);
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
				$message .= '<h1 style="color:#f40;">'.$_POST['Drop-Your-Name'].'</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Thank you for your reservation.</p>';
				$message .= '<p style="color:#080;font-size:18px;">Here is your registration number '.$reg_num.'</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<p style="color:#080;font-size:18px;">Reservation Form</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email."\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);

				echo json_encode([
			    	'status_code' => 200,
			    	'message' => 'Thank you for your response',
			    	'reg_num' => $reg_num
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
				$message .= '<h1 style="color:#f40;">'.$_POST['Name'].'</h1>';
				$message .= '<p style="color:#080;font-size:18px;">Thank you for contact us.</p>';
				$message .= '<p style="color:#080;font-size:18px;">We will back to you soon.</p>';
				$message .= '</body></html>';
				$headers = "From: info@pearsonlimoservice.ca\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				mail($to,$subject,$message,$headers);
			    

				$to = 'info@pearsonlimoservice.ca';
				$subject = "Here is the subject";				
				$message = '<html><body>';
				$message .= '<p style="color:#080;font-size:18px;">Get a Qoute Form</p>';
				$message .= '</body></html>';
				$headers = "From: ".$email."\r\n";
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