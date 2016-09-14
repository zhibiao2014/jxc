<?php

/**
 * QFYU 余额支付插件
 * ============================================================================
 * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://www.uppschina.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: luozhibiao $
 * $Id: balance.php 17217 2011-01-19 06:29:08Z liubo $
 */

if(!defined('IN_CTRL'))
{
	die('Hacking alert');
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