<?php die();?>
SET NAMES utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_action`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_action` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `actor` varchar(30) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `extra` varchar(255) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `objectType` (`objectType`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_action`(`id`,`objectType`,`objectID`,`actor`,`action`,`date`,`comment`,`extra`,`lang`) VALUES('1','order','3','111','created','2018-04-20 18:10:04','','','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_address`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_address` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(20) NOT NULL,
  `zipcode` char(6) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_address`(`id`,`account`,`contact`,`address`,`phone`,`zipcode`,`lang`) VALUES('1','demo','张三丰','位于湖北省西北部的十堰市丹江口市境内','15988898558','266555','zh-cn'),('2','111','111','111','1111111','111','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_article`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `titleColor` varchar(10) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `source` enum('original','copied','translational','article') NOT NULL,
  `copySite` varchar(60) NOT NULL,
  `copyURL` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `addedBy` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(30) NOT NULL,
  `submission` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `stickTime` datetime NOT NULL,
  `stickBold` enum('0','1') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  `onlyBody` enum('0','1') NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `lang` (`lang`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`),
  KEY `status` (`status`),
  KEY `addedDate` (`addedDate`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_article`(`id`,`title`,`titleColor`,`alias`,`keywords`,`summary`,`content`,`source`,`copySite`,`copyURL`,`author`,`addedBy`,`editor`,`addedDate`,`editedDate`,`status`,`type`,`submission`,`views`,`sticky`,`stickTime`,`stickBold`,`order`,`link`,`css`,`js`,`onlyBody`,`lang`) VALUES('1','安全升级，蝉知2.5.2发布','','chanzhi2.5.2','安全cms,企业建站系统,企业门户,开源csm','大家好，蝉知2.5.2正式版发布了，这次更新增强了系统安全，改进了部分页面的体验，另外修复了很多之前版本的bug，建议老用户及时下载升级。','<h4>一、修改记录</h4>
<ol><li>新增防xss跨站攻击处理</li>
<li>优化后台区块管理操作体验</li>
<li>修复通过字段可进行sql注入的漏洞</li>
<li>修复产品数据结构bug</li>
<li>修复繁体版安装失败bug</li>
<li>修复论坛帖子隐藏显示bug</li>
</ol><h4>二、下载地址</h4>
源码包： <a href=\"http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.2.zip\">http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.2.zip</a> <h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br /><h4>四、演示</h4>
前台演示：<a href=\"http://demo.chanzhi.org\">http://demo.chanzhi.org</a><br /><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>','original','','','admin','','admin','2014-08-21 13:55:00','2014-08-25 15:17:30','normal','article','0','30','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('2','推荐空间','','host','蝉知空间','','<p>我们不推荐大家使用iis + php的空间，存在诸多问题。下面列出的空间都是经过我们测试的，可以选购。</p>
<h4>首先推荐：<a href=\"http://www.chanzhi.net\">云蝉知</a></h4>
<p>云蝉知是蝉知团队运营的免费建站服务，不需要备案，不需要维护，简单方便。</p>
<h4>推荐2：<a href=\"http://www.londit.com/aff/d3djY3NzQGdtYWlsLmNvbQ==\">浪点云主机</a>：</h4>
<p>浪点云主机服务器在香港，不需要备案，linux + apache + php环境，经过我们测试可以流畅运行蝉知系统，也支持伪静态。价格也比较实惠。想自己安装，自己维护的朋友可以选择。<a href=\"http://www.londit.com/aff/d3djY3NzQGdtYWlsLmNvbQ==\">点击此链接购买：</a></p>
<p><br /></p>
<p>附：大家有什么推荐的空间也都可以联系我们进行评测。</p>','original','','','','','','2014-08-25 14:17:00','2014-08-25 14:18:11','normal','page','0','131','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('3','ZUI文档更新','','','','','<p>大家好就，在我们团队浩浩同学的努力下，zui文档的整理工作已经初步完成，zui发布以来大家一直都比较关注，很多朋友催我们更新文档，这次终于可以给大家一个比较完善的手册。请大家到<span style=\"line-height:1.428571429;\">zui文档的官方地址：</span><span style=\"line-height:1.428571429;\"><a href=\"http://devel.cnezsoft.com/page/zui.html\">http://devel.cnezsoft.com/page/zui.html</a></span><span style=\"line-height:1.428571429;\">查看。</span></p>
<p><span style=\"line-height:1.428571429;\"><img src=\"http://www.chanzhi.org/data/upload/201406/f_d81b3cd8361b97c639574b9184d2050d.jpg\" alt=\"\" /><br /><br /></span></p>
<p><span style=\"line-height:1.428571429;\"><img src=\"http://www.chanzhi.org/data/upload/201406/f_9b835d5e180020bb9aadffdefddfa4dc.jpg\" alt=\"\" /><br /></span></p>
<p><br /></p>
<p><span style=\"background-color:#FAFAFA;color:#19751A;font-size:18px;font-weight:bold;line-height:1.1;\">PS:ZUI构建于众多优秀的开源项目之上</span></p>
<p><span style=\"background-color:#FAFAFA;color:#19751A;font-size:18px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://necolas.github.io/normalize.css/\" class=\"card\"><strong class=\"card-heading\">normalize</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://jquery.com/\" class=\"card\"><strong class=\"card-heading\">jQuery</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://getbootstrap.com/\" class=\"card\"><strong class=\"card-heading\">Bootstrap</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://kindeditor.net/\" class=\"card\"><strong class=\"card-heading\">kindeditor</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://harvesthq.github.io/chosen/\" class=\"card\"><strong class=\"card-heading\">Chosen</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://www.malot.fr/bootstrap-datetimepicker\" class=\"card\"><strong class=\"card-heading\">Datetime picker</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://lesscss.org/\" class=\"card\"><strong class=\"card-heading\">Less</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://fortawesome.github.io/Font-Awesome/\" class=\"card\"><strong class=\"card-heading\">FontAwesome</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"https://code.google.com/p/google-code-prettify/\" class=\"card\"><strong class=\"card-heading\">google code prettify</strong></a></div>
<br /><p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><strong>向他们致谢！</strong></p>','original','','','admin','','admin','2014-06-09 14:30:00','2014-08-25 15:27:00','normal','article','0','6','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('4','多处改进，蝉知2.5.1正式版发布','','chanzhi2.5.1','','大家好蝉知企业门户系统2.5.1正式版发布了，修复了2.5beta的一些bug和漏洞，还有多处使用体验优化。这次升级修复了两个重要的安全漏洞，建议大家及时更新。','<div class=\"text-danger\">本次升级修复了两个安全漏洞，建议大家及时更新。</div>
<h4>一、2.5.1修改记录</h4>
<ol><li>文章详情页面最后编辑放在页尾</li>
<li>调整了后台区块设置颜色的界面</li>
<li>二维码图片设置默认的宽度和高度</li>
<li>处理留言和回复的时候，把留言或者评论的内容显示在回复框里面</li>
<li>修复开放登录的图片地址</li>
<li>手册文章的评论没有显示手册的查看链接</li>
<li>调整php源码区块的样式</li>
<li>zui里面的弹出框里面的\"好的\"改为\"确定\"</li>
<li>布局页面的操作统一改为图标按钮</li>
<li>跳转页面需要加placeholder，提示用户输入链接</li>
<li>关注我们改为区块实现，样式调整</li>
<li>检查ie11下面的兼容性问题</li>
<li>php源码的ok文件提示不要放在文本框架里面</li>
<li>全局样式菜单直接改成全局样式增加代码高亮</li>
<li>如果站点类型是博客的话，把网站首页的链接去掉可以支持小图标</li>
<li>产品的摘要改为简介</li>
<li>类目管理放到类目的最下面</li>
<li>类目维护后面增加x按钮，可以删除</li>
<li>调整论坛帖子转移的逻辑</li>
<li>调整上传模板页面的的样式</li>
<li>源代码区块改为html源代码，设置选项，直接语法高亮</li>
<li>新闻，产品列表的删除放在最后面</li>
<li>把IE6提示代码放到js里加载，同时简化提示内容</li>
<li>修复火狐下面导航错位问题</li>
<li>解决后台文章管理模块，左边栏 类目浏览 如果文章类目过多会被遮盖，且无法向下滚动的问题</li>
</ol>
<h4>二、下载地址</h4>
源码包： <a href=\"http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.1.zip\">http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.1.zip</a> <h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br />
<h4>四、演示</h4>
前台演示：<a href=\"\">http://demo.chanzhi.org</a><br />
<p>后台演示：<a href=\"/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、新功能截图</h4>
<p><br />
</p>
<p>区块颜色自定义预览</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_612657d0b55bc2041168d5dc5e130b7f.jpg\" alt=\"\" /></p>
<p>区块颜色自定义</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_cbc7faa692abdbd2ddc70a471603d00d.jpg\" alt=\"\" /></p>
<p>代码高亮</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_3df23e03df90e34cc826e2e6ca2ac857.jpg\" alt=\"\" /></p>
<p>关于我们页面区块设置</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_7d0a448e87f61db219f7f06372f79683.jpg\" alt=\"\" /></p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_df8a18eb7d0b23ee46eea14d70d7eff5.jpg\" alt=\"\" /></p>','original','','','admin','','demo','2014-08-19 15:15:00','2014-10-16 14:11:52','normal','article','0','15','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('5','蝉知企业门户2.5beta版本发布','','','蝉知,企业建站','蝉知企业门户2.5beta版正式发布。新增插件管理，优化模板体系、提供模板安装功能，新增文章、类目、主题的跳转功能，新增评论、留言前台回复功能，还有导航拖拽排序、代码编辑器等诸多优化。','<h4>一、2.5修改记录</h4>
<p>1、实现模板和主题风格的概念<br />
2、将前台的模板文件独立出来<br />
3、实现模板的导入功能<br />
4、模板体系可以定义支持的区块和布局列表<br />
5、增加插件管理机制<br />
6、后台布局的区块、导航、手册等列表页面的排序改为拖动排序 <br />
7、增加php源代码区块<br />
8、源代码区块增加代码编辑器<br />
9、区块增加更多颜色的配置<br />
10、自定义区块也支持更多链接<br />
11、公司简介区块还原更多链接<br />
12、留言、评论支持回复功能<br />
13、留言、评论列表显示所有回复<br />
14、发表评论的时候可以选择是否接收邮件通知<br />
15、评论被回复的时候，发送邮件通知评论作者<br />
16、后台留言和评论通过之后也可以删除<br />
17、设置产品的价格货币单位使用符号<br />
18、调整没有任何参数的产品的详情页面<br />
19、产品简介添加编辑器<br />
20、用户可以直接定义一个全局的样式<br />
21、调整手机版本下面幻灯的显示样式<br />
22、登录注册的代码不应当出现在文档开始的地方<br />
23、编辑手册的时候，记住当时点击的锚点<br />
24、将文章详情页面底部的空白标签去掉<br />
25、博客、论坛、手册功能关闭的时候，站点地图不显示这些模块<br />
26、重新调整论坛的主题转移功能<br />
27、类目维护页面增加添加按钮，可以新增一个类目框<br />
28、类目、文章、主题可以是一个链接，当浏览该类目时，跳转到其他的链接地址<br />
29、后台的主题、帖子、留言的删除改用zui里面的对话框<br />
30、修改ie6的检查提示方式<br />
31、二维码只有打开的时候再请求<br />
32、图片浏览只能后台才可以使用，前台不能使用<br />
33、日志文件增加.php扩展名<br />
34、附件目录、system目录每个都创建空白的index.php文件<br />
35、升级的时候去掉ok文件的检查<br />
36、手册文章显示最后更新时间<br />
37、后台的文章、博客、产品列表增加图片链接<br />
38、调整帖子详情附件上传的表单样式<br />
39、调整后台的文章、博客、产品等模块点开的附件上传表单修改样式<br />
40、升级到2.5的时候，将之前的日志文件删除掉<br />
41、备案信息增加链接<br />
42、幻灯的链接应当指定是否是新开窗口<br />
43、调整ie11下载附件的逻辑<br />
44、后台的用户检索可以模糊检索<br />
45、公司联系方式增加公司网址<br />
46、处理QQ登录相关报错</p>
<h4>二、下载地址</h4>
源码包：<a href=\"http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.beta.zip\">http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.beta.zip</a><br /><h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br /><h4>四、演示</h4>
前台演示：<a href=\"http://demo.chanzhi.org\">http://demo.chanzhi.org</a><br /><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、功能截图</h4>
<h5>1.评论留言可重复回复</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_968ab3b123324b54b320474c18831d80.png\" alt=\"\" /></p>
<h5>2.可以拖拽排序</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_421c572e99cb6d806874bfce45bd3f8d.png\" alt=\"\" /></p>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_e6ae3162b920498fe9daca5701cc87de.png\" alt=\"\" /></p>
<h5>3.模板设置</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_db80a5a9766e874e41d726174b0df05c.png\" alt=\"\" /></p>
<h5>4.代码编辑器</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_8e536ec6c0c4857b4cef62af88c81cde.png\" alt=\"\" /></p>','original','','','admin','','','2014-08-06 11:10:00','2014-08-25 15:18:38','normal','article','0','16','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('6','蝉知企业门户2.4正式版发布','','','企业建站系统,企业门户,开源CMS,免费cms','大家好，蝉知2.4正式发布了。对大量的交互和样式做了优化，解决了之前版本的一些bug，如微信菜单链接错误等。相比之前版本蝉知2.4更加稳定流畅，欢迎大家下载使用。','<h4>一、2.4修改记录</h4>
<p>后台博客、产品、文章列表增加按照类目浏览功能<br />
解决新版本的火狐二级导航错位问题<br />
优化产品列表和详情页面的样式<br />
论坛版块描述支持html标签显示<br />
修复幻灯片删除第一个链接按钮后无法保存的bug<br />
处理部分面包屑里面的类目地址bug</p>
<p>解决部分图标无法显示bug<br />
调整对话框的默认样式<br />
区块增加更多链接<br />
优化编辑区块操作体验，编辑后停留在编辑页面<br />
调整文章的来源字段类型和显示效果<br /><span>前端</span>优化：代码把ie8相关的js脚本打包成一个ie8.js<br />
前端优化：将treeview.js和treeview.css打包到all.css和all.js中<br />
将前台每个列表页面默认记录数改成从配置项获取<br />
附件列表不再显示编辑器上传的图片<br />
优化评论和留言列表的样式<br />
去掉论坛主题里面p标记的margin<br />
调整蝉知系统默认的字体大小<br />
修改布局的区域名称使之更容易理解<br />
zui里面去掉p标记的margin<br />
减少布局中列与列之间的间距<br />
导航设置默认折叠起来<br />
版块编辑器增加源代码标签<br />
版块的描述字段长度调成text类型。<br />
解决编辑器上传附件使用现有的图片时，缩略图地址错误的bug<br />
调整前台首页友情链接的样式<br />
留言和评论增加需要审核之后才会显示的提示。<br />
幻灯功能优化：<span>优化了后台管理界面</span>，排序不再需要手动点击保存排序按钮，<br />
解决通过之前评论时，留言也会被通过的bug<br />
后台删除主题或者回帖的时候添加确认提示<br />
前台主题的维护选项增加转移功能<br />
增加logo删除功能</p>
<p><span style=\"color:inherit;font-size:14px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<p><span style=\"color:inherit;font-size:14px;font-weight:bold;line-height:1.1;\">二、下载地址</span></p>
源码包：<a href=\"http://dl.xirangit.com/eps/2.4/chanzhiEPS.2.4.zip\">http://dl.xirangit.com/eps/2.4/chanzhiEPS.2.4.zip</a><br /><h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br /><h4>四、演示</h4>
前台演示：<a href=\"http://demo.chanzhi.org\">http://demo.chanzhi.org</a><br /><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、功能截图</h4>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_88e288f0d4db03b1124f0915d1d7f85c.png\" alt=\"\" class=\"card\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_fbd7d140a337affb0618f17131548a8a.png\" alt=\"\" class=\"card\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_b36c0d33a50a44804463e5f8cab37182.png\" alt=\"\" class=\"card\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_27bcc27d111ebb12904cd19ab5e7b206.png\" alt=\"\" class=\"card\" /></p>','original','','','admin','','','2014-06-25 14:10:00','2014-08-25 15:19:43','normal','article','0','11','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('7','蝉知企业门户2.3正式版发布','','chanzhi2.3','企业建站系统,企业门户,开源CMS,免费cms','大家好，蝉知2.3正式版正式发布了。主要改进有：提供iis下面的重写规则、增加产品自定义属性、增强幻灯片功能、增加空间图片调用功能。','<h4>提示：</h4>
<p>1、这次升级我们修改了<span>蝉知系统版权</span>，请大家仔细阅读。</p>
<p>     蝉知系统版权： <a href=\"http://www.chanzhi.org/book/chanzhieps/58_license.html\">http://www.chanzhi.org/book/chanzhieps/58_license.html</a></p>
<p>2、后台站点设置添加了首页关键字，首页标题算法改为首页关键字+站点名称，升级后需要大家根据需要重新设置一下。</p>
<h4>一、2.3修改记录</h4>
<ol><li><span style=\"line-height:1.428571429;\">博客页面应当增加对所有页面区块的支持</span></li>
<li><span style=\"line-height:1.428571429;\">解决文章详情页面微博推广按钮不删除验证代码就不能显示问题</span></li>
<li><span style=\"line-height:1.428571429;\">解决宽屏主题登录注册按钮不显示问题</span></li>
<li><span style=\"line-height:1.428571429;\">解决部署在二级目录时微信的接入地址的bug </span></li>
<li><span style=\"line-height:1.428571429;\">解决后台的用户列表中重复显示的bug </span></li>
<li><span style=\"line-height:1.428571429;\">修复新浪会员链接</span></li>
<li><span style=\"line-height:1.428571429;\">单页可以控制页面的布局</span></li>
<li><span style=\"line-height:1.428571429;\">优化时间显示，去除00:00的显示</span></li>
<li><span style=\"line-height:1.428571429;\">文章的来源增加翻译选项</span></li>
<li><span style=\"line-height:1.428571429;\">二维码的图片缩小了一些</span></li>
<li><span style=\"line-height:1.428571429;\">后台设置开放登录的图标用亮色的</span></li>
<li><span style=\"line-height:1.428571429;\">删除zepto.js文件</span></li>
<li><span style=\"line-height:1.428571429;\">调整蝉知默认的字体的大小</span></li>
<li><span style=\"line-height:1.428571429;\">留言的图标采用亮色的</span></li>
<li><span style=\"line-height:1.428571429;\">增加检查更新的功能</span></li>
<li><span style=\"line-height:1.428571429;\">安装升级界面添加蝉知协议</span></li>
<li>论坛版块和博客类目的别名不能使用数字</li>
<li><span style=\"line-height:1.428571429;\">论坛后台的回帖链接应当新开页面</span></li>
<li><span style=\"line-height:1.428571429;\">个人中心我的主题里面，最新回帖显示真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">论坛发贴的时候，判断所属版块是否存在且可读</span></li>
<li><span style=\"line-height:1.428571429;\">论坛版块列表页面的版主显示真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">管理员或者版主身份在前台显示的时候应当给予标识</span></li>
<li><span style=\"line-height:1.428571429;\">论坛增加帖子转移功能</span></li>
<li><span style=\"line-height:1.428571429;\">后台单独增加一个首页关键词的设置</span></li>
<li><span style=\"line-height:1.428571429;\">升级程序需要处理之前的站点描述信息，将html标签去掉</span></li>
<li><span style=\"line-height:1.428571429;\">产品购买链接新窗口打开</span></li>
<li><span style=\"line-height:1.428571429;\">提供了iis下面的重写规则</span></li>
<li><span style=\"line-height:1.428571429;\">头部区域的logo，站点口号，登录注册也用区块显示</span></li>
<li><span style=\"line-height:1.428571429;\">整理英语下面的翻译</span></li>
<li><span style=\"line-height:1.428571429;\">首页布局调整，使之能显示最新产品</span></li>
<li><span style=\"line-height:1.428571429;\">编辑器里面的图片库，文件库可以从我们附件表里面选择</span></li>
<li><span style=\"line-height:1.428571429;\">对于禁用的会员，希望后台可以增加解除禁用功能</span></li>
<li><span style=\"line-height:1.428571429;\">公司简介区块更多链接放在标题右侧</span></li>
<li><span style=\"line-height:1.428571429;\">文章列表显示的条目数可自己设置。</span></li>
<li><span style=\"line-height:1.428571429;\">站点增加类型设置，可以选择企业门户或者个人门户</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯文字和图片给予提示</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯可以有多个按钮</span></li>
<li><span style=\"line-height:1.428571429;\">每一个幻灯都可以指定文字的颜色和背景色</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯可以使用纯色来实现</span></li>
<li><span style=\"line-height:1.428571429;\">实现产品自定义属性功能</span></li>
<li><span style=\"line-height:1.428571429;\">解决一键安装包qq开放登录的问题</span></li>
</ol><h4>二、下载地址</h4>
<p>源码包：<a href=\"http://dl.xirangit.com/eps/2.3/chanzhiEPS.2.3.zip\">http://dl.xirangit.com/eps/2.3/chanzhiEPS.2.3.zip</a></p>
<h4>三、安装和升级文档</h4>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a></p>
<p>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a></p>
<h4>四、演示</h4>
<p>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、功能截图</h4>
<p><img src=\"http://www.chanzhi.org/data/upload/201405/f_621601c6a91fdeaf4d0ae19ad6407191.gif\" alt=\"\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201405/f_630c95eeafa23d91cd7cbf61635d263f.gif\" alt=\"\" /></p>','original','','','admin','','','2014-05-16 10:10:00','2014-08-25 15:20:58','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('8','蝉知企业门户2.2.1版本发布','','chanzhieps2.2.1','企业建站系统,企业门户,开源CMS,免费cms','小更新，蝉知2.2.1发布，这次更新主要是解决一些bug，加一些细节调整。','<h4>一、2.2.1修改记录</h4>
<p>  1 调整评论页面的文案。</p>
  2 联系我们页面增加二维码展示。<br />
  3 密码错误触发锁定次数增加到5次，禁用时间缩短到3分钟。<br />
  4 博客列表评论按钮添加链接。 <br />
  5 会员管理页面添加微博和qq会员的显示。<br />
  6 修改在线QQ的连接。<br /><p>  7 把oauth类的get方法去掉file_get_contents方式，只用CURL方式。</p>
<p>  8 解决php magic_quotes_gpc 打开时中文内容存储失败的bug。 </p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">二、下载地址</span></p>
<p><span style=\"font-size:14px;line-height:1.428571429;\">源码包：</span><a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.zip\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.zip</a></p>
<p>安装包：<a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.exe\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.exe</a></p>
<p><br /></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">三、安装和升级文档  </span></p>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a></p>
<p>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a></p>
<p><br /></p>
<p>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>','original','','','admin','','','2014-04-01 10:40:00','2014-08-25 15:22:03','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('9','蝉知企业门户2.2版本发布，全面集成微信！','','chanzhieps2.2','微信营销系统,微网站,企业建站,移动建站','大家好，蝉知企业门户系统2.2正式版正式发布了！这次升级集成了微信公众号的应用，主要功能有：公众号接入、公众号菜单定义、关键字自动回复设置、二维码显示、粉丝消息获取和回复、粉丝管理。另外还添加了新的宽屏主题、重新组成后台反馈相关的功能，使用更加方便。','<p>大家好，蝉知企业门户系统2.2正式版正式发布了！该版本全面集成了微信公众号平台，包括：公众号接入、公众号菜单定义、关键字自动回复设置、二维码显示、粉丝消息获取和回复、粉丝管理。另外还添加了新的宽屏主题、重新组成后台反馈相关的功能，使用更加方便。</p>
<h4>一、修改记录</h4>
<ol><li><span style=\"line-height:1.428571429;\">后台设置logo页面调整</span></li>
<li><span style=\"line-height:1.428571429;\">论坛帖子用户信息调整</span></li>
<li><span style=\"line-height:1.428571429;\">调整反馈，将留言、评论、主题、回帖，将其集中在一起。</span></li>
<li><span style=\"line-height:1.428571429;\">添加微信公众号接入功能</span></li>
<li><span style=\"line-height:1.428571429;\">添加公众号会员查看功能</span></li>
<li><span style=\"line-height:1.428571429;\">添加公众号消息管理功能</span></li>
<li><span style=\"line-height:1.428571429;\">添加公众号菜单、关键字、订阅回复、默认回复的管理功能</span></li>
<li><span style=\"line-height:1.428571429;\">新增宽屏主题</span></li>
<li><span style=\"line-height:1.428571429;\">前台添加微信公众号和手机访问二维码显示</span></li>
<li><span style=\"line-height:1.428571429;\">禁止百度自动转码</span><span style=\"line-height:1.428571429;\">。</span><br /></li>
</ol><h4 style=\"color:#333333;\">二、新特性截图</h4>
<p><br /></p>
<p><strong>2.1 前台显示微信公众号的二维码以及当前网址的二维码。</strong><strong><br /></strong></p>
<p><strong><img src=\"http://www.chanzhi.org/data/upload/201403/f_0f4feaade60a500a295320cf7f57b7b2.jpg\" alt=\"\" /></strong><strong><br /></strong></p>
<p><strong><br /></strong></p>
<p><strong>2.2 后台的微信功能设置</strong><strong><br /></strong></p>
<p><strong><img src=\"http://www.chanzhi.org/data/upload/201403/f_6fd64ba21b03ee7a1b4b2cdb019ef7bd.jpg\" alt=\"\" /><br /></strong></p>
<p><strong><br /></strong></p>
<p><strong>2.3 微信界面截图</strong></p>
<p><strong><img src=\"http://www.chanzhi.org/data/upload/201403/f_e1aa3a6106f7f37395d42e637254091a.jpg\" alt=\"\" /><br /></strong></p>
<h4 style=\"color:#333333;\">三、下载地址</h4>
<p>源码包：<a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.zip\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.zip</a></p>
<p>安装包：<a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.exe\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.exe</a></p>
<p><br /></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">四、安装和升级文档  </span></p>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a></p>
<p>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a></p>
<p><br /></p>
<p>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<p><br /></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">五、蝉知系统微信集成手册</span></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<p>蝉知系统微信集成手册：<a href=\"http://www.chanzhi.org/book/weixin.html\">http://www.chanzhi.org/book/weixin.html</a></p>','original','','','admin','','','2014-03-24 16:00:00','2014-08-25 15:24:48','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('10','蝉知企业门户系统2.1正式版发布','','chanzhieps2.1','手机建站系统,企业建站系统,微信网站,免费企业建站','大家好，蝉知企业门户系统2.1正式版今天正式发布了。这次升级主要是手机终端界面的优化和区块功能改进，同时还解决了之前版本产品和博客分页功能等bug。','<h4 style=\"color:#333333;\">一、2.1修改记录</h4>
<ol><li>区块增加图标设置功能</li>
<li>布局设置增加区块宽度设置功能</li>
<li>触屏设备访问时幻灯片增加拖动支持</li>
<li><span style=\"line-height:1.428571429;\">论坛帖子最后编辑者改为真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">关于我们页面使用区块把联系我们放在右侧</span></li>
<li><span style=\"line-height:1.428571429;\">批量维护手册章节的时候添加发布时间</span></li>
<li><span style=\"line-height:1.428571429;\">编辑手册文章的时候增加发布时间的字段</span></li>
<li><span style=\"line-height:1.428571429;\">重新调整h1-h6标签的字体大小</span></li>
<li><span style=\"line-height:1.428571429;\">解决置顶帖子用户姓名问题</span></li>
<li><span style=\"line-height:1.428571429;\">修改版权提示的格式</span></li>
<li><span style=\"line-height:1.428571429;\">修复分页的bug</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯排序在ie10下面有问题。</span></li>
<li><span style=\"line-height:1.428571429;\">修复ie10下面蓝色风格的问题</span></li>
<li><span style=\"line-height:1.428571429;\">精简文章详情页面的上一篇下一篇的导航文字</span></li>
<li><span style=\"line-height:1.428571429;\">调整留言页面回复内容的缩进和字体大小</span></li>
<li><span style=\"line-height:1.428571429;\">优化移动版本头尾的处理</span></li>
<li><span style=\"line-height:1.428571429;\">管理员身份回帖的时候应当使用全编辑器</span></li>
<li><span style=\"line-height:1.428571429;\">论坛帖子发贴框的宽度调整。把只读放在后面。</span></li>
<li><span style=\"line-height:1.428571429;\">调整论坛列表页面各列的宽度</span></li>
<li><span style=\"line-height:1.428571429;\">以管理员身份发表评论或者留言，默认状态为通过。</span></li>
<li><span style=\"line-height:1.428571429;\">后台管理员回复一篇评论或留言之后，默认将其状态改为通过</span></li>
<li><span style=\"line-height:1.428571429;\">修改邮箱默认配置，将腾讯邮箱默认改为465 </span></li>
<li><span style=\"line-height:1.428571429;\">如果发贴用户已被删除，帖子列表页面的最后回复取用户名</span></li>
<li><span style=\"line-height:1.428571429;\">论坛出现版主的地方也都显示真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">将user模块的getRealName()方法改为getRealNamePairs()</span></li>
<li><span style=\"line-height:1.428571429;\">调整模拟的alert和confirm框的样式</span></li>
<li><span style=\"line-height:1.428571429;\">论坛帖子列表的时候显示用户的真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">留言者区分是否是登录用户</span></li>
<li><span style=\"line-height:1.428571429;\">论坛的板块设置提示需要二级板块</span></li>
<li><span style=\"line-height:1.428571429;\">区块首页底部的命名改为中部。</span></li>
<li><span style=\"line-height:1.428571429;\">调整文章，产品无类目时的交互方式</span></li>
<li><span style=\"line-height:1.428571429;\">重置密码功能把resetKey，resetTime合成一个字段</span></li>
<li><span style=\"line-height:1.428571429;\">论坛控制图片大小</span></li>
</ol><h4 style=\"color:#333333;\">二、手机访问截图</h4>
<p><img src=\"http://www.chanzhi.org/data/upload/201403/f_59e4b4d8216516649c97804813b14af2.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /><img src=\"http://www.chanzhi.org/data/upload/201403/f_702d92775d4dcdd983e5be1d998d566b.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201403/f_4ca0b9700f909cabc75ecc00f60ee7a0.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /><img src=\"http://www.chanzhi.org/data/upload/201403/f_0831fb8306a661c9ab6cb1a87d16b5ba.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /><img src=\"http://www.chanzhi.org/data/upload/201403/f_dfa6504be3a605561262e18d4d5eb63f.png\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /></p>
<h4 style=\"color:#333333;\">三、下载地址</h4>
<p>源码包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip</a><br />
安装包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe</a></p>
<h4 style=\"color:#333333;\">四、安装和升级文档  </h4>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br />
前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>','original','','','admin','','','2014-03-03 09:50:00','2014-08-25 15:26:45','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('11','关于我们','','about','','','这好','original','','','','','','2014-10-08 14:38:00','2014-10-08 17:40:23','normal','page','0','1','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('12','明天还是明天','','','','','明天还是明天','original','','','demo','','','2014-10-08 17:44:00','2014-10-08 17:44:59','normal','article','0','7','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('13','test','','','','','<p>1111111111111111111111</p>','original','','','admin','admin','','2018-04-24 15:48:00','2018-04-24 15:48:30','normal','article','0','1','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('14','大众部','','','','','<p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;font-family: Simsun;font-size: 12px;white-space: normal;text-align: justify;line-height: 2;text-indent: 2em;background-color: rgb(255, 255, 255)\"><span style=\"\">又称圣大众部，是小乘二十部之一，与上座部并为最初的两大部。据《异部宗轮论》所记载，佛陀入灭百余年，大天比丘提出五条教义后，产生赞成的革新派比丘，与反对的保守派比丘。两派互相抗争，前者遂结成大众部，后者则结成上座部。大众部主要主张有：佛身无漏、色身无边、佛寿无量，并认为生死或涅槃皆为假名，人之心性本来清净，然由于动摇之故而受污染，此即后世大乘佛教思想的先驱。此外又主张“现在实有、过未无体”(仅有现在是真正的存在)，从而与上座部的“三世实有、法体恒有”之说形成对立。</span></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;font-family: Simsun;font-size: 12px;white-space: normal;text-align: justify;line-height: 2;text-indent: 2em;background-color: rgb(255, 255, 255)\"><br/></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;font-family: Simsun;font-size: 12px;white-space: normal;text-align: justify;line-height: 2;text-indent: 2em;background-color: rgb(255, 255, 255)\"><span style=\"\">本派以央崛多罗国为基地而向四方传布，初时尚且一味和合，然而到了后世，则渐渐分裂，先后衍出一说部、说出世部、鸡胤部、多闻部、说假部、制多山部、西山住部、北山住部等，合其本部，共为九部派。</span></p><p><br/></p>','original','','','admin','admin','','2018-04-25 16:55:00','2018-04-25 16:55:24','normal','article','0','0','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('15','一说部','','','','','<p><span style=\"font-family: Simsun; line-height: 28px; text-align: justify; text-indent: 24px; background-color: rgb(255, 255, 255);\">小乘二十部之一，属大众部系的学派。《文殊师利问经》译为“执一语言部”，《异部宗轮论》、《部执异论》、《十八部论》等译为“一说部”。《异部宗轮论述记》谓：“一说部，此部说世、出世法皆无实体，但有假名，名即是说意，谓诸法唯一假名，无体可得，即乖本旨。所以别分名一说部，从所立为名也。”一般认为是佛陀入灭200年间，从大众部分出的，主要驳斥大众部“现在有体，过未无体”的说法，否认有“唯一刹那”的现在法，强调“诸法无有实体，唯有假名。”</span></p>','original','','','admin','admin','','2018-04-25 16:55:00','2018-04-25 16:55:44','normal','article','0','0','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('16','四大','','','','','<p><span style=\"font-family: Simsun; font-size: 12px; line-height: 28px; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; 指构成一切物质的四种要素，又名“四大种”、“四界”，即：地大、水大、火大、风大。这四种元素遍存于一切物质，因此称为“大”。“四大”的理论是古印度人对物质世界的传统认识，被佛教加以吸收改造之后，产生新的理解，认为一切物质和人身都是由四大所构成，并以此来说明无常、无我的理念。</span></p>','original','','','admin','admin','','2018-04-25 16:56:00','2018-04-25 16:56:28','normal','article','0','1','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('17','“百寺讲堂”举行第八讲《楹联摭谈》','','','','','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_1.jpg\" width=\"500\" height=\"333\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_2.jpg\" width=\"500\" height=\"333\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_3.jpg\" width=\"500\" height=\"334\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_4.jpg\" width=\"500\" height=\"333\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_5.jpg\" width=\"500\" height=\"221\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_6.jpg\" width=\"500\" height=\"333\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_7.jpg\" width=\"500\" height=\"333\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_8.jpg\" width=\"500\" height=\"333\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><br/><img src=\"http://www.shjas.org/uploads/allimg/180327/1_180327132347_9.jpg\" width=\"500\" height=\"288\" alt=\"\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; 2018年3月25日下午，“百寺讲堂”迎来了第八讲。上海楹联学会杨先国教授作了题为《楹联摭谈》的讲座，上海高校代表以及静安寺护法善信数百人认真聆听了讲座。上海静安寺监院亚蕴法师主持讲座。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; 杨先国教授从“最独特的文学样式”、“对联的规则（联律）”、“对联的种类”三个方面展开讲座，通过引人入胜的例证，给大家讲解了楹联的基本知识。讲座中，杨教授从“字句相等、词性相对、结构相同、节拍相应、平仄相谐、内容相关”几点分析了对联的规则，并就对联的种类进行了旁征博引式的分享。两个小时的讲座，听众兴趣盎然、受益匪浅。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; “百寺讲堂”是由世界佛教弘法协会会长、佛教三藏研究院院长、上海静安寺住持慧明大和尚提议，佛教百寺基金和上海老教授协会联合主办的，以“传播知识，增长智慧，幸福人生，利益社会”为宗旨服务大众的公益性讲堂。从2017年10月开始，每月将定期举办两次专题讲座，内容范围涵盖社会、历史、哲学、文学、经济、自然科学、医学养生等等，弘扬中国优秀传统文化，传播人文社科自然各类知识，每期讲座都会通过微信公众平台提前通知，与大众广结善缘。</p><p><br/></p>','original','','','admin','admin','','2018-04-25 16:59:00','2018-04-25 16:59:40','normal','article','0','4','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('18','2013年9月15日佛学讲座预告','','','','','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">2013年9月15日，周日下午2点至4点在本寺般若讲堂举行福慧双修日佛学讲座。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">主讲法师：上海佛学院 印文法师<br/>开示题目：三皈依的意义</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 12px; line-height: 28px; white-space: normal; background-color: rgb(255, 255, 255);\">特此通告！</p><p><br/></p>','original','','','admin','admin','','2018-04-25 17:01:00','2018-04-25 17:01:23','normal','article','0','4','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_blacklist`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_blacklist` (
  `type` varchar(30) NOT NULL,
  `identity` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `expiredDate` datetime NOT NULL,
  `addedDate` datetime NOT NULL,
  `times` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  UNIQUE KEY `identity` (`type`,`identity`,`lang`),
  KEY `expiredDate` (`expiredDate`),
  KEY `addedDate` (`addedDate`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_block`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_block` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `originID` smallint(5) unsigned NOT NULL DEFAULT '0',
  `effectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `template` varchar(30) NOT NULL DEFAULT 'default',
  `type` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `type` (`type`),
  KEY `template` (`template`)
) ENGINE=MyISAM AUTO_INCREMENT=236 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_block`(`id`,`originID`,`effectID`,`template`,`type`,`title`,`content`,`lang`) VALUES('1','0','0','default','latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-cn'),('2','0','0','default','hotArticle','热门文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-cn'),('3','0','0','default','latestProduct','最新产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-cn'),('4','0','0','default','hotProduct','热门产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-cn'),('5','0','0','default','slide','幻灯片','{\"group\":\"15\"}','zh-cn'),('6','0','0','default','articleTree','文章分类','{\"icon\":\"icon-folder-close\",\"showChildren\":\"1\",\"initialExpand\":\"0\",\"fromCurrent\":\"0\",\"custom\":{\"default\":{\"iconColor\":\"\",\"borderColor\":\"\",\"titleColor\":\"\",\"titleBackground\":\"\",\"textColor\":\"\",\"linkColor\":\"\",\"backgroundColor\":\"\",\"css\":\"#blockID\\n{\\n  \\/*.panel-heading {}*\\/\\n  \\/*.panel-body    {}*\\/\\n}\",\"js\":\"\"}},\"class\":\"\",\"customImage\":null,\"topLeftContent\":\"\",\"topRightContent\":\"\"}','zh-cn'),('7','0','0','default','productTree','产品分类','{\"showChildren\":\"0\"}','zh-cn'),('8','0','0','default','blogTree','博客分类','{\"showChildren\":\"1\"}','zh-cn'),('9','0','0','default','pageList','单页列表','{\"limit\":\"7\"}','zh-cn'),('10','0','0','default','contact','联系我们','','zh-cn'),('11','0','0','default','about','公司简介','','zh-cn'),('12','0','0','default','links','友情链接','','zh-cn'),('13','0','0','default','header','网站头部','','zh-cn'),('14','0','0','default','followUs','关注我们','','zh-cn'),('15','0','0','default','subscribe','订阅博客','','zh-cn'),('21','0','0','mobile','latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-cn'),('22','0','0','mobile','hotArticle','热门文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-cn'),('23','0','0','mobile','latestProduct','最新产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-cn'),('24','0','0','mobile','hotProduct','热门产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-cn'),('25','0','0','mobile','slide','手机版幻灯片','','zh-cn'),('26','0','0','mobile','articleTree','文章分类','{\"showChildren\":\"0\"}','zh-cn'),('27','0','0','mobile','productTree','产品分类','{\"showChildren\":\"0\"}','zh-cn'),('28','0','0','mobile','blogTree','博客分类','{\"showChildren\":\"1\"}','zh-cn'),('29','0','0','mobile','pageList','单页列表','{\"limit\":\"7\"}','zh-cn'),('30','0','0','mobile','contact','联系我们','','zh-cn'),('31','0','0','mobile','about','公司简介','','zh-cn'),('32','0','0','mobile','links','友情链接','','zh-cn'),('33','0','0','mobile','followUs','关注我们','','zh-cn'),('34','0','0','mobile','subscribe','订阅博客','','zh-cn'),('35','0','0','mobile','header','网站头部','','zh-cn'),('101','0','0','default','latestArticle','Latest Article','{\"category\":\"0\",\"limit\":\"7\"}','en'),('102','0','0','default','hotArticle','Hot Article','{\"category\":\"0\",\"limit\":\"7\"}','en'),('103','0','0','default','latestProduct','Latest Product','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','en'),('104','0','0','default','hotProduct','Hot Product','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','en'),('105','0','0','default','slide','Slide','{\"group\":\"15\"}','en'),('106','0','0','default','articleTree','Article Category','{\"showChildren\":\"0\"}','en'),('107','0','0','default','productTree','Product Category','{\"showChildren\":\"0\"}','en'),('108','0','0','default','blogTree','Blog Category','{\"showChildren\":\"1\"}','en'),('109','0','0','default','pageList','Page List','{\"limit\":\"7\"}','en'),('110','0','0','default','contact','Contact Us','','en'),('111','0','0','default','about','About Us','','en'),('112','0','0','default','links','Link','','en'),('113','0','0','default','header','Header','','en'),('114','0','0','default','followUs','Follow Us','','en'),('115','0','0','default','subscribe','Subscribe','','en'),('121','0','0','mobile','latestArticle','Latest Article','{\"category\":\"0\",\"limit\":\"7\"}','en'),('122','0','0','mobile','hotArticle','Hot Article','{\"category\":\"0\",\"limit\":\"7\"}','en'),('123','0','0','mobile','latestProduct','Latest Product','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','en'),('124','0','0','mobile','hotProduct','Hot Product','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','en'),('125','0','0','mobile','slide','Mobile Slide','','en'),('126','0','0','mobile','articleTree','Article Category','{\"showChildren\":\"0\"}','en'),('127','0','0','mobile','productTree','Product Category','{\"showChildren\":\"0\"}','en'),('128','0','0','mobile','blogTree','Blog Category','{\"showChildren\":\"1\"}','en'),('129','0','0','mobile','pageList','Page List','{\"limit\":\"7\"}','en'),('130','0','0','mobile','contact','Contact Us','','en'),('131','0','0','mobile','about','About Us','','en'),('132','0','0','mobile','links','Link','','en'),('133','0','0','mobile','followUs','Follow Us','','en'),('134','0','0','mobile','subscribe','Subscribe','','en'),('135','0','0','mobile','header','Header','','en'),('201','0','0','default','latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-tw'),('202','0','0','default','hotArticle','熱門文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-tw'),('203','0','0','default','latestProduct','最新產品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-tw'),('204','0','0','default','hotProduct','熱門產品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-tw'),('205','0','0','default','slide','幻燈片','{\"group\":\"15\"}','zh-tw'),('206','0','0','default','articleTree','文章分類','{\"showChildren\":\"0\"}','zh-tw'),('207','0','0','default','productTree','產品分類','{\"showChildren\":\"0\"}','zh-tw'),('208','0','0','default','blogTree','博客分類','{\"showChildren\":\"1\"}','zh-tw'),('209','0','0','default','pageList','單頁列表','{\"limit\":\"7\"}','zh-tw'),('210','0','0','default','contact','聯繫我們','','zh-tw'),('211','0','0','default','about','公司簡介','','zh-tw'),('212','0','0','default','links','友情鏈接','','zh-tw'),('213','0','0','default','header','網站頭部','','zh-tw'),('214','0','0','default','followUs','關注我們','','zh-tw'),('215','0','0','default','subscribe','訂閱博客','','zh-tw'),('221','0','0','mobile','latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-tw'),('222','0','0','mobile','hotArticle','熱門文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-tw'),('223','0','0','mobile','latestProduct','最新產品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-tw'),('224','0','0','mobile','hotProduct','熱門產品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-tw'),('225','0','0','mobile','slide','手機版幻燈片','','zh-tw'),('226','0','0','mobile','articleTree','文章分類','{\"showChildren\":\"0\"}','zh-tw'),('227','0','0','mobile','productTree','產品分類','{\"showChildren\":\"0\"}','zh-tw'),('228','0','0','mobile','blogTree','博客分類','{\"showChildren\":\"1\"}','zh-tw'),('229','0','0','mobile','pageList','單頁列表','{\"limit\":\"7\"}','zh-tw'),('230','0','0','mobile','contact','聯繫我們','','zh-tw'),('231','0','0','mobile','about','公司簡介','','zh-tw'),('232','0','0','mobile','links','友情鏈接','','zh-tw'),('233','0','0','mobile','followUs','關注我們','','zh-tw'),('234','0','0','mobile','subscribe','訂閱博客','','zh-tw'),('235','0','0','mobile','header','網站頭部','','zh-tw');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_book`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_book` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `articleID` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `type` enum('book','chapter','article') NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `lang` (`lang`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `status` (`status`),
  KEY `addedDate` (`addedDate`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_book`(`id`,`articleID`,`title`,`alias`,`keywords`,`summary`,`content`,`type`,`parent`,`path`,`grade`,`author`,`editor`,`addedDate`,`editedDate`,`status`,`views`,`order`,`link`,`lang`) VALUES('1','0','常见问题','faq','','在使用蝉知企业门户系统的过程中，遇到的常见问题解答。','','book','0',',1,','1','admin','demo','2014-08-25 14:00:07','2014-08-26 11:42:41','normal','0','1','','zh-cn'),('2','0','常见问题','','','','<span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">1、蝉知密码加密逻辑是什么？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">md5(md5(password).aacount))</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">2、重装蝉知系统怎么操作？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">config/my.php把install设成false。或者把config/my.php删掉，重新安装就可以了。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">3、蝉知代码修改过，升级会不会导致冲突，原先的设置会改动掉吗？</span></span><br /><p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>用我们的扩展体系的话代码不会覆盖。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>最起码可以保证修改的代码和主干代码从文件存储上隔离的，不会造成代码被覆盖。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>功能可能会有冲突，适当做一些调整就可以了。</span></p>
<br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">4、蝉知安装跳过设置管理员密码步骤的问题。</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">找下安装时的错误日志，估计是php的session设置有问题。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">具体可参照：<a href=\"http://www.chanzhi.org/thread/177.html\">http://www.chanzhi.org/thread/177.html</a></span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">5、如何配置服务器使用静态url功能?</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">首先服务器要支持url重写。如果服务器支持把system/config/my.php里面的get改成PATH_INFO（大写）</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">具体可参照：<a href=\"http://www.chanzhi.org/book/chanzhieps/62.html\">http://www.chanzhi.org/book/chanzhieps/62.html</a></span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">6、已经配置静态url，为什么不能实现收录？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">百度有沙盒期，长的有一个月。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">7、蝉知后台的管理员密码忘了怎么办？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">从前台注册一个账号，把数据库admin字段改成super。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">8、本机上调试好网站和数据库上传服务器，域名和数据库配置在哪里改？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">在config/my.php修改。另外不建议本地搭建再上传，环境不一致可能会产生一些问题，直接线上安装最保险。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">9、如何做代码调试，查找错误？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">把config/my.php里面的debug可以设为2。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">或者在tmp/log/ 当天的日志里查找。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">10、云蝉知注册/解析了域名，怎么找不到了？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">如果一个月域名没解析的话，后台会自动删除域名。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">或者是域名解析不成功，推荐使用DNSPOD解析。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">11、文章分类不想按照最新排列，文章排序置顶如何设置？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">文章是按照发布时间排列的，直接编辑发布时间就可以实现。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">12、类目描述不超过150个字，这个怎么修改？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">修改eps_category表里面的desc字段。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">13、论坛设置了版块，为什么前台没有显示？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">论坛版块需要设置两级版块才能正常显示。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">14、统计代码要怎么加到网站？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">可以参照：<a href=\"http://www.chanzhi.org/book/chanzhieps/83.html\">http://www.chanzhi.org/book/chanzhieps/83.html</a></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">营销QQ，百度统计、地图等都可参考统计代码的添加方法。位置都可以通过css或者js控制。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">15、如何通过区块用css控制云蝉知站点样式?</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">可以参照：<a href=\"http://www.chanzhi.org/thread/99.html\">http://www.chanzhi.org/thread/99.html</a></span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">16、如何去掉底部蝉知链接?</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">一个域名需要360元的授权费用。建议大家保留。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">具体可阅读蝉知的授权协议：<a href=\"http://www.chanzhi.org/book/chanzhieps/58_license.html\">http://www.chanzhi.org/book/chanzhieps/58_license.html</a></span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">17、如何设置背景照片？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">自定义源代码区块，用css调试。上传的图片，可以通过查看源代码看到地址。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">18、蝉知有没有站内搜索功能？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">目前暂时没有这个功能，已计划开发。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">19、怎么添加更多的后台管理员，并设置相关权限？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">前台注册会员，后台会员里设置成管理员。管理员权限目前不能自定义，后期将会完善此功能。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">20、怎么删除蝉知会员。</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">蝉知暂时没有删除会员功能，在后台会员永久禁用就可以了。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">21、网址里面含有中文，微信解析不了？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">微信接口不支持中文地址，最好不要使用中文别名。集成微信功能必须使用系统80端口安装蝉知。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">22、蝉知支持多语言吗？</span></span><br /><p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>蝉知系统本身支持多语言，可在站点设置里设置系统前台使用的语言（简体、繁体、English）。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>蝉知的后台编辑页面也可直接进行语言设置。</span></p>
<span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">目前蝉知不支持内容级的多语言。需要搭建多语言网站，建议搭建多个站点。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">23、蝉知有数据导入功能吗？</span></span><br /><p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>目前没有这个功能。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>如果数据格式和蝉知的不一样，建议先线下写个转换程序，转换成蝉知数据库，自己找个空间托管。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>或者联系我们导入线上（我们会收取一定的费用）。</span></p>
<br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">24、蝉知有没有备份功能？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">蝉知没有直接备份功能。附件复制就可以，数据库自己备份就行。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">可参照：<a href=\"http://www.chanzhi.org/book/chanzhieps/63.html\">http://www.chanzhi.org/book/chanzhieps/63.html</a></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">云蝉知提供下载备份服务。</span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">25、登录蝉知后台，频繁提示退出登录。</span></span><br /><p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>蝉知后台有防超时功能每6分钟刷新一次。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>对session登录ip地址安全检查，IP变换，已登录帐号会退出登录。</span></p>
<p style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;background-color:#FFFFFF;\"><span>system/common/model.php的startSession里面可以去掉这个检查。</span></p>
<br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">26、列表页面每页显示条目数怎么由现在默认的5条改成10条？</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">这个需要自己改代码，建议先看看我们的开发框架文档再修改。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">如果需要修改的是文章列表页面的，在article/config.php里修改。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">蝉知开发框架：<a href=\"http://devel.cnezsoft.com/\">http://devel.cnezsoft.com/</a></span><br /><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\"><span style=\"font-weight:700;\">27、关于添加最新产品区块前台显示空白的问题。</span></span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">在后台添加了最新产品区块，需要到布局设置里添加最新产品的位置和显示宽度，前台才可以显示。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">最新产品区块如果想同时显示图片和内容的话，需要在最新产品区块编辑页面勾选显示图片，产品附件上传图片。</span><br /><span style=\"color:#333333;font-family:\'Helvetica Neue\', Helvetica, Tahoma, Arial, sans-serif;line-height:22px;background-color:#FFFFFF;\">如果想像文章那样直接是文字显示，直接在最新产品区块编辑页面不勾选显示图片，这样产品也不需要上传图片。</span><br />','article','1',',1,2,','2','admin','demo','2014-08-25 14:00:44','2014-08-26 11:43:13','normal','18','2','','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_cart`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_cart` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `product` (`product`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_category`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `abbr` varchar(60) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `readonly` enum('0','1') NOT NULL DEFAULT '0',
  `moderators` varchar(255) NOT NULL,
  `threads` smallint(5) NOT NULL,
  `posts` smallint(5) NOT NULL,
  `postedBy` varchar(30) NOT NULL,
  `postedDate` datetime NOT NULL,
  `postID` mediumint(9) NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  `unsaleable` enum('0','1') NOT NULL DEFAULT '0',
  `discussion` enum('0','1') NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  `number` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `tree` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`),
  KEY `grade` (`grade`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_category`(`id`,`name`,`abbr`,`alias`,`desc`,`keywords`,`parent`,`path`,`grade`,`order`,`type`,`readonly`,`moderators`,`threads`,`posts`,`postedBy`,`postedDate`,`postID`,`replyID`,`link`,`unsaleable`,`discussion`,`lang`,`number`) VALUES('1','蝉知下载','','download','','','0',',1,','1','10','article','0','','0','0','','2014-08-25 13:56:40','0','0','','0','0','zh-cn','0'),('2','蝉知动态','','dynamic','','','0',',2,','1','20','article','0','','0','0','','2014-08-25 13:56:40','0','0','','0','0','zh-cn','0'),('3','商业支持','','','','','0',',3,','1','30','article','0','','0','0','','2014-08-25 13:56:40','0','0','','0','0','zh-cn','0'),('4','蝉知','','','','','0',',4,','1','10','forum','0','','0','0','','2014-08-25 14:19:26','0','0','','0','0','zh-cn','0'),('5','建议反馈','','feedback','有关蝉知企业门户系统的建议和反馈。','蝉知企业门户系统,蝉知企业建站系统,开源cms','4',',4,5,','2','10','forum','0','','1','1','demo','2014-09-02 18:27:35','1','0','','0','0','zh-cn','0'),('6','技术支持','','support','蝉知企业门户系统技术支持版块。','蝉知企业门户系统,蝉知建站系统,cms,开源cms,免费cms','4',',4,6,','2','20','forum','0','','0','0','','2014-08-25 14:20:01','0','0','','0','0','zh-cn','0'),('7','蝉知','','','','','0',',7,','1','10','product','0','','0','0','','2014-08-25 14:29:49','0','0','','0','0','zh-cn','0'),('8','12123','','','','','0',',8,','1','10','wechat_1','0','','0','0','','2014-10-08 17:09:23','0','0','','0','0','zh-cn','0'),('11','知识改进','','','','','0',',11,','1','40','article','0','','0','0','','2014-10-08 17:42:37','0','0','','0','0','zh-cn','0'),('10','12312','','','','','0',',10,','1','30','wechat_1','0','','0','0','','2014-10-08 17:09:23','0','0','','0','0','zh-cn','0'),('12','一二三','','','','','11',',11,12,','2','10','article','0','','0','0','','2014-10-08 17:43:03','0','0','','0','0','zh-cn','0'),('13','四五六','','','','','11',',11,13,','2','20','article','0','','0','0','','2014-10-08 17:43:03','0','0','','0','0','zh-cn','0'),('14','七八九','','','','','11',',11,14,','2','30','article','0','','0','0','','2014-10-08 17:43:03','0','0','','0','0','zh-cn','0'),('15','默认分组','','','','','0',',15,','1','10','slide','0','','0','0','','2015-07-16 15:23:56','0','0','','0','0','zh-cn','0'),('16','佛学知识','','knowledge','','','0',',16,','1','50','article','0','','0','0','','2018-04-24 15:42:07','0','0','','0','0','zh-cn','0'),('17','法会系统','','ceremony','','','0',',17,','1','60','article','0','','0','0','','2018-04-24 15:43:51','0','0','','0','0','zh-cn','0'),('18','新闻系统','','news','','','0',',18,','1','70','article','0','','0','0','','2018-04-24 15:43:51','0','0','','0','0','zh-cn','0'),('19','佛教宗派','','','','','16',',16,19,','2','10','article','0','','0','0','','2018-04-24 15:45:17','0','0','','0','0','zh-cn','0'),('20','教理教义','','','','','16',',16,20,','2','20','article','0','','0','0','','2018-04-24 15:45:17','0','0','','0','0','zh-cn','0'),('21','佛教节日','','','','','16',',16,21,','2','30','article','0','','0','0','','2018-04-24 15:45:17','0','0','','0','0','zh-cn','0'),('22','佛教音乐','','','','','16',',16,22,','2','40','article','0','','0','0','','2018-04-24 15:45:17','0','0','','0','0','zh-cn','0'),('23','法会介绍','','','','','17',',17,23,','2','10','article','0','','0','0','','2018-04-24 15:47:11','0','0','','0','0','zh-cn','0'),('24','法会安排','','','','','17',',17,24,','2','20','article','0','','0','0','','2018-04-24 15:47:11','0','0','','0','0','zh-cn','0'),('25','光明灯','','light','','','0',',25,','1','20','product','0','','0','0','','2018-04-24 15:59:47','0','0','','0','0','zh-cn','0'),('26','法会预知','','','','','18',',18,26,','2','10','article','0','','0','0','','2018-04-25 16:58:55','0','0','','0','0','zh-cn','0'),('27','公告消息','','','','','18',',18,27,','2','20','article','0','','0','0','','2018-04-25 16:58:55','0','0','','0','0','zh-cn','0'),('28','寺院新闻','','','','','18',',18,28,','2','30','article','0','','0','0','','2018-04-25 16:58:55','0','0','','0','0','zh-cn','0');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_config`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(50) DEFAULT NULL,
  `value` text NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`,`lang`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM AUTO_INCREMENT=734 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_config`(`id`,`owner`,`module`,`section`,`key`,`value`,`lang`) VALUES('1','system','common','template','parser','raintpl','zh-cn'),('2','system','common','template','parser','raintpl','zh-tw'),('3','system','common','template','parser','raintpl','en'),('351','system','common','site','lang','zh-cn','zh-cn'),('460','system','common','site','type','portal','zh-cn'),('461','system','common','site','name','蝉知企业门户','zh-cn'),('465','system','common','site','modules','user,article,product,page,forum,blog,book,message,search,shop','zh-cn'),('466','system','common','site','copyright','2013','zh-cn'),('467','system','common','site','keywords','企业门户系统 企业建站系统 开源CMS','zh-cn'),('468','system','common','site','indexKeywords','企业门户系统 企业建站系统 开源CMS','zh-cn'),('469','system','common','site','slogan','为天下企业提供专业的营销工具！','zh-cn'),('471','system','common','site','desc','蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！','zh-cn'),('472','system','common','site','icpSN','','zh-cn'),('473','system','common','site','icpLink','http://www.miitbeian.gov.cn','zh-cn'),('450','system','common','nav','desktop_top','[{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"home\",\"title\":\"\\u9996\\u9875\",\"url\":\"\\/\",\"key\":\"0\",\"target\":\"\",\"class\":\"nav-system-home\",\"children\":[]},{\"type\":\"article\",\"article\":\"2\",\"product\":\"0\",\"page\":\"2\",\"system\":\"home\",\"title\":\"\\u52a8\\u6001\",\"url\":\"\\/dynamic.html\",\"key\":\"1\",\"target\":\"\",\"class\":\"nav-article-2\",\"children\":[]},{\"type\":\"product\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"home\",\"title\":\"\\u4ea7\\u54c1\\u5217\\u8868\",\"url\":\"\\/product\\/\",\"key\":\"2\",\"target\":\"\",\"class\":\"nav-product-0\",\"children\":[]},{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"home\",\"title\":\"\\u63a8\\u8350\\u7a7a\\u95f4\",\"url\":\"\\/page\\/host.html\",\"key\":\"3\",\"target\":\"\",\"class\":\"nav-page-2\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"forum\",\"title\":\"\\u8bba\\u575b\",\"url\":\"\\/forum\\/\",\"key\":\"4\",\"target\":\"\",\"class\":\"nav-system-forum\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"book\",\"title\":\"\\u624b\\u518c\",\"url\":\"\\/book\\/\",\"key\":\"5\",\"target\":\"\",\"class\":\"nav-system-book\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"message\",\"title\":\"\\u7559\\u8a00\",\"url\":\"\\/message\\/\",\"key\":\"6\",\"target\":\"\",\"class\":\"nav-system-message\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"system\":\"company\",\"title\":\"\\u5173\\u4e8e\\u6211\\u4eec\",\"url\":\"\\/company\\/\",\"key\":\"7\",\"target\":\"\",\"class\":\"nav-system-company\",\"children\":[]}]','zh-cn'),('451','system','common','nav','mobile_top','[{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"system\":\"home\",\"title\":\"\\u9996\\u9875\",\"url\":\"\\/\",\"key\":\"0\",\"target\":\"\",\"class\":\"nav-system-home\",\"children\":[]},{\"type\":\"product\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"system\":\"home\",\"title\":\"\\u4ea7\\u54c1\\u5217\\u8868\",\"url\":\"\",\"key\":\"1\",\"target\":\"\",\"class\":\"nav-product-0\",\"children\":[]},{\"type\":\"article\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"system\":\"home\",\"title\":\"\\u52a8\\u6001\",\"url\":\"\",\"key\":\"2\",\"target\":\"\",\"class\":\"nav-article-0\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"system\":\"message\",\"title\":\"\\u7559\\u8a00\",\"url\":\"\",\"key\":\"3\",\"target\":\"\",\"class\":\"nav-system-message\",\"children\":[]}]','zh-cn'),('26','system','common','links','index','<a href=\"http://www.cnezsoft.com\" target=\"_blank\">青岛易软天创</a><a href=\"http://www.zentao.net\" target=\"_blank\"> 禅道项目管理软件</a> <a href=\"http://www.ranzhi.org/\" target=\"_blank\">然之协同</a><a href=\"http://www.docker.org.cn\" target=\"_blank\">docker中文社区</a>','zh-cn'),('27','system','common','links','all','','zh-cn'),('28','system','common','links','uid','53facf42f2e81','zh-cn'),('478','system','common','company','name','青岛息壤网络信息有限公司','zh-cn'),('479','system','common','company','desc','<p>青岛息壤由<a href=\"http://www.cnezsoft.com\">青岛易软天创</a>全资成立，公司位于美丽的青岛开发区，团队有着丰富的研发经验。</p>
<p>我们正在打造一款开源免费的企业建站系统，开源cms系统，以帮助企业建立品牌网站，进行宣传推广、市场营销、产品销售和客户跟踪。</p>
<p><span>蝉知功能完备：内置了文章、会员、论坛、博客、手册等功能，更多功能全力开发中；</span><span>注重SEO，语义化， 关键词、内链，助您提高搜索排名；</span><span>统计分析，让数据说话，随时掌握网站流量和销售动态。</span><span></span></p>
<p>我们崇尚简单和信任，以为天下企业提供专业的管理工具为使命！开源开放，共创共赢！</p>','zh-cn'),('480','system','common','company','content','<h4>关于青岛息壤网络信息有限公司</h4>
<p>青岛息壤网络信息有限公司由<a href=\"http://www.cnezsoft.com\">青岛易软天创</a>网络科技有限公司全资成立，位于美丽的青岛开发区，团队成员拥有丰富的网站设计、系统研发、服务器维护和SEO经验。我们正在打造一款开源免费的企业门户系统，以帮助企业建立品牌网站，进行宣传推广、市场营销、产品销售和客户跟踪。<span style=\"color:#E53333;\">为天下企业提供专业的营销工具！</span> </p>
<h4>关于蝉知企业门户系统(chanzhiEPS)</h4>
<p>蝉知门户系统（changezhiEPS）是一款开源免费的企业门户系统，专为企业营销设计！</p>
<h4><strong>为什么</strong><strong>来</strong><strong>做</strong><strong>蝉知？</strong> </h4>
<p>禅
道团队开发的禅道项目管理软件主要是解决企业内部研发的问题。在我们和客户接触的时候，发现企业现在对外营销的问题解决得非常不好。现在的企业网站大都是
使用cms系统修改而来，各地大大小小的建站公司做的网站，实在不敢恭维。很多号称开源的cms系统也都严格限制商用，所以我们就有了做一个开源的企业门
户系统的想法，于是就有了息壤这个团队，有了蝉知这个产品。</p>
<h4><strong>为什么</strong><strong>叫做</strong><strong>蝉知？</strong><strong><br />
</strong></h4>
<p><strong> </strong> </p>
<p>蝉
在中国传统文化中象征着闻达和财富，非常适合企业宣传营销的特点，所以我们为这套系统起名为蝉知，我们希望通过这款开源免费的系统可以帮助众多的中小企业
快速方面的建立自己的企业网站，进行宣传营销。更重要的是蝉知是开放的，企业做大之后，可以在蝉知基础上继续扩展开发，不会成为您的瓶颈！</p>
<h4><strong>蝉知的特点：</strong> </h4>
<p>和市面上其他的各种各样的cms相比，息壤系统具有如下特点：</p>
<ol><li><strong>专注企业营销!</strong><br />
功能完备，文章、会员、论坛，更多功能全力开发中;<br />
注重SEO，语义化， 关键词、内链，助您提高搜索排名;<br />
统计分析，让数据说话，随时掌握网站流量和销售动态。<br />
<br />
</li>
<li><strong>真开源真免费!</strong><br />
国内唯一开源企业门户系统;<br />
以LGPL协议发布，代码完全开放;<br />
免费下载，免费使用，不限制商用！<br />
<br />
</li>
<li><strong>技术先进体验好!</strong><br />
底层框架自主开发，结构先进灵活；<br />
内置扩展机制，方便企业定制开发；<br />
汲取先进设计理念，注重用户体验！<br />
<br />
</li>
<li><strong>使用放心有保障!</strong><br />
我们是专职在做开源软件；<br />
我们有多年的开源和支持经验；<br />
做营销，用息壤，靠谱！</li>
</ol>
<h4>获得支持：</h4>
<p>您可以通过如下方式获得技术支持：<br />
QQ群：284891062 <span style=\"color:#E53333;\">加群请注明暗号：蝉知，进群之后请修改自己的名片，城市-公司-昵称，都可以用缩写。<br />
</span>论坛：<a href=\"http://www.chanzhi.org/forum\">http://www.chanzhi.org/forum/</a> </p>','zh-cn'),('481','system','common','company','setDate','2015-07-03 13:33:14','zh-cn'),('147','system','common','company','contact','{\"contacts\":\"\\u5f90\\u8d3a\",\"phone\":\"0532-84462898\",\"fax\":\"\",\"email\":\"co@chanzhi.org\",\"qq\":\"2692096539\",\"weixin\":\"chinaeasysoft\",\"weibo\":\"easysoft\",\"wangwang\":\"\",\"site\":\"\",\"address\":\"\\u9752\\u5c9b\\u5f00\\u53d1\\u533a\\u4e95\\u5188\\u5c71\\u8def\\u4e1c\\u65b9\\u94f6\\u5ea7 C\\u5ea7 1106\"}','zh-cn'),('486','system','common','site','lastUpload','1437032740','zh-cn'),('464','system','common','site','scheme','http','zh-cn'),('412','system','common','template','name','default','zh-cn'),('413','system','common','template','theme','default','zh-cn'),('415','system','common','template','customTheme','default','zh-cn'),('396','system','common','global','ignoreUpgrade','0','zh-cn'),('155','system','common','site','allowUpload','1','zh-cn'),('639','system','common','template','custom','{\"default\":{\"flat\":{\"background-color\":\"transparent\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"tartan\":{\"background-color\":\"#D0FFFD\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"default\":{\"color-primary\":\"#3280FC\",\"border-radius\":\"3px\",\"background-color\":\"transparent\",\"background-image\":\"none\",\"background-image-repeat\":\"repeat\",\"background-image-position\":\"0 0\",\"text-color\":\"#333\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"#0D3D88\",\"link-decoration\":\"none\",\"link-visited-color\":\"#0D3D88\",\"link-hover-color\":\"#347AEB\",\"link-hover-decoration\":\"none\",\"sideFloat\":\"left\",\"sideGrid\":\"3\",\"navbar-table-layout\":\"true\",\"navbar-backcolor\":\"#f1f1f1\",\"navbar-background-image\":\"none\",\"navbar-background-image-repeat\":\"repeat\",\"navbar-background-image-position\":\"0 0\",\"navbar-border-style\":\"solid\",\"navbar-border-color\":\"#D5D5D5\",\"navbar-border-width\":\"1px\",\"navbar-border-radius\":\"4px\",\"navbar-panel-backcolor\":\"#FFF\",\"navbar-panel-border-style\":\"solid\",\"navbar-panel-border-color\":\"#DDD\",\"navbar-panel-border-width\":\"1px\",\"navbar-paenl-border-radius\":\"3px\",\"navbar-menu-color\":\"#555\",\"navbar-menu-font-size\":\"14px\",\"navbar-menu-font-family\":\"inherit\",\"navbar-menu-font-weight\":\"bold\",\"navbar-menu-color-hover\":\"#000\",\"navbar-menu-backcolor-hover\":\"#FEFEFE\",\"navbar-menu-color-active\":\"#151515\",\"navbar-menu-backcolor-active\":\"#FFF\",\"navbar-submenu-color\":\"#333\",\"navbar-submenu-color-hover\":\"#151515\",\"navbar-submenu-backcolor-hover\":\"#E5E5E5\",\"navbar-submenu-color-active\":\"#151515\",\"navbar-submenu-backcolor-active\":\"#E5E5E5\",\"block-border-style\":\"solid\",\"block-border-color\":\"#DDD\",\"block-border-width\":\"1px\",\"block-border-radius\":\"3px\",\"block-heading-backcolor\":\"#F5F5F5\",\"block-heading-color\":\"#333\",\"block-heading-font-size\":\"inherit\",\"block-heading-font-weight\":\"inherit\",\"block-body-backcolor\":\"transparent\",\"block-body-color\":\"#333\",\"block-body-link-color\":\"#0D3D88\",\"button-color-default\":\"#F2F2F2\",\"button-color-primary\":\"#3280FC\",\"button-color-info\":\"#39B3D7\",\"button-color-success\":\"#229F24\",\"button-color-warning\":\"#E48600\",\"button-color-danger\":\"#D2322D\",\"button-border-style\":\"solid\",\"button-border-width\":\"1px\",\"button-border-radius\":\"3px\",\"button-font-weight\":\"normal\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"#ddd\",\"footer-backcolor\":\"#f7f7f7\",\"header-backcolor\":\"#FFF\",\"header-height\":\"30px\",\"header-top-padding\":\"0\",\"header-bottom-padding\":\"0\",\"header-left-padding\":\"0\",\"header-right-padding\":\"0\",\"header-border-color\":\"#ddd\",\"header-border-radius\":\"0\",\"header-text-font-size\":\"16px\",\"header-text-color\":\"#333\",\"header-text-link-color\":\"#0D3D88\",\"header-text-link-font-size\":\"13px\"},\"wide\":{\"color-primary\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\"},\"colorful\":{\"color-primary\":\"\",\"border-radius\":\"3\",\"background-color\":\"\",\"background-image\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"\\u5b8b\\u4f53\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"\",\"footer-backcolor\":\"#2286D2\"}}}','zh-cn'),('640','system','common','template','customVersion','1524647205','zh-cn'),('410','system','common','shop','payment','alipay,COD','zh-cn'),('411','system','common','shop','confirmLimit','7','zh-cn'),('488','system','common','site','lang','zh-cn','all'),('420','system','common','site','defaultLang','zh-cn','all'),('458','system','common','site','status','normal','zh-cn'),('459','system','common','site','pauseTip','站点维护中……','zh-cn'),('462','system','common','site','domain','','zh-cn'),('463','system','common','site','allowedDomain','','zh-cn'),('470','system','common','site','meta','','zh-cn'),('438','system','common','site','uid','554d6de00a0b7','zh-cn'),('487','system','common','global','version','7.0.1','all'),('489','admin','common','site','widgetInited','1','zh-cn'),('733','system','common','site','updatedTime','1524909255','all'),('491','system','common','wechatPublic','hasPublic','0','zh-cn'),('528','system','common','cdn','open','open','zh-cn'),('529','system','common','cdn','site','http://cdn.chanzhi.org/7.0.1/','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_down`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_down` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` char(30) DEFAULT NULL,
  `file` mediumint(5) DEFAULT NULL,
  `ip` char(40) NOT NULL,
  `time` datetime NOT NULL,
  `referer` varchar(200) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `fileID` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_file`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(200) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `objectType` char(20) NOT NULL,
  `objectID` char(50) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `public` enum('1','0') NOT NULL DEFAULT '1',
  `score` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  `editor` enum('1','0') NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `pathname` (`pathname`),
  KEY `object` (`objectType`,`objectID`),
  KEY `extension` (`extension`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_group`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `role` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_group`(`id`,`name`,`role`,`desc`,`lang`) VALUES('1','管理员','','拥有后台所有权限','zh-cn'),('2','网站编辑','','拥有发布以及编辑权限','zh-cn'),('3','客服','','管理论坛留言评论的权限','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_grouppriv`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_grouppriv` (
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` char(30) NOT NULL DEFAULT '',
  `method` char(30) NOT NULL DEFAULT '',
  `lang` char(30) NOT NULL,
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_grouppriv`(`group`,`module`,`method`,`lang`) VALUES('1','admin','ignore','zh-cn'),('1','admin','ignoreupgrade','zh-cn'),('1','article','admin','zh-cn'),('1','article','create','zh-cn'),('1','article','edit','zh-cn'),('1','article','delete','zh-cn'),('1','article','forward2Forum','zh-cn'),('1','article','forward2Blog','zh-cn'),('1','article','check','zh-cn'),('1','article','reject','zh-cn'),('1','article','setcss','zh-cn'),('1','article','setjs','zh-cn'),('1','article','stick','zh-cn'),('1','product','admin','zh-cn'),('1','product','create','zh-cn'),('1','product','edit','zh-cn'),('1','product','changeStatus','zh-cn'),('1','product','currency','zh-cn'),('1','product','delete','zh-cn'),('1','product','setcss','zh-cn'),('1','product','setjs','zh-cn'),('1','product','setting','zh-cn'),('1','book','admin','zh-cn'),('1','book','catalog','zh-cn'),('1','book','create','zh-cn'),('1','book','edit','zh-cn'),('1','book','sort','zh-cn'),('1','book','delete','zh-cn'),('1','forum','admin','zh-cn'),('1','forum','update','zh-cn'),('1','reply','admin','zh-cn'),('1','reply','edit','zh-cn'),('1','reply','delete','zh-cn'),('1','reply','deleteFile','zh-cn'),('1','thread','transfer','zh-cn'),('1','thread','switchStatus','zh-cn'),('1','thread','delete','zh-cn'),('1','thread','deleteFile','zh-cn'),('1','site','setBasic','zh-cn'),('1','site','setLang','zh-cn'),('1','site','setRobots','zh-cn'),('1','site','setUpload','zh-cn'),('1','site','setOauth','zh-cn'),('1','site','setRecPerPage','zh-cn'),('1','site','setsecurity','zh-cn'),('1','site','setsensitive','zh-cn'),('1','nav','admin','zh-cn'),('1','tag','admin','zh-cn'),('1','tag','link','zh-cn'),('1','links','admin','zh-cn'),('1','mail','admin','zh-cn'),('1','mail','detect','zh-cn'),('1','mail','edit','zh-cn'),('1','mail','save','zh-cn'),('1','mail','test','zh-cn'),('1','mail','reset','zh-cn'),('1','wechat','admin','zh-cn'),('1','wechat','create','zh-cn'),('1','wechat','integrate','zh-cn'),('1','wechat','edit','zh-cn'),('1','wechat','delete','zh-cn'),('1','wechat','adminResponse','zh-cn'),('1','wechat','setResponse','zh-cn'),('1','wechat','deleteResponse','zh-cn'),('1','wechat','reply','zh-cn'),('1','wechat','commitMenu','zh-cn'),('1','wechat','deleteMenu','zh-cn'),('1','wechat','message','zh-cn'),('1','wechat','qrcode','zh-cn'),('1','group','browse','zh-cn'),('1','group','create','zh-cn'),('1','group','edit','zh-cn'),('1','group','copy','zh-cn'),('1','group','delete','zh-cn'),('1','group','managePriv','zh-cn'),('1','group','manageMember','zh-cn'),('1','ui','setTemplate','zh-cn'),('1','ui','setDevice','zh-cn'),('1','ui','customTheme','zh-cn'),('1','ui','setLogo','zh-cn'),('1','ui','setBaseStyle','zh-cn'),('1','ui','deleteFavicon','zh-cn'),('1','ui','deleteLogo','zh-cn'),('1','ui','others','zh-cn'),('1','ui','setCode','zh-cn'),('1','slide','admin','zh-cn'),('1','slide','create','zh-cn'),('1','slide','edit','zh-cn'),('1','slide','delete','zh-cn'),('1','slide','sort','zh-cn'),('1','slide','browse','zh-cn'),('1','slide','createGroup','zh-cn'),('1','slide','editGroup','zh-cn'),('1','slide','removeGroup','zh-cn'),('1','block','admin','zh-cn'),('1','block','pages','zh-cn'),('1','block','setregion','zh-cn'),('1','block','create','zh-cn'),('1','block','edit','zh-cn'),('1','block','delete','zh-cn'),('1','block','switchLayout','zh-cn'),('1','block','cloneLayout','zh-cn'),('1','block','removeLayout','zh-cn'),('1','block','renameLayout','zh-cn'),('1','company','setbasic','zh-cn'),('1','company','setcontact','zh-cn'),('1','user','admin','zh-cn'),('1','user','edit','zh-cn'),('1','user','forbid','zh-cn'),('1','user','adminlog','zh-cn'),('1','message','admin','zh-cn'),('1','message','reply','zh-cn'),('1','message','pass','zh-cn'),('1','message','delete','zh-cn'),('1','package','browse','zh-cn'),('1','package','obtain','zh-cn'),('1','package','install','zh-cn'),('1','package','uninstall','zh-cn'),('1','package','activate','zh-cn'),('1','package','deactivate','zh-cn'),('1','package','upload','zh-cn'),('1','package','erase','zh-cn'),('1','package','upgrade','zh-cn'),('1','package','structure','zh-cn'),('1','tree','browse','zh-cn'),('1','tree','edit','zh-cn'),('1','tree','children','zh-cn'),('1','tree','delete','zh-cn'),('1','tree','redirect','zh-cn'),('1','file','browse','zh-cn'),('1','file','setPrimary','zh-cn'),('1','file','upload','zh-cn'),('1','file','download','zh-cn'),('1','file','edit','zh-cn'),('1','file','sort','zh-cn'),('1','file','fileManager','zh-cn'),('1','file','delete','zh-cn'),('1','file','sourceBrowse','zh-cn'),('1','file','sourceDelete','zh-cn'),('1','file','editSource','zh-cn'),('1','file','selectImage','zh-cn'),('1','file','browseSource','zh-cn'),('1','search','buildIndex','zh-cn'),('1','order','admin','zh-cn'),('1','order','delivery','zh-cn'),('1','order','finish','zh-cn'),('1','order','pay','zh-cn'),('1','order','setting','zh-cn'),('1','order','deliveryInfo','zh-cn'),('1','stat','traffic','zh-cn'),('1','stat','from','zh-cn'),('1','stat','search','zh-cn'),('1','stat','client','zh-cn'),('1','stat','keywords','zh-cn'),('1','stat','keywordReport','zh-cn'),('1','stat','domainList','zh-cn'),('1','stat','domainTrend','zh-cn'),('1','stat','domainPage','zh-cn'),('1','stat','page','zh-cn'),('1','stat','ignoreKeyword','zh-cn'),('1','score','setCounts','zh-cn'),('2','file','fileManager','zh-cn'),('2','file','sort','zh-cn'),('2','file','download','zh-cn'),('2','file','edit','zh-cn'),('2','file','upload','zh-cn'),('2','file','setPrimary','zh-cn'),('2','file','browse','zh-cn'),('2','file','sourceBrowse','zh-cn'),('2','file','sourceDelete','zh-cn'),('2','file','editSource','zh-cn'),('2','file','selectImage','zh-cn'),('2','file','browseSource','zh-cn'),('2','ui','setTemplate','zh-cn'),('2','ui','setDevice','zh-cn'),('2','tag','link','zh-cn'),('2','site','setRecPerPage','zh-cn'),('2','links','admin','zh-cn'),('2','tag','admin','zh-cn'),('2','nav','admin','zh-cn'),('2','site','setLang','zh-cn'),('2','site','setBasic','zh-cn'),('2','book','delete','zh-cn'),('2','company','setbasic','zh-cn'),('2','block','delete','zh-cn'),('2','block','edit','zh-cn'),('2','block','setregion','zh-cn'),('2','block','pages','zh-cn'),('2','block','create','zh-cn'),('2','book','sort','zh-cn'),('2','book','edit','zh-cn'),('2','ui','customTheme','zh-cn'),('2','product','setcss','zh-cn'),('2','product','delete','zh-cn'),('2','ui','setLogo','zh-cn'),('2','article','admin','zh-cn'),('2','article','stick','zh-cn'),('2','article','create','zh-cn'),('2','article','delete','zh-cn'),('2','article','edit','zh-cn'),('2','article','setjs','zh-cn'),('2','article','setcss','zh-cn'),('2','article','forward2Forum','zh-cn'),('2','article','forward2Blog','zh-cn'),('2','article','check','zh-cn'),('2','article','reject','zh-cn'),('2','book','create','zh-cn'),('2','book','catalog','zh-cn'),('2','book','admin','zh-cn'),('2','product','setjs','zh-cn'),('2','tree','redirect','zh-cn'),('2','tree','browse','zh-cn'),('2','company','setcontact','zh-cn'),('2','tree','delete','zh-cn'),('2','tree','edit','zh-cn'),('2','tree','children','zh-cn'),('2','block','admin','zh-cn'),('2','slide','sort','zh-cn'),('2','product','currency','zh-cn'),('2','product','create','zh-cn'),('2','product','changeStatus','zh-cn'),('2','product','edit','zh-cn'),('2','product','admin','zh-cn'),('2','slide','delete','zh-cn'),('2','ui','deleteFavicon','zh-cn'),('2','ui','setBaseStyle','zh-cn'),('2','slide','create','zh-cn'),('2','slide','admin','zh-cn'),('2','ui','deleteLogo','zh-cn'),('2','ui','others','zh-cn'),('2','slide','edit','zh-cn'),('2','file','delete','zh-cn'),('3','message','delete','zh-cn'),('3','reply','delete','zh-cn'),('3','message','pass','zh-cn'),('3','message','reply','zh-cn'),('3','message','admin','zh-cn'),('3','thread','deleteFile','zh-cn'),('3','reply','edit','zh-cn'),('3','forum','admin','zh-cn'),('3','reply','admin','zh-cn'),('3','forum','update','zh-cn'),('3','article','admin','zh-cn'),('3','product','admin','zh-cn'),('3','book','catalog','zh-cn'),('3','book','admin','zh-cn'),('3','thread','delete','zh-cn'),('3','reply','deleteFile','zh-cn'),('3','thread','transfer','zh-cn'),('3','thread','switchStatus','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_history`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field` varchar(30) NOT NULL DEFAULT '',
  `old` text NOT NULL,
  `new` text NOT NULL,
  `diff` mediumtext NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `action` (`action`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_layout`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_layout` (
  `template` varchar(30) NOT NULL DEFAULT 'default',
  `plan` char(30) NOT NULL DEFAULT 'default',
  `page` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `object` varchar(30) NOT NULL,
  `blocks` text NOT NULL,
  `import` enum('no','doing','finished') NOT NULL DEFAULT 'no',
  `lang` char(30) NOT NULL,
  UNIQUE KEY `layout` (`template`,`plan`,`page`,`region`,`object`,`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_layout`(`template`,`plan`,`page`,`region`,`object`,`blocks`,`import`,`lang`) VALUES('default','0','all','top','','[{\"id\":\"13\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','index_index','top','','[{\"id\":\"5\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','index_index','middle','','[{\"id\":\"1\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"11\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"10\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-cn'),('default','0','index_index','bottom','','[{\"id\":\"12\",\"grid\":12,\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','company_index','side','','[{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"14\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','article_browse','side','','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','article_view','side','','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','product_browse','side','','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','product_view','side','','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','message_index','side','','[{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','blog_index','side','','[{\"id\":\"15\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','blog_view','side','','[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','page_index','side','','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','page_view','side','','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','all','top','','[{\"id\":\"113\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','index_index','top','','[{\"id\":\"105\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','index_index','middle','','[{\"id\":\"1\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"11\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"10\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','en'),('default','0','index_index','bottom','','[{\"id\":\"112\",\"grid\":12,\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','company_index','side','','[{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"114\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','article_browse','side','','[{\"id\":\"106\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','article_view','side','','[{\"id\":\"106\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','product_browse','side','','[{\"id\":\"104\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"107\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','product_view','side','','[{\"id\":\"104\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"107\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','message_index','side','','[{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','blog_index','side','','[{\"id\":\"115\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"108\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','blog_view','side','','[{\"id\":\"108\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','page_index','side','','[{\"id\":\"109\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"102\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','page_view','side','','[{\"id\":\"109\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"102\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"110\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('default','0','all','top','','[{\"id\":\"213\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','index_index','top','','[{\"id\":\"205\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','index_index','middle','','[{\"id\":\"1\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"11\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"10\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-tw'),('default','0','index_index','bottom','','[{\"id\":\"212\",\"grid\":12,\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','company_index','side','','[{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"214\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','article_browse','side','','[{\"id\":\"206\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','article_view','side','','[{\"id\":\"206\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','product_browse','side','','[{\"id\":\"204\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"207\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','product_view','side','','[{\"id\":\"204\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"207\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','message_index','side','','[{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','blog_index','side','','[{\"id\":\"215\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"208\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','blog_view','side','','[{\"id\":\"208\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','page_index','side','','[{\"id\":\"209\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"202\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('default','0','page_view','side','','[{\"id\":\"209\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"202\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"210\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('mobile','0','all','top','','[{\"id\":\"35\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('mobile','0','index_index','top','','[{\"id\":\"25\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-cn'),('mobile','0','index_index','middle','','[{\"id\":\"31\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"23\",\"grid\":\"12\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"21\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-cn'),('mobile','0','all','top','','[{\"id\":\"135\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','en'),('mobile','0','index_index','top','','[{\"id\":\"125\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','en'),('mobile','0','index_index','middle','','[{\"id\":\"131\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"123\",\"grid\":\"12\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"121\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','en'),('mobile','0','all','top','','[{\"id\":\"235\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-tw'),('mobile','0','index_index','top','','[{\"id\":\"225\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-tw'),('mobile','0','index_index','middle','','[{\"id\":\"231\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"223\",\"grid\":\"12\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"221\",\"grid\":\"0\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-tw');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_log`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_log` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `browser` char(100) NOT NULL,
  `ip` char(40) NOT NULL,
  `location` char(100) NOT NULL,
  `date` datetime NOT NULL,
  `desc` text NOT NULL,
  `ext` text NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'adminlogin',
  `lang` char(30) NOT NULL DEFAULT 'all',
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`),
  KEY `lang` (`lang`),
  KEY `type` (`type`),
  KEY `account` (`account`),
  KEY `date` (`date`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_log`(`id`,`account`,`browser`,`ip`,`location`,`date`,`desc`,`ext`,`type`,`lang`) VALUES('1','admin','chrome 45','127.0.0.1','本机地址 本机地址','2018-04-23 11:43:10','success','{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}','adminlogin','all'),('2','admin','chrome 45','127.0.0.1','本机地址 本机地址','2018-04-23 12:40:30','success','{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}','adminlogin','all'),('3','admin','chrome 45','127.0.0.1','本机地址 本机地址','2018-04-24 13:55:45','success','{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}','adminlogin','all'),('4','admin','chrome 45','127.0.0.1','本机地址 本机地址','2018-04-25 11:55:18','success','{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}','adminlogin','all'),('5','admin','chrome 45','127.0.0.1','本机地址 本机地址','2018-04-26 12:49:49','success','{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}','adminlogin','all'),('6','admin','chrome 45','127.0.0.1','本机地址 本机地址','2018-04-28 12:59:31','success','{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}','adminlogin','all');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_message`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL,
  `from` char(30) NOT NULL,
  `to` char(30) NOT NULL,
  `phone` char(30) NOT NULL,
  `mobile` char(11) NOT NULL,
  `email` varchar(90) NOT NULL,
  `qq` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` char(20) NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '1',
  `readed` enum('0','1') NOT NULL,
  `receiveEmail` enum('0','1') NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `status` (`status`),
  KEY `type` (`type`),
  KEY `to` (`to`),
  KEY `account` (`account`),
  KEY `readed` (`readed`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_oauth`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_oauth` (
  `account` varchar(30) NOT NULL,
  `provider` varchar(30) NOT NULL,
  `openID` varchar(60) NOT NULL,
  `lang` char(30) NOT NULL,
  UNIQUE KEY `account` (`account`,`provider`,`openID`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_operationlog`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_operationlog` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `identity` varchar(100) NOT NULL,
  `operation` varchar(200) NOT NULL,
  `count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `createdTime` datetime NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `operation` (`type`,`identity`,`operation`,`createdTime`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_order`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_order` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `humanID` char(13) NOT NULL,
  `account` char(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `balance` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `payment` char(30) NOT NULL,
  `sn` char(50) NOT NULL,
  `refundSN` char(50) NOT NULL,
  `address` text NOT NULL,
  `note` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `paidDate` datetime NOT NULL,
  `payStatus` enum('not_paid','paid','refunding','refunded') NOT NULL DEFAULT 'not_paid',
  `deliveriedDate` datetime NOT NULL,
  `deliveriedBy` char(30) NOT NULL,
  `deliveryStatus` enum('not_send','send','confirmed') NOT NULL DEFAULT 'not_send',
  `express` char(30) NOT NULL,
  `waybill` char(30) NOT NULL,
  `confirmedDate` datetime NOT NULL,
  `finishedDate` datetime NOT NULL,
  `finishedBy` char(30) NOT NULL,
  `status` enum('normal','canceled','finished','deleted','expired') NOT NULL DEFAULT 'normal',
  `last` datetime NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'shop',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `status` (`status`),
  KEY `createdDate` (`createdDate`),
  KEY `deliveriedDate` (`deliveriedDate`),
  KEY `deliveryStatus` (`deliveryStatus`),
  KEY `payStatus` (`payStatus`),
  KEY `type` (`type`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_order`(`id`,`humanID`,`account`,`amount`,`balance`,`payment`,`sn`,`refundSN`,`address`,`note`,`createdDate`,`paidDate`,`payStatus`,`deliveriedDate`,`deliveriedBy`,`deliveryStatus`,`express`,`waybill`,`confirmedDate`,`finishedDate`,`finishedBy`,`status`,`last`,`type`,`lang`) VALUES('1','','demo','0.01','0.00','COD','','','张三丰 [15988898558] 位于湖北省西北部的十堰市丹江口市境内 266555','','2015-02-12 14:24:53','0000-00-00 00:00:00','not_paid','0000-00-00 00:00:00','','not_send','0','','0000-00-00 00:00:00','0000-00-00 00:00:00','','expired','2018-04-20 18:08:14','shop','zh-cn'),('2','','demo','0.01','0.00','alipay','2015021200001000280046649527','','张三丰 [15988898558] 位于湖北省西北部的十堰市丹江口市境内 266555','','2015-02-12 14:25:25','2015-02-12 14:26:05','paid','0000-00-00 00:00:00','','not_send','0','','0000-00-00 00:00:00','0000-00-00 00:00:00','','normal','0000-00-00 00:00:00','shop','zh-cn'),('3','','111','0.01','0.00','COD','','','{\"account\":\"111\",\"address\":\"111\",\"contact\":\"111\",\"phone\":\"1111111\",\"zipcode\":\"111\",\"lang\":\"zh-cn\"}','','2018-04-20 18:10:04','0000-00-00 00:00:00','not_paid','0000-00-00 00:00:00','','not_send','','','0000-00-00 00:00:00','0000-00-00 00:00:00','','normal','2018-04-20 18:10:08','shop','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_order_product`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_order_product` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `orderID` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `productID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `productName` varchar(150) NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orderID` (`orderID`),
  KEY `productID` (`productID`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_order_product`(`id`,`orderID`,`productID`,`productName`,`price`,`count`,`lang`) VALUES('1','1','2','云蝉知','0.01','1','zh-cn'),('2','2','2','云蝉知','0.01','1','zh-cn'),('3','3','2','演示商品一','0.01','1','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_package`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_package` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `chanzhiCompatible` varchar(100) NOT NULL,
  `templateCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `lang` (`lang`),
  KEY `type` (`type`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_product`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `titleColor` varchar(10) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `unsaleable` enum('0','1') NOT NULL DEFAULT '0',
  `mall` text NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` char(30) DEFAULT NULL,
  `color` char(20) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `unit` char(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `negotiate` enum('0','1') NOT NULL DEFAULT '0',
  `promotion` decimal(10,2) NOT NULL,
  `amount` mediumint(8) unsigned DEFAULT NULL,
  `keywords` varchar(150) NOT NULL,
  `desc` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  `lang` char(30) NOT NULL,
  `startDate` int(255) DEFAULT NULL,
  `endDate` int(255) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`),
  KEY `status` (`status`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=2342343 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_product`(`id`,`titleColor`,`alias`,`unsaleable`,`mall`,`brand`,`model`,`color`,`origin`,`unit`,`price`,`negotiate`,`promotion`,`amount`,`keywords`,`desc`,`content`,`author`,`editor`,`addedDate`,`editedDate`,`status`,`views`,`sticky`,`order`,`css`,`js`,`lang`,`startDate`,`endDate`,`userName`) VALUES('1','','chanzhi','0','','蝉知','','','','','8888.00','0','0.02','0','蝉知企业门户系统','<p>蝉知企业门户系统是一款专向企业营销使用的企业门户系统，企业使用蝉知系统可以非常方便地搭建一个专业的企业营销网站，进行宣传，开展业务，服务客户。</p>','<h4>关于蝉知企业门户系统(chanzhiEPS)</h4><p>蝉知企业门户系统是由业内资深开发团队开发的一款专向企业营销使用的企业门户系
统，企业使用蝉知系统可以非常方便地搭建一个专业的企业营销网站，进行宣传，开展业务，服务客户。蝉知系统内置了文章、产品、论坛、评论、会员、博客、帮
助等功能，同时还可以和微信进行集成绑定。功能丰富实用，后台操作简洁方便。蝉知系统还内置了搜索引擎优化必备的功能，比如关键词，摘要，站点地图，友好
路径等，使用蝉知系统可以非常方便的搭建对搜索引擎友好的网站。</p><p><strong>为什么</strong><strong>叫做</strong><strong>蝉知？</strong><strong><br/></strong> </p><p>蝉是中国传统的吉祥物之一，象征着闻达和财富，非常符合企业作为盈利组织的特点。所以我们为这套系统起名为蝉知，希望通过这款开源免费的系统可以帮助众多的中小企业快速方面的建立自己的企业网站，进行宣传营销。</p><p><strong>为什么</strong><strong>来</strong><strong>做</strong><strong>蝉知？</strong> </p><p>蝉
知团队还有其他的开源产品，我们在维护自己的产品的时候，也存在这样的需求：我们需要一个网站来对产品进行宣传，能够给用户提供技术支持，方便用户下载等
等。我们也曾经想用市面上的其他cms系统来搭建，但后来发现要做大量的改动定制，还不如自己写一个。所以我们在四年多的时间里面一点点的完善自己的产品
网站。与此同时我们在和客户接触的时候，发现企业的网站大都不敢恭维：技术陈旧、载入速度缓慢、不利于seo、后台晦涩难懂。于是我们就产生了做一个企业
门户系统来解决这个问题的想法，于是就是了蝉知这个产品。</p><h4><strong>为什么以开源的方式来发布？</strong> </h4><p>蝉知源代码完全开放，不限制商用。我们之所以坚持以开源的方式来发布蝉知系统，是因为我们坚信开放才是正道。只有开放的系统才更具有生命力，用户使用起来才更加放心。</p><p><strong>为什么选择蝉知门户系统来搭建企业网站？</strong> </p><p>现
在做一个企业营销网站可以有很多选择，比如使用国外开源的wordpress, dupal, jommla等。国内的有dedecms, 
phpcms等cms系统。还有很多在线建站的公司。如果费用充足的话，可以选择建站公司来做（建站公司也是使用上述的这些系统来帮你搭建，比较坑）。那
么蝉知系统和这些系统相比有什么特点呢？<strong><br/></strong> </p><p><strong>1. 首先，我们是专门做企业营销网站。</strong> </p><ul class=\" list-paddingleft-2\"><li><p>现在做网站，都是在cms系统上面改。而蝉知系统是专门面向企业营销网站的，所以功能更具有针对性。我们内置了文章、产品、会员、论坛、评论、帮助、博客等诸多功能，完全可以应对企业营销网站的各种需求。</p></li><li><p>蝉知系统特别重视搜索引擎优化，内置了关键词管理、摘要、站点地图等功能。同时只要环境支持url重写，就可以生成搜索引擎非常喜欢的路径结构，比如/news/123.html这样的路径。</p></li><li><p>蝉知系统后续会内置基本的统计数据，哪怕网站只有一个用户访问，也要让您清清楚楚的知道网站有人在访问。这样网站不再是死的的网站。</p></li></ul><p><strong>2. 其次，</strong><strong>蝉知</strong><strong>系统</strong><strong>是</strong><strong>真正</strong><strong>的</strong><strong>开源</strong><strong>免费</strong> </p><ul class=\" list-paddingleft-2\"><li><p>蝉知系统是目前唯一开源免费的企业门户系统。</p></li><li><p>蝉知系统以LGPL协议发布，代码完全开放，是真正的开源。（有很多号称开源的cms系统，其实都是假的。)</p></li><li><p>蝉知系统不限制商用，也不会为了推我们后续的一些收费功能或者服务故意的在产品中做很多限制。<br/></p></li></ul><p><strong>3. 蝉知系统技术先进，注重用户体验</strong> </p><ul class=\" list-paddingleft-2\"><li><p>蝉知系统使用自主开发的框架搭建，架构更加合理。</p></li><li><p>内置完善的扩展机制，方便企业后续的二次开发。蝉知系统的首要定位是帮助企业解决营销问题，当营销问题解决之后，企业会考虑在蝉知系统上搭建自己的业务系统，比如报名、订单之类的业务。这时候在蝉知系统基础上进行二次开发是非常容易的事情。</p></li><li><p>蝉知团队不断的学习业内先进的设计理念，给大家提供简洁方便的产品。</p></li></ul><p><strong>4. </strong><strong>使用</strong><strong>支持</strong><strong>有</strong><strong>保障</strong> </p><ul class=\" list-paddingleft-2\"><li><p>别人做开源，也许只是兴趣。而我们做开源，是专职在做，以正规的公司形式来运作。</p></li><li><p>我们有将近十年的开源软件开发和维护经验，对开源软件的后续开发、支持有丰富的经验。</p></li><li><p>我们团队和系统足够开放，后续我们会着手打造一个面向企业营销市场的小生态系统，吸引第三方的设计师、网站建设公司参与。</p></li></ul><p>so，不要再犹豫，新时代做企业营销，首选蝉知门户系统，靠谱！</p>','admin','admin','2014-08-25 14:31:29','2018-04-28 16:32:30','offline','109','0','1','','','zh-cn','333333334','324324324','111'),('2','','','0','','蝉知','','','','','8888.00','0','0.01','0','','<p>蝉知在线(以下简称云蝉知)是由青岛息壤网络信息有限公司（以下简称青岛息壤）提供的在线建站服务。</p>','<p>云蝉知在线(以下简称云蝉知)是由青岛息壤网络信息有限公司(以下简称青岛息壤)提供的在线建站服务。若您申请云蝉知帐户并使用相应服务，您必须先同意此协议：</p><h4>一、服务条款的确认和接纳<br/></h4><p>(1) 您必须是能够承担相应法律责任的公司或个人。若您不具备此资格，不能使用云蝉知提供的服务。<br/></p><p>(2) 当您使用服务时，您需阅读并且同意<a href=\"http://www.chanzhi.net/book/chanzhieps/58_license.html\">《蝉知企业门户系统授权协议》</a>；</p><p>(3) 当您使用服务时，您需知晓并且同意此《云蝉知在线使用协议》；</p><p>(4) 此协议在必要时将进行修改，更新后会以明显的方式通知到用户。 <br/></p><p>(5) 若您继续使用系统提供的服务，则表明您接受新的协议。</p><h4>二、服务内容<br/></h4><p>(1) 此协议所述服务仅在云蝉知网站内有效。云蝉知网站是指http://www.chanzhi.net及其所属网页；</p><p>(2) 云蝉知有权根据实际情况自主调整服务内容。<br/></p><h4>三、帐户<br/></h4><p>(1) 使用云蝉知服务之前，您必须在云蝉知网站上面注册一个合法的帐号，并如实填写所有资料。如因资料不全而无法及时通知到您而造成的一切损失，青岛息壤不承担任何责任。<br/>(2) 您应当妥善保管自己的账户和密码，避免丢失，更不能让他人使用。若因此造成损失，青岛息壤不负任何法律责任；<br/>(3) 您在使用云蝉知服务时必须遵守相关法律法规。青岛息壤对帐户使用服务所产生的与其他公司或者个人的纠纷不负法律责任；<br/>(4) 云蝉知网站有权对恶意帐户中止服务，且无需特别通知；</p><h4>四、费用<br/></h4><p>(1) 在您正式使用云蝉知服务之前，您需要自己申请域名。<br/>(2) 云蝉知现在为大家提供免费服务，免费用户可以创建三个站点。每个站点可使用100M空间(包括附件、图片和数据库），每个月10GB流量。如果超出存储空间或者流量，云蝉知网站有权对该站点的访问进行限制。<br/>(3) 云蝉知后续会提供功能更强的收费版本，收费标准届时会在云蝉知网站公布。云蝉知保留对收费模式和具体金额调整的权利，涉及收费服务，将至提前30天的时间通过电子邮件的形式通知帐户。</p><h4>五、服务终止</h4><p>有下列情形之一的，云蝉知网站有权随时暂停、终止、取消或拒绝帐户服务。<br/><br/>(1) 帐户违反了此协议或已在约定范围内的任一条款；<br/>(2) 根据此协议相关说明而终止服务；<br/>(3) 利用云蝉知网站的发布功能滥发重复信息；<br/>(4) 未经请求或授权向云蝉知网站帐户发送大量与业务不相关的信息；<br/>(5) 冒用其他企业的名义发布商业信息，进行商业活动；<br/>(6) 攻击云蝉知网站的数据、网络或服务；</p><p>(7) 盗用他人在云蝉知网站上的帐户名和密码。<br/><br/>以下信息是严格禁止并绝对终止帐户服务，同时不退回购买费用的：<br/><br/>(1) 有关宗教、种族或性别的贬损言辞；<br/>(2) 骚扰、滥用或威胁其他帐户；<br/>(3) 侵犯任何第三方著作权、专利、商标、商业秘密或其它专有权利、发表权或隐私权的信息；<br/>(4) 其它任何违反互联网相关法律法规的信息。</p><h4>六、云蝉知用户的权利和义务</h4><p>(1) 云蝉知服务生效后，帐户就可享受相应服务内容；<br/>(2) 云蝉知用户在使用云蝉知网站提供的相应服务时，必须保证遵守当地及中国有关法律法规的规定；<br/>不得利用该网站进行任何非法活动；遵守所有与使用该网站有关的协议、规定、程序和惯例；<br/>(3) 云蝉知用户对输入数据的准确性、可靠性、合法性、适用性等负责；</p><h4>七、云蝉知的权利和义务<br/></h4><p>(1) 云蝉知尽最大努力来保证服务的正常访问以及数据的备份。<br/>(2) 云蝉知为收费用户提供相应的咨询、技术支持等服务。</p><p>(3)
对于因不可抗力造成的服务中断、链接受阻或其他缺陷(包括但不限于自然灾害、社会事件以及因网站所具有的特殊性质而产生的包括系统崩溃、数据丢失、黑客攻
击、电信部门技术调整导致的影响、政府管制而造成的暂时性关闭在内的任何影响网络正常运营的因素)，云蝉知网站不承担任何责任，但将尽力减少因此而给会员
造成的损失和影响；<br/>(4) 云蝉知网站对用户因使用云蝉知服务而造成的损失不负法律责任。不论什么情况下对用户因使用云蝉知服务而造成的直接、间接、偶尔的、特殊的惩罚性的损害或其他一切损害概不负法律责任；<br/>(5) 如因云蝉知原因，造成服务的不正常中断，青岛息壤不承担任何责任，青岛息壤也不承担由此致使会员蒙受的其它方面的连带损失；</p><h4>八、隐私与保密<br/></h4><p>(1) 您注册时所填写的个人信息仅限于青岛息壤与您之间联系使用，青岛息壤不得将其用于商业目的。<br/>(2) 您通过云蝉知产生的任何数据都属于您所有。除非您主动要求我们协助您排查问题，否则青岛息壤的所有员工无权查看、编辑、复制、删除您的任数据。</p><h4>九、最终解释权<br/></h4><p>青岛息壤网络信息有限公司对云蝉知保有所有活动、限制等的最终解释权。</p>','admin','admin','2014-08-25 15:06:50','2018-04-28 16:34:04','normal','54','0','2','','','zh-cn','213213','23432423','222'),('3','','','0','','','','','','','0.00','0','0.00','0','','','','admin','','2018-04-24 17:59:16','2018-04-24 17:59:16','normal','4','0','3','','','zh-cn','423412','32423432',''),('4','','','0','','','','','','','0.00','0','0.00','0','','','<p>111</p>','admin','admin','2018-04-25 17:32:54','2018-04-28 16:33:57','offline','0','0','4','','','zh-cn','421421','432432432',''),('5','','','0','','','','','','','0.00','0','0.00','0','','','','admin','','2018-04-28 16:47:23','2018-04-28 16:47:23','normal','2','0','5','','','zh-cn','','',''),('12','','','0','','','','','','','0.00','0','0.00','0','','','','admin','','2018-04-28 17:08:27','2018-04-28 17:08:27','normal','2','0','12','','','zh-cn','','',''),('2342342','','','0','','','','','','','0.00','0','0.00','0','','','','admin','','2018-04-28 17:50:52','2018-04-28 17:50:52','normal','6','0','65535','','','zh-cn','','','');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_product_custom`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_product_custom` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `label` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `label` (`product`,`label`),
  KEY `lang` (`lang`),
  KEY `product` (`product`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_product_custom`(`id`,`product`,`label`,`value`,`order`,`lang`) VALUES('132','1','服务器','apache/ngix','2','zh-cn'),('139','2','每月免费流量','10G','2','zh-cn'),('130','1','php ','&gt; 5.2','0','zh-cn'),('137','2','免费站点','3个','0','zh-cn'),('131','1','mysql','&gt; 4.0','1','zh-cn'),('138','2','免费空间','100M','1','zh-cn'),('117','3','','','0','zh-cn'),('134','4','使用者','','0','zh-cn'),('135','4','使用时间','','1','zh-cn'),('136','4','到期时间','','2','zh-cn'),('133','1','价格','免费','3','zh-cn'),('140','5','','','0','zh-cn'),('141','12','','','0','zh-cn'),('142','2342342','','','0','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_relation`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_relation` (
  `type` char(20) NOT NULL,
  `id` mediumint(9) NOT NULL,
  `category` smallint(5) NOT NULL,
  `lang` char(30) NOT NULL,
  UNIQUE KEY `relation` (`type`,`id`,`category`),
  KEY `lang` (`lang`),
  KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_relation`(`type`,`id`,`category`,`lang`) VALUES('article','1','1','zh-cn'),('article','1','2','zh-cn'),('article','3','2','zh-cn'),('article','4','1','zh-cn'),('article','4','2','zh-cn'),('article','5','1','zh-cn'),('article','5','2','zh-cn'),('article','6','1','zh-cn'),('article','6','2','zh-cn'),('article','7','1','zh-cn'),('article','7','2','zh-cn'),('article','8','1','zh-cn'),('article','8','2','zh-cn'),('article','9','1','zh-cn'),('article','9','2','zh-cn'),('article','10','1','zh-cn'),('article','10','2','zh-cn'),('article','12','12','zh-cn'),('product','1','7','zh-cn'),('product','2','7','zh-cn'),('article','13','19','zh-cn'),('product','3','7','zh-cn'),('article','14','19','zh-cn'),('article','15','19','zh-cn'),('article','16','20','zh-cn'),('article','17','28','zh-cn'),('article','18','27','zh-cn'),('product','4','25','zh-cn'),('product','5','7','zh-cn'),('product','12','7','zh-cn'),('product','2342342','7','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_reply`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_reply` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `thread` mediumint(8) unsigned NOT NULL,
  `reply` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `author` char(30) NOT NULL,
  `editor` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `thread` (`thread`),
  KEY `reply` (`reply`),
  KEY `hidden` (`hidden`),
  KEY `editedDate` (`editedDate`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_score`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_score` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `method` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `count` smallint(5) unsigned NOT NULL,
  `before` mediumint(5) NOT NULL,
  `after` mediumint(5) NOT NULL,
  `objectType` varchar(30) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `actor` varchar(30) NOT NULL,
  `note` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `method` (`method`),
  KEY `lang` (`lang`),
  KEY `objectType` (`objectType`),
  KEY `objectID` (`objectID`),
  KEY `time` (`time`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_search_dict`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_search_dict` (
  `key` smallint(5) unsigned NOT NULL,
  `value` char(3) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_search_dict`(`key`,`value`,`lang`) VALUES('28436','演','zh-cn'),('31034','示','zh-cn'),('21830','商','zh-cn'),('21697','品','zh-cn'),('19968','一','zh-cn'),('34633','蝉','zh-cn'),('30693','知','zh-cn'),('22312','在','zh-cn'),('32447','线','zh-cn'),('20197','以','zh-cn'),('19979','下','zh-cn'),('31616','简','zh-cn'),('31216','称','zh-cn'),('20113','云','zh-cn'),('26159','是','zh-cn'),('30001','由','zh-cn'),('38738','青','zh-cn'),('23707','岛','zh-cn'),('24687','息','zh-cn'),('22756','壤','zh-cn'),('32593','网','zh-cn'),('32476','络','zh-cn'),('20449','信','zh-cn'),('26377','有','zh-cn'),('38480','限','zh-cn'),('20844','公','zh-cn'),('21496','司','zh-cn'),('65288','（','zh-cn'),('65289','）','zh-cn'),('25552','提','zh-cn'),('20379','供','zh-cn'),('30340','的','zh-cn'),('24314','建','zh-cn'),('31449','站','zh-cn'),('26381','服','zh-cn'),('21153','务','zh-cn'),('12290','。','zh-cn'),('33509','若','zh-cn'),('24744','您','zh-cn'),('30003','申','zh-cn'),('35831','请','zh-cn'),('24080','帐','zh-cn'),('25143','户','zh-cn'),('24182','并','zh-cn'),('20351','使','zh-cn'),('29992','用','zh-cn'),('30456','相','zh-cn'),('24212','应','zh-cn'),('65292','，','zh-cn'),('24517','必','zh-cn'),('39035','须','zh-cn'),('20808','先','zh-cn'),('21516','同','zh-cn'),('24847','意','zh-cn'),('27492','此','zh-cn'),('21327','协','zh-cn'),('35758','议','zh-cn'),('65306','：','zh-cn'),('12289','、','zh-cn'),('26465','条','zh-cn'),('27454','款','zh-cn'),('30830','确','zh-cn'),('35748','认','zh-cn'),('21644','和','zh-cn'),('25509','接','zh-cn'),('32435','纳','zh-cn'),('33021','能','zh-cn'),('22815','够','zh-cn'),('25215','承','zh-cn'),('25285','担','zh-cn'),('27861','法','zh-cn'),('24459','律','zh-cn'),('36131','责','zh-cn'),('20219','任','zh-cn'),('25110','或','zh-cn'),('20010','个','zh-cn'),('20154','人','zh-cn'),('19981','不','zh-cn'),('20855','具','zh-cn'),('22791','备','zh-cn'),('36164','资','zh-cn'),('26684','格','zh-cn'),('24403','当','zh-cn'),('26102','时','zh-cn'),('38656','需','zh-cn'),('38405','阅','zh-cn'),('35835','读','zh-cn'),('19988','且','zh-cn'),('12298','《','zh-cn'),('20225','企','zh-cn'),('19994','业','zh-cn'),('38376','门','zh-cn'),('31995','系','zh-cn'),('32479','统','zh-cn'),('25480','授','zh-cn'),('26435','权','zh-cn'),('12299','》','zh-cn'),('65307','；','zh-cn'),('26195','晓','zh-cn'),('35201','要','zh-cn'),('23558','将','zh-cn'),('36827','进','zh-cn'),('34892','行','zh-cn'),('20462','修','zh-cn'),('25913','改','zh-cn'),('26356','更','zh-cn'),('26032','新','zh-cn'),('21518','后','zh-cn'),('20250','会','zh-cn'),('26126','明','zh-cn'),('26174','显','zh-cn'),('26041','方','zh-cn'),('24335','式','zh-cn'),('36890','通','zh-cn'),('21040','到','zh-cn'),('32487','继','zh-cn'),('32493','续','zh-cn'),('21017','则','zh-cn'),('34920','表','zh-cn'),('21463','受','zh-cn'),('20108','二','zh-cn'),('20869','内','zh-cn'),('23481','容','zh-cn'),('25152','所','zh-cn'),('36848','述','zh-cn'),('20165','仅','zh-cn'),('25928','效','zh-cn'),('25351','指','zh-cn'),('21450','及','zh-cn'),('20854','其','zh-cn'),('23646','属','zh-cn'),('39029','页','zh-cn'),('26681','根','zh-cn'),('25454','据','zh-cn'),('23454','实','zh-cn'),('38469','际','zh-cn'),('24773','情','zh-cn'),('20917','况','zh-cn'),('33258','自','zh-cn'),('20027','主','zh-cn'),('35843','调','zh-cn'),('25972','整','zh-cn'),('19977','三','zh-cn'),('20043','之','zh-cn'),('21069','前','zh-cn'),('19978','上','zh-cn'),('38754','面','zh-cn'),('27880','注','zh-cn'),('20876','册','zh-cn'),('21512','合','zh-cn'),('21495','号','zh-cn'),('22914','如','zh-cn'),('22635','填','zh-cn'),('20889','写','zh-cn'),('26009','料','zh-cn'),('22240','因','zh-cn'),('20840','全','zh-cn'),('32780','而','zh-cn'),('26080','无','zh-cn'),('36896','造','zh-cn'),('25104','成','zh-cn'),('20999','切','zh-cn'),('25439','损','zh-cn'),('22833','失','zh-cn'),('20309','何','zh-cn'),('22949','妥','zh-cn'),('21892','善','zh-cn'),('20445','保','zh-cn'),('31649','管','zh-cn'),('24049','己','zh-cn'),('36134','账','zh-cn'),('23494','密','zh-cn'),('30721','码','zh-cn'),('36991','避','zh-cn'),('20813','免','zh-cn'),('20002','丢','zh-cn'),('35753','让','zh-cn'),('20182','他','zh-cn'),('36127','负','zh-cn'),('36981','遵','zh-cn'),('23432','守','zh-cn'),('20851','关','zh-cn'),('35268','规','zh-cn'),('23545','对','zh-cn'),('20135','产','zh-cn'),('29983','生','zh-cn'),('19982','与','zh-cn'),('32773','者','zh-cn'),('32416','纠','zh-cn'),('32439','纷','zh-cn'),('24694','恶','zh-cn'),('20013','中','zh-cn'),('27490','止','zh-cn'),('29305','特','zh-cn'),('21035','别','zh-cn'),('22235','四','zh-cn'),('36153','费','zh-cn'),('27491','正','zh-cn'),('22495','域','zh-cn'),('21517','名','zh-cn'),('29616','现','zh-cn'),('20026','为','zh-cn'),('22823','大','zh-cn'),('23478','家','zh-cn'),('21487','可','zh-cn'),('21019','创','zh-cn'),('28857','点','zh-cn'),('27599','每','zh-cn'),('31354','空','zh-cn'),('38388','间','zh-cn'),('21253','包','zh-cn'),('25324','括','zh-cn'),('38468','附','zh-cn'),('20214','件','zh-cn'),('22270','图','zh-cn'),('29255','片','zh-cn'),('25968','数','zh-cn'),('24211','库','zh-cn'),('26376','月','zh-cn'),('27969','流','zh-cn'),('37327','量','zh-cn'),('26524','果','zh-cn'),('36229','超','zh-cn'),('20986','出','zh-cn'),('23384','存','zh-cn'),('20648','储','zh-cn'),('35813','该','zh-cn'),('35775','访','zh-cn'),('38382','问','zh-cn'),('21046','制','zh-cn'),('21151','功','zh-cn'),('24378','强','zh-cn'),('25910','收','zh-cn'),('29256','版','zh-cn'),('26412','本','zh-cn'),('26631','标','zh-cn'),('20934','准','zh-cn'),('23626','届','zh-cn'),('24067','布','zh-cn'),('30041','留','zh-cn'),('27169','模','zh-cn'),('20307','体','zh-cn'),('37329','金','zh-cn'),('39069','额','zh-cn'),('21033','利','zh-cn'),('28041','涉','zh-cn'),('33267','至','zh-cn'),('22825','天','zh-cn'),('36807','过','zh-cn'),('30005','电','zh-cn'),('23376','子','zh-cn'),('37038','邮','zh-cn'),('24418','形','zh-cn'),('20116','五','zh-cn'),('32456','终','zh-cn'),('21015','列','zh-cn'),('38543','随','zh-cn'),('26242','暂','zh-cn'),('20572','停','zh-cn'),('21462','取','zh-cn'),('28040','消','zh-cn'),('25298','拒','zh-cn'),('32477','绝','zh-cn'),('36829','违','zh-cn'),('21453','反','zh-cn'),('20102','了','zh-cn'),('24050','已','zh-cn'),('32422','约','zh-cn'),('23450','定','zh-cn'),('33539','范','zh-cn'),('22260','围','zh-cn'),('35828','说','zh-cn'),('21457','发','zh-cn'),('28389','滥','zh-cn'),('37325','重','zh-cn'),('22797','复','zh-cn'),('26410','未','zh-cn'),('32463','经','zh-cn'),('27714','求','zh-cn'),('21521','向','zh-cn'),('36865','送','zh-cn'),('20882','冒','zh-cn'),('20041','义','zh-cn'),('27963','活','zh-cn'),('21160','动','zh-cn'),('25915','攻','zh-cn'),('20987','击','zh-cn'),('30423','盗','zh-cn'),('20005','严','zh-cn'),('31105','禁','zh-cn'),('36864','退','zh-cn'),('22238','回','zh-cn'),('36141','购','zh-cn'),('20080','买','zh-cn'),('23447','宗','zh-cn'),('25945','教','zh-cn'),('31181','种','zh-cn'),('26063','族','zh-cn'),('24615','性','zh-cn'),('36140','贬','zh-cn'),('35328','言','zh-cn'),('36766','辞','zh-cn'),('39578','骚','zh-cn'),('25200','扰','zh-cn'),('23041','威','zh-cn'),('32961','胁','zh-cn'),('20405','侵','zh-cn'),('29359','犯','zh-cn'),('31532','第','zh-cn'),('33879','著','zh-cn'),('20316','作','zh-cn'),('19987','专','zh-cn'),('31192','秘','zh-cn'),('23427','它','zh-cn'),('38544','隐','zh-cn'),('31169','私','zh-cn'),('20114','互','zh-cn'),('32852','联','zh-cn'),('20845','六','zh-cn'),('23601','就','zh-cn'),('20139','享','zh-cn'),('35777','证','zh-cn'),('22320','地','zh-cn'),('22269','国','zh-cn'),('24471','得','zh-cn'),('38750','非','zh-cn'),('31243','程','zh-cn'),('24207','序','zh-cn'),('24815','惯','zh-cn'),('20363','例','zh-cn'),('36755','输','zh-cn'),('20837','入','zh-cn'),('38752','靠','zh-cn'),('36866','适','zh-cn'),('31561','等','zh-cn'),('19971','七','zh-cn'),('23613','尽','zh-cn'),('26368','最','zh-cn'),('21162','努','zh-cn'),('21147','力','zh-cn'),('26469','来','zh-cn'),('24120','常','zh-cn'),('20221','份','zh-cn'),('21672','咨','zh-cn'),('35810','询','zh-cn'),('25216','技','zh-cn'),('26415','术','zh-cn'),('25903','支','zh-cn'),('25345','持','zh-cn'),('20110','于','zh-cn'),('25239','抗','zh-cn'),('26029','断','zh-cn'),('38142','链','zh-cn'),('38459','阻','zh-cn'),('32570','缺','zh-cn'),('38519','陷','zh-cn'),('20294','但','zh-cn'),('28982','然','zh-cn'),('28798','灾','zh-cn'),('23475','害','zh-cn'),('31038','社','zh-cn'),('20107','事','zh-cn'),('27530','殊','zh-cn'),('36136','质','zh-cn'),('23849','崩','zh-cn'),('28291','溃','zh-cn'),('40657','黑','zh-cn'),('23458','客','zh-cn'),('37096','部','zh-cn'),('23548','导','zh-cn'),('33268','致','zh-cn'),('24433','影','zh-cn'),('21709','响','zh-cn'),('25919','政','zh-cn'),('24220','府','zh-cn'),('38381','闭','zh-cn'),('36816','运','zh-cn'),('33829','营','zh-cn'),('32032','素','zh-cn'),('20943','减','zh-cn'),('23569','少','zh-cn'),('32473','给','zh-cn'),('21592','员','zh-cn'),('35770','论','zh-cn'),('20160','什','zh-cn'),('20040','么','zh-cn'),('30452','直','zh-cn'),('20598','偶','zh-cn'),('23572','尔','zh-cn'),('24809','惩','zh-cn'),('32602','罚','zh-cn'),('27010','概','zh-cn'),('21407','原','zh-cn'),('20063','也','zh-cn'),('33945','蒙','zh-cn'),('36830','连','zh-cn'),('24102','带','zh-cn'),('20843','八','zh-cn'),('30446','目','zh-cn'),('37117','都','zh-cn'),('38500','除','zh-cn'),('25105','我','zh-cn'),('20204','们','zh-cn'),('21161','助','zh-cn'),('25490','排','zh-cn'),('26597','查','zh-cn'),('39064','题','zh-cn'),('21542','否','zh-cn'),('24037','工','zh-cn'),('30475','看','zh-cn'),('32534','编','zh-cn'),('36753','辑','zh-cn'),('21024','删','zh-cn'),('20061','九','zh-cn'),('35299','解','zh-cn'),('37322','释','zh-cn'),('20247','众','zh-cn'),('21448','又','zh-cn'),('22307','圣','zh-cn'),('23567','小','zh-cn'),('20056','乘','zh-cn'),('21313','十','zh-cn'),('24231','座','zh-cn'),('21021','初','zh-cn'),('20004','两','zh-cn'),('24322','异','zh-cn'),('36718','轮','zh-cn'),('35760','记','zh-cn'),('36733','载','zh-cn'),('20315','佛','zh-cn'),('38464','陀','zh-cn'),('28781','灭','zh-cn'),('30334','百','zh-cn'),('20313','余','zh-cn'),('24180','年','zh-cn'),('27604','比','zh-cn'),('19992','丘','zh-cn'),('36190','赞','zh-cn'),('38761','革','zh-cn'),('27966','派','zh-cn'),('20105','争','zh-cn'),('36930','遂','zh-cn'),('32467','结','zh-cn'),('24352','张','zh-cn'),('36523','身','zh-cn'),('28431','漏','zh-cn'),('33394','色','zh-cn'),('36793','边','zh-cn'),('23551','寿','zh-cn'),('27515','死','zh-cn'),('28037','涅','zh-cn'),('27075','槃','zh-cn'),('30342','皆','zh-cn'),('20551','假','zh-cn'),('24515','心','zh-cn'),('28165','清','zh-cn'),('20928','净','zh-cn'),('25671','摇','zh-cn'),('25925','故','zh-cn'),('27745','污','zh-cn'),('26579','染','zh-cn'),('21363','即','zh-cn'),('19990','世','zh-cn'),('24605','思','zh-cn'),('24819','想','zh-cn'),('39537','驱','zh-cn'),('22806','外','zh-cn'),('30495','真','zh-cn'),('20174','从','zh-cn'),('24658','恒','zh-cn'),('31435','立','zh-cn'),('22830','央','zh-cn'),('23835','崛','zh-cn'),('22810','多','zh-cn'),('32599','罗','zh-cn'),('22522','基','zh-cn'),('20256','传','zh-cn'),('23578','尚','zh-cn'),('21619','味','zh-cn'),('28176','渐','zh-cn'),('20998','分','zh-cn'),('35010','裂','zh-cn'),('34893','衍','zh-cn'),('40481','鸡','zh-cn'),('32996','胤','zh-cn'),('38395','闻','zh-cn'),('23665','山','zh-cn'),('35199','西','zh-cn'),('20303','住','zh-cn'),('21271','北','zh-cn'),('20849','共','zh-cn'),('23398','学','zh-cn'),('25991','文','zh-cn'),('24072','师','zh-cn'),('35793','译','zh-cn'),('25191','执','zh-cn'),('35821','语','zh-cn'),('35859','谓','zh-cn'),('35832','诸','zh-cn'),('21807','唯','zh-cn'),('20054','乖','zh-cn'),('26088','旨','zh-cn'),('33324','般','zh-cn'),('39539','驳','zh-cn'),('26021','斥','zh-cn'),('21049','刹','zh-cn'),('37027','那','zh-cn'),('26500','构','zh-cn'),('29289','物','zh-cn'),('30028','界','zh-cn'),('27700','水','zh-cn'),('28779','火','zh-cn'),('39118','风','zh-cn'),('36825','这','zh-cn'),('20803','元','zh-cn'),('36941','遍','zh-cn'),('29702','理','zh-cn'),('21476','古','zh-cn'),('21360','印','zh-cn'),('24230','度','zh-cn'),('35782','识','zh-cn'),('34987','被','zh-cn'),('21152','加','zh-cn'),('21560','吸','zh-cn'),('24565','念','zh-cn'),('23546','寺','zh-cn'),('35762','讲','zh-cn'),('22530','堂','zh-cn'),('20030','举','zh-cn'),('27001','楹','zh-cn'),('25709','摭','zh-cn'),('35848','谈','zh-cn'),('26085','日','zh-cn'),('21320','午','zh-cn'),('36814','迎','zh-cn'),('28023','海','zh-cn'),('26472','杨','zh-cn'),('39640','高','zh-cn'),('26657','校','zh-cn'),('20195','代','zh-cn'),('38745','静','zh-cn'),('23433','安','zh-cn'),('25252','护','zh-cn'),('32838','聆','zh-cn'),('21548','听','zh-cn'),('30417','监','zh-cn'),('38498','院','zh-cn'),('20122','亚','zh-cn'),('34164','蕴','zh-cn'),('29420','独','zh-cn'),('26679','样','zh-cn'),('31867','类','zh-cn'),('23637','展','zh-cn'),('24320','开','zh-cn'),('24341','引','zh-cn'),('32988','胜','zh-cn'),('23383','字','zh-cn'),('21477','句','zh-cn'),('35789','词','zh-cn'),('33410','节','zh-cn'),('25293','拍','zh-cn'),('24179','平','zh-cn'),('20164','仄','zh-cn'),('35856','谐','zh-cn'),('20960','几','zh-cn'),('26512','析','zh-cn'),('26049','旁','zh-cn'),('24449','征','zh-cn'),('21338','博','zh-cn'),('20852','兴','zh-cn'),('36259','趣','zh-cn'),('30414','盎','zh-cn'),('30410','益','zh-cn'),('21290','匪','zh-cn'),('27973','浅','zh-cn'),('24344','弘','zh-cn'),('38271','长','zh-cn'),('34255','藏','zh-cn'),('30740','研','zh-cn'),('31350','究','zh-cn'),('24935','慧','zh-cn'),('32769','老','zh-cn'),('21150','办','zh-cn'),('25773','播','zh-cn'),('22686','增','zh-cn'),('26234','智','zh-cn'),('24184','幸','zh-cn'),('31119','福','zh-cn'),('22987','始','zh-cn'),('26399','期','zh-cn'),('27425','次','zh-cn'),('28085','涵','zh-cn'),('30422','盖','zh-cn'),('21382','历','zh-cn'),('21490','史','zh-cn'),('21746','哲','zh-cn'),('27982','济','zh-cn'),('31185','科','zh-cn'),('21307','医','zh-cn'),('20859','养','zh-cn'),('25196','扬','zh-cn'),('20248','优','zh-cn'),('31168','秀','zh-cn'),('21270','化','zh-cn'),('21508','各','zh-cn'),('24494','微','zh-cn'),('21488','台','zh-cn'),('24191','广','zh-cn'),('32536','缘','zh-cn'),('39044','预','zh-cn'),('21578','告','zh-cn'),('21608','周','zh-cn'),('21452','双','zh-cn'),('30344','皈','zh-cn'),('20381','依','zh-cn'),('65281','！','zh-cn'),('38144','销','zh-cn'),('20415','便','zh-cn'),('25645','搭','zh-cn'),('23459','宣','zh-cn'),('28145','深','zh-cn'),('22242','团','zh-cn'),('38431','队','zh-cn'),('32622','置','zh-cn'),('31456','章','zh-cn'),('22363','坛','zh-cn'),('35780','评','zh-cn'),('24110','帮','zh-cn'),('36824','还','zh-cn'),('38598','集','zh-cn'),('32465','绑','zh-cn'),('20016','丰','zh-cn'),('23500','富','zh-cn'),('25805','操','zh-cn'),('27905','洁','zh-cn'),('25628','搜','zh-cn'),('32034','索','zh-cn'),('25806','擎','zh-cn'),('38190','键','zh-cn'),('25688','摘','zh-cn'),('21451','友','zh-cn'),('22909','好','zh-cn'),('36335','路','zh-cn'),('24452','径','zh-cn'),('21483','叫','zh-cn'),('20570','做','zh-cn'),('65311','？','zh-cn'),('21513','吉','zh-cn'),('31077','祥','zh-cn'),('35937','象','zh-cn'),('30528','着','zh-cn'),('36798','达','zh-cn'),('36130','财','zh-cn'),('31526','符','zh-cn'),('30408','盈','zh-cn'),('32452','组','zh-cn'),('32455','织','zh-cn'),('22871','套','zh-cn'),('36215','起','zh-cn'),('24076','希','zh-cn'),('26395','望','zh-cn'),('28304','源','zh-cn'),('24555','快','zh-cn'),('36895','速','zh-cn'),('32500','维','zh-cn'),('20505','候','zh-cn'),('26366','曾','zh-cn'),('24066','市','zh-cn'),('37324','里','zh-cn'),('23436','完','zh-cn'),('35302','触','zh-cn'),('25954','敢','zh-cn'),('24685','恭','zh-cn'),('38472','陈','zh-cn'),('26087','旧','zh-cn'),('32531','缓','zh-cn'),('24930','慢','zh-cn'),('26214','晦','zh-cn'),('28073','涩','zh-cn'),('38590','难','zh-cn'),('25026','懂','zh-cn'),('20915','决','zh-cn'),('25918','放','zh-cn'),('22362','坚','zh-cn'),('25165','才','zh-cn'),('36947','道','zh-cn'),('21482','只','zh-cn'),('21629','命','zh-cn'),('36873','选','zh-cn'),('25321','择','zh-cn'),('24456','很','zh-cn'),('20805','充','zh-cn'),('36275','足','zh-cn'),('35805','话','zh-cn'),('20123','些','zh-cn'),('20320','你','zh-cn'),('36739','较','zh-cn'),('22353','坑','zh-cn'),('21602','呢','zh-cn'),('39318','首','zh-cn'),('38024','针','zh-cn'),('35270','视','zh-cn'),('29615','环','zh-cn'),('22659','境','zh-cn'),('21916','喜','zh-cn'),('27426','欢','zh-cn'),('35745','计','zh-cn'),('21738','哪','zh-cn'),('24597','怕','zh-cn'),('26970','楚','zh-cn'),('20877','再','zh-cn'),('25512','推','zh-cn'),('39564','验','zh-cn'),('26694','框','zh-cn'),('26550','架','zh-cn'),('25193','扩','zh-cn'),('26426','机','zh-cn'),('20301','位','zh-cn'),('32771','考','zh-cn'),('34385','虑','zh-cn'),('25253','报','zh-cn'),('35746','订','zh-cn'),('21333','单','zh-cn'),('30784','础','zh-cn'),('26131','易','zh-cn'),('20064','习','zh-cn'),('35774','设','zh-cn'),('38556','障','zh-cn'),('35768','许','zh-cn'),('32844','职','zh-cn'),('36817','近','zh-cn'),('36719','软','zh-cn'),('25163','手','zh-cn'),('25171','打','zh-cn'),('22330','场','zh-cn'),('24577','态','zh-cn'),('21442','参','zh-cn'),('29369','犹','zh-cn'),('35947','豫','zh-cn'),('35889','谱','zh-cn'),('22120','器','zh-cn'),('20215','价','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_search_index`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_search_index` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` char(20) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `params` text NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` char(30) NOT NULL DEFAULT 'normal',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `object` (`objectType`,`objectID`),
  KEY `lang` (`lang`),
  KEY `addedDate` (`addedDate`),
  FULLTEXT KEY `content` (`title`,`content`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_search_index`(`id`,`objectType`,`objectID`,`title`,`content`,`params`,`addedDate`,`editedDate`,`status`,`lang`) VALUES('1','article','13',' test_',' |1111111111111111111111|','{\"category\":\"\",\"alias\":\"\"}','2018-04-24 15:48:00','2018-04-24 15:48:30','normal','zh-cn'),('16','product','2','',' 34633 30693 22312 32447 20197 19979 31616 31216 20113 34633 30693 26159 30001 38738 23707 24687 22756 32593 32476 20449 24687 26377 38480 20844 21496 65288 20197 19979 31616 31216 38738 23707 24687 22756 65289 25552 20379 30340 22312 32447 24314 31449 26381 21153 12290 20113 34633 30693 22312 32447 20197 19979 31616 31216 20113 34633 30693 26159 30001 38738 23707 24687 22756 32593 32476 20449 24687 26377 38480 20844 21496 20197 19979 31616 31216 38738 23707 24687 22756 25552 20379 30340 22312 32447 24314 31449 26381 21153 12290 33509 24744 30003 35831 20113 34633 30693 24080 25143 24182 20351 29992 30456 24212 26381 21153 65292 24744 24517 39035 20808 21516 24847 27492 21327 35758 65306 19968 12289 26381 21153 26465 27454 30340 30830 35748 21644 25509 32435 |1|__ 24744 24517 39035 26159 33021 22815 25215 25285 30456 24212 27861 24459 36131 20219 30340 20844 21496 25110 20010 20154 12290 33509 24744 19981 20855 22791 27492 36164 26684 65292 19981 33021 20351 29992 20113 34633 30693 25552 20379 30340 26381 21153 12290 |2|__ 24403 24744 20351 29992 26381 21153 26102 65292 24744 38656 38405 35835 24182 19988 21516 24847 12298 34633 30693 20225 19994 38376 25143 31995 32479 25480 26435 21327 35758 12299 65307 |3|__ 24403 24744 20351 29992 26381 21153 26102 65292 24744 38656 30693 26195 24182 19988 21516 24847 27492 12298 20113 34633 30693 22312 32447 20351 29992 21327 35758 12299 65307 |4|__ 27492 21327 35758 22312 24517 35201 26102 23558 36827 34892 20462 25913 65292 26356 26032 21518 20250 20197 26126 26174 30340 26041 24335 36890 30693 21040 29992 25143 12290 |5|__ 33509 24744 32487 32493 20351 29992 31995 32479 25552 20379 30340 26381 21153 65292 21017 34920 26126 24744 25509 21463 26032 30340 21327 35758 12290 20108 12289 26381 21153 20869 23481 |1|__ 27492 21327 35758 25152 36848 26381 21153 20165 22312 20113 34633 30693 32593 31449 20869 26377 25928 12290 20113 34633 30693 32593 31449 26159 25351 http://www.chanzhi.net 21450 20854 25152 23646 32593 39029 65307 |2|__ 20113 34633 30693 26377 26435 26681 25454 23454 38469 24773 20917 33258 20027 35843 25972 26381 21153 20869 23481 12290 19977 12289 24080 25143 |1|__ 20351 29992 20113 34633 30693 26381 21153 20043 21069 65292 24744 24517 39035 22312 20113 34633 30693 32593 31449 19978 38754 27880 20876 19968 20010 21512 27861 30340 24080 21495 65292 24182 22914 23454 22635 20889 25152 26377 36164 26009 12290 22914 22240 36164 26009 19981 20840 32780 26080 27861 21450 26102 36890 30693 21040 24744 32780 36896 25104 30340 19968 20999 25439 22833 65292 38738 23707 24687 22756 19981 25215 25285 20219 20309 36131 20219 12290 |2|__ 24744 24212 24403 22949 21892 20445 31649 33258 24049 30340 36134 25143 21644 23494 30721 65292 36991 20813 20002 22833 65292 26356 19981 33021 35753 20182 20154 20351 29992 12290 33509 22240 27492 36896 25104 25439 22833 65292 38738 23707 24687 22756 19981 36127 20219 20309 27861 24459 36131 20219 65307 |3|__ 24744 22312 20351 29992 20113 34633 30693 26381 21153 26102 24517 39035 36981 23432 30456 20851 27861 24459 27861 35268 12290 38738 23707 24687 22756 23545 24080 25143 20351 29992 26381 21153 25152 20135 29983 30340 19982 20854 20182 20844 21496 25110 32773 20010 20154 30340 32416 32439 19981 36127 27861 24459 36131 20219 65307 |4|__ 20113 34633 30693 32593 31449 26377 26435 23545 24694 24847 24080 25143 20013 27490 26381 21153 65292 19988 26080 38656 29305 21035 36890 30693 65307 22235 12289 36153 29992 |1|__ 22312 24744 27491 24335 20351 29992 20113 34633 30693 26381 21153 20043 21069 65292 24744 38656 35201 33258 24049 30003 35831 22495 21517 12290 |2|__ 20113 34633 30693 29616 22312 20026 22823 23478 25552 20379 20813 36153 26381 21153 65292 20813 36153 29992 25143 21487 20197 21019 24314 19977 20010 31449 28857 12290 27599 20010 31449 28857 21487 20351 29992 100m_ 31354 38388 21253 25324 38468 20214 12289 22270 29255 21644 25968 25454 24211 65289 65292 27599 20010 26376 10gb_ 27969 37327 12290 22914 26524 36229 20986 23384 20648 31354 38388 25110 32773 27969 37327 65292 20113 34633 30693 32593 31449 26377 26435 23545 35813 31449 28857 30340 35775 38382 36827 34892 38480 21046 12290 |3|__ 20113 34633 30693 21518 32493 20250 25552 20379 21151 33021 26356 24378 30340 25910 36153 29256 26412 65292 25910 36153 26631 20934 23626 26102 20250 22312 20113 34633 30693 32593 31449 20844 24067 12290 20113 34633 30693 20445 30041 23545 25910 36153 27169 24335 21644 20855 20307 37329 39069 35843 25972 30340 26435 21033 65292 28041 21450 25910 36153 26381 21153 65292 23558 33267 25552 21069 |30|_ 22825 30340 26102 38388 36890 36807 30005 23376 37038 20214 30340 24418 24335 36890 30693 24080 25143 12290 20116 12289 26381 21153 32456 27490 26377 19979 21015 24773 24418 20043 19968 30340 65292 20113 34633 30693 32593 31449 26377 26435 38543 26102 26242 20572 12289 32456 27490 12289 21462 28040 25110 25298 32477 24080 25143 26381 21153 12290 |1|__ 24080 25143 36829 21453 20102 27492 21327 35758 25110 24050 22312 32422 23450 33539 22260 20869 30340 20219 19968 26465 27454 65307 |2|__ 26681 25454 27492 21327 35758 30456 20851 35828 26126 32780 32456 27490 26381 21153 65307 |3|__ 21033 29992 20113 34633 30693 32593 31449 30340 21457 24067 21151 33021 28389 21457 37325 22797 20449 24687 65307 |4|__ 26410 32463 35831 27714 25110 25480 26435 21521 20113 34633 30693 32593 31449 24080 25143 21457 36865 22823 37327 19982 19994 21153 19981 30456 20851 30340 20449 24687 65307 |5|__ 20882 29992 20854 20182 20225 19994 30340 21517 20041 21457 24067 21830 19994 20449 24687 65292 36827 34892 21830 19994 27963 21160 65307 |6|__ 25915 20987 20113 34633 30693 32593 31449 30340 25968 25454 12289 32593 32476 25110 26381 21153 65307 |7|__ 30423 29992 20182 20154 22312 20113 34633 30693 32593 31449 19978 30340 24080 25143 21517 21644 23494 30721 12290 20197 19979 20449 24687 26159 20005 26684 31105 27490 24182 32477 23545 32456 27490 24080 25143 26381 21153 65292 21516 26102 19981 36864 22238 36141 20080 36153 29992 30340 65306 |1|__ 26377 20851 23447 25945 12289 31181 26063 25110 24615 21035 30340 36140 25439 35328 36766 65307 |2|__ 39578 25200 12289 28389 29992 25110 23041 32961 20854 20182 24080 25143 65307 |3|__ 20405 29359 20219 20309 31532 19977 26041 33879 20316 26435 12289 19987 21033 12289 21830 26631 12289 21830 19994 31192 23494 25110 20854 23427 19987 26377 26435 21033 12289 21457 34920 26435 25110 38544 31169 26435 30340 20449 24687 65307 |4|__ 20854 23427 20219 20309 36829 21453 20114 32852 32593 30456 20851 27861 24459 27861 35268 30340 20449 24687 12290 20845 12289 20113 34633 30693 29992 25143 30340 26435 21033 21644 20041 21153 |1|__ 20113 34633 30693 26381 21153 29983 25928 21518 65292 24080 25143 23601 21487 20139 21463 30456 24212 26381 21153 20869 23481 65307 |2|__ 20113 34633 30693 29992 25143 22312 20351 29992 20113 34633 30693 32593 31449 25552 20379 30340 30456 24212 26381 21153 26102 65292 24517 39035 20445 35777 36981 23432 24403 22320 21450 20013 22269 26377 20851 27861 24459 27861 35268 30340 35268 23450 65307 19981 24471 21033 29992 35813 32593 31449 36827 34892 20219 20309 38750 27861 27963 21160 65307 36981 23432 25152 26377 19982 20351 29992 35813 32593 31449 26377 20851 30340 21327 35758 12289 35268 23450 12289 31243 24207 21644 24815 20363 65307 |3|__ 20113 34633 30693 29992 25143 23545 36755 20837 25968 25454 30340 20934 30830 24615 12289 21487 38752 24615 12289 21512 27861 24615 12289 36866 29992 24615 31561 36127 36131 65307 19971 12289 20113 34633 30693 30340 26435 21033 21644 20041 21153 |1|__ 20113 34633 30693 23613 26368 22823 21162 21147 26469 20445 35777 26381 21153 30340 27491 24120 35775 38382 20197 21450 25968 25454 30340 22791 20221 12290 |2|__ 20113 34633 30693 20026 25910 36153 29992 25143 25552 20379 30456 24212 30340 21672 35810 12289 25216 26415 25903 25345 31561 26381 21153 12290 |3|__ 23545 20110 22240 19981 21487 25239 21147 36896 25104 30340 26381 21153 20013 26029 12289 38142 25509 21463 38459 25110 20854 20182 32570 38519 21253 25324 20294 19981 38480 20110 33258 28982 28798 23475 12289 31038 20250 20107 20214 20197 21450 22240 32593 31449 25152 20855 26377 30340 29305 27530 24615 36136 32780 20135 29983 30340 21253 25324 31995 32479 23849 28291 12289 25968 25454 20002 22833 12289 40657 23458 25915 20987 12289 30005 20449 37096 38376 25216 26415 35843 25972 23548 33268 30340 24433 21709 12289 25919 24220 31649 21046 32780 36896 25104 30340 26242 26102 24615 20851 38381 22312 20869 30340 20219 20309 24433 21709 32593 32476 27491 24120 36816 33829 30340 22240 32032 65292 20113 34633 30693 32593 31449 19981 25215 25285 20219 20309 36131 20219 65292 20294 23558 23613 21147 20943 23569 22240 27492 32780 32473 20250 21592 36896 25104 30340 25439 22833 21644 24433 21709 65307 |4|__ 20113 34633 30693 32593 31449 23545 29992 25143 22240 20351 29992 20113 34633 30693 26381 21153 32780 36896 25104 30340 25439 22833 19981 36127 27861 24459 36131 20219 12290 19981 35770 20160 20040 24773 20917 19979 23545 29992 25143 22240 20351 29992 20113 34633 30693 26381 21153 32780 36896 25104 30340 30452 25509 12289 38388 25509 12289 20598 23572 30340 12289 29305 27530 30340 24809 32602 24615 30340 25439 23475 25110 20854 20182 19968 20999 25439 23475 27010 19981 36127 27861 24459 36131 20219 65307 |5|__ 22914 22240 20113 34633 30693 21407 22240 65292 36896 25104 26381 21153 30340 19981 27491 24120 20013 26029 65292 38738 23707 24687 22756 19981 25215 25285 20219 20309 36131 20219 65292 38738 23707 24687 22756 20063 19981 25215 25285 30001 27492 33268 20351 20250 21592 33945 21463 30340 20854 23427 26041 38754 30340 36830 24102 25439 22833 65307 20843 12289 38544 31169 19982 20445 23494 |1|__ 24744 27880 20876 26102 25152 22635 20889 30340 20010 20154 20449 24687 20165 38480 20110 38738 23707 24687 22756 19982 24744 20043 38388 32852 31995 20351 29992 65292 38738 23707 24687 22756 19981 24471 23558 20854 29992 20110 21830 19994 30446 30340 12290 |2|__ 24744 36890 36807 20113 34633 30693 20135 29983 30340 20219 20309 25968 25454 37117 23646 20110 24744 25152 26377 12290 38500 38750 24744 20027 21160 35201 27714 25105 20204 21327 21161 24744 25490 26597 38382 39064 65292 21542 21017 38738 23707 24687 22756 30340 25152 26377 21592 24037 26080 26435 26597 30475 12289 32534 36753 12289 22797 21046 12289 21024 38500 24744 30340 20219 25968 25454 12290 20061 12289 26368 32456 35299 37322 26435 38738 23707 24687 22756 32593 32476 20449 24687 26377 38480 20844 21496 23545 20113 34633 30693 20445 26377 25152 26377 27963 21160 12289 38480 21046 31561 30340 26368 32456 35299 37322 26435 12290 20813 36153 31449 28857 65306 |3|__ 20010 20813 36153 31354 38388 65306 100m_ 27599 26376 20813 36153 27969 37327 65306 10g__','{\"category\":\"\",\"alias\":\"\"}','2014-08-25 15:06:50','2018-04-28 16:34:04','normal','zh-cn'),('4','product','3','',' 65306','{\"category\":\"\",\"alias\":\"\"}','2018-04-24 17:59:16','2018-04-24 17:59:16','normal','zh-cn'),('5','article','14',' 22823 20247 37096',' 21448 31216 22307 22823 20247 37096 65292 26159 23567 20056 20108 21313 37096 20043 19968 65292 19982 19978 24231 37096 24182 20026 26368 21021 30340 20004 22823 37096 12290 25454 12298 24322 37096 23447 36718 35770 12299 25152 35760 36733 65292 20315 38464 20837 28781 30334 20313 24180 65292 22823 22825 27604 19992 25552 20986 20116 26465 25945 20041 21518 65292 20135 29983 36190 25104 30340 38761 26032 27966 27604 19992 65292 19982 21453 23545 30340 20445 23432 27966 27604 19992 12290 20004 27966 20114 30456 25239 20105 65292 21069 32773 36930 32467 25104 22823 20247 37096 65292 21518 32773 21017 32467 25104 19978 24231 37096 12290 22823 20247 37096 20027 35201 20027 24352 26377 65306 20315 36523 26080 28431 12289 33394 36523 26080 36793 12289 20315 23551 26080 37327 65292 24182 35748 20026 29983 27515 25110 28037 27075 30342 20026 20551 21517 65292 20154 20043 24515 24615 26412 26469 28165 20928 65292 28982 30001 20110 21160 25671 20043 25925 32780 21463 27745 26579 65292 27492 21363 21518 19990 22823 20056 20315 25945 24605 24819 30340 20808 39537 12290 27492 22806 21448 20027 24352 8220 29616 22312 23454 26377 12289 36807 26410 26080 20307 8221 20165 26377 29616 22312 26159 30495 27491 30340 23384 22312 65292 20174 32780 19982 19978 24231 37096 30340 8220 19977 19990 23454 26377 12289 27861 20307 24658 26377 8221 20043 35828 24418 25104 23545 31435 12290 26412 27966 20197 22830 23835 22810 32599 22269 20026 22522 22320 32780 21521 22235 26041 20256 24067 65292 21021 26102 23578 19988 19968 21619 21644 21512 65292 28982 32780 21040 20102 21518 19990 65292 21017 28176 28176 20998 35010 65292 20808 21518 34893 20986 19968 35828 37096 12289 35828 20986 19990 37096 12289 40481 32996 37096 12289 22810 38395 37096 12289 35828 20551 37096 12289 21046 22810 23665 37096 12289 35199 23665 20303 37096 12289 21271 23665 20303 37096 31561 65292 21512 20854 26412 37096 65292 20849 20026 20061 37096 27966 12290','{\"category\":\"\",\"alias\":\"\"}','2018-04-25 16:55:00','2018-04-25 16:55:24','normal','zh-cn'),('6','article','15',' 19968 35828 37096',' 23567 20056 20108 21313 37096 20043 19968 65292 23646 22823 20247 37096 31995 30340 23398 27966 12290 12298 25991 27530 24072 21033 38382 32463 12299 35793 20026 8220 25191 19968 35821 35328 37096 8221 65292 12298 24322 37096 23447 36718 35770 12299 12289 12298 37096 25191 24322 35770 12299 12289 12298 21313 20843 37096 35770 12299 31561 35793 20026 8220 19968 35828 37096 8221 12290 12298 24322 37096 23447 36718 35770 36848 35760 12299 35859 65306 8220 19968 35828 37096 65292 27492 37096 35828 19990 12289 20986 19990 27861 30342 26080 23454 20307 65292 20294 26377 20551 21517 65292 21517 21363 26159 35828 24847 65292 35859 35832 27861 21807 19968 20551 21517 65292 26080 20307 21487 24471 65292 21363 20054 26412 26088 12290 25152 20197 21035 20998 21517 19968 35828 37096 65292 20174 25152 31435 20026 21517 20063 12290 8221 19968 33324 35748 20026 26159 20315 38464 20837 28781 |200| 24180 38388 65292 20174 22823 20247 37096 20998 20986 30340 65292 20027 35201 39539 26021 22823 20247 37096 8220 29616 22312 26377 20307 65292 36807 26410 26080 20307 8221 30340 35828 27861 65292 21542 35748 26377 8220 21807 19968 21049 37027 8221 30340 29616 22312 27861 65292 24378 35843 8220 35832 27861 26080 26377 23454 20307 65292 21807 26377 20551 21517 12290 8221','{\"category\":\"\",\"alias\":\"\"}','2018-04-25 16:55:00','2018-04-25 16:55:44','normal','zh-cn'),('7','article','16',' 22235 22823',' &nbsp &nbsp 25351 26500 25104 19968 20999 29289 36136 30340 22235 31181 35201 32032 65292 21448 21517 8220 22235 22823 31181 8221 12289 8220 22235 30028 8221 65292 21363 65306 22320 22823 12289 27700 22823 12289 28779 22823 12289 39118 22823 12290 36825 22235 31181 20803 32032 36941 23384 20110 19968 20999 29289 36136 65292 22240 27492 31216 20026 8220 22823 8221 12290 8220 22235 22823 8221 30340 29702 35770 26159 21476 21360 24230 20154 23545 29289 36136 19990 30028 30340 20256 32479 35748 35782 65292 34987 20315 25945 21152 20197 21560 25910 25913 36896 20043 21518 65292 20135 29983 26032 30340 29702 35299 65292 35748 20026 19968 20999 29289 36136 21644 20154 36523 37117 26159 30001 22235 22823 25152 26500 25104 65292 24182 20197 27492 26469 35828 26126 26080 24120 12289 26080 25105 30340 29702 24565 12290','{\"category\":\"\",\"alias\":\"\"}','2018-04-25 16:56:00','2018-04-25 16:56:28','normal','zh-cn'),('8','article','17',' 8220 30334 23546 35762 22530 8221 20030 34892 31532 20843 35762 12298 27001 32852 25709 35848 12299',' &nbsp &nbsp &nbsp &nbsp |2018| 24180 |3|__ 26376 |25|_ 26085 19979 21320 65292 8220 30334 23546 35762 22530 8221 36814 26469 20102 31532 20843 35762 12290 19978 28023 27001 32852 23398 20250 26472 20808 22269 25945 25480 20316 20102 39064 20026 12298 27001 32852 25709 35848 12299 30340 35762 24231 65292 19978 28023 39640 26657 20195 34920 20197 21450 38745 23433 23546 25252 27861 21892 20449 25968 30334 20154 35748 30495 32838 21548 20102 35762 24231 12290 19978 28023 38745 23433 23546 30417 38498 20122 34164 27861 24072 20027 25345 35762 24231 12290 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 26472 20808 22269 25945 25480 20174 8220 26368 29420 29305 30340 25991 23398 26679 24335 8221 12289 8220 23545 32852 30340 35268 21017 65288 32852 24459 65289 8221 12289 8220 23545 32852 30340 31181 31867 8221 19977 20010 26041 38754 23637 24320 35762 24231 65292 36890 36807 24341 20154 20837 32988 30340 20363 35777 65292 32473 22823 23478 35762 35299 20102 27001 32852 30340 22522 26412 30693 35782 12290 35762 24231 20013 65292 26472 25945 25480 20174 8220 23383 21477 30456 31561 12289 35789 24615 30456 23545 12289 32467 26500 30456 21516 12289 33410 25293 30456 24212 12289 24179 20164 30456 35856 12289 20869 23481 30456 20851 8221 20960 28857 20998 26512 20102 23545 32852 30340 35268 21017 65292 24182 23601 23545 32852 30340 31181 31867 36827 34892 20102 26049 24449 21338 24341 24335 30340 20998 20139 12290 20004 20010 23567 26102 30340 35762 24231 65292 21548 20247 20852 36259 30414 28982 12289 21463 30410 21290 27973 12290 &nbsp &nbsp &nbsp 8220 30334 23546 35762 22530 8221 26159 30001 19990 30028 20315 25945 24344 27861 21327 20250 20250 38271 12289 20315 25945 19977 34255 30740 31350 38498 38498 38271 12289 19978 28023 38745 23433 23546 20303 25345 24935 26126 22823 21644 23578 25552 35758 65292 20315 25945 30334 23546 22522 37329 21644 19978 28023 32769 25945 25480 21327 20250 32852 21512 20027 21150 30340 65292 20197 8220 20256 25773 30693 35782 65292 22686 38271 26234 24935 65292 24184 31119 20154 29983 65292 21033 30410 31038 20250 8221 20026 23447 26088 26381 21153 22823 20247 30340 20844 30410 24615 35762 22530 12290 20174 |2017| 24180 |10|_ 26376 24320 22987 65292 27599 26376 23558 23450 26399 20030 21150 20004 27425 19987 39064 35762 24231 65292 20869 23481 33539 22260 28085 30422 31038 20250 12289 21382 21490 12289 21746 23398 12289 25991 23398 12289 32463 27982 12289 33258 28982 31185 23398 12289 21307 23398 20859 29983 31561 31561 65292 24344 25196 20013 22269 20248 31168 20256 32479 25991 21270 65292 20256 25773 20154 25991 31038 31185 33258 28982 21508 31867 30693 35782 65292 27599 26399 35762 24231 37117 20250 36890 36807 24494 20449 20844 20247 24179 21488 25552 21069 36890 30693 65292 19982 22823 20247 24191 32467 21892 32536 12290','{\"category\":\"\",\"alias\":\"\"}','2018-04-25 16:59:00','2018-04-25 16:59:40','normal','zh-cn'),('9','article','18',' |2013| 24180 |9|__ 26376 |15|_ 26085 20315 23398 35762 24231 39044 21578',' |2013| 24180 |9|__ 26376 |15|_ 26085 65292 21608 26085 19979 21320 |2|__ 28857 33267 |4|__ 28857 22312 26412 23546 33324 33509 35762 22530 20030 34892 31119 24935 21452 20462 26085 20315 23398 35762 24231 12290 20027 35762 27861 24072 65306 19978 28023 20315 23398 38498 21360 25991 27861 24072 24320 31034 39064 30446 65306 19977 30344 20381 30340 24847 20041 29305 27492 36890 21578 65281','{\"category\":\"\",\"alias\":\"\"}','2018-04-25 17:01:00','2018-04-25 17:01:23','normal','zh-cn'),('15','product','4','',' |111| 20351 29992 32773 65306 20351 29992 26102 38388 65306 21040 26399 26102 38388 65306','{\"category\":\"\",\"alias\":\"\"}','2018-04-25 17:32:54','2018-04-28 16:33:57','offline','zh-cn'),('14','product','1','',' 34633 30693 20225 19994 38376 25143 31995 32479 26159 19968 27454 19987 21521 20225 19994 33829 38144 20351 29992 30340 20225 19994 38376 25143 31995 32479 65292 20225 19994 20351 29992 34633 30693 31995 32479 21487 20197 38750 24120 26041 20415 22320 25645 24314 19968 20010 19987 19994 30340 20225 19994 33829 38144 32593 31449 65292 36827 34892 23459 20256 65292 24320 23637 19994 21153 65292 26381 21153 23458 25143 12290 20851 20110 34633 30693 20225 19994 38376 25143 31995 32479 chanzhieps 34633 30693 20225 19994 38376 25143 31995 32479 26159 30001 19994 20869 36164 28145 24320 21457 22242 38431 24320 21457 30340 19968 27454 19987 21521 20225 19994 33829 38144 20351 29992 30340 20225 19994 38376 25143 31995 32479 65292 20225 19994 20351 29992 34633 30693 31995 32479 21487 20197 38750 24120 26041 20415 22320 25645 24314 19968 20010 19987 19994 30340 20225 19994 33829 38144 32593 31449 65292 36827 34892 23459 20256 65292 24320 23637 19994 21153 65292 26381 21153 23458 25143 12290 34633 30693 31995 32479 20869 32622 20102 25991 31456 12289 20135 21697 12289 35770 22363 12289 35780 35770 12289 20250 21592 12289 21338 23458 12289 24110 21161 31561 21151 33021 65292 21516 26102 36824 21487 20197 21644 24494 20449 36827 34892 38598 25104 32465 23450 12290 21151 33021 20016 23500 23454 29992 65292 21518 21488 25805 20316 31616 27905 26041 20415 12290 34633 30693 31995 32479 36824 20869 32622 20102 25628 32034 24341 25806 20248 21270 24517 22791 30340 21151 33021 65292 27604 22914 20851 38190 35789 65292 25688 35201 65292 31449 28857 22320 22270 65292 21451 22909 36335 24452 31561 65292 20351 29992 34633 30693 31995 32479 21487 20197 38750 24120 26041 20415 30340 25645 24314 23545 25628 32034 24341 25806 21451 22909 30340 32593 31449 12290 20026 20160 20040 21483 20570 34633 30693 65311 34633 26159 20013 22269 20256 32479 30340 21513 31077 29289 20043 19968 65292 35937 24449 30528 38395 36798 21644 36130 23500 65292 38750 24120 31526 21512 20225 19994 20316 20026 30408 21033 32452 32455 30340 29305 28857 12290 25152 20197 25105 20204 20026 36825 22871 31995 32479 36215 21517 20026 34633 30693 65292 24076 26395 36890 36807 36825 27454 24320 28304 20813 36153 30340 31995 32479 21487 20197 24110 21161 20247 22810 30340 20013 23567 20225 19994 24555 36895 26041 38754 30340 24314 31435 33258 24049 30340 20225 19994 32593 31449 65292 36827 34892 23459 20256 33829 38144 12290 20026 20160 20040 26469 20570 34633 30693 65311 34633 30693 22242 38431 36824 26377 20854 20182 30340 24320 28304 20135 21697 65292 25105 20204 22312 32500 25252 33258 24049 30340 20135 21697 30340 26102 20505 65292 20063 23384 22312 36825 26679 30340 38656 27714 65306 25105 20204 38656 35201 19968 20010 32593 31449 26469 23545 20135 21697 36827 34892 23459 20256 65292 33021 22815 32473 29992 25143 25552 20379 25216 26415 25903 25345 65292 26041 20415 29992 25143 19979 36733 31561 31561 12290 25105 20204 20063 26366 32463 24819 29992 24066 38754 19978 30340 20854 20182 cms__ 31995 32479 26469 25645 24314 65292 20294 21518 26469 21457 29616 35201 20570 22823 37327 30340 25913 21160 23450 21046 65292 36824 19981 22914 33258 24049 20889 19968 20010 12290 25152 20197 25105 20204 22312 22235 24180 22810 30340 26102 38388 37324 38754 19968 28857 28857 30340 23436 21892 33258 24049 30340 20135 21697 32593 31449 12290 19982 27492 21516 26102 25105 20204 22312 21644 23458 25143 25509 35302 30340 26102 20505 65292 21457 29616 20225 19994 30340 32593 31449 22823 37117 19981 25954 24685 32500 65306 25216 26415 38472 26087 12289 36733 20837 36895 24230 32531 24930 12289 19981 21033 20110 seo__ 12289 21518 21488 26214 28073 38590 25026 12290 20110 26159 25105 20204 23601 20135 29983 20102 20570 19968 20010 20225 19994 38376 25143 31995 32479 26469 35299 20915 36825 20010 38382 39064 30340 24819 27861 65292 20110 26159 23601 26159 20102 34633 30693 36825 20010 20135 21697 12290 20026 20160 20040 20197 24320 28304 30340 26041 24335 26469 21457 24067 65311 34633 30693 28304 20195 30721 23436 20840 24320 25918 65292 19981 38480 21046 21830 29992 12290 25105 20204 20043 25152 20197 22362 25345 20197 24320 28304 30340 26041 24335 26469 21457 24067 34633 30693 31995 32479 65292 26159 22240 20026 25105 20204 22362 20449 24320 25918 25165 26159 27491 36947 12290 21482 26377 24320 25918 30340 31995 32479 25165 26356 20855 26377 29983 21629 21147 65292 29992 25143 20351 29992 36215 26469 25165 26356 21152 25918 24515 12290 20026 20160 20040 36873 25321 34633 30693 38376 25143 31995 32479 26469 25645 24314 20225 19994 32593 31449 65311 29616 22312 20570 19968 20010 20225 19994 33829 38144 32593 31449 21487 20197 26377 24456 22810 36873 25321 65292 27604 22914 20351 29992 22269 22806 24320 28304 30340 wordpress dupal jommla 31561 12290 22269 20869 30340 26377 dedecms phpcms 31561 cms__ 31995 32479 12290 36824 26377 24456 22810 22312 32447 24314 31449 30340 20844 21496 12290 22914 26524 36153 29992 20805 36275 30340 35805 65292 21487 20197 36873 25321 24314 31449 20844 21496 26469 20570 65288 24314 31449 20844 21496 20063 26159 20351 29992 19978 36848 30340 36825 20123 31995 32479 26469 24110 20320 25645 24314 65292 27604 36739 22353 65289 12290 37027 20040 34633 30693 31995 32479 21644 36825 20123 31995 32479 30456 27604 26377 20160 20040 29305 28857 21602 65311 1.___ 39318 20808 65292 25105 20204 26159 19987 38376 20570 20225 19994 33829 38144 32593 31449 12290 29616 22312 20570 32593 31449 65292 37117 26159 22312 cms__ 31995 32479 19978 38754 25913 12290 32780 34633 30693 31995 32479 26159 19987 38376 38754 21521 20225 19994 33829 38144 32593 31449 30340 65292 25152 20197 21151 33021 26356 20855 26377 38024 23545 24615 12290 25105 20204 20869 32622 20102 25991 31456 12289 20135 21697 12289 20250 21592 12289 35770 22363 12289 35780 35770 12289 24110 21161 12289 21338 23458 31561 35832 22810 21151 33021 65292 23436 20840 21487 20197 24212 23545 20225 19994 33829 38144 32593 31449 30340 21508 31181 38656 27714 12290 34633 30693 31995 32479 29305 21035 37325 35270 25628 32034 24341 25806 20248 21270 65292 20869 32622 20102 20851 38190 35789 31649 29702 12289 25688 35201 12289 31449 28857 22320 22270 31561 21151 33021 12290 21516 26102 21482 35201 29615 22659 25903 25345 url__ 37325 20889 65292 23601 21487 20197 29983 25104 25628 32034 24341 25806 38750 24120 21916 27426 30340 36335 24452 32467 26500 65292 27604 22914 /news/123.html 36825 26679 30340 36335 24452 12290 34633 30693 31995 32479 21518 32493 20250 20869 32622 22522 26412 30340 32479 35745 25968 25454 65292 21738 24597 32593 31449 21482 26377 19968 20010 29992 25143 35775 38382 65292 20063 35201 35753 24744 28165 28165 26970 26970 30340 30693 36947 32593 31449 26377 20154 22312 35775 38382 12290 36825 26679 32593 31449 19981 20877 26159 27515 30340 30340 32593 31449 12290 2.___ 20854 27425 65292 34633 30693 31995 32479 26159 30495 27491 30340 24320 28304 20813 36153 34633 30693 31995 32479 26159 30446 21069 21807 19968 24320 28304 20813 36153 30340 20225 19994 38376 25143 31995 32479 12290 34633 30693 31995 32479 20197 lgpl_ 21327 35758 21457 24067 65292 20195 30721 23436 20840 24320 25918 65292 26159 30495 27491 30340 24320 28304 12290 65288 26377 24456 22810 21495 31216 24320 28304 30340 cms__ 31995 32479 65292 20854 23454 37117 26159 20551 30340 12290 34633 30693 31995 32479 19981 38480 21046 21830 29992 65292 20063 19981 20250 20026 20102 25512 25105 20204 21518 32493 30340 19968 20123 25910 36153 21151 33021 25110 32773 26381 21153 25925 24847 30340 22312 20135 21697 20013 20570 24456 22810 38480 21046 12290 3.___ 34633 30693 31995 32479 25216 26415 20808 36827 65292 27880 37325 29992 25143 20307 39564 34633 30693 31995 32479 20351 29992 33258 20027 24320 21457 30340 26694 26550 25645 24314 65292 26550 26500 26356 21152 21512 29702 12290 20869 32622 23436 21892 30340 25193 23637 26426 21046 65292 26041 20415 20225 19994 21518 32493 30340 20108 27425 24320 21457 12290 34633 30693 31995 32479 30340 39318 35201 23450 20301 26159 24110 21161 20225 19994 35299 20915 33829 38144 38382 39064 65292 24403 33829 38144 38382 39064 35299 20915 20043 21518 65292 20225 19994 20250 32771 34385 22312 34633 30693 31995 32479 19978 25645 24314 33258 24049 30340 19994 21153 31995 32479 65292 27604 22914 25253 21517 12289 35746 21333 20043 31867 30340 19994 21153 12290 36825 26102 20505 22312 34633 30693 31995 32479 22522 30784 19978 36827 34892 20108 27425 24320 21457 26159 38750 24120 23481 26131 30340 20107 24773 12290 34633 30693 22242 38431 19981 26029 30340 23398 20064 19994 20869 20808 36827 30340 35774 35745 29702 24565 65292 32473 22823 23478 25552 20379 31616 27905 26041 20415 30340 20135 21697 12290 4.___ 20351 29992 25903 25345 26377 20445 38556 21035 20154 20570 24320 28304 65292 20063 35768 21482 26159 20852 36259 12290 32780 25105 20204 20570 24320 28304 65292 26159 19987 32844 22312 20570 65292 20197 27491 35268 30340 20844 21496 24418 24335 26469 36816 20316 12290 25105 20204 26377 23558 36817 21313 24180 30340 24320 28304 36719 20214 24320 21457 21644 32500 25252 32463 39564 65292 23545 24320 28304 36719 20214 30340 21518 32493 24320 21457 12289 25903 25345 26377 20016 23500 30340 32463 39564 12290 25105 20204 22242 38431 21644 31995 32479 36275 22815 24320 25918 65292 21518 32493 25105 20204 20250 30528 25163 25171 36896 19968 20010 38754 21521 20225 19994 33829 38144 24066 22330 30340 23567 29983 24577 31995 32479 65292 21560 24341 31532 19977 26041 30340 35774 35745 24072 12289 32593 31449 24314 35774 20844 21496 21442 19982 12290 so___ 65292 19981 35201 20877 29369 35947 65292 26032 26102 20195 20570 20225 19994 33829 38144 65292 39318 36873 34633 30693 38376 25143 31995 32479 65292 38752 35889 65281 34633 30693 20225 19994 38376 25143 31995 32479 php__ 65306 &gt__ 5.2mysql 65306 &gt__ 4.0__ 26381 21153 22120 65306 apache/ngix 20215 26684 65306 20813 36153','{\"category\":\"\",\"alias\":\"chanzhi\"}','2014-08-25 14:31:29','2018-04-28 16:32:30','offline','zh-cn'),('17','product','5','',' 65306','{\"category\":\"\",\"alias\":\"\"}','2018-04-28 16:47:23','2018-04-28 16:47:23','normal','zh-cn'),('18','product','12','',' 65306','{\"category\":\"\",\"alias\":\"\"}','2018-04-28 17:08:27','2018-04-28 17:08:27','normal','zh-cn'),('19','product','2342342','',' 65306','{\"category\":\"\",\"alias\":\"\"}','2018-04-28 17:50:52','2018-04-28 17:50:52','normal','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_slide`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_slide` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `group` smallint(5) unsigned NOT NULL,
  `title` varchar(60) NOT NULL,
  `titleColor` char(10) NOT NULL,
  `mainLink` varchar(255) NOT NULL,
  `target` enum('0','1') NOT NULL DEFAULT '0',
  `backgroundType` char(20) NOT NULL,
  `backgroundColor` char(10) NOT NULL,
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL,
  `label` varchar(255) NOT NULL,
  `buttonClass` varchar(255) NOT NULL,
  `buttonUrl` varchar(255) NOT NULL,
  `buttonTarget` varchar(30) NOT NULL,
  `summary` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group` (`group`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_slide`(`id`,`group`,`title`,`titleColor`,`mainLink`,`target`,`backgroundType`,`backgroundColor`,`height`,`image`,`label`,`buttonClass`,`buttonUrl`,`buttonTarget`,`summary`,`createdDate`,`order`,`lang`) VALUES('1','15','蝉知，专注企业营销!','#FFF','','0','color','#FF9400','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/dynamic\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>功能完备：文章、产品、论坛、手册、留言、评论、博客...</li>
<li>全网营销：一个网站，电脑、手机、微信体验俱佳！</li>
<li>集成微信：内置微信公众平台功能，移动互联，我来做主！</li>
<li>完美SEO：全方位针对搜索引擎优化，轻松斩获最佳排名！</li>
</ul>
</div>','2015-07-16 15:27:24','1','zh-cn'),('2','15','蝉知，定制性最强！','#FFF','','0','color','#2286D2','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/download\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>底层框架自主开发，结构先进灵活；</li>
<li>自主开发UI框架，更适合国人习惯；</li>
<li>内置扩展机制，方便企业定制开发；</li>
</ul>
</div>','2015-07-16 15:43:14','2','zh-cn'),('3','15','蝉知，真开源真免费!','#FFF','','0','color','#D92958','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/download\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>国内第一款开源企业门户系统;</li>
<li>授权宽松，商业友好，代码开放;</li>
<li>免费下载，免费使用，不限制商用！</li>
</ul>
</div>','2015-07-16 15:45:40','3','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_statlog`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_statlog` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `referer` int(8) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `url` text NOT NULL,
  `link` text NOT NULL,
  `searchEngine` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `visitor` int(8) NOT NULL,
  `osName` varchar(100) NOT NULL,
  `browserName` varchar(100) NOT NULL,
  `browserVersion` varchar(100) NOT NULL,
  `ip` char(40) NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `account` char(30) NOT NULL,
  `year` char(4) NOT NULL,
  `month` char(6) NOT NULL,
  `day` char(8) NOT NULL,
  `hour` char(10) NOT NULL DEFAULT '0',
  `new` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `mobile` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`),
  KEY `referer` (`referer`),
  KEY `searchEngine` (`searchEngine`),
  KEY `keywords` (`keywords`),
  KEY `time` (`year`,`month`,`day`,`hour`),
  KEY `location` (`country`,`province`,`city`),
  KEY `mobile` (`mobile`),
  KEY `lang` (`lang`),
  KEY `month_lang` (`month`,`lang`),
  KEY `day_lang` (`day`,`lang`),
  KEY `hour_lang` (`hour`,`lang`),
  KEY `osName` (`osName`),
  KEY `browserName` (`browserName`),
  KEY `year` (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_statreferer`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_statreferer` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `domain` varchar(200) NOT NULL,
  `searchEngine` char(30) NOT NULL,
  `keywords` char(100) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`(255)),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_statregion`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_statregion` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `timeType` enum('year','month','day','hour') NOT NULL DEFAULT 'hour',
  `timeValue` char(10) NOT NULL DEFAULT '0',
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pv` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `uv` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `ip` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `region` (`country`,`province`,`city`),
  KEY `time` (`timeType`,`timeValue`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_statreport`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_statreport` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(30) NOT NULL,
  `item` char(100) NOT NULL DEFAULT '0',
  `extra` text NOT NULL,
  `timeType` enum('year','month','day','hour') NOT NULL DEFAULT 'hour',
  `timeValue` char(10) NOT NULL DEFAULT '0',
  `pv` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `uv` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `ip` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `time` (`timeType`,`timeValue`),
  KEY `type` (`type`,`item`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_statvisitor`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_statvisitor` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `osName` varchar(100) NOT NULL,
  `osVersion` varchar(100) NOT NULL,
  `browserName` varchar(100) NOT NULL,
  `browserVersion` varchar(100) NOT NULL,
  `browserLanguage` varchar(100) NOT NULL,
  `device` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `createdTime` datetime NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `osName` (`osName`),
  KEY `browsername` (`browserName`),
  KEY `device` (`device`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_tag`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_tag` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `rank` smallint(5) unsigned NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `tag` (`tag`),
  KEY `rank` (`rank`),
  KEY `link` (`link`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_tag`(`id`,`tag`,`link`,`rank`,`lang`) VALUES('1','安全cms','','1','zh-cn'),('2','企业建站系统','','5','zh-cn'),('3','企业门户','','4','zh-cn'),('4','开源csm','','1','zh-cn'),('5','蝉知空间','','1','zh-cn'),('6','蝉知企业门户系统','','3','zh-cn'),('7','蝉知','','1','zh-cn'),('8','企业建站','','2','zh-cn'),('9','开源CMS','','5','zh-cn'),('10','免费cms','','4','zh-cn'),('11','微信营销系统','','1','zh-cn'),('12','微网站','','1','zh-cn'),('13','移动建站','','1','zh-cn'),('14','手机建站系统','','1','zh-cn'),('15','微信网站','','1','zh-cn'),('16','免费企业建站','','1','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_thread`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_thread` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `board` mediumint(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discussion` enum('0','1') NOT NULL DEFAULT '0',
  `color` char(10) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `views` smallint(5) unsigned NOT NULL DEFAULT '0',
  `stick` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `stickTime` datetime NOT NULL,
  `stickBold` enum('0','1') NOT NULL DEFAULT '0',
  `replies` smallint(6) NOT NULL,
  `repliedBy` varchar(30) NOT NULL,
  `repliedDate` datetime NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `lang` char(30) NOT NULL,
  `status` char(10) NOT NULL,
  `ip` char(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `category` (`board`),
  KEY `hidden` (`hidden`),
  KEY `status` (`status`),
  KEY `addedDate` (`addedDate`),
  KEY `stick` (`stick`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_thread`(`id`,`board`,`title`,`discussion`,`color`,`content`,`author`,`editor`,`addedDate`,`editedDate`,`readonly`,`views`,`stick`,`stickTime`,`stickBold`,`replies`,`repliedBy`,`repliedDate`,`replyID`,`hidden`,`link`,`lang`,`status`,`ip`) VALUES('1','5','asdfasdf','0','','adsfasdf','demo','','2014-09-02 18:27:35','2014-09-02 18:27:35','0','14','0','0000-00-00 00:00:00','0','0','','2014-09-02 18:27:35','0','0','','zh-cn','','');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_user`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `realnames` varchar(100) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `admin` enum('no','common','super') NOT NULL DEFAULT 'no',
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL,
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(40) NOT NULL DEFAULT '',
  `last` datetime NOT NULL,
  `score` mediumint(9) NOT NULL,
  `rank` mediumint(9) NOT NULL,
  `maxLogin` tinyint(4) NOT NULL DEFAULT '10',
  `fails` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL,
  `join` datetime NOT NULL,
  `reset` char(64) NOT NULL,
  `locked` datetime NOT NULL,
  `public` varchar(30) NOT NULL DEFAULT '0',
  `emailCertified` enum('0','1') NOT NULL DEFAULT '0',
  `security` text,
  `notification` varchar(20) NOT NULL DEFAULT '',
  `os` char(30) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `admin` (`admin`),
  KEY `score` (`score`),
  KEY `rank` (`rank`),
  KEY `account` (`account`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_user`(`id`,`account`,`password`,`realname`,`realnames`,`nickname`,`admin`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`site`,`mobile`,`phone`,`company`,`address`,`zipcode`,`visits`,`ip`,`last`,`score`,`rank`,`maxLogin`,`fails`,`referer`,`join`,`reset`,`locked`,`public`,`emailCertified`,`security`,`notification`,`os`,`browser`,`lang`) VALUES('1','admin','86f3059b228c8acf99e69734b6bb32cc','admin','','','super','','0000-00-00','u','','','','','','','','','','','','','6','127.0.0.1','2018-04-28 12:59:31','0','0','10','0','','2018-04-20 18:08:13','','0000-00-00 00:00:00','0','0','','','Windows 10','chrome 45','zh-cn'),('2','demo','629313c380e0defefbd6267651c72a9d','demo','','','super','','0000-00-00','u','','','','','','','','','','','','','0','14.159.71.121','0000-00-00 00:00:00','0','0','10','0','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','0','','','','','zh-cn'),('3','111','5adc46aae64b3d50d56603b94f2bd24d','111','','','no','','0000-00-00','u','111@qq.com','','','','','','','','','','','','2','127.0.0.1','2018-04-20 18:09:41','0','0','10','0','','2018-04-20 18:09:41','','0000-00-00 00:00:00','0','0','','','Windows 10','chrome 45','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_usergroup`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_usergroup` (
  `account` char(30) NOT NULL DEFAULT '',
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  UNIQUE KEY `account` (`account`,`group`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_widget`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_widget` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `type` char(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `params` text NOT NULL,
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `grid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accountAppOrder` (`account`,`order`),
  KEY `lang` (`lang`),
  KEY `hidden` (`hidden`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_widget`(`id`,`account`,`type`,`title`,`params`,`order`,`grid`,`hidden`,`lang`) VALUES('1','admin','latestOrder','最新订单','','1','4','0','zh-cn'),('2','admin','latestThread','最新帖子','','2','4','0','zh-cn'),('3','admin','message','反馈','','3','4','0','zh-cn'),('4','admin','submission','最新投稿','','4','4','0','zh-cn'),('5','admin','commonMenu','快捷入口','','5','4','0','zh-cn'),('6','admin','chanzhiDynamic','蝉知动态','','6','4','0','zh-cn');_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_wx_message`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_wx_message` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `wid` char(64) NOT NULL,
  `to` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `response` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `type` char(30) NOT NULL,
  `replied` tinyint(3) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `public` (`public`),
  KEY `from` (`from`),
  KEY `to` (`to`),
  KEY `replied` (`replied`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_wx_public`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_wx_public` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `appID` char(30) NOT NULL,
  `appSecret` char(32) NOT NULL,
  `url` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `primary` tinyint(3) NOT NULL DEFAULT '0',
  `type` enum('subscribe','service') NOT NULL,
  `status` enum('wait','normal') NOT NULL,
  `certified` enum('1','0') NOT NULL DEFAULT '0',
  `addedDate` datetime NOT NULL,
  `remindUsers` text NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
DROP TABLE IF EXISTS `eps_wx_response`;_ZDB_LINE_ENDER_
CREATE TABLE `eps_wx_response` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `key` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `type` enum('text','news','link') NOT NULL DEFAULT 'text',
  `source` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `lang` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`public`,`key`,`lang`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;_ZDB_LINE_ENDER_
