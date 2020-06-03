<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/admin.php');
require('controllers/home.php');
require('controllers/teacher.php');
require('controllers/student.php');

require('models/admin.php');
require('models/home.php');
require('models/teacher.php');
require('models/student.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}