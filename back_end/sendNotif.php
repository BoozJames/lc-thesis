<?php 

include "database_connection.php";

if (isset($_POST['send'])) {
    
    $recipient = $_POST['number'];
    $message = $_POST['message'];

    $ch = curl_init();
    $parameters = array(
        'apikey' => 'd4236f27a51829ab05c79510fa8a0e34', //Your API KEY
        'number' => $recipient,
        'message' => $message,
        'sendername' => 'SEMAPHORE'
    );
    curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
    curl_setopt( $ch, CURLOPT_POST, 1 );

    //Send the parameters set above with the request
   curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ));
    

    // Receive response from server
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $output = curl_exec( $ch );
    if(!$output) {
        header("Location: ../lcDisciplineOffice.php?error=Message has not been sent!");
        exit();
    }else{
        header("Location: ../lcDisciplineOffice.php?success=Message has been sent!");
        exit();
    }
    curl_close ($ch);

    // //Show the server response
    // echo $output;
   
// }elseif (isset($_POST['sendToAll'])) {
        
//         $message = $_POST['message'];

//         $sql="SELECT contact_number FROM householddata";
//         $query = mysqli_query($dbConnection, $sql);

//         $numbers=[];
//         while ($result = mysqli_fetch_array($query)) {
//             // code...
//             $numbers[] = $result['contact_number'];

//         }

//         // print_r($numbers);
//         $mobileNumber = implode('', $numbers);
//         $numberArray = str_split($mobileNumber, '11');
//         $recipients = implode(',', $numberArray);  
//         print_r($recipients);
//         // $recipients = json_encode($numbers);

//         $ch = curl_init();
//         $parameters = array(
//             'apikey' => '5e613852182491a7e07b05cd2b862c57', //Your API KEY
//             'number' => $recipients,
//             'message' => $message,
//             'sendername' => 'SEMAPHORE'
//         );
//         curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
//         curl_setopt( $ch, CURLOPT_POST, 1 );

//         //Send the parameters set above with the request
//        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ));
        

//         // Receive response from server
//         curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//         $output = curl_exec( $ch );
//         if(!$output) {
//             header("Location: ../viewHouseholdList.php?error=Message has not been sent!");
//             exit();
//         }else{
//             header("Location: ../viewHouseholdList.php?success=Message has been sent!");
//             exit();
//         }
//         curl_close ($ch);

        

    }
	
?>