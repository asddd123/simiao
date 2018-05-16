<?php
 die();
?>
20180515 13:05:22: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2018-05-15 13:05:22',`ip` = '127.0.0.1',`location` = '本机地址 本机地址  ',`browser` = 'chrome 45',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '12',`ip` = '127.0.0.1',`last` = '2018-05-15 13:05:22',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-04-20 18:08:13',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 45',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser` = 'chrome 45', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526360722',`lang` = 'all'

20180515 13:05:22: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-15 13:05:22' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-05-08 13:05:22' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-15 13:05:22' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-15 13:05:22' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526360722',`lang` = 'all'

20180515 13:05:23: /admin.php?m=widget&f=printWidget&widget=3
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

20180515 13:05:23: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180515 13:05:23: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180515 13:09:21: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55','58')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('58') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180515 13:15:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:21:54: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:27:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:33:54: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:38:41: /admin.php?m=order&f=savepayment&orderID=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 

20180515 13:38:47: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55','58')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('58') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180515 13:38:51: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56','59')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('59') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180515 13:39:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:45:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:51:54: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 13:57:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:03:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:09:54: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:15:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:21:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:27:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:33:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:43:06: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 14:49:06: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:00:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:06:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:12:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:18:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:28:30: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:40:53: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180515 15:40:53: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-15 15:40:53' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-05-08 15:40:53' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-15 15:40:53' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-15 15:40:53' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('3','2','1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526370053',`lang` = 'all'

20180515 15:40:53: /admin.php?m=widget&f=printWidget&widget=3
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

20180515 15:40:53: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180515 15:52:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 15:58:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:04:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:10:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:16:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:22:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:28:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:34:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:40:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:46:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:52:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 16:58:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 17:04:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 17:10:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 17:16:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 17:22:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180515 17:28:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

