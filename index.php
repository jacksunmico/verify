<?php

use Jacksunmico\Verify;

header('content-type:text/html;charset=utf-8');

include  './vendor/autoload.php';

$var  = (new Verify)->isValidEmail('w2011344@qq.com');

die(var_dump($var));  //测试一下
