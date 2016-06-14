<?php

class Migrations_Migration774 extends Shopware\Components\Migrations\AbstractMigration
{
    /**
     * @param string $modus
     * @return void
     */
    public function up($modus)
    {
        $sql = <<<SQL
CREATE TABLE `s_key_value` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` blob NOT NULL,
  `shopId` int(11) unsigned NOT NULL,
  PRIMARY KEY (`key`,`shopId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
SQL;

        $this->addSql($sql);
    }
}
