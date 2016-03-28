<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Block_Index extends Mage_Core_Block_Template {
    
    public function getCollection()
    {
        return Mage::getModel('usagestory/story')->getCollection();
    }
    
}
