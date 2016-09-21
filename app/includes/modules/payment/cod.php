<?php

/**
 * QFYU 货到付款插件
 * ============================================================================
 * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://jxc.5kjr.com；
 * ----------------------------------------------------------------------------
 
 * ============================================================================
 * $Author: luozhibiao $
 * $Id: cod.php 17217 2011-01-19 06:29:08Z luozhibiao $
 */

if(!defined('IN_CTRL'))
{
	die('Hacking alert');
}
/**
 * 类
 */
class cod
{
    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    

    function __construct()
    {
        $this->cod();
    }
	function cod()
    {
    }

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