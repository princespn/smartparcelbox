<?php

$installer = $this;

$installer->startSetup();

$combination_key = array();

$combination_key[]="adminhtml_customer";
        $attribute->setData("combination_key", $combination_key)
        ->setData("is_used_for_customer_segment", true)
        ->setData("is_system", 0)
        ->setData("is_user_defined", 1)
        ->setData("is_visible", 0)
        ->setData("sort_order", 100);
        $attribute->save();
		
$installer->run("ALTER TABLE  `".$this->getTable("profile/profile")."` ADD sort_order int AFTER attribute_code;");


$installer->endSetup();
