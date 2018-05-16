<?php
 die();
?>
20180503 12:46:07: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2018-05-03 12:46:07',`ip` = '127.0.0.1',`location` = '本机地址 本机地址  ',`browser` = 'chrome 45',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '8',`ip` = '127.0.0.1',`last` = '2018-05-03 12:46:07',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-04-20 18:08:13',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 45',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser` = 'chrome 45', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525322767',`lang` = 'all'

20180503 12:46:08: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-03 12:46:08' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-26 12:46:08' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-03 12:46:08' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-03 12:46:08' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 0, 10 
  SELECT * FROM eps_order_product WHERE orderID IN ('13','12','10','9','8','7','6','5','4','3') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525322768',`lang` = 'all'

20180503 12:46:08: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 12:46:08: /admin.php?m=widget&f=printWidget&widget=3
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

20180503 12:46:08: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180503 14:29:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 14:43:14: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 14:49:14: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 14:49:57: /admin.php?m=product&f=changeStatus&productID=2&status=offline
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'offline' WHERE id  = '2' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525330197',`lang` = 'all'

20180503 14:56:02: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:04:14: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:15:03: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:21:03: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:29:10: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:37:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:43:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:52:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 15:58:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:04:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:10:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:16:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:25:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:31:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:37:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:43:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:49:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 16:55:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 17:01:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 17:16:54: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 17:20:52: /admin.php?m=order&f=view&orderID=14&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '14'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('12')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('12') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:20:57: /admin.php?m=order&f=view&orderID=13&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '13'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('11')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:21:02: /admin.php?m=order&f=view&orderID=9&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '9' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '9' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '9'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('7')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:21:12: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180503 17:21:17: /admin.php?m=order&f=savepayment&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 

20180503 17:21:30: /admin.php?m=order&f=savepayment&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `sn` = '', `payStatus` = 'paid', `paidDate` = '2018-05-03 17:21:30', `last` = '2018-05-03 17:21:30' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  INSERT INTO eps_action SET `objectType` = 'order',`objectID` = '14',`actor` = 'admin',`action` = 'paid',`date` = '2018-05-03 17:21:30',`comment` = '',`extra` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525339290',`lang` = 'all'

20180503 17:21:39: /admin.php?m=order&f=savepayment&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `payment` = 'alipay',`sn` = '1111',`amount` = '0.00',`paidDate` = '2018-05-03 17:21',`last` = '2018-05-03 17:21:39',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  INSERT INTO eps_action SET `objectType` = 'order',`objectID` = '14',`actor` = 'admin',`action` = 'savedpayment',`date` = '2018-05-03 17:21:39',`comment` = '',`extra` = '0.00',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525339299',`lang` = 'all'

20180503 17:21:43: /admin.php?m=order&f=view&orderID=14&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '14'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('12','13','14')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('12') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('13') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('14') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:21:47: /admin.php?m=order&f=savepayment&orderID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 

20180503 17:21:51: /admin.php?m=order&f=savepayment&orderID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `sn` = '', `payStatus` = 'paid', `paidDate` = '2018-05-03 17:21:51', `last` = '2018-05-03 17:21:51' WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  INSERT INTO eps_action SET `objectType` = 'order',`objectID` = '13',`actor` = 'admin',`action` = 'paid',`date` = '2018-05-03 17:21:51',`comment` = '',`extra` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525339311',`lang` = 'all'

20180503 17:21:53: /admin.php?m=order&f=savepayment&orderID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `payment` = 'offlinepay',`sn` = '1112',`amount` = '0.02',`paidDate` = '2018-05-03 17:21',`last` = '2018-05-03 17:21:53',`lang` = 'zh-cn' WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  INSERT INTO eps_action SET `objectType` = 'order',`objectID` = '13',`actor` = 'admin',`action` = 'savedpayment',`date` = '2018-05-03 17:21:53',`comment` = '',`extra` = '0.02',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525339313',`lang` = 'all'

20180503 17:21:56: /admin.php?m=order&f=view&orderID=13&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '13'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('11','15','16')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('15') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('16') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:22:52: /admin.php?m=order&f=savepayment&orderID=12
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '12' AND  eps_order.lang in('zh-cn', 'all') 

20180503 17:30:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180503 17:35:31: /admin.php?m=order&f=confirm1&productID=112
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product WHERE id  = '112' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '112' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '112'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('112') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('112') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 

20180503 17:36:02: /admin.php?m=order&f=view&orderID=14&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '14'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('12','13','14')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('12') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('13') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('14') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:36:04: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180503 17:36:14: /admin.php?m=order&f=edit&orderID=8
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '8' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '8' AND  eps_order_product.lang in('zh-cn', 'all') 

20180503 17:38:32: /admin.php?m=order&f=view&orderID=12&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '12' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '12' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '12'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('10')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180503 17:38:35: /admin.php?m=order&f=savepayment&orderID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '10' AND  eps_order.lang in('zh-cn', 'all') 

20180503 17:50:33: /admin.php?m=product&f=edit&productID=112
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525341033',`lang` = 'all'

20180503 17:50:37: /admin.php?m=product&f=edit&productID=112
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '1111',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-03 17:50:37',`lang` = 'zh-cn' WHERE id  = '112' AND  eps_product.lang in('zh-cn', 'all') 
  DELETE FROM eps_product_custom WHERE product  = '112' AND  eps_product_custom.lang in('zh-cn', 'all') 
  REPLACE eps_product_custom SET `product` = '112',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'product' AND  id  = '112' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'product',`id` = '112',`category` = '7',`lang` = 'zh-cn'
  SELECT * FROM eps_product WHERE id  = '112' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '112' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '112'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('112') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('112') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '112',`objectType` = 'product',`title` = ' |1111|',`status` = 'normal',`addedDate` = '2018-04-30 16:52:56',`editedDate` = '2018-05-03 17:50:37',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525341037',`lang` = 'all'

20180503 17:56:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

