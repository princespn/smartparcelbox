<?php

$installer = $this;

$installer->startSetup();

$installer->run("CREATE TABLE IF NOT EXISTS `".$this->getTable("profile/profile")."` (
  `id` int unsigned NOT NULL auto_increment,
  `attribute_id` int ,
  `attribute_code` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB charset=utf8 COLLATE=utf8_unicode_ci COMMENT='this table is for storing the attribute code created by profile extension'");

$combination_key = array();

$combination_key[]="adminhtml_customer";
        $attribute->setData("combination_key", $combination_key)
        ->setData("is_used_for_customer_segment", true)
        ->setData("is_system", 0)
        ->setData("is_user_defined", 1)
        ->setData("is_visible", 0)
        ->setData("sort_order", 100)
        ;
        $attribute->save();

$installer->endSetup();
