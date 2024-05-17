<?php
// var_dump($_REQUEST);
$data = $_REQUEST['data'];
//  $length = $_REQUEST['l'];


$response = shorten($data);

function shorten($data)
{
	
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'neir.pythonanywhere.com',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS =>'{
		"data": "'.$data.'"
	}',
	CURLOPT_HTTPHEADER => array(
		'Content-Type: application/json'
	),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	// return $response;
	$data = json_decode($response, true);
	// var_dump($data['short_url']);
	// exit;
	if (count($data) > 0) {
		// var_dump($data);
		// exit;
		if ($data['status'] == 'Success') {
			echo json_encode(array('response_code'=>201,'response_message'=>$data['short_url']));
		}else {
			echo json_encode(array('response_code'=>202,'response_message'=>'Something went wrong please try again later!'));
		}
	}else{
		echo json_encode(array('response_code'=>209,'response_message'=>'Something went wrong please contact your administrator! '));
	}
	// $data = json_decode(json_encode($response), true);

}


?>