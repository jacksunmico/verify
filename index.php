<?php
require_once __DIR__ . '/vendor/autoload.php';

use Jacksunmico\Verify;

header('content-type:text/html;charset=utf-8');

$verify = new Verify();

$result = $verify->isValidEmail('1223@qq.com');
var_dump($result);
