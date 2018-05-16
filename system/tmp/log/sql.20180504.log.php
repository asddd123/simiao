<?php
 die();
?>
20180504 11:25:18: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-04 11:25:18' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-27 11:25:18' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-04 11:25:18' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-04 11:25:18' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 0, 10 
  SELECT * FROM eps_order_product WHERE orderID IN ('14','13','12','10','9','8','7','6','5','4') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525404318',`lang` = 'all'

20180504 11:25:18: /admin.php?m=widget&f=printWidget&widget=3
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

20180504 11:25:18: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180504 11:25:18: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 11:31:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:37:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:43:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:43:41: /admin.php?m=admin&f=ignore
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'ignoreAdminEntry',`value` = '1',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525405421',`lang` = 'all'

20180504 11:43:43: /admin.php?m=admin&f=ignore
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'ignoreAdminEntry',`value` = '1',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525405423',`lang` = 'all'

20180504 11:43:43: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-04 11:43:43' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-27 11:43:43' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-04 11:43:43' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-04 11:43:43' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 0, 10 
  SELECT * FROM eps_order_product WHERE orderID IN ('14','13','12','10','9','8','7','6','5','4') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525405423',`lang` = 'all'

20180504 11:43:43: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 11:43:43: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180504 11:43:43: /admin.php?m=widget&f=printWidget&widget=3
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

20180504 11:49:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:55:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:12: /admin.php?m=order&f=confirm1&productID=112
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product WHERE id  = '112' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '112' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '112'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('112') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('112') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 

20180504 11:59:15: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:17: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:17: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:18: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:18: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:18: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:22: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:22: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:23: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:23: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:24: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:24: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 11:59:25: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:05:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:33: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:33: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:34: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:34: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:39: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:40: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:11:40: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:12:32: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:16:27: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:17:31: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:17:34: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:17:34: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:17:35: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:22:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:28:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:34:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:27: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:28: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:28: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:28: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:29: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:34: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:38:53: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:40:36: /admin.php?m=product&f=create&category=
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525408836',`lang` = 'all'

20180504 12:40:44: /admin.php?m=product&f=create&category=
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_product SET `name` = '222',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0',`promotion` = '0',`order` = '0',`author` = 'admin',`addedDate` = '2018-05-04 12:40:44',`editedDate` = '2018-05-04 12:40:44',`lang` = 'zh-cn'
  UPDATE eps_product SET  `order` = '113' WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '113',`objectType` = 'product',`title` = ' |222|',`status` = 'normal',`addedDate` = '2018-05-04 12:40:44',`editedDate` = '2018-05-04 12:40:44',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525408844',`lang` = 'all'

20180504 12:40:59: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:42:47: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:42:51: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:44:05: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:44:16: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:46:07: /admin.php?m=product&f=create&category=
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO eps_product SET `name` = '333',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0',`promotion` = '0',`order` = '0',`author` = 'admin',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 12:46:07',`lang` = 'zh-cn'
  UPDATE eps_product SET  `order` = '114' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 12:46:07',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409167',`lang` = 'all'

20180504 12:46:28: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:46:30: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:46:30',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409190',`lang` = 'all'

20180504 12:46:34: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:47:25: /admin.php?m=order&f=edit&orderID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:47:28: /admin.php?m=order&f=edit&orderID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '12' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:47:28',`lang` = 'zh-cn' WHERE id  = '13' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409248',`lang` = 'all'

20180504 12:47:32: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:47:34: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:47:34',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409254',`lang` = 'all'

20180504 12:48:01: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:48:08: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:48:09: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:48:09',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409289',`lang` = 'all'

20180504 12:48:38: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:48:39: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:48:39',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409319',`lang` = 'all'

20180504 12:50:21: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:50:21',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409421',`lang` = 'all'

20180504 12:50:31: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:50:32: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:50:32',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409432',`lang` = 'all'

20180504 12:52:44: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:52:46: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:52:46',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409566',`lang` = 'all'

20180504 12:53:17: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:53:18: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:53:18',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409598',`lang` = 'all'

20180504 12:53:45: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:53:46: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"222\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:53:46',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409626',`lang` = 'all'

20180504 12:54:11: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:54:15: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"2223\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:54:15',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  INSERT INTO eps_action SET `objectType` = 'order',`objectID` = '14',`actor` = 'admin',`action` = 'edited',`date` = '2018-05-04 12:54:15',`comment` = '',`extra` = '',`lang` = 'zh-cn'
  INSERT INTO eps_history SET `field` = 'zipcode',`old` = '222',`new` = '2223',`diff` = '',`action` = '17',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409655',`lang` = 'all'

20180504 12:55:30: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:55:40: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409740',`lang` = 'all'

