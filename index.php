<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'core/Core.php';
require_once 'core/Boot.php';
require_once 'core/Route.php';
Route::run();