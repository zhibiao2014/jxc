<?php

/**
 * QFYU 生成验证码
 * ============================================================================
 * * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://uppschina.com;
 * ----------------------------------------------------------------------------
 
 * ============================================================================
 * $Author: derek $
 * $Id: captcha.php 17217 2011-01-19 06:29:08Z derek $
*/

define('IN_ECS', true);
define('INIT_NO_SMARTY', true);

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/cls_captcha.php');

$img = new captcha('data/captcha/', $_CFG['captcha_width'], $_CFG['captcha_height']);

@ob_end_clean(); //清除之前出现的多余输入
if (isset($_REQUEST['is_login']))
{
    $img->session_word = 'captcha_login';
}
$img->generate_image();

?>