<?php
chdir("../");//改变当前工作目录
$_GET['m'] = 'Mobile';
$_GET['c'] = 'Payment';
$_GET['a'] = 'jy_enquiry_notify';
$_GET['payment_code'] = 'jy_alipay';
include_once("index.php");


