<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arccache`;");
E_C("CREATE TABLE `dede_arccache` (
  `md5hash` char(32) NOT NULL default '',
  `uptime` int(11) NOT NULL default '0',
  `cachedata` mediumtext,
  PRIMARY KEY  (`md5hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_arccache` values('f2181f3eeb9a3bacbef513ffa19b54ca','1413339909','27,26,25,24,23');");
E_D("replace into `dede_arccache` values('a635a7c63c4d5bb1fd0949c17cfbd05a','1413339909','34,33,32,3,6');");
E_D("replace into `dede_arccache` values('1a3e5fb67550df86fd248ae5aaf08138','1413339909','31,18,30,29,28');");
E_D("replace into `dede_arccache` values('add8cb33bf6f6a805fd43bc59806ab55','1413206516','27,26,25,24,23,22,1');");
E_D("replace into `dede_arccache` values('73741881903b1821d541486cde3fbc4e','1413339909','2,39,38,37,36,35,10,9,8,7');");

require("../../inc/footer.php");
?>