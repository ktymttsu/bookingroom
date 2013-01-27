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

require_once XOOPS_ROOT_PATH . '/core/XCube_ActionForm.class.php';
require_once XOOPS_MODULE_PATH . '/legacy/class/Legacy_Validator.class.php';

/**
 * Roombooking_Room_listDeleteForm
**/
class Roombooking_Room_listDeleteForm extends XCube_ActionForm
{
    /**
     * getTokenName
     * 
     * @param   void
     * 
     * @return  string
    **/
    public function getTokenName()
    {
        return "module.roombooking.Room_listDeleteForm.TOKEN";
    }

    /**
     * prepare
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function prepare()
    {
        //
        // Set form properties
        //
        $this->mFormProperties['room_list_id'] = new XCube_IntProperty('room_list_id');
    
        //
        // Set field properties
        //
        $this->mFieldProperties['room_list_id'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['room_list_id']->setDependsByArray(array('required'));
        $this->mFieldProperties['room_list_id']->addMessage('required', _MD_ROOMBOOKING_ERROR_REQUIRED, _MD_ROOMBOOKING_LANG_ROOM_LIST_ID);
    }

    /**
     * load
     * 
     * @param   XoopsSimpleObject  &$obj
     * 
     * @return  void
    **/
    public function load(/*** XoopsSimpleObject ***/ &$obj)
    {
        $this->set('room_list_id', $obj->get('room_list_id'));
    }

    /**
     * update
     * 
     * @param   XoopsSimpleObject  &$obj
     * 
     * @return  void
    **/
    public function update(/*** XoopsSimpleObject ***/ &$obj)
    {
        $obj->set('room_list_id', $this->get('room_list_id'));
    }
}

?>
