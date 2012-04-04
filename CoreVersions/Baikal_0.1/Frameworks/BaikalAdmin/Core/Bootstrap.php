<?php

define("BAIKALADMIN_PATH_ROOT", dirname(dirname(__FILE__)) . "/");

# Bootstrap Baikal Core
require_once(dirname(dirname(dirname(__FILE__))) . "/Baikal/Core/Bootstrap.php");	# ../../, symlink-safe

# Bootstrap Flake
require_once(dirname(dirname(dirname(__FILE__))) . "/Flake/Core/Bootstrap.php");

# Bootstrap Formal
require_once(dirname(dirname(dirname(__FILE__))) . "/Formal/Core/Bootstrap.php");

# Registering BaikalAdmin classloader
require_once(dirname(__FILE__) . '/ClassLoader.php');
\BaikalAdmin\Core\ClassLoader::register();

define("BAIKALADMIN_URIPATH", \Flake\Util\Tools::trimSlashes(dirname($_SERVER["SCRIPT_NAME"])) . "/");

# Include BaikalAdmin Framework config
require_once(BAIKALADMIN_PATH_ROOT . "config.php");