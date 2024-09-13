<?php

require_once './app/controllers/HomeController.php';

use Core\Route;
use App\Controllers\HomeController;

Route::register("get", "/", [ HomeController::class, 'index' ] );

Route::register("get", "/login", [ HomeController::class, 'access' ] );
Route::register("post", "/login", [ HomeController::class, 'login' ] );







