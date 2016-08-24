<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_member`;");
E_C("CREATE TABLE `dede_member` (
  `mid` mediumint(8) unsigned NOT NULL auto_increment,
  `mtype` varchar(20) NOT NULL default '个人',
  `userid` char(20) NOT NULL default '',
  `pwd` char(32) NOT NULL default '',
  `uname` char(36) NOT NULL default '',
  `sex` enum('男','女','保密') NOT NULL default '保密',
  `rank` smallint(5) unsigned NOT NULL default '0',
  `uptime` int(11) NOT NULL default '0',
  `exptime` smallint(6) NOT NULL default '0',
  `money` mediumint(8) unsigned NOT NULL default '0',
  `email` char(50) NOT NULL default '',
  `scores` mediumint(8) unsigned NOT NULL default '0',
  `matt` smallint(5) unsigned NOT NULL default '0',
  `spacesta` smallint(6) NOT NULL default '0',
  `face` char(50) NOT NULL default '',
  `safequestion` smallint(5) unsigned NOT NULL default '0',
  `safeanswer` char(30) NOT NULL default '',
  `jointime` int(10) unsigned NOT NULL default '0',
  `joinip` char(16) NOT NULL default '',
  `logintime` int(10) unsigned NOT NULL default '0',
  `loginip` char(16) NOT NULL default '',
  `checkmail` smallint(6) NOT NULL default '-1',
  PRIMARY KEY  (`mid`),
  KEY `userid` (`userid`,`sex`),
  KEY `logintime` (`logintime`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dede_member` values('1','个人','admin','0f67097cd21b53376b21dd07eb0e5119','admin','男','100','0','0','0','','10000','10','0','','0','','1373369782','','1413339295','127.0.0.5','-1');");

require("../../inc/footer.php");
?>