20180504 12:55:56: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:56:39: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:57:23: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 12:57:24: /admin.php?m=order&f=edit&orderID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order_product SET  `count` = '1' WHERE id  = '13' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  UPDATE eps_order SET `address` = '{\"account\":\"admin\",\"address\":\"222\",\"contact\":\"22\",\"phone\":\"2222222\",\"zipcode\":\"2223\",\"lang\":\"zh-cn\"}',`note` = '',`last` = '2018-05-04 12:57:24',`lang` = 'zh-cn' WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409844',`lang` = 'all'

20180504 12:57:34: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409854',`lang` = 'all'

20180504 12:57:37: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`alias` = '',`mall` = '',`keywords` = '',`desc` = '<p>111</p>',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 12:57:37',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 12:57:37',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409857',`lang` = 'all'

20180504 12:57:45: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:58:12: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:58:24: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:58:52: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:58:56: /admin.php?m=order&f=test
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 12:59:41: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`alias` = '',`mall` = '',`keywords` = '',`desc` = '<p>111</p>',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 12:59:41',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 12:59:41',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409981',`lang` = 'all'

20180504 12:59:50: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`alias` = '',`mall` = '',`keywords` = '',`desc` = '<p>111</p>',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 12:59:50',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 12:59:50',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525409990',`lang` = 'all'

20180504 13:01:58: /admin.php?m=order&f=confirm1&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM eps_category AS t1  LEFT JOIN eps_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '114' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_product_custom WHERE product  = '114'  AND  eps_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND  objectID IN ('114') AND  extension IN ('jpeg','jpg','gif','png','bmp') ORDER BY `order`,`editor` desc 

20180504 13:10:44: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 13:10:44',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 13:10:44',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525410644',`lang` = 'all'

20180504 13:10:51: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '333',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 13:10:50',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |333|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 13:10:50',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525410651',`lang` = 'all'

20180504 13:11:01: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525410661',`lang` = 'all'

20180504 13:11:37: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525410697',`lang` = 'all'

20180504 13:12:03: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525410723',`lang` = 'all'

20180504 13:16:43: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`name` = '233',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 13:16:43',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
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
  REPLACE eps_search_index SET `objectID` = '114',`objectType` = 'product',`title` = ' |233|',`status` = 'normal',`addedDate` = '2018-05-04 12:46:07',`editedDate` = '2018-05-04 13:16:43',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |111| 65306',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411003',`lang` = 'all'

20180504 13:16:50: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411010',`lang` = 'all'

20180504 13:22:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 13:28:48: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 13:31:21: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411881',`lang` = 'all'

20180504 13:32:41: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET `status` = 'normal',`number` = '',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '<p>111</p>',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0.00',`promotion` = '0.00',`unsaleable` = '0',`negotiate` = '0',`editor` = 'admin',`editedDate` = '2018-05-04 13:32:41',`lang` = 'zh-cn' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411961',`lang` = 'all'

20180504 13:32:47: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411967',`lang` = 'all'

20180504 13:32:59: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411979',`lang` = 'all'

20180504 13:33:06: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525411986',`lang` = 'all'

20180504 13:43:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 13:53:30: /admin.php?m=order&f=view&orderID=14&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '14' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '14' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '14'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('12','13','14','17')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('12') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('13') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('14') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('17') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 13:56:47: /admin.php?m=order&f=view&orderID=16&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '16' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '16' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '16'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('19')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 13:57:58: /admin.php?m=order&f=view&orderID=16&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '16' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '16' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '16'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('19')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 13:59:13: /admin.php?m=order&f=view&orderID=16&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '16' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '16' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '16'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('19')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 14:03:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:09:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:15:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:21:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:27:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:33:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:39:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:45:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:51:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 14:57:15: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 15:12:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 15:18:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 15:36:58: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:04:13: /admin.php?m=order&f=view&orderID=19&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '19' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '19' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '19'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('35')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('35') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 16:04:17: /admin.php?m=order&f=view&orderID=18&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '18' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '18' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '18'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('33')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('33') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 16:04:25: /admin.php?m=order&f=view&orderID=16&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '16' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '16' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '16'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('19')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('19') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 16:10:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:16:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:22:08: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:30:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:36:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:40:40: /admin.php?m=order&f=view&orderID=22&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '22' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '22' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '22'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('38')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('38') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 16:46:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:52:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 16:58:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:03:21: /admin.php?m=order&f=view&orderID=23&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '23' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '23' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '23'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('39')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('39') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180504 17:03:23: /admin.php?m=order&f=edit&orderID=23
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '23' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'express'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_order_product WHERE orderID  = '23' AND  eps_order_product.lang in('zh-cn', 'all') 

20180504 17:09:16: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:16:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:24:34: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:32:51: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:39:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:45:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 17:56:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 18:02:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 18:08:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180504 18:14:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

