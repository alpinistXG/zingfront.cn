<?php

use pconfig\PConfig;

require '../vendor/autoload.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    die('请正确请求接口');

$cityName = trim($_POST['cityName']);
$text = trim($_POST['text']);

if (empty($cityName) || empty($text))
    die('参数有问题');


// access by index
$json = new PConfig('./config/arrayaccess.json');

$data = [];

$info = $json->get($cityName);

if (!empty($info)) {
    $info = json_decode($info, true);
    foreach ($info as $value) {
        array_push($data, $value);

    }
}

array_push($data, $text);

$json->set($cityName, json_encode($data));

$r = $json->save();

if ($r) {
    functions::mSuccess('添加数据成功');
}
functions::mError();


