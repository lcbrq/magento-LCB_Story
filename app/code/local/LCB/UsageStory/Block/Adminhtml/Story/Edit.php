<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Block_Adminhtml_Story_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct()
    {

        parent::__construct();
        $this->_objectId = "id";
        $this->_blockGroup = "usagestory";
        $this->_controller = "adminhtml_story";
        $this->_updateButton("save", "label", Mage::helper("usagestory")->__("Save Item"));
        $this->_updateButton("delete", "label", Mage::helper("usagestory")->__("Delete Item"));

        $this->_addButton("saveandcontinue", array(
            "label" => Mage::helper("usagestory")->__("Save And Continue Edit"),
            "onclick" => "saveAndContinueEdit()",
            "class" => "save",
                ), -100);

        $this->_formScripts[] = "function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
	}";
        
    }

    public function getHeaderText()
    {
        if (Mage::registry("story_data") && Mage::registry("story_data")->getId()) {
            return Mage::helper("usagestory")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("story_data")->getId()));
        } else {
            return Mage::helper("usagestory")->__("Add Item");
        }
    }

}
