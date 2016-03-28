<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Block_Adminhtml_Story extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct()
    {

        $this->_controller = "adminhtml_story";
        $this->_blockGroup = "usagestory";
        $this->_headerText = Mage::helper("usagestory")->__("Story Manager");
        $this->_addButtonLabel = Mage::helper("usagestory")->__("Add New Item");
        parent::__construct();
    }

}
