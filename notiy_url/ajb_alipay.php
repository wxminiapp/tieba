<?php
chdir("../");//改变当前工作目录
$_GET['m'] = 'Mobile';
$_GET['c'] = 'Payment';
$_GET['a'] = 'ajb_notify';
$_GET['payment_code'] = 'ajb_alipay';
include_once("index.php");