<?php
/** PHP Error handling **/
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
/** PHP Error handling Ends **/

/** Autoloader **/
require_once realpath(__DIR__) . '/../vendor/autoload.php';

$debug = getenv('DEBUG_MODE' == 'true') ? true : false;
/** Settings **/
$settings = [
    'settings' => [
        'displayErrorDetails' => $debug, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
    ],
];

// Initiate Slim App
$app = new \Slim\App($settings);
