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

require_once ROOMBOOKING_TRUST_PATH . '/class/AbstractFilterForm.class.php';

define('ROOMBOOKING_ROOM_LIST_SORT_KEY_ROOM_LIST_ID', 1);
define('ROOMBOOKING_ROOM_LIST_SORT_KEY_TITLE', 2);
define('ROOMBOOKING_ROOM_LIST_SORT_KEY_POSTTIME', 3);

define('ROOMBOOKING_ROOM_LIST_SORT_KEY_DEFAULT', ROOMBOOKING_ROOM_LIST_SORT_KEY_ROOM_LIST_ID);

/**
 * Roombooking_Room_listFilterForm
**/
class Roombooking_Room_listFilterForm extends Roombooking_AbstractFilterForm
{
    public /*** string[] ***/ $mSortKeys = array(
 	   ROOMBOOKING_ROOM_LIST_SORT_KEY_ROOM_LIST_ID => 'room_list_id',
 	   ROOMBOOKING_ROOM_LIST_SORT_KEY_TITLE => 'title',
 	   ROOMBOOKING_ROOM_LIST_SORT_KEY_POSTTIME => 'posttime',

    );

    /**
     * getDefaultSortKey
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function getDefaultSortKey()
    {
        return ROOMBOOKING_ROOM_LIST_SORT_KEY_DEFAULT;
    }

    /**
     * fetch
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function fetch()
    {
        parent::fetch();
    
        $root =& XCube_Root::getSingleton();
    
		if (($value = $root->mContext->mRequest->getRequest('room_list_id')) !== null) {
			$this->mNavi->addExtra('room_list_id', $value);
			$this->_mCriteria->add(new Criteria('room_list_id', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('title')) !== null) {
			$this->mNavi->addExtra('title', $value);
			$this->_mCriteria->add(new Criteria('title', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('posttime')) !== null) {
			$this->mNavi->addExtra('posttime', $value);
			$this->_mCriteria->add(new Criteria('posttime', $value));
		}

    
        $this->_mCriteria->addSort($this->getSort(), $this->getOrder());
    }
}

?>
