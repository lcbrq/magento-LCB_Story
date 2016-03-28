<?php

/**
 * Product usage stories plugin
 *
 * @category   LCB
 * @package    LCB_UsageStory
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_UsageStory_Model_Mysql4_Photo extends Mage_Core_Model_Mysql4_Abstract {

    protected function _construct()
    {
        $this->_init("usagestory/photo", "id");
    }

}
