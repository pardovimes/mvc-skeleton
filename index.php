<?php
error_reporting(E_ALL);

include 'vendor/autoload.php';

Zend\Mvc\Application::init(
    require 'config/application.config.php'
)->run();
