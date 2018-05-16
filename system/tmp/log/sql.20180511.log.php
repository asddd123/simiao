<?php
 die();
?>
20180511 12:37:14: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2018-05-11 12:37:14',`ip` = '127.0.0.1',`location` = '本机地址 本机地址  ',`browser` = 'chrome 45',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '10',`ip` = '127.0.0.1',`last` = '2018-05-11 12:37:14',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-04-20 18:08:13',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 45',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser` = 'chrome 45', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526013434',`lang` = 'all'

20180511 12:37:15: /admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no'
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY `date` desc  LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 

20180511 12:37:15: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-11 12:37:15' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-05-04 12:37:15' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-11 12:37:15' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-11 12:37:15' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526013435',`lang` = 'all'

20180511 12:37:15: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180511 12:37:15: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180511 12:43:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 12:49:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 12:55:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:01:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:07:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:13:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:19:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:25:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:31:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:37:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:43:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:49:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 13:55:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:01:50: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:07:50: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:10:05: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019005',`lang` = 'all'

20180511 14:10:14: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019014',`lang` = 'all'

20180511 14:10:22: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019022',`lang` = 'all'

20180511 14:10:58: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019058',`lang` = 'all'

20180511 14:11:39: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019099',`lang` = 'all'

20180511 14:11:59: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019119',`lang` = 'all'

20180511 14:13:59: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019239',`lang` = 'all'

20180511 14:14:26: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019266',`lang` = 'all'

20180511 14:14:53: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019293',`lang` = 'all'

20180511 14:18:57: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019537',`lang` = 'all'

20180511 14:18:59: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019539',`lang` = 'all'

20180511 14:20:12: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019612',`lang` = 'all'

20180511 14:20:41: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019641',`lang` = 'all'

20180511 14:20:52: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019652',`lang` = 'all'

20180511 14:21:01: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019661',`lang` = 'all'

20180511 14:21:10: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019670',`lang` = 'all'

20180511 14:22:20: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '1525622400',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:22:20',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 14:22:20',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019740',`lang` = 'all'

20180511 14:23:43: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '1525622400',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:23:43',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 14:23:43',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019823',`lang` = 'all'

20180511 14:24:32: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '1525708800',`endDate` = '1557244800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:24:32',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 14:24:32',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526019872',`lang` = 'all'

20180511 14:26:41: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526020001',`lang` = 'all'

20180511 14:33:14: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '1525622400',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:33:14',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '114' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '114',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '114' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '114',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '114' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '114'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-11 14:33:14',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526020394',`lang` = 'all'

20180511 14:34:37: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:40:37: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:46:37: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:52:37: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 14:54:39: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '1525622400',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:54:39',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '114' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '114',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '114' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '114',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '114' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '114'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-11 14:54:39',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021679',`lang` = 'all'

20180511 14:54:44: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '1525622400',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:54:44',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '114' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '114',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '114' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '114',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '114' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '114'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-11 14:54:44',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021684',`lang` = 'all'

20180511 14:57:10: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '1525622400',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:57:10',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '114' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '114',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '114' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '114',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '114' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '114'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-11 14:57:10',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021830',`lang` = 'all'

20180511 14:57:16: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021836',`lang` = 'all'

20180511 14:58:12: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1557244800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:58:12',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 14:58:12',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021892',`lang` = 'all'

20180511 14:58:19: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1557244800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:58:19',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 14:58:19',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021899',`lang` = 'all'

20180511 14:58:27: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1557244800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 14:58:26',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 14:58:26',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021907',`lang` = 'all'

20180511 14:58:36: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526021916',`lang` = 'all'

20180511 15:00:46: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '-28800',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 15:00:46',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 15:00:46',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526022046',`lang` = 'all'

20180511 15:00:54: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 15:00:54',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 15:00:54',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526022054',`lang` = 'all'

20180511 15:01:04: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'offline',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 15:01:04',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'offline',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 15:01:04',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526022064',`lang` = 'all'

20180511 15:01:09: /admin.php?m=product&f=changeStatus&productID=115&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526022069',`lang` = 'all'

20180511 15:07:10: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:13:10: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:19:10: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:24:51: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 15:24:51',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '114' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '114',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '114' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '114',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '114' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '114'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-11 15:24:51',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526023491',`lang` = 'all'

20180511 15:25:03: /admin.php?m=product&f=edit&productID=113
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '222',`userName` = '使用者',`startDate` = '',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 15:25:03',`lang` = 'zh-cn' WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '113' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '113',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '113' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '113',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '113' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '113'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('113') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('113') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '113',`objectType` = 'product',`title` = ' |222|',`status` = 'normal',`addedDate` = '2018-05-04 12:40:44',`editedDate` = '2018-05-11 15:25:03',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526023503',`lang` = 'all'

20180511 15:25:12: /admin.php?m=product&f=edit&productID=113
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '222',`userName` = '使用者',`startDate` = '',`endDate` = '1557158400',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 15:25:12',`lang` = 'zh-cn' WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '113' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '113',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '113' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '113',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '113' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '113'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('113') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('113') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '113',`objectType` = 'product',`title` = ' |222|',`status` = 'normal',`addedDate` = '2018-05-04 12:40:44',`editedDate` = '2018-05-11 15:25:12',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526023512',`lang` = 'all'

20180511 15:31:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:37:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:43:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:49:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 15:55:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:01:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:07:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:13:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:19:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:25:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:31:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:37:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 16:43:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 17:02:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 17:08:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 17:20:02: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 17:55:31: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526032531',`lang` = 'all'

20180511 17:59:15: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '-28800',`endDate` = '-28800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 17:59:15',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 17:59:15',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526032755',`lang` = 'all'

20180511 17:59:22: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '-28800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 17:59:22',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 17:59:22',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526032762',`lang` = 'all'

20180511 17:59:31: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '-28800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 17:59:31',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 17:59:31',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526032771',`lang` = 'all'

20180511 18:05:34: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180511 18:07:15: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '1970-01-01',`endDate` = '1970-01-01',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 18:07:15',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 18:07:15',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033235',`lang` = 'all'

20180511 18:07:24: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '2000-02-24',`endDate` = '1970-01-01',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 18:07:24',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 18:07:24',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033244',`lang` = 'all'

20180511 18:12:29: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 18:12:29',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 18:12:29',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033549',`lang` = 'all'

20180511 18:12:38: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '2000-02-17',`endDate` = '1970-01-01',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 18:12:38',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 18:12:38',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033558',`lang` = 'all'

20180511 18:13:25: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033605',`lang` = 'all'

20180511 18:13:34: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '2018-05-24',`endDate` = '1970-01-01',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 18:13:34',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 18:13:34',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033614',`lang` = 'all'

20180511 18:15:33: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-11 18:15:33',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '115' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '115',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '115' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '115',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '115' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '115'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('115') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-11 18:15:33',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526033733',`lang` = 'all'

