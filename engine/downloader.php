<?php
// var_dump($_REQUEST);
$data = $_REQUEST['data'];
//  $length = $_REQUEST['l'];

// var_dump($data);
$response = Vdownload($data);
echo $response;
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
	return $response;

}


?>