<?php

//config.php
// https://www.webslesson.info/2019/09/how-to-make-login-with-google-account-using-php.html
// https://www.youtube.com/watch?v=xH6hAW3EqLk

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('212663191097-spje6joisamoegv91cduv0vmedcego6a.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('qx7ohAVx0AnFwC50yf0fknoX');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/authtest/');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>