<?php


require __DIR__. './vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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';
$open_ai= new OpenAi($open_ai_key);



 $prompt = $_REQUEST['t'];
//  var_dump($prompt);
//  exit;
//  $intro = $_REQUEST['i'];
//  $length = $_REQUEST['l'];
$complete = $open_ai->completion([
    'model' => 'text-davinci-002',
    'prompt' => 'Hello',
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
 ]);


 
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.writesonic.com/v2/business/content/blog-outlines?engine=economy&language=en&num_copies=5',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "blog_title":"'.$title.'",
        "blog_intro":"'.$intro.'"
    }',
    CURLOPT_HTTPHEADER => array(
        'X-API-KEY: 10428343-d7c3-4bd4-b62f-21db75c4ef67',
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

        $curl_errno = curl_errno($curl);
        $curl_error = curl_error($curl); 
   curl_close($curl);

//    var_dump($response);
//    exit;
    // $res1 = str_replace("[", "", $response);
    $res2 = json_decode($response, true);
     //print_r($curl_errno);
     //exit;
    if($curl_errno > 0){
        echo "Connection Failure";
    }else{
     if (!@$res2['detail']) {
        foreach ($res2 as $value) {
            echo $value['text'];
            echo "\n";
        }
     } else {
        echo $res2['details']['msg']; 
     }
    }
   
    
    

// }

?>