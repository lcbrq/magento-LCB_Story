<?php

$installer = $this;
$installer->startSetup();

$sql = <<<SQLTEXT
DROP TABLE IF EXISTS `{$this->getTable('lcb_usagestory')}`;
CREATE TABLE `{$this->getTable('lcb_usagestory')}` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NULL,
  `bio` longtext NULL,
  `story` longtext NULL,
  `result` longtext NULL,
  `customer` smallint(6) NULL,
  `product` smallint(6) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `{$this->getTable('lcb_usagestory_photo')}`;
CREATE TABLE `{$this->getTable('lcb_usagestory_photo')}` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `entity_id` smallint(6) NULL,
  `label` varchar(255) NULL,
  `file` varchar(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

SQLTEXT;

$installer->run($sql);
$installer->endSetup();
