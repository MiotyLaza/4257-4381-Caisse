<?php

use app\controllers\HomeController;

Flight::route('/', [HomeController::class, 'index']);