<?php
define('THINK_PATH','ThinkPHP');     //定义ThinkPHP文件夹的相对路径
define('APP_NAME','APP');               //定义项目名称
define('APP_PATH','./APP');             //定义项目路径
require(THINK_PATH."/ThinkPHP.php");    //加载框架入口文件
App::run();                             //实例化一个网站应用
?>