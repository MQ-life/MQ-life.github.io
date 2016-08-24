<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_search_keywords`;");
E_C("CREATE TABLE `dede_search_keywords` (
  `aid` mediumint(8) unsigned NOT NULL auto_increment,
  `keyword` char(30) NOT NULL default '',
  `spwords` char(50) NOT NULL default '',
  `count` mediumint(8) unsigned NOT NULL default '1',
  `result` mediumint(8) unsigned NOT NULL default '0',
  `lasttime` int(10) unsigned NOT NULL default '0',
  `channelid` smallint(5) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `dede_search_keywords` values('1','sdddd','sdddd','1','0','1385016905','0','0');");
E_D("replace into `dede_search_keywords` values('2','公园','公园','1','0','1413205401','0','0');");
E_D("replace into `dede_search_keywords` values('3','淡淡的','淡淡的 淡淡的','2','0','1413205543','0','0');");
E_D("replace into `dede_search_keywords` values('4','装饰','装饰','4','11','1413205654','0','0');");

require("../../inc/footer.php");
?>