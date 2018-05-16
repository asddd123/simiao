<?php
 die();
?>
20180507 12:24:33: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-07 12:24:33' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-30 12:24:33' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-07 12:24:33' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-07 12:24:33' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 0, 10 
  SELECT * FROM eps_order_product WHERE orderID IN ('35','34','33','32','31','30','29','28','27','26') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525667073',`lang` = 'all'

20180507 12:24:33: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:24:33: /admin.php?m=widget&f=printWidget&widget=3
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

20180507 12:24:33: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180507 12:25:14: /admin.php?m=order&f=view&orderID=35&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '35' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '35' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '35'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('51')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('51') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:31:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 12:32:52: /admin.php?m=product&f=changeStatus&productID=115&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525667572',`lang` = 'all'

20180507 12:32:54: /admin.php?m=product&f=changeStatus&productID=114&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525667574',`lang` = 'all'

20180507 12:32:56: /admin.php?m=product&f=changeStatus&productID=113&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525667576',`lang` = 'all'

20180507 12:32:58: /admin.php?m=product&f=changeStatus&productID=112&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '112' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525667578',`lang` = 'all'

20180507 12:33:15: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:33:48: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:34:20: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:34:40: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:35:01: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:35:06: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:35:09: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:35:18: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:36:27: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:36:30: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:36:46: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:37:45: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:37:51: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:37:57: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:40:03: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:40:32: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:40:42: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:41:46: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:41:49: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:43:48: /admin.php?m=product&f=changeStatus&productID=115&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525668228',`lang` = 'all'

20180507 12:44:28: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:45:02: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:45:09: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:45:12: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:45:27: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:46:00: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 12:51:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 12:57:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:03:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:09:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:15:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:21:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:27:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:33:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:39:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:45:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:51:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 13:55:31: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:55:38: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:55:44: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:56:17: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:56:21: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:56:32: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:57:02: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 13:57:43: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:00:08: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:00:32: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:00:35: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:01:09: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54','57')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('57') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:07:55: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 14:11:01: /admin.php?m=order&f=view&orderID=3&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '3' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '3' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '3'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('1','54','57')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('54') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('57') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:11:08: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:11:13: /admin.php?m=order&f=view&orderID=1&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '1' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '1' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '1'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('52','55')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('52') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('55') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:11:21: /admin.php?m=order&f=view&orderID=2&btnLink=false
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE id  = '2' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order_product WHERE orderID  = '2' AND  eps_order_product.lang in('zh-cn', 'all') 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 
  SELECT id, name FROM eps_category WHERE 1=1  AND  type  = 'express' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_action WHERE objectType  = 'order' AND  objectID  = '2'  AND  eps_action.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT * FROM eps_history WHERE action IN ('53','56')  AND  eps_history.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('53') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_file WHERE objectType  = 'action' AND  objectID IN ('56') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:11:57: /admin.php?m=product&f=changeStatus&productID=115&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '115' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525673517',`lang` = 'all'

20180507 14:11:59: /admin.php?m=product&f=changeStatus&productID=114&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '114' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525673519',`lang` = 'all'

20180507 14:12:01: /admin.php?m=product&f=changeStatus&productID=113&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '113' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525673521',`lang` = 'all'

20180507 14:12:03: /admin.php?m=product&f=changeStatus&productID=2&status=normal
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  UPDATE eps_product SET  `status` = 'normal' WHERE id  = '2' AND  eps_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525673523',`lang` = 'all'

20180507 14:12:32: /admin.php?m=order&f=view&orderID=1&btnLink=false
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

20180507 14:13:34: /admin.php?m=order&f=view&orderID=1&btnLink=false
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

20180507 14:13:56: /admin.php?m=order&f=view&orderID=1&btnLink=false
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

20180507 14:37:54: /admin.php?m=site&f=setcdn
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'cdn',`key` = 'open',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'cdn',`key` = 'site',`value` = 'http://cdn.chanzhi.org/7.0.1/',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525675074',`lang` = 'all'

20180507 14:59:27: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 14:59:27: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-07 14:59:27' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-30 14:59:27' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-07 14:59:27' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-07 14:59:27' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525676367',`lang` = 'all'

20180507 14:59:27: /admin.php?m=widget&f=printWidget&widget=3
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

20180507 14:59:27: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180507 15:02:01: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-07 15:02:01' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-30 15:02:01' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-07 15:02:01' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-07 15:02:01' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525676521',`lang` = 'all'

20180507 15:02:01: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 15:02:01: /admin.php?m=widget&f=printWidget&widget=3
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

20180507 15:02:01: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180507 15:02:26: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 15:02:26: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-07 15:02:26' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-30 15:02:26' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-07 15:02:26' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-07 15:02:26' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525676546',`lang` = 'all'

20180507 15:02:26: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180507 15:02:26: /admin.php?m=widget&f=printWidget&widget=3
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

20180507 15:05:06: /admin.php?m=package&f=upload
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:16:49: /admin.php?m=backup&f=backup&reload=yes
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:21:24: /admin.php?m=backup&f=restore&file=201805071516486&confirm=yes
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:22:36: /admin.php?m=backup&f=restore&file=201805071516486&confirm=yes
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:22:47: /admin.php?m=backup&f=backup&reload=yes
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:28:49: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:34:49: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:41:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:47:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:53:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 15:59:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 16:09:02: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 16:15:02: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 16:29:59: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-07 16:29:59' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-30 16:29:59' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-07 16:29:59' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-07 16:29:59' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525681799',`lang` = 'all'

20180507 16:29:59: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 16:29:59: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180507 16:30:00: /admin.php?m=widget&f=printWidget&widget=3
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

20180507 16:32:22: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-07 16:32:22' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-04-30 16:32:22' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-07 16:32:22' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-07 16:32:22' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525681942',`lang` = 'all'

20180507 16:32:22: /admin.php?m=widget&f=printWidget&widget=3
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

20180507 16:32:22: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180507 16:32:22: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180507 16:38:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 16:44:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 16:50:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 16:58:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:04:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:10:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:16:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:22:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:28:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:34:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:40:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:46:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 17:52:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180507 18:03:02: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

