<?php
/**
 * 微信支付通知地址
 *
 * @工尔科技 (c)
 */
$xml = file_get_contents("php://input");
libxml_disable_entity_loader(true);
$array = simplexml_load_string($xml);
$param = array();
if ($array) {
	foreach ($array as $key => $value) {
		$param[$key] = (string)$value;
	}
}
$callback_info = $param;
header("location:http://" . $_SERVER['SERVER_NAME'] . "/index.php?m=Mobile&c=MobilePayment&a=wxpay_notify&out_trade_no=" . $callback_info['out_trade_no'] . "&return_code=" . $callback_info['return_code'] . "&trade_no=" . $callback_info['transaction_id'] . "&cash_fee=" . $callback_info['cash_fee'] . "&total_fee=" . $callback_info['total_fee']);