<?php

use pconfig\PConfig;

require '../vendor/autoload.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    die('请正确请求接口');

$cityName = trim($_POST['cityName']);

if (empty($cityName))
    die('参数有问题');


// access by index
$json = new PConfig('./config/arrayaccess.json');

$data = [];

$info = $json->get($cityName);

functions::mSuccess($info);


