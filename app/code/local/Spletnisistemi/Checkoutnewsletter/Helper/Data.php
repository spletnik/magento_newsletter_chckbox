<?php

class Spletnisistemi_Checkoutnewsletter_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('newsletter/checkoutnewsletter/enable');
    }

    public function isChecked()
    {
        return Mage::getStoreConfigFlag('newsletter/checkoutnewsletter/checked');
    }

    public function isVisibleGuest()
    {
        return Mage::getStoreConfigFlag('newsletter/checkoutnewsletter/visible_guest');
    }

    public function isVisibleRegister()
    {
        return Mage::getStoreConfigFlag('newsletter/checkoutnewsletter/visible_register');
    }
}