<?php
 die();
?>
20180514 11:45:53: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2018-05-14 11:45:53',`ip` = '127.0.0.1',`location` = '本机地址 本机地址  ',`browser` = 'chrome 45',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/45.0.2454.101 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '11',`ip` = '127.0.0.1',`last` = '2018-05-14 11:45:53',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-04-20 18:08:13',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 45',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser` = 'chrome 45', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526269553',`lang` = 'all'

20180514 11:45:53: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180514 11:45:53: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-14 11:45:53' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-05-07 11:45:53' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-14 11:45:53' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-14 11:45:53' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526269553',`lang` = 'all'

20180514 11:45:53: /admin.php?m=widget&f=printWidget&widget=3
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

20180514 11:45:54: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180514 11:52:59: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 12:05:44: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1970-01-01',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 12:05:44',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 12:05:44',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526270744',`lang` = 'all'

20180514 12:06:05: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1970-01-01',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 12:06:05',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 12:06:05',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526270765',`lang` = 'all'

20180514 12:10:02: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 12:10:02',`Object` = '',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526271002',`lang` = 'all'

20180514 12:11:12: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526271072',`lang` = 'all'

20180514 12:11:26: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 12:11:26',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 12:11:26',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526271086',`lang` = 'all'

20180514 12:11:38: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 12:11:38',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 12:11:38',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526271098',`lang` = 'all'

20180514 12:12:44: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '1526227200',`endDate` = '1557763200',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 12:12:44',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 12:12:44',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526271164',`lang` = 'all'

20180514 12:18:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 12:24:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 12:30:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 12:36:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 12:42:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 13:01:50: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 13:03:51: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180514 13:07:31: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274451',`lang` = 'all'

20180514 13:07:42: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274462',`lang` = 'all'

20180514 13:08:08: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274488',`lang` = 'all'

20180514 13:08:14: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274494',`lang` = 'all'

20180514 13:08:41: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274521',`lang` = 'all'

20180514 13:08:49: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274529',`lang` = 'all'

20180514 13:08:58: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274538',`lang` = 'all'

20180514 13:14:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 13:14:46: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274886',`lang` = 'all'

20180514 13:14:51: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274891',`lang` = 'all'

20180514 13:15:26: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1557763200',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 13:15:26',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 13:15:26',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274926',`lang` = 'all'

20180514 13:15:33: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '1557763200',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 13:15:33',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 13:15:33',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526274933',`lang` = 'all'

20180514 13:17:56: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275076',`lang` = 'all'

20180514 13:18:12: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275092',`lang` = 'all'

20180514 13:18:54: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275134',`lang` = 'all'

20180514 13:19:13: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275153',`lang` = 'all'

20180514 13:19:20: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275160',`lang` = 'all'

20180514 13:19:36: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275176',`lang` = 'all'

20180514 13:20:12: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275212',`lang` = 'all'

20180514 13:20:22: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275222',`lang` = 'all'

20180514 13:21:34: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275294',`lang` = 'all'

20180514 13:21:40: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275300',`lang` = 'all'

20180514 13:21:47: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275307',`lang` = 'all'

20180514 13:21:52: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275312',`lang` = 'all'

20180514 13:22:06: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275326',`lang` = 'all'

20180514 13:22:12: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275332',`lang` = 'all'

20180514 13:22:17: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275337',`lang` = 'all'

20180514 13:22:31: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275351',`lang` = 'all'

20180514 13:22:37: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275357',`lang` = 'all'

20180514 13:22:40: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275360',`lang` = 'all'

20180514 13:22:43: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275363',`lang` = 'all'

20180514 13:22:50: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275370',`lang` = 'all'

20180514 13:23:07: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275387',`lang` = 'all'

20180514 13:24:44: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275484',`lang` = 'all'

20180514 13:24:48: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275488',`lang` = 'all'

20180514 13:27:33: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 13:30:10: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275810',`lang` = 'all'

20180514 13:30:47: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526275847',`lang` = 'all'

20180514 13:33:19: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180514 13:33:33: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 13:39:33: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:04:02: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:04:02',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:04:02',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526277842',`lang` = 'all'

20180514 14:04:23: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:04:23',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:04:23',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526277863',`lang` = 'all'

20180514 14:04:33: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '949334400',`endDate` = '951840000',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:04:33',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:04:33',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526277873',`lang` = 'all'

20180514 14:04:39: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:04:39',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:04:39',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526277879',`lang` = 'all'

20180514 14:10:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:16:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:22:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:28:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:28:50: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:28:50',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:28:50',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279330',`lang` = 'all'

20180514 14:31:16: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:31:16',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-14 14:31:16',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279476',`lang` = 'all'

20180514 14:31:21: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '-28800',`endDate` = '-28800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:31:21',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-14 14:31:21',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279481',`lang` = 'all'

20180514 14:31:28: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:31:28',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-14 14:31:28',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279488',`lang` = 'all'

20180514 14:33:29: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:33:29',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:33:29',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279609',`lang` = 'all'

20180514 14:34:15: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '1525968000',`endDate` = '1526572800',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:34:15',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:34:15',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279655',`lang` = 'all'

20180514 14:34:20: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:34:20',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:34:20',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279660',`lang` = 'all'

20180514 14:34:25: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`userName` = '使用者',`startDate` = '',`endDate` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-14 14:34:25',`lang` = 'zh-cn' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '115',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-05 13:35:54',`editedDate` = '2018-05-14 14:34:25',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279665',`lang` = 'all'

