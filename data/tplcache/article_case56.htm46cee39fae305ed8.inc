<?php
$z[0]=Array("field","",56,75);
$z[0][4]['name']="title";
$z[1]=Array("global","",76,102);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",143,172);
$z[2][4]['name']="keywords";
$z[3]=Array("field","",212,270);
$z[3][4]['name']="description";
$z[3][4]['function']="html2text(@me)";
$z[4]=Array("global","",398,430);
$z[4][4]['name']="cfg_templets_skin";
$z[5]=Array("global","",515,547);
$z[5][4]['name']="cfg_templets_skin";
$z[6]=Array("global","",597,629);
$z[6][4]['name']="cfg_templets_skin";
$z[7]=Array("global","",685,717);
$z[7][4]['name']="cfg_templets_skin";
$z[8]=Array("global","",789,821);
$z[8][4]['name']="cfg_templets_skin";
$z[9]=Array("global","",906,938);
$z[9][4]['name']="cfg_templets_skin";
$z[10]=Array("global","",995,1027);
$z[10][4]['name']="cfg_templets_skin";
$z[11]=Array("global","",1204,1236);
$z[11][4]['name']="cfg_templets_skin";
$z[12]=Array("include","",1304,1339);
$z[12][4]['filename']="head.htm";
$z[13]=Array("field","\$ID = @me; \$sql = \"SELECT * FROM `dede_arctype` WHERE id=\$ID\";\$query = mysql_query(\$sql);\$row=mysql_fetch_array(\$query); \$relID = \"\$row[reid]\"; if(\$relID == 0) {@me = \$row[typename];}else{\$sql = \"SELECT `typename` FROM `dede_arctype` WHERE id=\$relID\";\$query = mysql_query(\$sql);\$row=mysql_fetch_array(\$query); @me = \$row[typename];}",1481,1865);
$z[13][4]['name']="typeid";
$z[13][4]['runphp']="yes";
$z[14]=Array("field","",1921,1950);
$z[14][4]['name']="position";
$z[15]=Array("channel","\r\n<li class=\"\"><a href='[field:typeurl/]'>[field:typename/]</a></li>\r\n",2054,2239);
$z[15][4]['type']="son";
$z[15][4]['currentstyle']="<li class='hover'><a href='~typelink~'>~typename~</a></li>";
$z[16]=Array("field","",2557,2583);
$z[16][4]['name']="title";
$z[17]=Array("field","[field:imgsrc/]+++++++++",2831,2917);
$z[17][4]['name']="imgurls";
$z[17][4]['alt']="图片输出区";
$z[18]=Array("field","",4178,4204);
$z[18][4]['name']="title";
$z[19]=Array("field","",4207,4233);
$z[19][4]['name']="title";
$z[20]=Array("field","",4445,4468);
$z[20][4]['name']="fg";
$z[21]=Array("field","",4542,4564);
$z[21][4]['name']="typename";
$z[22]=Array("field","",4638,4661);
$z[22][4]['name']="mj";
$z[23]=Array("field","",4838,4863);
$z[23][4]['name']="xmsj";
$z[24]=Array("field","",5204,5230);
$z[24][4]['name']="title";
$z[25]=Array("field","",5585,5608);
$z[25][4]['name']="sj";
$z[26]=Array("field","",5642,5665);
$z[26][4]['name']="mj";
$z[27]=Array("field","",5708,5730);
$z[27][4]['name']="typename";
$z[28]=Array("field","",5763,5786);
$z[28][4]['name']="fg";
$z[29]=Array("field","",5867,5892);
$z[29][4]['name']="body";
$z[30]=Array("prenext","",7039,7064);
$z[30][4]['get']="pre";
$z[31]=Array("prenext","",7093,7119);
$z[31][4]['get']="next";
$z[32]=Array("arclist","\r\n <figure class=\"indexCaseItem\">\r\n    <p><img  original=\"[field:picname /]\" src=\"/templets/moban/images/lazy.gif\"  width=\"232\" height=\"170\" alt=\"[field:fulltitle/]\" /><a href='[field:arcurl /]' title='[field:fulltitle/]' class='link'><span>\r\n    设计风格：[field:fg/]<br>\r\n        建筑类型：[field:typename /]<br>\r\n        实际面积：[field:mj/]㎡</span></a></p>\r\n     <figcaption><a href=\"[field:arcurl/]\">[field:title/]</a></figcaption>\r\n</figure>\r\n",7807,8416);
$z[32][4]['limit']="0,12";
$z[32][4]['titlelen']="74";
$z[32][4]['orderby']="pubdate";
$z[32][4]['typeid']="4";
$z[32][4]['type']="image.";
$z[32][4]['flag']="";
$z[32][4]['addfields']="fg,mj,sj";
$z[32][4]['channelid']="2";
$z[33]=Array("include","",8509,8546);
$z[33][4]['filename']="footer.htm";

?>