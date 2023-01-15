<?php

// var_dump($_REQUEST);
 $title = $_REQUEST['t'];
 $intro = $_REQUEST['i'];
//  $length = $_REQUEST['l'];

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

    curl_close($curl);

    // $res1 = str_replace("[", "", $response);
    $res2 = json_decode($response, true);
    // var_dump($res2);
    if (!@$res2['detail']) {
        foreach ($res2 as $value) {
            echo $value['text'];
            echo "\n";
        }
    } else {
        echo $res2['details']['msg']; 
    }
    
    

// }

?>