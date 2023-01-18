<?php
// var_dump($_REQUEST);
$length = $_REQUEST['len'];
//  $length = $_REQUEST['l'];

// var_dump($length);

$response = generateStrongPassword($length, $add_dashes = false, $word = "Notal-Crest");
echo $response;

function generateStrongPassword($length, $add_dashes = false, $available_sets)
{
	$sets = array();
    $data = str_split($available_sets);

    foreach ($data as $value) {
        $mix = $value.substr(str_shuffle(base64_encode(openssl_random_pseudo_bytes(32))), 0, 20);
        $sets[] =  $mix;
    }

	$all = '';
	$password = '';
	foreach($sets as $set)
	{
		$password .= $set[array_rand(str_split($set))];
		$all .= $set;
	}

	$all = str_split($all);
	for($i = 0; $i < $length - count($sets); $i++)
		$password .= $all[array_rand($all)];

	$password = str_shuffle($password);

	if(!$add_dashes)
		return $password;

	$dash_len = floor(sqrt($length));
	$dash_str = '';
	while(strlen($password) > $dash_len)
	{
		$dash_str .= substr($password, 0, $dash_len) . '-';
		$password = substr($password, $dash_len);
	}
	$dash_str .= $password;
	return $dash_str;
}

?>