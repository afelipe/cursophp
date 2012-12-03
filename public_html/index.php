<?php

defined('APPLICATION_ENV')?:
	define ('APPLICATION_ENV', getenv('APPLICATION_ENV'));

defined('APPLICATION_PATH')?:
	define ('APPLICATION_PATH', '../application');
	
require_once(APPLICATION_PATH."/models/applicationModel.php");
require_once(APPLICATION_PATH."/models/mysqlModel.php");
require_once(APPLICATION_PATH."/models/usersModel.php");
require_once(APPLICATION_PATH."/models/usersDbModel.php");
require_once(APPLICATION_PATH."/views/helpers/formHelper.php");
require_once(APPLICATION_PATH."/models/projectsDbModel.php");

require_once(APPLICATION_PATH."/bootstrap.php");

