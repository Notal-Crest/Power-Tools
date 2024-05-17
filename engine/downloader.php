<?php
// var_dump($_REQUEST);
$data = $_REQUEST['data'];
//  $length = $_REQUEST['l'];


$response = Vdownload($data);

function Vdownload($data)
{
	
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'http://127.0.0.1:5000/get',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
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
	// var_dump($response);
	// exit;
	if (isset($data)) {
		// var_dump($data['message']);
		// exit;
		if ($data['message'] == 'Video downloaded successfully!') {
			return json_encode(array('response_code'=>201,'response_message'=>'Video downloaded successfully!'));
		}else {
			return json_encode(array('response_code'=>202,'response_message'=>'Something went wrong please try again later! '.$data["message"].''));
		}
	}else{
		return json_encode(array('response_code'=>209,'response_message'=>'Something went wrong please contact your administrator! '));
	}
		
	// $data = json_decode(json_encode($response), true);

}


?>