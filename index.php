<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
ini_set("max_execution_time", 600);
// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
define('APP_VERSION', '3.5.2');
define('APP_VERSION_TIME', '2016.10.15');
// 定义应用目录
define('APP_PATH','./Application/');
define('PUBLIC_PATH', './Public/');
define('SITE_URL', 'http://tieba.esports168.com/');
define('POINTS_NAME', '积分');
define('IS_CHAIN_STOCK', TRUE);

define('IS_COMMODITY_POOL',TRUE);
// 是否进行极光推送
define('PUSH_MESSAGE',TRUE);
// 是否进行验证码 验证
define('SMS_VALIDATE',TRUE);

/**
 * 搬过来的常量
 */
define('SAVE_UPLOAD_URL', '/Public/Uploads/');//保存到数据库的路径
define('DIR_MOBILE_QR','code');//二维码总文件夹

define('BASE_SITE_URL', 'http://tieba.esports168.com/');
define('UPLOAD_URL', BASE_SITE_URL.'data/upload/');
define('SHOP_TEMPLATES_URL', '/Public/shopstyle/');
define('BASE_ROOT_PATH',str_replace('\\','/',dirname(__FILE__)));
define('DS','/');
define('StartTime',microtime(true));
define('TIMESTAMP',time());
define('DIR_SHOP','shop');
define('DIR_MBMBER','member');

define('DIR_ADMIN','admin');
define('DIR_API','api');
define('DIR_MOBILE','mobile');
define('DIR_WAP','wap');
define('DIR_RESOURCE','data/resource');
define('DIR_UPLOAD','data/upload');

define('ATTACH_PATH','shop');
define('ATTACH_COMMON','shop/common');
define('ATTACH_AVATAR','shop/avatar');
define('ATTACH_UNIT','shop/unit');
define('ATTACH_EDITOR','shop/editor');
define('ATTACH_MEMBERTAG','shop/membertag');
define('ATTACH_STORE','shop/store');
define('ATTACH_GOODS','shop/store/goods');
define('ATTACH_STORE_DECORATION','shop/store/decoration');
define('ATTACH_LOGIN','shop/login');
define('ATTACH_ARTICLE','shop/article');
define('ATTACH_ARTICLE_CLASS','shop/article_class');
define('ATTACH_LOAN','loan/');
define('ATTACH_BRAND','shop/brand');
define('ATTACH_GOODS_CLASS','shop/goods_class');
define('ATTACH_ADV','shop/adv');
define('ATTACH_ACTIVITY','shop/activity');
define('ATTACH_WATERMARK','shop/watermark');
define('ATTACH_POINTPROD','shop/pointprod');
define('ATTACH_GROUPBUY','shop/groupbuy');
define('ATTACH_SLIDE','shop/store/slide');
define('ATTACH_VOUCHER','shop/voucher');
define('ATTACH_REDPACKET','shop/redpacket');
define('ATTACH_STORE_JOININ','shop/store_joinin');
define('ATTACH_REC_POSITION','shop/rec_position');
define('ATTACH_CONTRACTICON','shop/contracticon');
define('ATTACH_CONTRACTPAY','shop/contractpay');
define('ATTACH_WAYBILL','shop/waybill');
define('ATTACH_HLPT','shop/hlpt');
define('ATTACH_MOBILE','mobile');
define('ATTACH_CIRCLE','circle');
define('ATTACH_CMS','cms');
define('ATTACH_LIVE','live');
define('ATTACH_MALBUM','shop/member');
define('ATTACH_MICROSHOP','microshop');
define('ATTACH_DELIVERY','delivery');
define('ATTACH_CHAIN', 'chain');
define('ATTACH_ADMIN_AVATAR','admin/avatar');
define('TPL_SHOP_NAME','default');
//define('TPL_CIRCLE_NAME', 'default');
//define('TPL_MICROSHOP_NAME', 'default');
//define('TPL_CMS_NAME', 'default');
define('TPL_ADMIN_NAME', 'default');
//define('TPL_DELIVERY_NAME', 'default');
//define('TPL_CHAIN_NAME', 'default');
define('TPL_MEMBER_NAME', 'default');
define('ADMIN_MODULES_SYSTEM', 'modules/system');
define('ADMIN_MODULES_SHOP', 'modules/shop');
define('ADMIN_MODULES_CMS', 'modules/cms');
define('ADMIN_MODULES_CIECLE', 'modules/circle');
define('ADMIN_MODULES_MICEOSHOP', 'modules/microshop');
define('ADMIN_MODULES_MOBILE', 'modules/mobile');

//军逸医院
define('ATTACH_HOSPITAL','hospital');
define('ARCTICLE_CMS','cms/article');
define('ARCTICLE_CMS_ADV','cms/adv');
define('ATTACH_HOSPITAL_ATTACH','hospital');
define('ATTACH_HOSPITAL_DEPARTMENT','department');

//顶唯
define('ATTACH_DINGWEI','dingwei/');
/*
 * 商家入驻状态定义
 */
