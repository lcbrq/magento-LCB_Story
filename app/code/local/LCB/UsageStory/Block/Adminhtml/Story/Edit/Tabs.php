<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Block_Adminhtml_Story_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct()
    {
        parent::__construct();
        $this->setId("story_tabs");
        $this->setDestElementId("edit_form");
        $this->setTitle(Mage::helper("usagestory")->__("Item Information"));
    }

    protected function _beforeToHtml()
    {
        $this->addTab("form_section", array(
            "label" => Mage::helper("usagestory")->__("Item Information"),
            "title" => Mage::helper("usagestory")->__("Item Information"),
            "content" => $this->getLayout()->createBlock("usagestory/adminhtml_story_edit_tab_form")->toHtml(),
        ));
        return parent::_beforeToHtml();
    }

}