20180514 14:38:50: /admin.php?m=article&f=edit&articleID=10&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '蝉知企业门户系统2.1正式版发布',`link` = '',`alias` = 'chanzhieps2.1',`keywords` = '手机建站系统,企业建站系统,微信网站,免费企业建站',`summary` = '大家好，蝉知企业门户系统2.1正式版今天正式发布了。这次升级主要是手机终端界面的优化和区块功能改进，同时还解决了之前版本产品和博客分页功能等bug。',`content` = '<h4 style=\"color:#333333;\">一、2.1修改记录</h4><ol class=\" list-paddingleft-2\"><li><p>区块增加图标设置功能</p></li><li><p>布局设置增加区块宽度设置功能</p></li><li><p>触屏设备访问时幻灯片增加拖动支持</p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子最后编辑者改为真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">关于我们页面使用区块把联系我们放在右侧</span></p></li><li><p><span style=\"line-height:1.428571429;\">批量维护手册章节的时候添加发布时间</span></p></li><li><p><span style=\"line-height:1.428571429;\">编辑手册文章的时候增加发布时间的字段</span></p></li><li><p><span style=\"line-height:1.428571429;\">重新调整h1-h6标签的字体大小</span></p></li><li><p><span style=\"line-height:1.428571429;\">解决置顶帖子用户姓名问题</span></p></li><li><p><span style=\"line-height:1.428571429;\">修改版权提示的格式</span></p></li><li><p><span style=\"line-height:1.428571429;\">修复分页的bug</span></p></li><li><p><span style=\"line-height:1.428571429;\">幻灯排序在ie10下面有问题。</span></p></li><li><p><span style=\"line-height:1.428571429;\">修复ie10下面蓝色风格的问题</span></p></li><li><p><span style=\"line-height:1.428571429;\">精简文章详情页面的上一篇下一篇的导航文字</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整留言页面回复内容的缩进和字体大小</span></p></li><li><p><span style=\"line-height:1.428571429;\">优化移动版本头尾的处理</span></p></li><li><p><span style=\"line-height:1.428571429;\">管理员身份回帖的时候应当使用全编辑器</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子发贴框的宽度调整。把只读放在后面。</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整论坛列表页面各列的宽度</span></p></li><li><p><span style=\"line-height:1.428571429;\">以管理员身份发表评论或者留言，默认状态为通过。</span></p></li><li><p><span style=\"line-height:1.428571429;\">后台管理员回复一篇评论或留言之后，默认将其状态改为通过</span></p></li><li><p><span style=\"line-height:1.428571429;\">修改邮箱默认配置，将腾讯邮箱默认改为465&nbsp;</span></p></li><li><p><span style=\"line-height:1.428571429;\">如果发贴用户已被删除，帖子列表页面的最后回复取用户名</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛出现版主的地方也都显示真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">将user模块的getRealName()方法改为getRealNamePairs()</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整模拟的alert和confirm框的样式</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子列表的时候显示用户的真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">留言者区分是否是登录用户</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛的板块设置提示需要二级板块</span></p></li><li><p><span style=\"line-height:1.428571429;\">区块首页底部的命名改为中部。</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整文章，产品无类目时的交互方式</span></p></li><li><p><span style=\"line-height:1.428571429;\">重置密码功能把resetKey，resetTime合成一个字段</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛控制图片大小</span></p></li></ol><h4 style=\"color:#333333;\">二、手机访问截图</h4><p><img src=\"http://www.chanzhi.org/data/upload/201403/f_59e4b4d8216516649c97804813b14af2.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_702d92775d4dcdd983e5be1d998d566b.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/></p><p><img src=\"http://www.chanzhi.org/data/upload/201403/f_4ca0b9700f909cabc75ecc00f60ee7a0.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_0831fb8306a661c9ab6cb1a87d16b5ba.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_dfa6504be3a605561262e18d4d5eb63f.png\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/></p><h4 style=\"color:#333333;\">三、下载地址</h4><p>源码包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip</a><br/>安装包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe</a></p><h4 style=\"color:#333333;\">四、安装和升级文档&nbsp;&nbsp;</h4><p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br/>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br/>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>',`addedDate` = '2014-03-03 09:50:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 14:38:49',`lang` = 'zh-cn' WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '手机建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '手机建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '企业建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '5' WHERE tag  = '企业建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '微信网站' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '微信网站' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '免费企业建站' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '免费企业建站' AND  eps_tag.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '10' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '10',`category` = '1',`lang` = 'zh-cn'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '10',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '34633',`value` = '蝉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20225',`value` = '企',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38376',`value` = '门',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25143',`value` = '户',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31995',`value` = '系',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32479',`value` = '统',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29256',`value` = '版',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21457',`value` = '发',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24067',`value` = '布',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22909',`value` = '好',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20170',`value` = '今',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22825',`value` = '天',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20102',`value` = '了',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36825',`value` = '这',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32423',`value` = '级',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35201',`value` = '要',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25163',`value` = '手',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26426',`value` = '机',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32456',`value` = '终',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31471',`value` = '端',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30028',`value` = '界',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38754',`value` = '面',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20248',`value` = '优',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21270',`value` = '化',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21644',`value` = '和',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21306',`value` = '区',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22359',`value` = '块',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21151',`value` = '功',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33021',`value` = '能',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25913',`value` = '改',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36827',`value` = '进',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36824',`value` = '还',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35299',`value` = '解',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20915',`value` = '决',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20043',`value` = '之',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21069',`value` = '前',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26412',`value` = '本',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20135',`value` = '产',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21697',`value` = '品',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20998',`value` = '分',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39029',`value` = '页',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31561',`value` = '等',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20462',`value` = '修',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35760',`value` = '记',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24405',`value` = '录',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22686',`value` = '增',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21152',`value` = '加',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22270',`value` = '图',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26631',`value` = '标',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35774',`value` = '设',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32622',`value` = '置',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23616',`value` = '局',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23485',`value` = '宽',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24230',`value` = '度',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35302',`value` = '触',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23631',`value` = '屏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22791',`value` = '备',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35775',`value` = '访',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38382',`value` = '问',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24187',`value` = '幻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28783',`value` = '灯',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29255',`value` = '片',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25302',`value` = '拖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21160',`value` = '动',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25903',`value` = '支',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35770',`value` = '论',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22363',`value` = '坛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24086',`value` = '帖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23376',`value` = '子',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26368',`value` = '最',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32534',`value` = '编',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36753',`value` = '辑',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32773',`value` = '者',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30495',`value` = '真',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23454',`value` = '实',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22995',`value` = '姓',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21517',`value` = '名',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20851',`value` = '关',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25105',`value` = '我',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20204',`value` = '们',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20351',`value` = '使',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29992',`value` = '用',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25226',`value` = '把',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32852',`value` = '联',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25918',`value` = '放',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21491',`value` = '右',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20391',`value` = '侧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25209',`value` = '批',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37327',`value` = '量',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32500',`value` = '维',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25252',`value` = '护',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20876',`value` = '册',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31456',`value` = '章',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33410',`value` = '节',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20505',`value` = '候',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28155',`value` = '添',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25991',`value` = '文',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23383',`value` = '字',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27573',`value` = '段',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37325',`value` = '重',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35843',`value` = '调',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25972',`value` = '整',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31614',`value` = '签',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20307',`value` = '体',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23567',`value` = '小',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39030',`value` = '顶',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39064',`value` = '题',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26435',`value` = '权',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25552',`value` = '提',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31034',`value` = '示',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26684',`value` = '格',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25490',`value` = '排',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24207',`value` = '序',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19979',`value` = '下',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26377',`value` = '有',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34013',`value` = '蓝',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33394',`value` = '色',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39118',`value` = '风',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31934',`value` = '精',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31616',`value` = '简',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35814',`value` = '详',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24773',`value` = '情',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31687',`value` = '篇',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23548',`value` = '导',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33322',`value` = '航',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35328',`value` = '言',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22238',`value` = '回',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32553',`value` = '缩',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31227',`value` = '移',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22836',`value` = '头',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23614',`value` = '尾',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22788',`value` = '处',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29702',`value` = '理',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31649',`value` = '管',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36523',`value` = '身',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20221',`value` = '份',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20840',`value` = '全',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22120',`value` = '器',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36148',`value` = '贴',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26694',`value` = '框',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21482',`value` = '只',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21015',`value` = '列',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21508',`value` = '各',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20197',`value` = '以',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35780',`value` = '评',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25110',`value` = '或',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29366',`value` = '状',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24577',`value` = '态',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36890',`value` = '通',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36807',`value` = '过',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21488',`value` = '台',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23558',`value` = '将',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20854',`value` = '其',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37038',`value` = '邮',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31665',`value` = '箱',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37197',`value` = '配',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33150',`value` = '腾',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35759',`value` = '讯',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22914',`value` = '如',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26524',`value` = '果',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24050',`value` = '已',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34987',`value` = '被',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21024',`value` = '删',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38500',`value` = '除',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21462',`value` = '取',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22320',`value` = '地',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20063',`value` = '也',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37117',`value` = '都',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26174',`value` = '显',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27169',`value` = '模',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25311',`value` = '拟',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26679',`value` = '样',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21542',`value` = '否',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30331',`value` = '登',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26495',`value` = '板',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38656',`value` = '需',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20108',`value` = '二',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39318',`value` = '首',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24213',`value` = '底',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37096',`value` = '部',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21629',`value` = '命',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26080',`value` = '无',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31867',`value` = '类',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30446',`value` = '目',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20132',`value` = '交',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20114',`value` = '互',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23494',`value` = '密',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30721',`value` = '码',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21512',`value` = '合',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25104',`value` = '成',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20010',`value` = '个',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25511',`value` = '控',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21046',`value` = '制',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25130',`value` = '截',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19977',`value` = '三',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36733',`value` = '载',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22336',`value` = '址',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21253',`value` = '包',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35013',`value` = '装',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22235',`value` = '四',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26723',`value` = '档',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28436',`value` = '演',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24314',`value` = '建',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31449',`value` = '站',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24494',`value` = '微',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20449',`value` = '信',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32593',`value` = '网',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20813',`value` = '免',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36153',`value` = '费',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '10',`objectType` = 'article',`title` = ' 34633 30693 20225 19994 38376 25143 31995 32479 2.1__ 27491 24335 29256 21457 24067',`status` = 'normal',`addedDate` = '2014-03-03 09:50:00',`editedDate` = '2018-05-14 14:38:49',`params` = '{\"category\":\"\",\"alias\":\"chanzhieps2.1\"}',`content` = ' 22823 23478 22909 65292 34633 30693 20225 19994 38376 25143 31995 32479 2.1__ 27491 24335 29256 20170 22825 27491 24335 21457 24067 20102 12290 36825 27425 21319 32423 20027 35201 26159 25163 26426 32456 31471 30028 38754 30340 20248 21270 21644 21306 22359 21151 33021 25913 36827 65292 21516 26102 36824 35299 20915 20102 20043 21069 29256 26412 20135 21697 21644 21338 23458 20998 39029 21151 33021 31561 bug__ 12290 19968 12289 2.1__ 20462 25913 35760 24405 21306 22359 22686 21152 22270 26631 35774 32622 21151 33021 24067 23616 35774 32622 22686 21152 21306 22359 23485 24230 35774 32622 21151 33021 35302 23631 35774 22791 35775 38382 26102 24187 28783 29255 22686 21152 25302 21160 25903 25345 35770 22363 24086 23376 26368 21518 32534 36753 32773 25913 20026 30495 23454 22995 21517 20851 20110 25105 20204 39029 38754 20351 29992 21306 22359 25226 32852 31995 25105 20204 25918 22312 21491 20391 25209 37327 32500 25252 25163 20876 31456 33410 30340 26102 20505 28155 21152 21457 24067 26102 38388 32534 36753 25163 20876 25991 31456 30340 26102 20505 22686 21152 21457 24067 26102 38388 30340 23383 27573 37325 26032 35843 25972 h1-h6 26631 31614 30340 23383 20307 22823 23567 35299 20915 32622 39030 24086 23376 29992 25143 22995 21517 38382 39064 20462 25913 29256 26435 25552 31034 30340 26684 24335 20462 22797 20998 39029 30340 bug__ 24187 28783 25490 24207 22312 ie10_ 19979 38754 26377 38382 39064 12290 20462 22797 ie10_ 19979 38754 34013 33394 39118 26684 30340 38382 39064 31934 31616 25991 31456 35814 24773 39029 38754 30340 19978 19968 31687 19979 19968 31687 30340 23548 33322 25991 23383 35843 25972 30041 35328 39029 38754 22238 22797 20869 23481 30340 32553 36827 21644 23383 20307 22823 23567 20248 21270 31227 21160 29256 26412 22836 23614 30340 22788 29702 31649 29702 21592 36523 20221 22238 24086 30340 26102 20505 24212 24403 20351 29992 20840 32534 36753 22120 35770 22363 24086 23376 21457 36148 26694 30340 23485 24230 35843 25972 12290 25226 21482 35835 25918 22312 21518 38754 12290 35843 25972 35770 22363 21015 34920 39029 38754 21508 21015 30340 23485 24230 20197 31649 29702 21592 36523 20221 21457 34920 35780 35770 25110 32773 30041 35328 65292 40664 35748 29366 24577 20026 36890 36807 12290 21518 21488 31649 29702 21592 22238 22797 19968 31687 35780 35770 25110 30041 35328 20043 21518 65292 40664 35748 23558 20854 29366 24577 25913 20026 36890 36807 20462 25913 37038 31665 40664 35748 37197 32622 65292 23558 33150 35759 37038 31665 40664 35748 25913 20026 465&nbsp 22914 26524 21457 36148 29992 25143 24050 34987 21024 38500 65292 24086 23376 21015 34920 39029 38754 30340 26368 21518 22238 22797 21462 29992 25143 21517 35770 22363 20986 29616 29256 20027 30340 22320 26041 20063 37117 26174 31034 30495 23454 22995 21517 23558 user_ 27169 22359 30340 getrealname 26041 27861 25913 20026 getrealnamepairs 35843 25972 27169 25311 30340 alert 21644 confirm 26694 30340 26679 24335 35770 22363 24086 23376 21015 34920 30340 26102 20505 26174 31034 29992 25143 30340 30495 23454 22995 21517 30041 35328 32773 21306 20998 26159 21542 26159 30331 24405 29992 25143 35770 22363 30340 26495 22359 35774 32622 25552 31034 38656 35201 20108 32423 26495 22359 21306 22359 39318 39029 24213 37096 30340 21629 21517 25913 20026 20013 37096 12290 35843 25972 25991 31456 65292 20135 21697 26080 31867 30446 26102 30340 20132 20114 26041 24335 37325 32622 23494 30721 21151 33021 25226 resetkey 65292 resettime 21512 25104 19968 20010 23383 27573 35770 22363 25511 21046 22270 29255 22823 23567 20108 12289 25163 26426 35775 38382 25130 22270 19977 12289 19979 36733 22320 22336 28304 30721 21253 65306 http://dl.xirangit.com/eps/2.1/chanzhieps.2.1.zip 23433 35013 21253 65306 http://dl.xirangit.com/eps/2.1/chanzhieps.2.1.exe 22235 12289 23433 35013 21644 21319 32423 25991 26723 &nbsp &nbsp 23433 35013 25991 26723 65306 http://www.chanzhi.org/book/chanzhieps/5.html 21319 32423 25991 26723 65306 http://www.chanzhi.org/book/chanzhieps/68.html 21069 21488 28436 31034 65306 http://demo.chanzhi.org 21518 21488 28436 31034 65306 http://demo.chanzhi.org/chanzhiadmin.php 25163 26426 24314 31449 31995 32479 20225 19994 24314 31449 31995 32479 24494 20449 32593 31449 20813 36153 20225 19994 24314 31449',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279930',`lang` = 'all'

20180514 14:39:14: /admin.php?m=article&f=edit&articleID=10&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '蝉知企业门户系统2.1正式版发布',`link` = '',`alias` = 'chanzhieps2.1',`keywords` = '手机建站系统,企业建站系统,微信网站,免费企业建站',`summary` = '大家好，蝉知企业门户系统2.1正式版今天正式发布了。这次升级主要是手机终端界面的优化和区块功能改进，同时还解决了之前版本产品和博客分页功能等bug。',`content` = '<h4 style=\"color:#333333;\">一、2.1修改记录</h4><ol class=\" list-paddingleft-2\"><li><p>区块增加图标设置功能</p></li><li><p>布局设置增加区块宽度设置功能</p></li><li><p>触屏设备访问时幻灯片增加拖动支持</p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子最后编辑者改为真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">关于我们页面使用区块把联系我们放在右侧</span></p></li><li><p><span style=\"line-height:1.428571429;\">批量维护手册章节的时候添加发布时间</span></p></li><li><p><span style=\"line-height:1.428571429;\">编辑手册文章的时候增加发布时间的字段</span></p></li><li><p><span style=\"line-height:1.428571429;\">重新调整h1-h6标签的字体大小</span></p></li><li><p><span style=\"line-height:1.428571429;\">解决置顶帖子用户姓名问题</span></p></li><li><p><span style=\"line-height:1.428571429;\">修改版权提示的格式</span></p></li><li><p><span style=\"line-height:1.428571429;\">修复分页的bug</span></p></li><li><p><span style=\"line-height:1.428571429;\">幻灯排序在ie10下面有问题。</span></p></li><li><p><span style=\"line-height:1.428571429;\">修复ie10下面蓝色风格的问题</span></p></li><li><p><span style=\"line-height:1.428571429;\">精简文章详情页面的上一篇下一篇的导航文字</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整留言页面回复内容的缩进和字体大小</span></p></li><li><p><span style=\"line-height:1.428571429;\">优化移动版本头尾的处理</span></p></li><li><p><span style=\"line-height:1.428571429;\">管理员身份回帖的时候应当使用全编辑器</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子发贴框的宽度调整。把只读放在后面。</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整论坛列表页面各列的宽度</span></p></li><li><p><span style=\"line-height:1.428571429;\">以管理员身份发表评论或者留言，默认状态为通过。</span></p></li><li><p><span style=\"line-height:1.428571429;\">后台管理员回复一篇评论或留言之后，默认将其状态改为通过</span></p></li><li><p><span style=\"line-height:1.428571429;\">修改邮箱默认配置，将腾讯邮箱默认改为465&nbsp;</span></p></li><li><p><span style=\"line-height:1.428571429;\">如果发贴用户已被删除，帖子列表页面的最后回复取用户名</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛出现版主的地方也都显示真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">将user模块的getRealName()方法改为getRealNamePairs()</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整模拟的alert和confirm框的样式</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子列表的时候显示用户的真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">留言者区分是否是登录用户</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛的板块设置提示需要二级板块</span></p></li><li><p><span style=\"line-height:1.428571429;\">区块首页底部的命名改为中部。</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整文章，产品无类目时的交互方式</span></p></li><li><p><span style=\"line-height:1.428571429;\">重置密码功能把resetKey，resetTime合成一个字段</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛控制图片大小</span></p></li></ol><h4 style=\"color:#333333;\">二、手机访问截图</h4><p><img src=\"http://www.chanzhi.org/data/upload/201403/f_59e4b4d8216516649c97804813b14af2.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_702d92775d4dcdd983e5be1d998d566b.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/></p><p><img src=\"http://www.chanzhi.org/data/upload/201403/f_4ca0b9700f909cabc75ecc00f60ee7a0.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_0831fb8306a661c9ab6cb1a87d16b5ba.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_dfa6504be3a605561262e18d4d5eb63f.png\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/></p><h4 style=\"color:#333333;\">三、下载地址</h4><p>源码包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip</a><br/>安装包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe</a></p><h4 style=\"color:#333333;\">四、安装和升级文档&nbsp;&nbsp;</h4><p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br/>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br/>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>',`addedDate` = '2014-03-03 09:50:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 14:39:14',`lang` = 'zh-cn' WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '手机建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '手机建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '企业建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '5' WHERE tag  = '企业建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '微信网站' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '微信网站' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '免费企业建站' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '免费企业建站' AND  eps_tag.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '10' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '10',`category` = '1',`lang` = 'zh-cn'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '10',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '34633',`value` = '蝉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20225',`value` = '企',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38376',`value` = '门',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25143',`value` = '户',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31995',`value` = '系',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32479',`value` = '统',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29256',`value` = '版',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21457',`value` = '发',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24067',`value` = '布',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22909',`value` = '好',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20170',`value` = '今',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22825',`value` = '天',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20102',`value` = '了',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36825',`value` = '这',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32423',`value` = '级',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35201',`value` = '要',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25163',`value` = '手',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26426',`value` = '机',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32456',`value` = '终',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31471',`value` = '端',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30028',`value` = '界',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38754',`value` = '面',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20248',`value` = '优',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21270',`value` = '化',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21644',`value` = '和',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21306',`value` = '区',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22359',`value` = '块',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21151',`value` = '功',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33021',`value` = '能',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25913',`value` = '改',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36827',`value` = '进',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36824',`value` = '还',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35299',`value` = '解',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20915',`value` = '决',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20043',`value` = '之',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21069',`value` = '前',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26412',`value` = '本',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20135',`value` = '产',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21697',`value` = '品',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20998',`value` = '分',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39029',`value` = '页',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31561',`value` = '等',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20462',`value` = '修',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35760',`value` = '记',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24405',`value` = '录',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22686',`value` = '增',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21152',`value` = '加',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22270',`value` = '图',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26631',`value` = '标',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35774',`value` = '设',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32622',`value` = '置',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23616',`value` = '局',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23485',`value` = '宽',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24230',`value` = '度',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35302',`value` = '触',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23631',`value` = '屏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22791',`value` = '备',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35775',`value` = '访',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38382',`value` = '问',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24187',`value` = '幻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28783',`value` = '灯',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29255',`value` = '片',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25302',`value` = '拖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21160',`value` = '动',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25903',`value` = '支',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35770',`value` = '论',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22363',`value` = '坛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24086',`value` = '帖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23376',`value` = '子',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26368',`value` = '最',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32534',`value` = '编',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36753',`value` = '辑',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32773',`value` = '者',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30495',`value` = '真',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23454',`value` = '实',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22995',`value` = '姓',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21517',`value` = '名',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20851',`value` = '关',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25105',`value` = '我',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20204',`value` = '们',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20351',`value` = '使',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29992',`value` = '用',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25226',`value` = '把',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32852',`value` = '联',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25918',`value` = '放',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21491',`value` = '右',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20391',`value` = '侧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25209',`value` = '批',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37327',`value` = '量',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32500',`value` = '维',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25252',`value` = '护',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20876',`value` = '册',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31456',`value` = '章',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33410',`value` = '节',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20505',`value` = '候',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28155',`value` = '添',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25991',`value` = '文',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23383',`value` = '字',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27573',`value` = '段',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37325',`value` = '重',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35843',`value` = '调',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25972',`value` = '整',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31614',`value` = '签',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20307',`value` = '体',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23567',`value` = '小',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39030',`value` = '顶',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39064',`value` = '题',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26435',`value` = '权',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25552',`value` = '提',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31034',`value` = '示',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26684',`value` = '格',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25490',`value` = '排',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24207',`value` = '序',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19979',`value` = '下',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26377',`value` = '有',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34013',`value` = '蓝',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33394',`value` = '色',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39118',`value` = '风',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31934',`value` = '精',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31616',`value` = '简',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35814',`value` = '详',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24773',`value` = '情',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31687',`value` = '篇',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23548',`value` = '导',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33322',`value` = '航',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35328',`value` = '言',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22238',`value` = '回',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32553',`value` = '缩',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31227',`value` = '移',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22836',`value` = '头',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23614',`value` = '尾',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22788',`value` = '处',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29702',`value` = '理',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31649',`value` = '管',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36523',`value` = '身',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20221',`value` = '份',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20840',`value` = '全',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22120',`value` = '器',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36148',`value` = '贴',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26694',`value` = '框',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21482',`value` = '只',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21015',`value` = '列',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21508',`value` = '各',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20197',`value` = '以',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35780',`value` = '评',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25110',`value` = '或',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29366',`value` = '状',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24577',`value` = '态',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36890',`value` = '通',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36807',`value` = '过',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21488',`value` = '台',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23558',`value` = '将',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20854',`value` = '其',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37038',`value` = '邮',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31665',`value` = '箱',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37197',`value` = '配',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33150',`value` = '腾',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35759',`value` = '讯',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22914',`value` = '如',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26524',`value` = '果',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24050',`value` = '已',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34987',`value` = '被',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21024',`value` = '删',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38500',`value` = '除',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21462',`value` = '取',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22320',`value` = '地',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20063',`value` = '也',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37117',`value` = '都',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26174',`value` = '显',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27169',`value` = '模',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25311',`value` = '拟',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26679',`value` = '样',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21542',`value` = '否',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30331',`value` = '登',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26495',`value` = '板',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38656',`value` = '需',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20108',`value` = '二',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39318',`value` = '首',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24213',`value` = '底',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37096',`value` = '部',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21629',`value` = '命',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26080',`value` = '无',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31867',`value` = '类',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30446',`value` = '目',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20132',`value` = '交',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20114',`value` = '互',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23494',`value` = '密',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30721',`value` = '码',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21512',`value` = '合',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25104',`value` = '成',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20010',`value` = '个',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25511',`value` = '控',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21046',`value` = '制',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25130',`value` = '截',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19977',`value` = '三',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36733',`value` = '载',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22336',`value` = '址',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21253',`value` = '包',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35013',`value` = '装',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22235',`value` = '四',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26723',`value` = '档',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28436',`value` = '演',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24314',`value` = '建',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31449',`value` = '站',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24494',`value` = '微',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20449',`value` = '信',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32593',`value` = '网',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20813',`value` = '免',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36153',`value` = '费',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '10',`objectType` = 'article',`title` = ' 34633 30693 20225 19994 38376 25143 31995 32479 2.1__ 27491 24335 29256 21457 24067',`status` = 'normal',`addedDate` = '2014-03-03 09:50:00',`editedDate` = '2018-05-14 14:39:14',`params` = '{\"category\":\"\",\"alias\":\"chanzhieps2.1\"}',`content` = ' 22823 23478 22909 65292 34633 30693 20225 19994 38376 25143 31995 32479 2.1__ 27491 24335 29256 20170 22825 27491 24335 21457 24067 20102 12290 36825 27425 21319 32423 20027 35201 26159 25163 26426 32456 31471 30028 38754 30340 20248 21270 21644 21306 22359 21151 33021 25913 36827 65292 21516 26102 36824 35299 20915 20102 20043 21069 29256 26412 20135 21697 21644 21338 23458 20998 39029 21151 33021 31561 bug__ 12290 19968 12289 2.1__ 20462 25913 35760 24405 21306 22359 22686 21152 22270 26631 35774 32622 21151 33021 24067 23616 35774 32622 22686 21152 21306 22359 23485 24230 35774 32622 21151 33021 35302 23631 35774 22791 35775 38382 26102 24187 28783 29255 22686 21152 25302 21160 25903 25345 35770 22363 24086 23376 26368 21518 32534 36753 32773 25913 20026 30495 23454 22995 21517 20851 20110 25105 20204 39029 38754 20351 29992 21306 22359 25226 32852 31995 25105 20204 25918 22312 21491 20391 25209 37327 32500 25252 25163 20876 31456 33410 30340 26102 20505 28155 21152 21457 24067 26102 38388 32534 36753 25163 20876 25991 31456 30340 26102 20505 22686 21152 21457 24067 26102 38388 30340 23383 27573 37325 26032 35843 25972 h1-h6 26631 31614 30340 23383 20307 22823 23567 35299 20915 32622 39030 24086 23376 29992 25143 22995 21517 38382 39064 20462 25913 29256 26435 25552 31034 30340 26684 24335 20462 22797 20998 39029 30340 bug__ 24187 28783 25490 24207 22312 ie10_ 19979 38754 26377 38382 39064 12290 20462 22797 ie10_ 19979 38754 34013 33394 39118 26684 30340 38382 39064 31934 31616 25991 31456 35814 24773 39029 38754 30340 19978 19968 31687 19979 19968 31687 30340 23548 33322 25991 23383 35843 25972 30041 35328 39029 38754 22238 22797 20869 23481 30340 32553 36827 21644 23383 20307 22823 23567 20248 21270 31227 21160 29256 26412 22836 23614 30340 22788 29702 31649 29702 21592 36523 20221 22238 24086 30340 26102 20505 24212 24403 20351 29992 20840 32534 36753 22120 35770 22363 24086 23376 21457 36148 26694 30340 23485 24230 35843 25972 12290 25226 21482 35835 25918 22312 21518 38754 12290 35843 25972 35770 22363 21015 34920 39029 38754 21508 21015 30340 23485 24230 20197 31649 29702 21592 36523 20221 21457 34920 35780 35770 25110 32773 30041 35328 65292 40664 35748 29366 24577 20026 36890 36807 12290 21518 21488 31649 29702 21592 22238 22797 19968 31687 35780 35770 25110 30041 35328 20043 21518 65292 40664 35748 23558 20854 29366 24577 25913 20026 36890 36807 20462 25913 37038 31665 40664 35748 37197 32622 65292 23558 33150 35759 37038 31665 40664 35748 25913 20026 465&nbsp 22914 26524 21457 36148 29992 25143 24050 34987 21024 38500 65292 24086 23376 21015 34920 39029 38754 30340 26368 21518 22238 22797 21462 29992 25143 21517 35770 22363 20986 29616 29256 20027 30340 22320 26041 20063 37117 26174 31034 30495 23454 22995 21517 23558 user_ 27169 22359 30340 getrealname 26041 27861 25913 20026 getrealnamepairs 35843 25972 27169 25311 30340 alert 21644 confirm 26694 30340 26679 24335 35770 22363 24086 23376 21015 34920 30340 26102 20505 26174 31034 29992 25143 30340 30495 23454 22995 21517 30041 35328 32773 21306 20998 26159 21542 26159 30331 24405 29992 25143 35770 22363 30340 26495 22359 35774 32622 25552 31034 38656 35201 20108 32423 26495 22359 21306 22359 39318 39029 24213 37096 30340 21629 21517 25913 20026 20013 37096 12290 35843 25972 25991 31456 65292 20135 21697 26080 31867 30446 26102 30340 20132 20114 26041 24335 37325 32622 23494 30721 21151 33021 25226 resetkey 65292 resettime 21512 25104 19968 20010 23383 27573 35770 22363 25511 21046 22270 29255 22823 23567 20108 12289 25163 26426 35775 38382 25130 22270 19977 12289 19979 36733 22320 22336 28304 30721 21253 65306 http://dl.xirangit.com/eps/2.1/chanzhieps.2.1.zip 23433 35013 21253 65306 http://dl.xirangit.com/eps/2.1/chanzhieps.2.1.exe 22235 12289 23433 35013 21644 21319 32423 25991 26723 &nbsp &nbsp 23433 35013 25991 26723 65306 http://www.chanzhi.org/book/chanzhieps/5.html 21319 32423 25991 26723 65306 http://www.chanzhi.org/book/chanzhieps/68.html 21069 21488 28436 31034 65306 http://demo.chanzhi.org 21518 21488 28436 31034 65306 http://demo.chanzhi.org/chanzhiadmin.php 25163 26426 24314 31449 31995 32479 20225 19994 24314 31449 31995 32479 24494 20449 32593 31449 20813 36153 20225 19994 24314 31449',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279954',`lang` = 'all'

20180514 14:39:27: /admin.php?m=article&f=edit&articleID=10&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '蝉知企业门户系统2.1正式版发布',`link` = '',`alias` = 'chanzhieps2.1',`keywords` = '手机建站系统,企业建站系统,微信网站,免费企业建站',`summary` = '大家好，蝉知企业门户系统2.1正式版今天正式发布了。这次升级主要是手机终端界面的优化和区块功能改进，同时还解决了之前版本产品和博客分页功能等bug。',`content` = '<h4 style=\"color:#333333;\">一、2.1修改记录</h4><ol class=\" list-paddingleft-2\"><li><p>区块增加图标设置功能</p></li><li><p>布局设置增加区块宽度设置功能</p></li><li><p>触屏设备访问时幻灯片增加拖动支持</p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子最后编辑者改为真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">关于我们页面使用区块把联系我们放在右侧</span></p></li><li><p><span style=\"line-height:1.428571429;\">批量维护手册章节的时候添加发布时间</span></p></li><li><p><span style=\"line-height:1.428571429;\">编辑手册文章的时候增加发布时间的字段</span></p></li><li><p><span style=\"line-height:1.428571429;\">重新调整h1-h6标签的字体大小</span></p></li><li><p><span style=\"line-height:1.428571429;\">解决置顶帖子用户姓名问题</span></p></li><li><p><span style=\"line-height:1.428571429;\">修改版权提示的格式</span></p></li><li><p><span style=\"line-height:1.428571429;\">修复分页的bug</span></p></li><li><p><span style=\"line-height:1.428571429;\">幻灯排序在ie10下面有问题。</span></p></li><li><p><span style=\"line-height:1.428571429;\">修复ie10下面蓝色风格的问题</span></p></li><li><p><span style=\"line-height:1.428571429;\">精简文章详情页面的上一篇下一篇的导航文字</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整留言页面回复内容的缩进和字体大小</span></p></li><li><p><span style=\"line-height:1.428571429;\">优化移动版本头尾的处理</span></p></li><li><p><span style=\"line-height:1.428571429;\">管理员身份回帖的时候应当使用全编辑器</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子发贴框的宽度调整。把只读放在后面。</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整论坛列表页面各列的宽度</span></p></li><li><p><span style=\"line-height:1.428571429;\">以管理员身份发表评论或者留言，默认状态为通过。</span></p></li><li><p><span style=\"line-height:1.428571429;\">后台管理员回复一篇评论或留言之后，默认将其状态改为通过</span></p></li><li><p><span style=\"line-height:1.428571429;\">修改邮箱默认配置，将腾讯邮箱默认改为465&nbsp;</span></p></li><li><p><span style=\"line-height:1.428571429;\">如果发贴用户已被删除，帖子列表页面的最后回复取用户名</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛出现版主的地方也都显示真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">将user模块的getRealName()方法改为getRealNamePairs()</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整模拟的alert和confirm框的样式</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛帖子列表的时候显示用户的真实姓名</span></p></li><li><p><span style=\"line-height:1.428571429;\">留言者区分是否是登录用户</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛的板块设置提示需要二级板块</span></p></li><li><p><span style=\"line-height:1.428571429;\">区块首页底部的命名改为中部。</span></p></li><li><p><span style=\"line-height:1.428571429;\">调整文章，产品无类目时的交互方式</span></p></li><li><p><span style=\"line-height:1.428571429;\">重置密码功能把resetKey，resetTime合成一个字段</span></p></li><li><p><span style=\"line-height:1.428571429;\">论坛控制图片大小</span></p></li></ol><h4 style=\"color:#333333;\">二、手机访问截图</h4><p><img src=\"http://www.chanzhi.org/data/upload/201403/f_59e4b4d8216516649c97804813b14af2.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_702d92775d4dcdd983e5be1d998d566b.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/></p><p><img src=\"http://www.chanzhi.org/data/upload/201403/f_4ca0b9700f909cabc75ecc00f60ee7a0.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_0831fb8306a661c9ab6cb1a87d16b5ba.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/><img src=\"http://www.chanzhi.org/data/upload/201403/f_dfa6504be3a605561262e18d4d5eb63f.png\" alt=\"\" title=\"\" height=\"540\" width=\"304\"/></p><h4 style=\"color:#333333;\">三、下载地址</h4><p>源码包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip</a><br/>安装包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe</a></p><h4 style=\"color:#333333;\">四、安装和升级文档&nbsp;&nbsp;</h4><p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br/>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br/>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>',`addedDate` = '2014-03-03 09:50:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 14:39:27',`lang` = 'zh-cn' WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,手机建站系统,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '手机建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '手机建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,企业建站系统,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '企业建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '5' WHERE tag  = '企业建站系统' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,微信网站,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '微信网站' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '微信网站' AND  eps_tag.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,免费企业建站,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '免费企业建站' AND  eps_tag.lang in('zh-cn', 'all') 
  UPDATE eps_tag SET  `rank` = '1' WHERE tag  = '免费企业建站' AND  eps_tag.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '10' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '10',`category` = '1',`lang` = 'zh-cn'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '10',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '10' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '34633',`value` = '蝉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20225',`value` = '企',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38376',`value` = '门',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25143',`value` = '户',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31995',`value` = '系',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32479',`value` = '统',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29256',`value` = '版',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21457',`value` = '发',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24067',`value` = '布',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22909',`value` = '好',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20170',`value` = '今',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22825',`value` = '天',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20102',`value` = '了',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36825',`value` = '这',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32423',`value` = '级',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35201',`value` = '要',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25163',`value` = '手',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26426',`value` = '机',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32456',`value` = '终',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31471',`value` = '端',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30028',`value` = '界',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38754',`value` = '面',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20248',`value` = '优',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21270',`value` = '化',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21644',`value` = '和',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21306',`value` = '区',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22359',`value` = '块',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21151',`value` = '功',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33021',`value` = '能',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25913',`value` = '改',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36827',`value` = '进',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36824',`value` = '还',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35299',`value` = '解',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20915',`value` = '决',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20043',`value` = '之',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21069',`value` = '前',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26412',`value` = '本',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20135',`value` = '产',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21697',`value` = '品',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20998',`value` = '分',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39029',`value` = '页',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31561',`value` = '等',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20462',`value` = '修',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35760',`value` = '记',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24405',`value` = '录',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22686',`value` = '增',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21152',`value` = '加',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22270',`value` = '图',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26631',`value` = '标',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35774',`value` = '设',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32622',`value` = '置',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23616',`value` = '局',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23485',`value` = '宽',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24230',`value` = '度',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35302',`value` = '触',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23631',`value` = '屏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22791',`value` = '备',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35775',`value` = '访',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38382',`value` = '问',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24187',`value` = '幻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28783',`value` = '灯',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29255',`value` = '片',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25302',`value` = '拖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21160',`value` = '动',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25903',`value` = '支',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35770',`value` = '论',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22363',`value` = '坛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24086',`value` = '帖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23376',`value` = '子',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26368',`value` = '最',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32534',`value` = '编',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36753',`value` = '辑',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32773',`value` = '者',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30495',`value` = '真',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23454',`value` = '实',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22995',`value` = '姓',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21517',`value` = '名',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20851',`value` = '关',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25105',`value` = '我',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20204',`value` = '们',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20351',`value` = '使',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29992',`value` = '用',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25226',`value` = '把',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32852',`value` = '联',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25918',`value` = '放',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21491',`value` = '右',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20391',`value` = '侧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25209',`value` = '批',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37327',`value` = '量',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32500',`value` = '维',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25252',`value` = '护',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20876',`value` = '册',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31456',`value` = '章',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33410',`value` = '节',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20505',`value` = '候',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28155',`value` = '添',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25991',`value` = '文',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23383',`value` = '字',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27573',`value` = '段',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37325',`value` = '重',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35843',`value` = '调',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25972',`value` = '整',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31614',`value` = '签',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20307',`value` = '体',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23567',`value` = '小',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39030',`value` = '顶',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39064',`value` = '题',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26435',`value` = '权',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25552',`value` = '提',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31034',`value` = '示',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26684',`value` = '格',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25490',`value` = '排',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24207',`value` = '序',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19979',`value` = '下',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26377',`value` = '有',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34013',`value` = '蓝',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33394',`value` = '色',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39118',`value` = '风',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31934',`value` = '精',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31616',`value` = '简',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35814',`value` = '详',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24773',`value` = '情',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31687',`value` = '篇',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23548',`value` = '导',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33322',`value` = '航',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35328',`value` = '言',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22238',`value` = '回',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32553',`value` = '缩',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31227',`value` = '移',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22836',`value` = '头',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23614',`value` = '尾',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22788',`value` = '处',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29702',`value` = '理',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31649',`value` = '管',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36523',`value` = '身',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20221',`value` = '份',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20840',`value` = '全',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22120',`value` = '器',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36148',`value` = '贴',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26694',`value` = '框',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21482',`value` = '只',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21015',`value` = '列',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21508',`value` = '各',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20197',`value` = '以',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35780',`value` = '评',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25110',`value` = '或',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29366',`value` = '状',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24577',`value` = '态',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36890',`value` = '通',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36807',`value` = '过',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21488',`value` = '台',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23558',`value` = '将',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20854',`value` = '其',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37038',`value` = '邮',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31665',`value` = '箱',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37197',`value` = '配',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33150',`value` = '腾',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35759',`value` = '讯',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22914',`value` = '如',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26524',`value` = '果',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24050',`value` = '已',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34987',`value` = '被',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21024',`value` = '删',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38500',`value` = '除',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21462',`value` = '取',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22320',`value` = '地',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20063',`value` = '也',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37117',`value` = '都',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26174',`value` = '显',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27169',`value` = '模',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25311',`value` = '拟',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26679',`value` = '样',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21542',`value` = '否',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30331',`value` = '登',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26495',`value` = '板',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38656',`value` = '需',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20108',`value` = '二',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39318',`value` = '首',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24213',`value` = '底',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '37096',`value` = '部',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21629',`value` = '命',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26080',`value` = '无',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31867',`value` = '类',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30446',`value` = '目',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20132',`value` = '交',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20114',`value` = '互',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23494',`value` = '密',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30721',`value` = '码',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21512',`value` = '合',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25104',`value` = '成',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20010',`value` = '个',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25511',`value` = '控',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21046',`value` = '制',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25130',`value` = '截',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19977',`value` = '三',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36733',`value` = '载',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22336',`value` = '址',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21253',`value` = '包',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35013',`value` = '装',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22235',`value` = '四',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26723',`value` = '档',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28436',`value` = '演',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24314',`value` = '建',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31449',`value` = '站',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24494',`value` = '微',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20449',`value` = '信',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '32593',`value` = '网',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20813',`value` = '免',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36153',`value` = '费',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '10',`objectType` = 'article',`title` = ' 34633 30693 20225 19994 38376 25143 31995 32479 2.1__ 27491 24335 29256 21457 24067',`status` = 'normal',`addedDate` = '2014-03-03 09:50:00',`editedDate` = '2018-05-14 14:39:27',`params` = '{\"category\":\"\",\"alias\":\"chanzhieps2.1\"}',`content` = ' 22823 23478 22909 65292 34633 30693 20225 19994 38376 25143 31995 32479 2.1__ 27491 24335 29256 20170 22825 27491 24335 21457 24067 20102 12290 36825 27425 21319 32423 20027 35201 26159 25163 26426 32456 31471 30028 38754 30340 20248 21270 21644 21306 22359 21151 33021 25913 36827 65292 21516 26102 36824 35299 20915 20102 20043 21069 29256 26412 20135 21697 21644 21338 23458 20998 39029 21151 33021 31561 bug__ 12290 19968 12289 2.1__ 20462 25913 35760 24405 21306 22359 22686 21152 22270 26631 35774 32622 21151 33021 24067 23616 35774 32622 22686 21152 21306 22359 23485 24230 35774 32622 21151 33021 35302 23631 35774 22791 35775 38382 26102 24187 28783 29255 22686 21152 25302 21160 25903 25345 35770 22363 24086 23376 26368 21518 32534 36753 32773 25913 20026 30495 23454 22995 21517 20851 20110 25105 20204 39029 38754 20351 29992 21306 22359 25226 32852 31995 25105 20204 25918 22312 21491 20391 25209 37327 32500 25252 25163 20876 31456 33410 30340 26102 20505 28155 21152 21457 24067 26102 38388 32534 36753 25163 20876 25991 31456 30340 26102 20505 22686 21152 21457 24067 26102 38388 30340 23383 27573 37325 26032 35843 25972 h1-h6 26631 31614 30340 23383 20307 22823 23567 35299 20915 32622 39030 24086 23376 29992 25143 22995 21517 38382 39064 20462 25913 29256 26435 25552 31034 30340 26684 24335 20462 22797 20998 39029 30340 bug__ 24187 28783 25490 24207 22312 ie10_ 19979 38754 26377 38382 39064 12290 20462 22797 ie10_ 19979 38754 34013 33394 39118 26684 30340 38382 39064 31934 31616 25991 31456 35814 24773 39029 38754 30340 19978 19968 31687 19979 19968 31687 30340 23548 33322 25991 23383 35843 25972 30041 35328 39029 38754 22238 22797 20869 23481 30340 32553 36827 21644 23383 20307 22823 23567 20248 21270 31227 21160 29256 26412 22836 23614 30340 22788 29702 31649 29702 21592 36523 20221 22238 24086 30340 26102 20505 24212 24403 20351 29992 20840 32534 36753 22120 35770 22363 24086 23376 21457 36148 26694 30340 23485 24230 35843 25972 12290 25226 21482 35835 25918 22312 21518 38754 12290 35843 25972 35770 22363 21015 34920 39029 38754 21508 21015 30340 23485 24230 20197 31649 29702 21592 36523 20221 21457 34920 35780 35770 25110 32773 30041 35328 65292 40664 35748 29366 24577 20026 36890 36807 12290 21518 21488 31649 29702 21592 22238 22797 19968 31687 35780 35770 25110 30041 35328 20043 21518 65292 40664 35748 23558 20854 29366 24577 25913 20026 36890 36807 20462 25913 37038 31665 40664 35748 37197 32622 65292 23558 33150 35759 37038 31665 40664 35748 25913 20026 465&nbsp 22914 26524 21457 36148 29992 25143 24050 34987 21024 38500 65292 24086 23376 21015 34920 39029 38754 30340 26368 21518 22238 22797 21462 29992 25143 21517 35770 22363 20986 29616 29256 20027 30340 22320 26041 20063 37117 26174 31034 30495 23454 22995 21517 23558 user_ 27169 22359 30340 getrealname 26041 27861 25913 20026 getrealnamepairs 35843 25972 27169 25311 30340 alert 21644 confirm 26694 30340 26679 24335 35770 22363 24086 23376 21015 34920 30340 26102 20505 26174 31034 29992 25143 30340 30495 23454 22995 21517 30041 35328 32773 21306 20998 26159 21542 26159 30331 24405 29992 25143 35770 22363 30340 26495 22359 35774 32622 25552 31034 38656 35201 20108 32423 26495 22359 21306 22359 39318 39029 24213 37096 30340 21629 21517 25913 20026 20013 37096 12290 35843 25972 25991 31456 65292 20135 21697 26080 31867 30446 26102 30340 20132 20114 26041 24335 37325 32622 23494 30721 21151 33021 25226 resetkey 65292 resettime 21512 25104 19968 20010 23383 27573 35770 22363 25511 21046 22270 29255 22823 23567 20108 12289 25163 26426 35775 38382 25130 22270 19977 12289 19979 36733 22320 22336 28304 30721 21253 65306 http://dl.xirangit.com/eps/2.1/chanzhieps.2.1.zip 23433 35013 21253 65306 http://dl.xirangit.com/eps/2.1/chanzhieps.2.1.exe 22235 12289 23433 35013 21644 21319 32423 25991 26723 &nbsp &nbsp 23433 35013 25991 26723 65306 http://www.chanzhi.org/book/chanzhieps/5.html 21319 32423 25991 26723 65306 http://www.chanzhi.org/book/chanzhieps/68.html 21069 21488 28436 31034 65306 http://demo.chanzhi.org 21518 21488 28436 31034 65306 http://demo.chanzhi.org/chanzhiadmin.php 25163 26426 24314 31449 31995 32479 20225 19994 24314 31449 31995 32479 24494 20449 32593 31449 20813 36153 20225 19994 24314 31449',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526279967',`lang` = 'all'

20180514 14:45:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:51:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 14:57:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 15:03:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 15:09:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 15:21:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 15:27:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 15:34:51: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h3 style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><img src=\"/file.php?f=201805/f_4df7dd347f6056ab75d12d9293328cc9.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span><span style=\"font-size: 12px; letter-spacing: 0px; line-height: 28px;\">&nbsp;</span></p><p style=\"text-align:center\"><span style=\"font-size: 12px; letter-spacing: 0px; line-height: 28px;\"><img src=\"/file.php?f=201805/f_03fd9f8bf05e0aa2f6c8912823f8cc38.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/></span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><span style=\"font-size: 14px\">&nbsp;</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33',`status` = 'normal',`submission` = '0',`editedDate` = '2018-05-14 15:34:51',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  UPDATE eps_file SET `objectID` = '19',`objectType` = 'article',`lang` = 'all' WHERE id IN ('5','6')
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:34:51',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290 &nbsp',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526283291',`lang` = 'all'

20180514 15:40:53: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 15:45:20: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h\\d style=\'font-size:16px;line-height:1.5;color:inherit;font-weight:bold\' style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><image src=\"/file.php?f=201805/f_4df7dd347f6056ab75d12d9293328cc9.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span><span style=\"font-size: 12px; letter-spacing: 0px; line-height: 28px;\">&nbsp;</span></p><p style=\"text-align:center\"><span style=\"font-size: 12px; letter-spacing: 0px; line-height: 28px;\"><image src=\"/file.php?f=201805/f_03fd9f8bf05e0aa2f6c8912823f8cc38.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/></span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><span style=\"font-size: 14px\">&nbsp;</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:45:20',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:45:20',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290 &nbsp',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526283920',`lang` = 'all'

20180514 15:48:02: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h style=\'font-size:16px;line-height:1.5;color:inherit;font-weight:bold\' style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><image src=\"/file.php?f=201805/f_862e8f4517fe195e9282ae62ce9e2a4d.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:48:02',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  UPDATE eps_file SET `objectID` = '19',`objectType` = 'article',`lang` = 'all' WHERE id IN ('7')
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:48:02',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284082',`lang` = 'all'

20180514 15:49:55: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h style=\'font-size:16px;line-height:1.5;color:inherit;font-weight:bold\' style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span><image width=\"341\" height=\"245\" src=\"http://127.0.0.3/js/ueditor/themes/default/images/spacer.gif\"/></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><span style=\"font-size: 14px\">&nbsp;</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:49:55',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:49:55',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290 &nbsp',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284195',`lang` = 'all'

20180514 15:50:48: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h style=\'font-size:16px;line-height:1.5;color:inherit;font-weight:bold\' style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span><image width=\"341\" height=\"245\" src=\"http://127.0.0.3/js/ueditor/themes/default/images/spacer.gif\"/></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><span style=\"font-size: 14px\">&nbsp;</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:50:47',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:50:47',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290 &nbsp',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284248',`lang` = 'all'

20180514 15:51:01: /admin.php?m=article&f=create&type=article&category=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '222',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>21432141</p>',`addedDate` = '2018-05-14 15:50',`status` = 'normal',`submission` = '0',`editedDate` = '2018-05-14 15:51:00',`type` = 'article',`addedBy` = 'admin',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '20' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '20',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '20' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '20' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('20') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_index SET `objectID` = '20',`objectType` = 'article',`title` = ' |222|',`status` = 'normal',`addedDate` = '2018-05-14 15:50:00',`editedDate` = '2018-05-14 15:51:00',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |21432141|',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284261',`lang` = 'all'

20180514 15:52:10: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h3 style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><img src=\"/file.php?f=201805/f_bce4c2a2ba97c0f902aab3bb4abae6d5.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><br/></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><span style=\"font-size: 14px\">&nbsp;</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:52:10',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  UPDATE eps_file SET `objectID` = '19',`objectType` = 'article',`lang` = 'all' WHERE id IN ('8')
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:52:10',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290 &nbsp',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284330',`lang` = 'all'

20180514 15:52:35: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h style=\'font-size:16px;line-height:1.5;color:inherit;font-weight:bold\' style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><image src=\"/file.php?f=201805/f_bce4c2a2ba97c0f902aab3bb4abae6d5.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><br/></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><span style=\"font-size: 14px\">&nbsp;</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:52:35',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:52:35',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290 &nbsp',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284355',`lang` = 'all'

20180514 15:53:27: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h3 style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span><image src=\"/file.php?f=201805/f_7d72b4e92eaf6b22fa4209e1eb5a6700.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:53:27',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  UPDATE eps_file SET `objectID` = '19',`objectType` = 'article',`lang` = 'all' WHERE id IN ('9')
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:53:27',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284407',`lang` = 'all'

20180514 15:54:41: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h style=\'font-size:16px;line-height:1.5;color:inherit;font-weight:bold\' style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><img src=\"/file.php?f=201805/f_c3b15c34a27e751be9951ca40c6b564d.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:54:41',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  UPDATE eps_file SET `objectID` = '19',`objectType` = 'article',`lang` = 'all' WHERE id IN ('10')
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:54:41',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284481',`lang` = 'all'

20180514 15:55:28: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h3 style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><img src=\"/file.php?f=201805/f_5e3725d2bf31d9fc018ec157d5c8bbae.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 15:55:27',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  UPDATE eps_file SET `objectID` = '19',`objectType` = 'article',`lang` = 'all' WHERE id IN ('11')
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 15:55:27',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284528',`lang` = 'all'

20180514 16:00:48: /admin.php?m=article&f=edit&articleID=20&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '20' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '20' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('20') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '20' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '20' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('20') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '222',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<p>21432141</p>',`addedDate` = '2018-05-14 15:50:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 16:00:48',`contentWX` = '<p>21432141</p>',`lang` = 'zh-cn' WHERE id  = '20' AND  eps_article.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '20' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '20',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '20' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '20' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('20') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_index SET `objectID` = '20',`objectType` = 'article',`title` = ' |222|',`status` = 'normal',`addedDate` = '2018-05-14 15:50:00',`editedDate` = '2018-05-14 16:00:48',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |21432141|',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284848',`lang` = 'all'

20180514 16:01:10: /admin.php?m=article&f=edit&articleID=19&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`titleColor` = '',`title` = '111',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '<h3 style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><img src=\"/file.php?f=201805/f_5e3725d2bf31d9fc018ec157d5c8bbae.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><br/></p>',`addedDate` = '2018-05-14 15:33:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2018-05-14 16:01:09',`contentWX` = '<h3 style=\"margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><strong><span style=\"color: rgb(189, 143, 71);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:宋体\">慧明法师</span></span></strong></h3><p style=\"margin-top:0;margin-right:0;margin-bottom:5px;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"color: rgb(102, 102, 102);letter-spacing: 0;font-size: 12px\"><span style=\"font-family:宋体\">来源</span>:静安寺&nbsp;&nbsp;&nbsp;&nbsp;时间:2015-04-14</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><image src=\"/file.php?f=201805/f_5e3725d2bf31d9fc018ec157d5c8bbae.jpg&t=jpg&o=&s=full&v=1525235356\" title=\"\" alt=\"\"/>&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;text-align:center;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 现任方丈慧明法师，1968年7月生人，汉族，祖籍江苏，历史学博士。现任中国佛教协会副秘书长、上海市佛教协会会长、静安寺方丈、上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 慧明法师1983年6月在上海玉佛寺出家，1983年9月～1987年7月就读于上海佛学院正、预科班，1987年9月～1989年9月就读于上海佛学院研究班（1988年应请为玉佛寺知客，同时担任上海佛学院监学）。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1989年7月毕业后留校任教，1993年9月～2003年10月担任上海佛学院副教务长。1995年10月，任静安寺监院并主持静安寺工作。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 1998年5月起任上海市佛教协会副会长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2000年12月，任静安寺住持，2001年5月20日举行方丈升座仪式。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年11月任上海佛学院院长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2010年1月任中国佛教协会副秘书长。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2003年起，在复旦大学攻读历史学专业硕博连读研究生，2009年1月7日获得复旦大学博士研究生学历证书，2009年6月26日，获得复旦大学博士研究生学位证书。&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\"><br/></span><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2008年1月起，担任上海市人大常委会委员。</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp;</span></p><p style=\"margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-indent:0;padding:0 0 0 0 ;line-height:28px;background:rgb(255,255,255)\"><span style=\"letter-spacing: 0;font-size: 12px\">&nbsp; &nbsp; 2015年2月9日，上海佛协第十一次代表会议顺利闭幕，慧明法师当选新届会长。</span></p><p><br/></p>',`lang` = 'zh-cn' WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  DELETE FROM eps_relation WHERE type  = 'article' AND  id  = '19' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'article',`id` = '19',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '19' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '19' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '24935',`value` = '慧',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27861',`value` = '法',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24072',`value` = '师',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26469',`value` = '来',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28304',`value` = '源',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38745',`value` = '静',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23433',`value` = '安',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23546',`value` = '寺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26102',`value` = '时',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38388',`value` = '间',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29616',`value` = '现',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20219',`value` = '任',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26041',`value` = '方',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19976',`value` = '丈',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65292',`value` = '，',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24180',`value` = '年',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26376',`value` = '月',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29983',`value` = '生',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27721',`value` = '汉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26063',`value` = '族',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31062',`value` = '祖',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31821',`value` = '籍',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27743',`value` = '江',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33487',`value` = '苏',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21382',`value` = '历',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21490',`value` = '史',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22763',`value` = '士',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12290',`value` = '。',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22269',`value` = '国',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20315',`value` = '佛',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25945',`value` = '教',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21327',`value` = '协',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20250',`value` = '会',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21103',`value` = '副',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31192',`value` = '秘',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20070',`value` = '书',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38271',`value` = '长',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '12289',`value` = '、',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19978',`value` = '上',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24066',`value` = '市',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38498',`value` = '院',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22312',`value` = '在',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29577',`value` = '玉',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20986',`value` = '出',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23478',`value` = '家',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65374',`value` = '～',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23601',`value` = '就',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35835',`value` = '读',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27491',`value` = '正',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39044',`value` = '预',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31185',`value` = '科',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '29677',`value` = '班',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30740',`value` = '研',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31350',`value` = '究',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65288',`value` = '（',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24212',`value` = '应',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35831',`value` = '请',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20026',`value` = '为',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30693',`value` = '知',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25285',`value` = '担',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30417',`value` = '监',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '65289',`value` = '）',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27605',`value` = '毕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19994',`value` = '业',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21518',`value` = '后',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30041',`value` = '留',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26657',`value` = '校',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21153',`value` = '务',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24182',`value` = '并',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20027',`value` = '主',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25345',`value` = '持',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24037',`value` = '工',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20316',`value` = '作',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36215',`value` = '起',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20303',`value` = '住',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26085',`value` = '日',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20030',`value` = '举',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34892',`value` = '行',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21319',`value` = '升',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24231',`value` = '座',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20202',`value` = '仪',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24335',`value` = '式',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22797',`value` = '复',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26086',`value` = '旦',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22823',`value` = '大',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25915',`value` = '攻',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19987',`value` = '专',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30805',`value` = '硕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36830',`value` = '连',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '33719',`value` = '获',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24471',`value` = '得',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35777',`value` = '证',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20301',`value` = '位',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24120',`value` = '常',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22996',`value` = '委',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21592',`value` = '员',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21313',`value` = '十',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '27425',`value` = '次',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20195',`value` = '代',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '34920',`value` = '表',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '35758',`value` = '议',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21033',`value` = '利',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '38381',`value` = '闭',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24149',`value` = '幕',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '24403',`value` = '当',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36873',`value` = '选',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26032',`value` = '新',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23626',`value` = '届',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '19',`objectType` = 'article',`title` = ' |111|',`status` = 'normal',`addedDate` = '2018-05-14 15:33:00',`editedDate` = '2018-05-14 16:01:09',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 24935 26126 27861 24072 26469 28304 :____ 38745 23433 23546 &nbsp &nbsp &nbsp &nbsp 26102 38388 :2015-04-14&nbsp &nbsp &nbsp &nbsp &nbsp 29616 20219 26041 19976 24935 26126 27861 24072 65292 |1968| 24180 |7|__ 26376 29983 20154 65292 27721 26063 65292 31062 31821 27743 33487 65292 21382 21490 23398 21338 22763 12290 29616 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12289 19978 28023 24066 20315 25945 21327 20250 20250 38271 12289 38745 23433 23546 26041 19976 12289 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp 24935 26126 27861 24072 |1983| 24180 |6|__ 26376 22312 19978 28023 29577 20315 23546 20986 23478 65292 |1983| 24180 |9|__ 26376 65374 |1987| 24180 |7|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 27491 12289 39044 31185 29677 65292 |1987| 24180 |9|__ 26376 65374 |1989| 24180 |9|__ 26376 23601 35835 20110 19978 28023 20315 23398 38498 30740 31350 29677 65288 |1988| 24180 24212 35831 20026 29577 20315 23546 30693 23458 65292 21516 26102 25285 20219 19978 28023 20315 23398 38498 30417 23398 65289 12290 &nbsp &nbsp &nbsp |1989| 24180 |7|__ 26376 27605 19994 21518 30041 26657 20219 25945 65292 |1993| 24180 |9|__ 26376 65374 |2003| 24180 |10|_ 26376 25285 20219 19978 28023 20315 23398 38498 21103 25945 21153 38271 12290 |1995| 24180 |10|_ 26376 65292 20219 38745 23433 23546 30417 38498 24182 20027 25345 38745 23433 23546 24037 20316 12290 &nbsp &nbsp &nbsp |1998| 24180 |5|__ 26376 36215 20219 19978 28023 24066 20315 25945 21327 20250 21103 20250 38271 12290 &nbsp &nbsp &nbsp |2000| 24180 |12|_ 26376 65292 20219 38745 23433 23546 20303 25345 65292 |2001| 24180 |5|__ 26376 |20|_ 26085 20030 34892 26041 19976 21319 24231 20202 24335 12290 &nbsp &nbsp &nbsp |2003| 24180 |11|_ 26376 20219 19978 28023 20315 23398 38498 38498 38271 12290 &nbsp &nbsp &nbsp |2010| 24180 |1|__ 26376 20219 20013 22269 20315 25945 21327 20250 21103 31192 20070 38271 12290 &nbsp &nbsp &nbsp |2003| 24180 36215 65292 22312 22797 26086 22823 23398 25915 35835 21382 21490 23398 19987 19994 30805 21338 36830 35835 30740 31350 29983 65292 |2009| 24180 |1|__ 26376 |7|__ 26085 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 21382 35777 20070 65292 |2009| 24180 |6|__ 26376 |26|_ 26085 65292 33719 24471 22797 26086 22823 23398 21338 22763 30740 31350 29983 23398 20301 35777 20070 12290 &nbsp &nbsp &nbsp |2008| 24180 |1|__ 26376 36215 65292 25285 20219 19978 28023 24066 20154 22823 24120 22996 20250 22996 21592 12290 &nbsp &nbsp &nbsp |2015| 24180 |2|__ 26376 |9|__ 26085 65292 19978 28023 20315 21327 31532 21313 19968 27425 20195 34920 20250 35758 39034 21033 38381 24149 65292 24935 26126 27861 24072 24403 36873 26032 23626 20250 38271 12290',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1526284869',`lang` = 'all'

20180514 16:07:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:13:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:19:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:25:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:31:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:37:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:43:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:49:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 16:55:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:01:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:07:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:13:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:19:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:25:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:31:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:37:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:43:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:49:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 17:55:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180514 18:01:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

