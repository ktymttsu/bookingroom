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

require_once ROOMBOOKING_TRUST_PATH . '/class/AbstractViewAction.class.php';

/**
 * Roombooking_Room_listViewAction
**/
class Roombooking_Room_listViewAction extends Roombooking_AbstractViewAction
{
	const DATANAME = 'room_list';



	/**
	 * prepare
	 * 
	 * @param	void
	 * 
	 * @return	bool
	**/
	public function prepare()
	{
		parent::prepare();

		return true;
	}

	/**
	 * executeViewSuccess
	 * 
	 * @param	XCube_RenderTarget	&$render
	 * 
	 * @return	void
	**/
	public function executeViewSuccess(/*** XCube_RenderTarget ***/ &$render)
	{
		$render->setTemplateName($this->mAsset->mDirname . '_room_list_view.html');
		$render->setAttribute('object', $this->mObject);
		$render->setAttribute('dirname', $this->mAsset->mDirname);
		$render->setAttribute('dataname', self::DATANAME);
	}
}

?>
