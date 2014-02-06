<?php 

return array(
	// AppId and app secret
	'secret' => array(
		'appId'  => 'appId',
		'secret' => 'secret'
	),
	//Redirect after successfull login
	'redirect' 	=> 'http://localhost',
	//When Someone Logout from your Site
	'logout' 	=> 'http://localhost',
	//you can add scope according to your requirement
	'scope' 	=> 'user_birthday,email,user_hometown,user_location,user_status,user_photos,user_likes,user_education_history'
);
