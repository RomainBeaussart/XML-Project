<?php
function getRequest($URL){
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $URL); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$result = new SimpleXMLElement(curl_exec($ch));
	curl_close();
	return $result;
}

function putRequest($URL){
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $URL); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_exec($ch);
	curl_close($ch);
}



/*putRequest("http://localhost:8080/AleauCine/rest/director/add/francis/lalane");
$output = getRequest("http://localhost:8080/AleauCine/rest/director/getall");
echo $output->director[1]->firstname;*/
