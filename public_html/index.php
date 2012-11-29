<?php

define ('APPLICATION_ENV', getenv('APPLICATION_ENV'));

require_once("../application/models/applicationModel.php");

$configFilename="../application/configs/application.ini";
$config=readConfig($configFilename, APPLICATION_ENV);
setRequest();

require_once("../application/models/mysqlModel.php");
require_once("../application/models/usersModel.php");
require_once("../application/models/usersDbModel.php");
require_once("../application/views/helpers/formHelper.php");
require_once("../application/models/projectsDbModel.php");



// die;

require_once("../application/bootstrap.php");

