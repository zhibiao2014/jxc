<?php

/**
 * QFYU 分类聚合页
 * ============================================================================
 * * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://uppschina.com;
 * ----------------------------------------------------------------------------
 
 * ============================================================================
 * $Author: derek $
 * $Id: index.php 15013 2016-03-25 09:31:42Z derek $
*/

define('IN_ECS', true);
define('ECS_ADMIN', true);

require(dirname(__FILE__) . '/includes/init.php');



$pcat_array = get_categories_tree();
foreach ($pcat_array as $key => $pcat_data)
{
    $pcat_array[$key]['name'] = encode_output($pcat_data['name']);
    if ($pcat_data['cat_id'])
    {
        foreach ($pcat_data['cat_id'] as $k => $v)
        {
            $pcat_array[$key]['cat_id'][$k]['name'] = encode_output($v['name']);
        }
    }
}
$smarty->assign('pcat_array' , $pcat_array);

$smarty->assign('wap_logo', $_CFG['wap_logo']);
$smarty->assign('footer', get_footer());
$smarty->display("cat_all.html");

?>
