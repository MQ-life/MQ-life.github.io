<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_homepageset`;");
E_C("CREATE TABLE `dede_homepageset` (
  `templet` char(50) NOT NULL default '',
  `position` char(30) NOT NULL default '',
  `showmod` tinyint(2) NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_homepageset` values('moban/index56.htm','../index.html','0');");

require("../../inc/footer.php");
?>