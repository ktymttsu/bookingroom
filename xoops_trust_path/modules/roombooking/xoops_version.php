<?php
/**
 * @file
 * @package roombooking
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
    exit;
}

if(!defined('ROOMBOOKING_TRUST_PATH'))
{
    define('ROOMBOOKING_TRUST_PATH',XOOPS_TRUST_PATH . '/modules/roombooking');
}

require_once ROOMBOOKING_TRUST_PATH . '/class/RoombookingUtils.class.php';

//
// Define a basic manifesto.
//
$modversion['name'] = $myDirName;
$modversion['version'] = 0.01;
$modversion['description'] = _MI_ROOMBOOKING_DESC_ROOMBOOKING;
$modversion['author'] = _MI_ROOMBOOKING_LANG_AUTHOR;
$modversion['credits'] = _MI_ROOMBOOKING_LANG_CREDITS;
$modversion['help'] = 'help.html';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'images/module_icon.png';
$modversion['dirname'] = $myDirName;
$modversion['trust_dirname'] = 'roombooking';

$modversion['cube_style'] = true;
$modversion['legacy_installer'] = array(
    'installer'   => array(
        'class'     => 'Installer',
        'namespace' => 'Roombooking',
        'filepath'  => ROOMBOOKING_TRUST_PATH . '/admin/class/installer/RoombookingInstaller.class.php'
    ),
    'uninstaller' => array(
        'class'     => 'Uninstaller',
        'namespace' => 'Roombooking',
        'filepath'  => ROOMBOOKING_TRUST_PATH . '/admin/class/installer/RoombookingUninstaller.class.php'
    ),
    'updater' => array(
        'class'     => 'Updater',
        'namespace' => 'Roombooking',
        'filepath'  => ROOMBOOKING_TRUST_PATH . '/admin/class/installer/RoombookingUpdater.class.php'
    )
);
$modversion['disable_legacy_2nd_installer'] = false;

$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'] = array(
//    '{prefix}_{dirname}_xxxx',
##[cubson:tables]
    '{prefix}_{dirname}_room_list',

##[/cubson:tables]
);

//
// Templates. You must never change [cubson] chunk to get the help of cubson.
//
$modversion['templates'] = array(
/*
    array(
        'file'        => '{dirname}_xxx.html',
        'description' => _MI_ROOMBOOKING_TPL_XXX
    ),
*/
##[cubson:templates]
        array('file' => '{dirname}_room_list_delete.html','description' => _MI_ROOMBOOKING_TPL_ROOM_LIST_DELETE),
        array('file' => '{dirname}_room_list_edit.html','description' => _MI_ROOMBOOKING_TPL_ROOM_LIST_EDIT),
        array('file' => '{dirname}_room_list_list.html','description' => _MI_ROOMBOOKING_TPL_ROOM_LIST_LIST),
        array('file' => '{dirname}_room_list_view.html','description' => _MI_ROOMBOOKING_TPL_ROOM_LIST_VIEW),

##[/cubson:templates]
);

//
// Admin panel setting
//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php?action=Index';
$modversion['adminmenu'] = array(
/*
    array(
        'title'    => _MI_ROOMBOOKING_LANG_XXXX,
        'link'     => 'admin/index.php?action=xxx',
        'keywords' => _MI_ROOMBOOKING_KEYWORD_XXX,
        'show'     => true,
        'absolute' => false
    ),
*/
##[cubson:adminmenu]
##[/cubson:adminmenu]
);

//
// Public side control setting
//
$modversion['hasMain'] = 1;
$modversion['hasSearch'] = 0;
$modversion['sub'] = array(
/*
    array(
        'name' => _MI_ROOMBOOKING_LANG_SUB_XXX,
        'url'  => 'index.php?action=XXX'
    ),
*/
##[cubson:submenu]
##[/cubson:submenu]
);

//
// Config setting
//
$modversion['config'] = array(
/*
    array(
        'name'          => 'xxxx',
        'title'         => '_MI_ROOMBOOKING_TITLE_XXXX',
        'description'   => '_MI_ROOMBOOKING_DESC_XXXX',
        'formtype'      => 'xxxx',
        'valuetype'     => 'xxx',
        'options'       => array(xxx => xxx,xxx => xxx),
        'default'       => 0
    ),
*/

    array(
        'name'          => 'css_file' ,
        'title'         => "_MI_ROOMBOOKING_LANG_CSS_FILE" ,
        'description'   => "_MI_ROOMBOOKING_DESC_CSS_FILE" ,
        'formtype'      => 'textbox' ,
        'valuetype'     => 'text' ,
        'default'       => '/modules/'.$myDirName.'/style.css',
        'options'       => array()
    ) ,
##[cubson:config]
##[/cubson:config]
);

//
// Block setting
//
$modversion['blocks'] = array(
/*
    x => array(
        'func_num'          => x,
        'file'              => 'xxxBlock.class.php',
        'class'             => 'xxx',
        'name'              => _MI_ROOMBOOKING_BLOCK_NAME_xxx,
        'description'       => _MI_ROOMBOOKING_BLOCK_DESC_xxx,
        'options'           => '',
        'template'          => '{dirname}_block_xxx.html',
        'show_all_module'   => true,
        'visible_any'       => true
    ),
*/
##[cubson:block]
##[/cubson:block]
);

?>
