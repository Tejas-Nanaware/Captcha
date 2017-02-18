<?php 
	$captcha_response = $_POST['g-recaptcha-response'];
	$secret_key = "6LeshBUUAAAAAC7SiwFP0M1cW-OfVqxXHza0rXmc";
                if (isset($captcha_response) && $captcha_response) {
		// echo $captcha_response;
		$ip = $_SERVER['REMOTE_ADDR'];
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha_response&remoteip=$ip");
		echo $response;
		$arr = json_decode($response, TRUE);
		var_dump($arr);
		if ($arr['success']) {
			echo "Done";
		}
		else{
			echo "YOU ARE A ROBOT!";
		}
	}
 ?>
