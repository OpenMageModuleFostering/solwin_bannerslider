<?php
class Solwin_Bannerslider_Model_Mysql4_Bannerslider extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("bannerslider/bannerslider", "id");
    }
}