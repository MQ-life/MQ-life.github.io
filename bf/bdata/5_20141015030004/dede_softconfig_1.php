<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_softconfig`;");
E_C("CREATE TABLE `dede_softconfig` (
  `downtype` smallint(6) NOT NULL default '0',
  `ismoresite` smallint(6) NOT NULL default '0',
  `gotojump` smallint(6) NOT NULL default '0',
  `islocal` smallint(5) unsigned NOT NULL default '1',
  `sites` text,
  `downmsg` text,
  `moresitedo` smallint(5) unsigned NOT NULL default '1',
  `dfrank` smallint(5) unsigned NOT NULL default '0',
  `dfywboy` smallint(5) unsigned NOT NULL default '0',
  `argrange` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`downtype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_softconfig` values('0','1','1','1','http://www.aaa.com | 镜像地址一	\nhttp://www.bbb.com | 镜像地址二	\nhttp://www.ccc.com | 镜像地址三	\n','<p>?推荐使用第三方专业下载工具下载本站软件，使用 WinRAR v3.10 以上版本解压本站软件。<br />	\n?如果这个软件总是不能下载的请点击报告错误,谢谢合作!!<br />	\n?下载本站资源，如果服务器暂不能下载请过一段时间重试！<br />	\n?如果遇到什么问题，请到本站论坛去咨寻，我们将在那里提供更多 、更好的资源！<br />	\n?本站提供的一些商业软件是供学习研究之用，如用于商业用途，请购买正版。</p>','0','0','0','0');");

require("../../inc/footer.php");
?>