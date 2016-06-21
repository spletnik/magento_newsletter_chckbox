# Installation manual
## Installation
- Copy all files in to the root of your Magento web shop. When asked if you want to overwrite the files, click "Yes to all".

##Known issues

_Problem:_

Newsletter Checkbox Extension could have a problem in the operation if you have already installed some other module / extension in the registration form, in these case will appear trancription of classes. This means that one of theese two modules, which use the same class of Magenta, has a higher priority and, consequently, only one works properly.
 
_Solution:_

The best way to do this is make one of the modules extend the other, then comment out the rewrite on the extension it is extending in the config.xml. 
In simple terms: if you have 2 classes A, B rewriting a magento class C, then you change it such that A extends B rather than C. Then you keep the rewrite in the config of A, but remove from the config of B. This is really just OO programming.
You need to remove "Rewrite"just from one module:

```xml
<checkout>
    <rewrite>
        <type_onepage>Spletnisistemi_Checkoutnewsletter_Model_Checkout_Type_Onepage</type_onepage>
    </rewrite>
</checkout>
```

---

_Problem:_

Also could problem apears if there are two templates, which overides themselfs (checoutnewsletter.xml) and result is that checkbox for newsletter won't appear.

_Solution:_

In main Root folder, which one is used for registration form, add this code in line 170 (before </ul>): 

```php
<?php 
    echo $this->getLayout()->createBlock('checkoutnewsletter/newsletter')->toHtml();
?>
```