<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="Tricia";
$projectEmail="team@tradewithricia.com";
$projectPhoneNumber="+15038500086";


// Twilio API credentials
$accountSid = "ACc511dc2d970bd783da22224e36dd865f";
$authToken = "09f05904364b14b2095ef13369f1bc35"; //
$twilioPhoneNumber = "+15038500086";
$siteURL="https://demo.twilio.com/welcome/sms/reply";


// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = "#tricia";
$slackBotName = "Tricia"; //THE NAME OF YOUR BOT
$slackBotIcon = ":shit:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "us-cdbr-iron-east-04.cleardb.net";
$dbName = "heroku_3bcd695bf857936";
$dbUserName = "b9ae3787ac6401";
$dbPassword = "0b8fcbd6";
$dbTable = "User Info";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n
$automatedResponseTeamSleeping ="n"; // options: y | n
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>