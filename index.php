<?php
if( send_mobile_otp('9745048448','123456') )
{
    echo "otp has been Sent";
}else
{
    echo "Sending Failed";
}

function send_mobile_otp($mobile, $otp){
	$phonenumber 	=	 $mobile; 
	$randomnumber 	=	$otp;

	$curl = curl_init();
	  
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://pwwlrv.api.infobip.com/sms/2/text/advanced',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>'{"messages":[{"from":"MUTEXM","destinations":[{"to":"91'.$phonenumber.'"}],"text":"Dear Visitor, '.$randomnumber.' is your One Time Password (OTP) to verify your mobile number. Muthoot Pappachan Group.","regional":{"indiaDlt":{"contentTemplateId": "1007190459902980570","principalEntityId": "1701159799703699640"}}}]}',
		CURLOPT_HTTPHEADER => array(
			'Authorization: App e7a9639f9ae1ef904458a16c2d66cd3f-e92b5684-fedf-4279-974f-600183cdedb3',
			'Content-Type: application/json',
			'Accept: application/json'
		),
	  ));
         
	$response = curl_exec($curl); //echo $response;
	$err = curl_error($curl);
	curl_close($curl);
	if ($err)
	{
		return false;
	}
	else
	{
		return true;
	}
   
   // echo '{"messages":[{"messageId":"35953067308943363546","status":{"description":"Message sent to next instance","groupId":1,"groupName":"PENDING","id":26,"name":"PENDING_ACCEPTED"},"to":"919745048448"}]}{"custom_sms_otp":"Success - '.$_SESSION['custom_sms_otp'].'"}';
  die();
}

?>