<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Block_Adminhtml_Story_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm()
    {

        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset("usagestory_form", array("legend" => Mage::helper("usagestory")->__("Item information")));


        $fieldset->addField("name", "text", array(
            "label" => Mage::helper("usagestory")->__("Name"),
            "name" => "name",
        ));
        
        $fieldset->addField("title", "text", array(
            "label" => Mage::helper("usagestory")->__("Title"),
            "name" => "title",
        ));

        $fieldset->addField('image', 'image', array(
            'label' => Mage::helper('usagestory')->__('Image'),
            'name' => 'image',
            'note' => '(*.jpg, *.png, *.gif)',
        ));
        $fieldset->addField("bio", "textarea", array(
            "label" => Mage::helper("usagestory")->__("Bio"),
            "name" => "bio",
        ));

        $fieldset->addField("story", "textarea", array(
            "label" => Mage::helper("usagestory")->__("Story"),
            "name" => "story",
        ));

        $fieldset->addField("result", "textarea", array(
            "label" => Mage::helper("usagestory")->__("Result"),
            "name" => "result",
        ));

        $fieldset->addField("customer", "text", array(
            "label" => Mage::helper("usagestory")->__("Customer"),
            "name" => "customer",
        ));

        $fieldset->addField("product", "text", array(
            "label" => Mage::helper("usagestory")->__("Product"),
            "name" => "product",
        ));


        if (Mage::getSingleton("adminhtml/session")->getStoryData()) {
            $form->setValues(Mage::getSingleton("adminhtml/session")->getStoryData());
            Mage::getSingleton("adminhtml/session")->setStoryData(null);
        } elseif (Mage::registry("story_data")) {
            $form->setValues(Mage::registry("story_data")->getData());
        }
        return parent::_prepareForm();
    }

}
