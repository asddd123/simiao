<?php
 die();
?>
20180509 13:57:00: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-05-09 13:57:00' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-05-02 13:57:00' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-05-09 13:57:00' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-04-09 13:57:00' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525845420',`lang` = 'all'

20180509 13:57:00: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180509 13:57:00: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 13:57:00: /admin.php?m=widget&f=printWidget&widget=3
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

20180509 13:57:22: /admin.php?m=block&f=setregion&page=all&region=header
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'header' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180509 13:57:28: /admin.php?m=block&f=edit&id=1&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '1'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '1'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT id, title FROM eps_article WHERE type  = 'page' AND  addedDate  <= '2018-05-09 13:57:28' AND  status  = 'normal'  AND  eps_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT id, title FROM eps_article WHERE type  = 'page' AND  addedDate  <= '2018-05-09 13:57:28' AND  status  = 'normal'  AND  eps_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 

20180509 14:03:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:08:28: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525846108',`lang` = 'all'

20180509 14:20:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:26:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:32:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:38:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:44:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:50:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 14:56:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:02:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:08:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:14:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:20:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:26:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:32:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:38:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:44:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:50:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 15:56:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:02:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:08:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:14:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:20:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:26:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:32:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:39:29: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855169',`lang` = 'all'

20180509 16:39:33: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855173',`lang` = 'all'

20180509 16:40:03: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855203',`lang` = 'all'

20180509 16:40:07: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855207',`lang` = 'all'

20180509 16:40:10: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855210',`lang` = 'all'

20180509 16:40:17: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855217',`lang` = 'all'

20180509 16:40:39: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855239',`lang` = 'all'

20180509 16:40:49: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525855249',`lang` = 'all'

20180509 16:46:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:52:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 16:58:03: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 16:58:30: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 16:58:40: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 16:59:15: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856355',`lang` = 'all'

20180509 16:59:23: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856363',`lang` = 'all'

20180509 17:01:43: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856503',`lang` = 'all'

20180509 17:01:50: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856510',`lang` = 'all'

20180509 17:01:56: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856516',`lang` = 'all'

20180509 17:02:05: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:02:11: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856531',`lang` = 'all'

20180509 17:02:18: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:02:27: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856547',`lang` = 'all'

20180509 17:02:46: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:03:19: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:03:38: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525856618',`lang` = 'all'

20180509 17:03:47: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:09:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 17:15:14: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:15:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 17:16:32: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:17:02: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857422',`lang` = 'all'

20180509 17:17:26: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:17:39: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:19:40: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857580',`lang` = 'all'

20180509 17:20:29: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857629',`lang` = 'all'

20180509 17:20:39: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857639',`lang` = 'all'

20180509 17:20:55: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857655',`lang` = 'all'

20180509 17:22:43: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857763',`lang` = 'all'

20180509 17:24:20: /admin.php?m=product&f=edit&productID=114
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180509 17:24:51: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857891',`lang` = 'all'

20180509 17:25:42: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857942',`lang` = 'all'

20180509 17:26:15: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857975',`lang` = 'all'

20180509 17:26:22: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525857982',`lang` = 'all'

20180509 17:30:27: /admin.php?m=product&f=edit&productID=115
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1525858227',`lang` = 'all'

20180509 17:31:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 17:37:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 17:43:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 17:49:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180509 17:55:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

