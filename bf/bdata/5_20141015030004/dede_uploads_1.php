<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_uploads`;");
E_C("CREATE TABLE `dede_uploads` (
  `aid` mediumint(8) unsigned NOT NULL auto_increment,
  `arcid` mediumint(8) unsigned NOT NULL default '0',
  `title` char(60) NOT NULL default '',
  `url` char(80) NOT NULL default '',
  `mediatype` smallint(6) NOT NULL default '1',
  `width` char(10) NOT NULL default '',
  `height` char(10) NOT NULL default '',
  `playtime` char(10) NOT NULL default '',
  `filesize` mediumint(8) unsigned NOT NULL default '0',
  `uptime` int(10) unsigned NOT NULL default '0',
  `mid` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`),
  KEY `memberid` (`mid`),
  KEY `arcid` (`arcid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `dede_uploads` values('1','1','净远装饰教您家庭装修阳台如何打造','/uploads/allimg/131121/141955G91-0.jpg','1','680','906','0','224787','1385014796','1');");
E_D("replace into `dede_uploads` values('2','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142459.jpg','0','0','0','0','235154','1385015099','1');");
E_D("replace into `dede_uploads` values('3','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142501.jpg','0','0','0','0','179658','1385015101','1');");
E_D("replace into `dede_uploads` values('4','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142503.jpg','0','0','0','0','179124','1385015103','1');");
E_D("replace into `dede_uploads` values('5','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142504.jpg','0','0','0','0','147673','1385015104','1');");
E_D("replace into `dede_uploads` values('6','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142506.jpg','0','0','0','0','175048','1385015106','1');");
E_D("replace into `dede_uploads` values('7','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142508.jpg','0','0','0','0','157688','1385015108','1');");
E_D("replace into `dede_uploads` values('8','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142459-lp.jpg','1','0','0','0','14733','1385015140','1');");
E_D("replace into `dede_uploads` values('9','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142501-lp.jpg','1','0','0','0','12709','1385015140','1');");
E_D("replace into `dede_uploads` values('10','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142503-lp.jpg','1','0','0','0','13558','1385015141','1');");
E_D("replace into `dede_uploads` values('11','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142504-lp.jpg','1','0','0','0','11097','1385015141','1');");
E_D("replace into `dede_uploads` values('12','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142506-lp.jpg','1','0','0','0','12321','1385015141','1');");
E_D("replace into `dede_uploads` values('13','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142508-lp.jpg','1','0','0','0','11508','1385015142','1');");
E_D("replace into `dede_uploads` values('14','3','留住蓝色地球美丽中国低碳行，绿菩提在行动，等您来参与。','/uploads/allimg/131121/1616325H5-0.jpg','1','540','260','0','40627','1385021793','1');");
E_D("replace into `dede_uploads` values('15','3','留住蓝色地球美丽中国低碳行，绿菩提在行动，等您来参与。','/uploads/allimg/131121/16163243W-1.jpg','1','540','260','0','56831','1385021793','1');");
E_D("replace into `dede_uploads` values('16','4','家庭装修如何选择装修风格','/uploads/allimg/131121/161H2I34-0.jpg','1','980','620','0','112124','1385021843','1');");
E_D("replace into `dede_uploads` values('17','5','“传授”酒店装修沙发选购知识','/uploads/allimg/131121/161K91292-0.jpg','1','980','620','0','56460','1385021879','1');");
E_D("replace into `dede_uploads` values('18','6','装修设计首捧嵌入式家具','/uploads/allimg/131121/16293WT4-0.jpg','1','980','620','0','202471','1385022579','1');");
E_D("replace into `dede_uploads` values('19','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142459-lp.jpg','1','0','0','0','14733','1385023953','1');");
E_D("replace into `dede_uploads` values('20','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142501-lp.jpg','1','0','0','0','12709','1385023953','1');");
E_D("replace into `dede_uploads` values('21','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142503-lp.jpg','1','0','0','0','13558','1385023954','1');");
E_D("replace into `dede_uploads` values('22','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142504-lp.jpg','1','0','0','0','11097','1385023954','1');");
E_D("replace into `dede_uploads` values('23','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142506-lp.jpg','1','0','0','0','12321','1385023954','1');");
E_D("replace into `dede_uploads` values('24','2','清远清新生态园私人会所--高端别墅设计专属打造','/uploads/allimg/131121/1-131121142508-lp.jpg','1','0','0','0','11508','1385023955','1');");

require("../../inc/footer.php");
?>