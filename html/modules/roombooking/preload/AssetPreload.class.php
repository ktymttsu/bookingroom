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

require_once XOOPS_TRUST_PATH . '/modules/roombooking/preload/AssetPreload.class.php';
Roombooking_AssetPreloadBase::prepare(basename(dirname(dirname(__FILE__))));

?>
