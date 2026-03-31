<?php
namespace app\controllers;

use app\services\ExempleService;

class HomeController {
    public function index() {
        $service = new ExempleService();
        echo $service->message();
    }
}