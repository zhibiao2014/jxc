<?php

/**
 * QFYU 品牌列表
 * ============================================================================
 * 版权所有 2016 深圳庆丰裕，并保留所有权利。
 * 网站地址: http://jxc.5kjr.com；
 * ----------------------------------------------------------------------------
 
 * ============================================================================
 * $Author: luozhibiao $
 * $Id: brand.php 17217 2011-01-19 06:29:08Z luozhibiao $
*/

if(!defined('IN_CTRL'))
{
	die('Hacking alert');
}

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$act = empty($_REQUEST['act']) ? 'get_brand_list' : trim($_REQUEST['act']);
if ($act == 'get_brand_list')
{
    /* 缓存编号 */
    $cache_id = sprintf('%X', crc32($_CFG['lang']));
    if (!$smarty->is_cached('brand_list.dwt', $cache_id))
    {
        assign_template();
        $position = assign_ur_here('', $_LANG['all_brand']);
        $smarty->assign('page_title',      $position['title']);    // 页面标题
        $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置

        $smarty->assign('categories',      get_categories_tree()); // 分类树
        $smarty->assign('helps',           get_shop_help());       // 网店帮助
        $smarty->assign('top_goods',       get_top10());           // 销售排行

        $smarty->assign('brand_list', get_brands());
    }
	app_display('brand_list.dwt','','',$cache_id);
}