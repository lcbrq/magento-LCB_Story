<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Model_Mysql4_Photo_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    public function _construct()
    {
        $this->_init("usagestory/photo");
    }

}
