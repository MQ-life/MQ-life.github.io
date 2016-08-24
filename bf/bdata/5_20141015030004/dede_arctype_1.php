<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arctype`;");
E_C("CREATE TABLE `dede_arctype` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `reid` smallint(5) unsigned NOT NULL default '0',
  `topid` smallint(5) unsigned NOT NULL default '0',
  `sortrank` smallint(5) unsigned NOT NULL default '50',
  `typename` char(30) NOT NULL default '',
  `typedir` char(60) NOT NULL default '',
  `isdefault` smallint(6) NOT NULL default '0',
  `defaultname` char(15) NOT NULL default 'index.html',
  `issend` smallint(6) NOT NULL default '0',
  `channeltype` smallint(6) default '1',
  `maxpage` smallint(6) NOT NULL default '-1',
  `ispart` smallint(6) NOT NULL default '0',
  `corank` smallint(6) NOT NULL default '0',
  `tempindex` char(50) NOT NULL default '',
  `templist` char(50) NOT NULL default '',
  `temparticle` char(50) NOT NULL default '',
  `namerule` char(50) NOT NULL default '',
  `namerule2` char(50) NOT NULL default '',
  `modname` char(20) NOT NULL default '',
  `description` char(150) NOT NULL default '',
  `keywords` varchar(60) NOT NULL default '',
  `seotitle` varchar(80) NOT NULL default '',
  `moresite` tinyint(1) unsigned NOT NULL default '0',
  `sitepath` char(60) NOT NULL default '',
  `siteurl` char(50) NOT NULL default '',
  `ishidden` smallint(6) NOT NULL default '0',
  `cross` tinyint(1) NOT NULL default '0',
  `crossid` text,
  `content` text,
  `smalltypes` text,
  PRIMARY KEY  (`id`),
  KEY `reid` (`reid`,`isdefault`,`channeltype`,`ispart`,`corank`,`topid`,`ishidden`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `dede_arctype` values('1','0','0','1','关于我们','{cmspath}/about','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_about56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/about','','0','0','','净远含义 &quot;绿&quot;健康空间的新标准、&quot;菩提&quot;一词是梵文Bodhi的音译，意为觉悟、智慧，指人宽宏大量，明辨善恶，顿悟真理之意，达到超凡脱俗的境界，蕴藏着深厚的精神文化。<br />\r\n<br />\r\n菩提树的精神：平凡而又常青，光明而又博爱。<br />\r\n<br />\r\nLOGO含义 采用绿色的&quot;圆&quot;代表&quot;净远 装饰&quot;致力打造绿色的地球环境，用我们的爱心去感动更多的人去爱护大自然，保护环境。代表着净远 人共同的社会责任，协手打造一个绿色的、健康的居住和工作环境。 ','');");
E_D("replace into `dede_arctype` values('2','1','1','1','公司简介','{cmspath}/about/profile','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_about56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/about','','0','0','','<p>\r\n	<strong><a href=\"http://www.zhengbangwang.com\"><span style=\"color:#000000;\">北京正邦装饰有限公司</span></a></strong>成立于1999年，注册资金300万元，拥有国家设计乙级、施工乙级、建委三级资质，可承接工程造价1500万元人民币以内的室内装饰工程。自成立以来，净远 装饰锐意进取，与时俱进，以卓越的设计与施工品质赢得了客户的广泛认可与信赖，净远 装饰承接<a href=\"/case/bieshu/\"><span style=\"color:#696969;\">高端别墅装修</span></a>、豪宅、<a href=\"/case/office/\"><span style=\"color:#000080;\">办公室装修</span></a>、教育机构装修、酒店、会所等商业连锁设计装修。净远 装饰多年来一直与国内多家高校科研单位紧密合作，寻求解决装修中产生的污染等问题有效的方案。2008年初，科研上取得重大突破，拥有多项技术彻底解决装修污染产生的诸多问题，实现真正意义上的绿色装修，成为国内首屈一指的绿色装饰航母。</p>\r\n<p>\r\n	十多年来，公司发展迅速，目前净远 在国内已有多个分公司，并且成立专注于高端精品设计的纯设计分公司，同时净远 装饰先后在江苏省无锡市、盐城市、江阴市、南通市、浙江省杭州市、宁波市、湖北省武汉市、四川省成都市等建立项目分部，已经成为中高端装饰装修市场上的著名企业，净远 装饰先后通过并获得ISO9000质量体系认证、中国室内装饰协会理事单位、广东省装饰行业协会会员单位、2009年广东省诚信联盟企业、羊城晚报报业集团、广东建设报绿色联盟重点推荐企业，值得骄傲的是，净远 装饰获得2010广州亚运会活动唯一室内装饰企业承办单位，同时多次荣获室内设计奖项和优质工程奖项，受到客户广泛好评，收到近百封感谢信和多面锦旗。</p>\r\n','');");
E_D("replace into `dede_arctype` values('3','1','1','2','企业文化','{cmspath}/about/culture','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_about56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/about','','0','0','','','');");
E_D("replace into `dede_arctype` values('4','0','0','2','成功案例','{cmspath}/case','1','index.html','1','2','-1','0','0','{style}/index_image.htm','{style}/list_case56.htm','{style}/article_case56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/case','','0','0','','&nbsp;','');");
E_D("replace into `dede_arctype` values('5','4','4','1','别墅','{cmspath}/case/bieshu','1','index.html','1','2','-1','0','0','{style}/index_image.htm','{style}/list_case56.htm','{style}/article_case56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/case','','0','0','','','');");
E_D("replace into `dede_arctype` values('6','4','4','2','办公空间','{cmspath}/case/office','1','index.html','1','2','-1','0','0','{style}/index_image.htm','{style}/list_case56.htm','{style}/article_case56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/case','','0','0','','','');");
E_D("replace into `dede_arctype` values('7','0','0','3','新闻资讯','{cmspath}/news','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/news','','0','0','','&nbsp;','');");
E_D("replace into `dede_arctype` values('8','7','7','1','公司动态','{cmspath}/news/company_news','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/news','','0','0','','','');");
E_D("replace into `dede_arctype` values('9','7','7','2','行业资讯','{cmspath}/news/industry_news','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/news','','0','0','','&nbsp;','');");
E_D("replace into `dede_arctype` values('10','0','0','4','装修常识','{cmspath}/knowledge','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('11','0','0','5','联系我们','{cmspath}/contact','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_contact56.htm','{style}/article_article56.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/contact','','0','0','','<h1>\r\n	北京正邦装饰有限公司</h1>\r\n<p>\r\n	<span style=\"color: rgb(0, 170, 58);\"><span style=\"font-size: 20px;\"><strong>全国统一热线： 4000-123-456</strong></span></span><br />\r\n	总 机：（+86）010-123456789<br />\r\n	传 真：（+86）010-123456789<br />\r\n	投 诉：（+86）010-123456789<br />\r\n	手 机：（+86）010-123456789<br />\r\n	网址：http://www.zhengbangwang.com<br />\r\n	E-mail：fuwu@zhengbangwang.com<br />\r\n	服务时间：7*24小时服务热线：010-123456789<br />\r\n	总　部：北京市朝阳区朝阳路朝阳号朝阳街道<br />\r\n	乘车路线：北京市朝阳区朝阳路朝阳号朝阳街道</p>\r\n','');");
E_D("replace into `dede_arctype` values('12','0','0','50','代表客户','{cmspath}/kehu','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article56.htm','{style}/article_article56.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/kehu','','0','0','','&nbsp;','');");

require("../../inc/footer.php");
?>