//新申请
define('STORE_JOIN_STATE_NEW', 10);
//完成付款
define('STORE_JOIN_STATE_PAY', 11);
//初审成功
define('STORE_JOIN_STATE_VERIFY_SUCCESS', 20);
//初审失败
define('STORE_JOIN_STATE_VERIFY_FAIL', 30);
//付款审核失败
define('STORE_JOIN_STATE_PAY_FAIL', 31);
//开店成功
define('STORE_JOIN_STATE_FINAL', 40);

//默认颜色规格id(前台显示图片的规格)
define('DEFAULT_SPEC_COLOR_ID', 1);

/**
 * 商品图片
 */
define('GOODS_IMAGES_WIDTH', '60,4096,360,1280');
define('GOODS_IMAGES_HEIGHT', '60,4096,360,12800');
define('GOODS_IMAGES_EXT', '_60,_240,_360,_1280');
/**
 *  订单状态
 */
//已取消
define('ORDER_STATE_CANCEL', 0);
//已产生但未支付
define('ORDER_STATE_NEW', 10);
//已支付
define('ORDER_STATE_PAY', 20);
//已发货
define('ORDER_STATE_SEND', 30);
//已收货，交易成功
define('ORDER_STATE_SUCCESS', 40);
//订单超过N小时未支付自动取消
define('ORDER_AUTO_CANCEL_TIME', 1);
//订单超过N天未收货自动收货
define('ORDER_AUTO_RECEIVE_DAY', 10);
//预订尾款支付期限(小时)
define('BOOK_AUTO_END_TIME', 72);
//订单退货过期时间（天）
define('ORDER_RETURN_GOODS_TIME', 5);
//门店支付订单支付提货期限(天)
define('CHAIN_ORDER_PAYPUT_DAY', 7);
/**
 * 订单删除状态
 */
//默认未删除
define('ORDER_DEL_STATE_DEFAULT', 0);
//已删除
define('ORDER_DEL_STATE_DELETE', 1);
//彻底删除
define('ORDER_DEL_STATE_DROP', 2);
/**
 * 文章显示位置状态,1默认网站前台,2买家,3卖家,4全站
 * @var unknown
 */
define('ARTICLE_POSIT_SHOP', 1);
define('ARTICLE_POSIT_BUYER', 2);
define('ARTICLE_POSIT_SELLER', 3);
define('ARTICLE_POSIT_ALL', 4);
//兑换码过期后可退款时间，15天
define('CODE_INVALID_REFUND', 15);

/************************************************************
 *
 * 需配置常量，各种路径
 *
 ***********************************************************/
//$auto_site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].implode('/',$tmp_array));
define('SUBDOMAIN_SUFFIX', '');
define('BASE_SITE_PATH', BASE_SITE_URL . '');
define('SHOP_SITE_URL', BASE_SITE_URL . '');
define('CMS_SITE_URL', BASE_SITE_URL . '');
define('ADMIN_SITE_URL', BASE_SITE_URL . '');
define('ADMIN_modules_URL', BASE_SITE_URL . '');
define('MOBILE_SITE_URL', BASE_SITE_URL . '');
define('MOBILE_modules_URL', BASE_SITE_URL . '');
define('WAP_SITE_URL', BASE_SITE_URL . '');
define('UPLOAD_SITE_URL',BASE_SITE_URL . '/Public/Uploads');
define('RESOURCE_SITE_URL',BASE_SITE_URL . '/Public/Resource');
define('LOGIN_SITE_URL', BASE_SITE_URL . '/index.php?m=Mmeber');
define('LOGIN_SITE_PATH', BASE_SITE_PATH . '/Member');
define('BASE_DATA_PATH',BASE_ROOT_PATH.'/Public');
define('BASE_UPLOAD_ROOT_PATH',BASE_ROOT_PATH.'/Public/Uploads');
define('BASE_UPLOAD_PATH',BASE_DATA_PATH.'/Uploads');
define('BASE_RESOURCE_PATH',BASE_DATA_PATH.'/Resource');
define('RESOURCE_PATH',BASE_DATA_PATH.'/Resource');
define('RESOURCE_SITE_URL_HTTPS',RESOURCE_SITE_URL);
define('MEMBER_SITE_URL', LOGIN_SITE_URL);
// define('LOGIN_RESOURCE_SITE_URL',MEMBER_SITE_URL.'/Resource');
define('UPLOAD_SITE_URL_HTTPS', UPLOAD_SITE_URL);
define('PROJECT_CMS_URL', BASE_SITE_URL . '/index.php?m=Dangjian&c=Cms');

define('CHARSET', 'utf-8');


define('ADMIN_TEMPLATES_URL', '/Public/sysstyle');
define('ADMIN_RESOURCE_URL', '/Public/sysstyle');


/**
 * 系统安装及开发模式检测
 */
if (!file_exists('./Install/install.lock')) {
    header('Location: ./Install/index.php');
    exit ();
}
if(!isset($_GET['m']) && isset($_COOKIE['MODULE_B'])){
    $_GET['m'] = $_COOKIE['MODULE_B'];
}
if(isset($_GET['c'])){
    $_GET['c'] = str_replace('_', '', $_GET['c']);
}
if (file_exists("./vendor/autoload.php")) {
	include "vendor/autoload.php";
}

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

