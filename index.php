<?php

$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST"){

	$requestBody = file_get_contents('php://input');
	$json =json_decode($requestBody);
	
	$text = $json->result->parameter->text;
	
	switch($text){

	case 'hi':
		
		$speech = 'hello world';
		break;
	case 'BEG0999':
		$speech = "our job";
		break;
	default:
		$speech = "idk";
		break;
	
	
	}
	
	$response = new \stdClass();
	$response->speech="";
	$response->displayText ="";
	$response->source="webhook";
	echo json_encode($response);
	

}
else{

echo "not allowed";

}

?>