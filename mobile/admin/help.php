<?php
/**
 * QFYU 帮助信息接口
 * ============================================================================
 * * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://uppschina.com;
 * ----------------------------------------------------------------------------
 
 * ============================================================================
 * $Author: derek $
 * $Id: respond.php 16220 2009-06-12 02:08:59Z derek $
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');

$get_keyword = trim($_GET['al']); // 获取关键字
header("location:http://help.ecshop.com/do.php?k=".$get_keyword."&v=".$_CFG['ecs_version']."&l=".$_CFG['lang']."&c=".EC_CHARSET);
?>