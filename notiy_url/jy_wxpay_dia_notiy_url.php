<?php
chdir("../");//改变当前工作目录
$_GET['m'] = 'Mobile';
$_GET['c'] = 'Payment';
$_GET['a'] = 'jy_dia_notify';
$_GET['payment_code'] = 'jy_wxpay';
include_once("index.php");


