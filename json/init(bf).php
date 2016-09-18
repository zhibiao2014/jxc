<?php

/**
 * QFYU 前台公用文件
 * ============================================================================
 * * 版权所有 20162 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://jxc.5kjr.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: luozhibiao $
 * $Id: init.php 17217 2011-01-19 06:29:08Z luozhibiao $
*/

require('../data/config.php');

/* 初始化数据库类 */
require('../includes/cls_mysql.php');
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);
$db->set_disable_cache_tables(array($ecs->table('sessions'), $ecs->table('sessions_data'), $ecs->table('cart')));
$db_host = $db_user = $db_pass = $db_name = NULL;


?>