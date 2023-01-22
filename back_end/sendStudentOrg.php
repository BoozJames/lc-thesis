<?php
// var_dump($_POST);
isset($_POST['send']);

$ch = curl_init();
$parameters = array(
    'apikey' => 'd4236f27a51829ab05c79510fa8a0e34', //Your API KEY
    'number' => $_POST['number'],
    'message' => $_POST['message'],
    'sendername' => 'SEMAPHORE'
);
curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
curl_setopt( $ch, CURLOPT_POST, 1 );

//Send the parameters set above with the request
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

// Receive response from server
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close ($ch);
    if(!$output) {
        header("Location: ../lcStudentOrg.php?error=Message has not been sent!");
        exit();
    }else{
        header("Location: ../lcStudentOrg.php?success=Message has been sent!");
        exit();
    }
//Show the server response
// echo $output;
