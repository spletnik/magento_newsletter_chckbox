<?php
class Spletnisistemi_Checkoutnewsletter_Block_Newsletter extends Mage_Checkout_Block_Onepage_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('checkoutnewsletter/newsletter.phtml');
    }

    public function isChecked()
    {
        return (bool) $this->getCheckout()->getCustomerIsSubscribed();
    }
}