<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Model_Story extends Mage_Core_Model_Abstract {

    protected function _construct()
    {
        $this->_init("usagestory/story");
    }
    
    public function getUrl()
    {
        return Mage::getUrl('*/index/story', array('id' => $this->getId()));
    }

}
