<?php

use webLazy\Core\Request;
use webLazy\Core\App;
use webLazy\Core\Route;
use webLazy\Database\DB;

require_once 'vendor/autoload.php';
require_once 'function/validate.php';
require_once 'function/UploadImages.php';

App::bind('config/app', require_once "config/app.php");
App::bind('MYSQL', DB::makeConnection());
Route::load("config/router.php")
    ->direct(Request::uri()[0], Request::method());
