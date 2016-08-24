<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arctiny`;");
E_C("CREATE TABLE `dede_arctiny` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `typeid2` varchar(90) NOT NULL default '0',
  `arcrank` smallint(6) NOT NULL default '0',
  `channel` smallint(5) NOT NULL default '1',
  `senddate` int(10) unsigned NOT NULL default '0',
  `sortrank` int(10) unsigned NOT NULL default '0',
  `mid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `dede_arctiny` values('1','8','0','0','1','1385014795','1413204397','1');");
E_D("replace into `dede_arctiny` values('2','5','0','0','2','1385015140','1413339899','1');");
E_D("replace into `dede_arctiny` values('3','9','0','0','1','1385021792','1413204409','1');");
E_D("replace into `dede_arctiny` values('4','9','0','0','1','1385021842','1385021822','1');");
E_D("replace into `dede_arctiny` values('5','9','0','0','1','1385021879','1385021860','1');");
E_D("replace into `dede_arctiny` values('6','9','0','0','1','1385022578','1385022549','1');");
E_D("replace into `dede_arctiny` values('7','5','0','0','2','1413195311','1413195344','1');");
E_D("replace into `dede_arctiny` values('8','5','0','0','2','1413201236','1413201297','1');");
E_D("replace into `dede_arctiny` values('9','5','0','0','2','1413201260','1413201352','1');");
E_D("replace into `dede_arctiny` values('10','5','0','0','2','1413201285','1413201370','1');");
E_D("replace into `dede_arctiny` values('11','5','0','-2','2','1413201736','1413203508','1');");
E_D("replace into `dede_arctiny` values('12','12','0','0','1','1413203451','1413203466','1');");
E_D("replace into `dede_arctiny` values('13','12','0','0','1','1413203555','1413203537','1');");
E_D("replace into `dede_arctiny` values('14','12','0','0','1','1413203565','1413203557','1');");
E_D("replace into `dede_arctiny` values('15','12','0','0','1','1413203577','1413203568','1');");
E_D("replace into `dede_arctiny` values('16','12','0','0','1','1413203587','1413203579','1');");
E_D("replace into `dede_arctiny` values('17','12','0','0','1','1413203612','1413203606','1');");
E_D("replace into `dede_arctiny` values('18','10','0','0','1','1413203647','1413204553','1');");
E_D("replace into `dede_arctiny` values('19','10','0','0','1','1413203657','1413204513','1');");
E_D("replace into `dede_arctiny` values('20','12','0','0','1','1413203702','1413203690','1');");
E_D("replace into `dede_arctiny` values('21','12','0','0','1','1413203712','1413203705','1');");
E_D("replace into `dede_arctiny` values('22','8','0','0','1','1413204456','1413204454','1');");
E_D("replace into `dede_arctiny` values('23','8','0','0','1','1413204464','1413204459','1');");
E_D("replace into `dede_arctiny` values('24','8','0','0','1','1413204472','1413204470','1');");
E_D("replace into `dede_arctiny` values('25','8','0','0','1','1413204478','1413204476','1');");
E_D("replace into `dede_arctiny` values('26','8','0','0','1','1413204486','1413204484','1');");
E_D("replace into `dede_arctiny` values('27','8','0','0','1','1413204497','1413204495','1');");
E_D("replace into `dede_arctiny` values('28','10','0','0','1','1413204532','1413204525','1');");
E_D("replace into `dede_arctiny` values('29','10','0','0','1','1413204540','1413204538','1');");
E_D("replace into `dede_arctiny` values('30','10','0','0','1','1413204549','1413204547','1');");
E_D("replace into `dede_arctiny` values('31','10','0','0','1','1413204571','1413204562','1');");
E_D("replace into `dede_arctiny` values('32','9','0','0','1','1413204616','1413204610','1');");
E_D("replace into `dede_arctiny` values('33','9','0','0','1','1413204624','1413204622','1');");
E_D("replace into `dede_arctiny` values('34','9','0','0','1','1413204631','1413204629','1');");
E_D("replace into `dede_arctiny` values('35','4','0','0','2','1413204763','1413204687','1');");
E_D("replace into `dede_arctiny` values('36','4','0','0','2','1413204776','1413204784','1');");
E_D("replace into `dede_arctiny` values('37','4','0','0','2','1413204876','1413204902','1');");
E_D("replace into `dede_arctiny` values('38','4','0','0','2','1413204931','1413204917','1');");
E_D("replace into `dede_arctiny` values('39','4','0','0','2','1413204942','1413204933','1');");

require("../../inc/footer.php");
?>