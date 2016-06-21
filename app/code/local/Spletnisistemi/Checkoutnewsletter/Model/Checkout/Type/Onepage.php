<?php

class Spletnisistemi_Checkoutnewsletter_Model_Checkout_Type_Onepage extends Mage_Checkout_Model_Type_Onepage
{
    public function saveBilling($data, $customerAddressId)
    {
        if (isset($data['is_subscribed']) && !empty($data['is_subscribed'])){
            $this->getCheckout()->setCustomerIsSubscribed(1);
        }
        else {
            $this->getCheckout()->setCustomerIsSubscribed(0);
        }
        return parent::saveBilling($data, $customerAddressId);
    }
}
