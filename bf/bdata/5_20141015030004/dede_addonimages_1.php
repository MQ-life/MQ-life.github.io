<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_addonimages`;");
E_C("CREATE TABLE `dede_addonimages` (
  `aid` mediumint(8) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `pagestyle` smallint(6) NOT NULL default '1',
  `maxwidth` smallint(6) NOT NULL default '600',
  `imgurls` text,
  `row` smallint(6) NOT NULL default '0',
  `col` smallint(6) NOT NULL default '0',
  `isrm` smallint(6) NOT NULL default '0',
  `ddmaxwidth` smallint(6) NOT NULL default '200',
  `pagepicnum` smallint(6) NOT NULL default '12',
  `templet` varchar(30) NOT NULL default '',
  `userip` char(15) NOT NULL default '',
  `redirecturl` varchar(255) NOT NULL default '',
  `body` mediumtext,
  `fg` varchar(250) NOT NULL default '',
  `mj` varchar(250) NOT NULL default '',
  `sj` varchar(250) NOT NULL default '2012-07-03至2012-08-20',
  `xmsj` varchar(250) NOT NULL default '',
  PRIMARY KEY  (`aid`),
  KEY `imagesMain` (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_addonimages` values('2','5','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n{dede:img ddimg=''/uploads/allimg/131121/1-131121142459-lp.jpg'' text='''' width=''980'' height=''620''} /uploads/allimg/131121/1-131121142459.jpg {/dede:img}\r\n{dede:img ddimg=''/uploads/allimg/131121/1-131121142501-lp.jpg'' text='''' width=''980'' height=''620''} /uploads/allimg/131121/1-131121142501.jpg {/dede:img}\r\n{dede:img ddimg=''/uploads/allimg/131121/1-131121142503-lp.jpg'' text='''' width=''980'' height=''620''} /uploads/allimg/131121/1-131121142503.jpg {/dede:img}\r\n{dede:img ddimg=''/uploads/allimg/131121/1-131121142504-lp.jpg'' text='''' width=''980'' height=''620''} /uploads/allimg/131121/1-131121142504.jpg {/dede:img}\r\n{dede:img ddimg=''/uploads/allimg/131121/1-131121142506-lp.jpg'' text='''' width=''980'' height=''620''} /uploads/allimg/131121/1-131121142506.jpg {/dede:img}\r\n{dede:img ddimg=''/uploads/allimg/131121/1-131121142508-lp.jpg'' text='''' width=''980'' height=''620''} /uploads/allimg/131121/1-131121142508.jpg {/dede:img}\r\n','3','4','1','200','12','','127.0.0.5','','<p>\r\n	一个学校设计的好坏1，直接影响了学校对外印象的好坏，一个设计的恰到好处的学校，才能轻易俘获家长们的心，放心把孩子交给学校。阅览室，方与圆的组合，活泼可爱，造型别致的书架，激发了孩子的求知欲，调动了孩子学习的积极性，让孩子爱上阅读，爱上树童。宽敞明亮的活动区，低矮的栅栏设计可爱别致，鲜艳亮丽的色彩与柔和的灯光给我们营造了一个快乐缤纷的童话世界，鲜艳的色彩搭配更能激发孩子们无限的想象力，白雪公主的墙面突出了整个设计的主题，更贴近孩子的心。流线型的椅子活泼可爱，不仅是对小孩子，连大人也会爱不释手。屋顶的大型圆灯，墙面上的&ldquo;树型&rdquo;墙纸。整个空间亮丽十足，让进去的不管是学生还是家长还是老师都会感觉舒适亲切。处不在的&ldquo;方与圆&rdquo;的组合，时时刻刻体现着设计师的&ldquo;别有用心&rdquo;，多边形的沙发与墙面的多边形装饰相呼应，可爱的布偶娃娃，宽敞的过道适应了孩子们爱动爱热闹的天性，不会造成拥挤，十分贴心的设计。</p>\r\n','中国风','1288','2012-07-03至2012-08-20','傅亚三');");
E_D("replace into `dede_addonimages` values('7','5','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','地中海','520平方米','2012-07-03至2012-08-20','别墅');");
E_D("replace into `dede_addonimages` values('8','5','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','中国风','100','2012-07-03至2012-08-20','中国风');");
E_D("replace into `dede_addonimages` values('9','5','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','388平方米','388平方米','2012-07-03至2012-08-20','388平方米');");
E_D("replace into `dede_addonimages` values('10','5','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','380平方米','380平方米','2012-07-03至2012-08-20','380平方米');");
E_D("replace into `dede_addonimages` values('11','5','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','','','2012-07-03至2012-08-20','');");
E_D("replace into `dede_addonimages` values('35','4','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','','','2012-07-03至2012-08-20','');");
E_D("replace into `dede_addonimages` values('36','4','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','','','2012-07-03至2012-08-20','');");
E_D("replace into `dede_addonimages` values('37','4','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','<img alt=\"从化珠光流溪御景陈总别墅设计\" src=\"/uploads/allimg/131121/1-131121142501.jpg\" style=\"width: 980px; height: 620px;\" />','','','2012-07-03至2012-08-20','');");
E_D("replace into `dede_addonimages` values('38','4','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','','','2012-07-03至2012-08-20','');");
E_D("replace into `dede_addonimages` values('39','4','3','800','{dede:pagestyle maxwidth=''800'' pagepicnum=''12'' ddmaxwidth=''200'' row=''3'' col=''4'' value=''3''/}\r\n','3','4','1','200','12','','127.0.0.5','','','','','2012-07-03至2012-08-20','');");

require("../../inc/footer.php");
?>