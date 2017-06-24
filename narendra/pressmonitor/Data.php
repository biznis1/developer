<?php

include_once ("DB_hendlar.php");
$db = new DB_Functions();
 

// json response array
$response = array("error" => FALSE);
 
    // receiving the post params
    $text = $_POST['text'];
    $textarea = $_POST['textarea'];

	
   
        // create a new user
		
        $user = $db->storeUser($text, $textarea);
		
       if ($user) {
            // user stored successfully
            $response["error"] = FALSE;
            $response["data"]["data_id"]= $user["data_id"];
            $response["data"]["text"] = $user["text"];
            $response["data"]["textarea"] = $user["textarea"];
            $response["vendor"]["created_at"] = $user["created_at"];
           
            echo json_encode($response);
        } else {
            // user failed to store
            $response["error"] = TRUE;
            $response["error_msg"] = "Unknown error occurred in data!";
            echo json_encode($response);
        }
?>
