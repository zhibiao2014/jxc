<?php

/**
 * QFYU 余额支付插件
 * ============================================================================
 * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://jxc.5kjr.com；
 * ----------------------------------------------------------------------------
 
 * ============================================================================
 * $Author: luozhibiao $
 * $Id: balance.php 17217 2011-01-19 06:29:08Z luozhibiao $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/balance.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'balance_desc';

    /* 是否货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'ECSHOP TEAM';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.ecshop.com';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array();

    return;
}

/**
 * 类
 */
class balance
{
    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    
    /* 代码修改_start  By  uppschina.com */
    function __construct()
    {
        $this->balance();
    }
	function balance()
    {
    }
	/* 代码修改_end  By  uppschina.com */

    /**
     * 提交函数
     */
    function get_code()
    {
        return '';
    }

    /**
     * 处理函数
     */
    function response()
    {
        return;
    }
}

?>