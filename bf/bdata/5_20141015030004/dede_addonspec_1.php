<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_addonspec`;");
E_C("CREATE TABLE `dede_addonspec` (
  `aid` mediumint(8) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `note` text,
  `templet` varchar(30) NOT NULL default '',
  `userip` char(15) NOT NULL default '',
  `redirecturl` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`aid`),
  KEY `typeid` (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>