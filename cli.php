<?php
// 应用入口文件

// 检测PHP环境
define('WIN_CRON',TRUE);
define('BIND_MODULE', $argv[1]);
define('BIND_CONTROLLER', $argv[2]);
define('BIND_ACTION', $argv[3]);
define('APP_MODE','api');
require getcwd().'/index.php';