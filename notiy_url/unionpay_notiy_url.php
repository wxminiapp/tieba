<?php
chdir("../");//改变当前工作目录
$_GET['m'] = 'Mobile';
$_GET['c'] = 'MobilePayment';
$_GET['a'] = 'unionpay_notify';
include_once("index.php");