<?php
function getDefaultResponse()
{
    return [
                'data' => [
                    'code'    => 400,
                    'message' => 'Something went wrong. Please try again later!',
                    'errors'   => '',
                ],
               'status' => false
            ];   
}

function savePostFile($file, $fileName)
{
	$file->move(storage_path('/app/public/posts'), $fileName);
}

function savePawtaiProfileImage($file, $fileName)
{
	$file->move(storage_path('/app/public/pawtaiProfile'), $fileName);
}


function makeUniqueFileName($file, $uniqueKey)
{
	return (time() . $uniqueKey . '.' .$file->getClientOriginalExtension());	
}

function makeFileName($file)
{
	return (time() . '.' .$file->getClientOriginalExtension());	
}

function deleteFiles($files)
{
	\Storage::delete($files);
}

function sendPushNotification($body ,$device_tokens ,$additional_info = Null, $title="JobReels")
{
	$puserId;
	$fbResult = [];
	$fcm_server_api_key = "AAAAXnhSshI:APA91bGdFRaYuI0N2l7j3nbORVuvN1-Ng1-m49xgOlV_2dnKY1F28q4Tnr-zHUjsO6am9xtiP7_-Y4fJR39FBT_Fbe8hhtLBIzc46Nl7iN9y04_SbZodDIq3OtNB-UeS2Xctg4eizGBD";
	$data = [
		"registration_ids" => $device_tokens,
		"priority" => "normal",
		'android_channel_id' => 'default',
		"notification" => [
		    'android_channel_id' => 'default',
			"title" => $title,
			"body"  => $body,
			"sound" => "default",
			"color" => "#7a0fc1",
		],
		"data" => [
			"title" => $title,
			"body"  => $body,
			'click_action'  => 'FLUTTER_NOTIFICATION_CLICK',
			"additional_info"  => $additional_info,	
		]
	];
	$dataString = json_encode($data);
	$headers = [
		'Authorization: key=' . $fcm_server_api_key,
		'Content-Type: application/json',
	];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
	$result = curl_exec($ch);
return $result;
	// echo $result;
}