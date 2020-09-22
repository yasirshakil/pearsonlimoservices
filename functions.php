<?php 
	if (isset($_POST) && isset($_POST['form_of']) && $_POST['form_of'] == 'contact'):
		echo json_encode([
			"status_code" => 200,
			"message" => "Thank you for submitting your response."
		]);
	else:
		return json_encode([
			"status_code" => 400,
			"message" => "Error"
		]);
 	endif;
?>