<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php if($onlyBody == 'no'){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>

<?php } ?>

<div class='panel'>
  <div class='panel-heading'>
    <strong><i class='icon-sitemap'></i> <?php echo $lang->sitemap->common; ?></strong>
    <div class='panel-actions'>
      <?php echo html::a($control->createLink('sitemap', 'index', '', '', 'xml'), '<i class="icon-code"></i> ' . $lang->sitemap->xmlVersion, "class='btn btn-primary'"); ?>

    </div>
  </div>
  <div class='panel-body'>
    <?php if(commonModel::isAvailable('article')){ ?>

    <div class='clearfix sitemap-tree'> 
      <h4><?php echo $lang->sitemap->articleList; ?></h4>
      <ul class='tree'>
        <li class='articleItem'><?php echo html::a(helper::createLink('company', 'index'), $lang->aboutUs); ?></li>
        <?php if(!empty($pages)){ ?>

        <?php foreach($pages as $page): ?>

        <li class='articleItem'><?php echo html::a(helper::createLink('page', 'view', "pageID={$page->id}", "name={$page->alias}"), $page->title); ?></li>
        <?php endforeach; ?>

<?php } ?>

      </ul>
      <ul class='tree'>
        <?php foreach($articles as $article): ?>

        <li class='articleItem'><?php echo html::a(helper::createLink('article', 'view', "id=$article->id", "category={$article->category->alias}&name=$article->alias"), $article->title); ?></li>
        <?php endforeach; ?>

      </ul>
    </div>
    <?php } ?>


    <?php if(commonModel::isAvailable('product')){ ?>

    <div class='clearfix sitemap-tree'> 
      <h4><?php echo $lang->sitemap->productList; ?></h4>
      <ul class='tree'>
        <?php foreach($products as $product): ?>

        <li class='productItem'><?php echo html::a(helper::createLink('product', 'view', "id=$product->id", "category={$product->category->alias}&name=$product->alias"), $product->name); ?></li>
        <?php endforeach; ?>

      </ul>
    </div>
    <?php } ?>

    
    <?php if(strpos($productTree, '<li>') !== false){ ?>

    <div class='clearfix sitemap-tree'> 
      <h4><?php echo $lang->sitemap->productCategory; ?></h4>
      <?php echo $productTree; ?>

    </div>
    <?php } ?>


    <?php if(strpos($articleTree, '<li>') !== false){ ?>

    <div class='clearfix sitemap-tree'> 
      <h4><?php echo $lang->sitemap->articleCategory; ?></h4>
      <?php echo $articleTree; ?>

    </div>
    <?php } ?>

    <?php if(commonModel::isAvailable('blog') && strpos($blogTree, '<li>') !== false){ ?>

    <div class='clearfix sitemap-tree'> 
      <h4><?php echo $lang->sitemap->blogCategory; ?></h4>
      <?php echo $blogTree; ?>

    </div>
    <?php } ?>


    <?php if(commonModel::isAvailable('forum') && $boards){ ?>

    <div class='clearfix sitemap-tree'>
      <h4><?php echo $lang->sitemap->boards; ?></h4>
      <ul class='tree'>
        <?php foreach($boards as $parentBoard): ?>

        <li>
          <?php echo $parentBoard->name; ?>

          <?php if($parentBoard->children){ ?>

          <ul>
            <?php foreach($parentBoard->children as $child): ?>

            <li><?php echo html::a(helper::createLink('forum', 'board', "id=$child->id", "category={$child->alias}"), $child->name); ?></li>
            <?php endforeach; ?>

          </ul>
          <?php } ?>

        </li>
        <?php endforeach; ?>

      </ul>
    </div>
    <?php if(!empty($threads)){ ?>

    <div class='clearfix sitemap-tree'>
      <h4><?php echo $lang->sitemap->threadList; ?></h4>
      <ul class='tree'>
        <?php foreach($threads as $thread): ?>

        <li><?php echo html::a(helper::createLink('thread', 'view', "id=$thread->id"), $thread->title); ?></li>
        <?php endforeach; ?>

      </ul>
    </div>
    <?php } ?>

<?php } ?>


    <?php if(commonModel::isAvailable('book')){ ?>

      <?php if(!empty($books)){ ?>

        <div class='clearfix sitemap-tree'>
          <h4><?php echo $lang->sitemap->books; ?></h4>
          <ul class='tree'>
            <?php foreach($books as $book): ?>

            <li><?php echo html::a(helper::createLink('book', 'browse', "nodeID=$book->id", "book={$book->alias}"), $book->title); ?></li>
            <?php endforeach; ?>

          </ul>
        </div>
      <?php } ?>

      <?php if(!empty($bookArticles)){ ?>

        <div class='clearfix sitemap-tree'>
          <h4><?php echo $lang->sitemap->bookArticles; ?></h4>
          <ul class='tree'>
            <?php foreach($bookArticles as $bookArticle): ?>

            <li><?php echo html::a(helper::createLink('book', 'read', "articleID=$bookArticle->id", "book={$bookArticle->book->alias}&article=$bookArticle->alias"), $bookArticle->title); ?></li>
            <?php endforeach; ?>

          </ul>
        </div>
      <?php } ?>

<?php } ?>


    <?php foreach($control->config->sitemap->modules as $module): ?>

      <?php if(strpos('article,blog,page,product,book,forum,thread', $module) === false and is_callable(array($control->sitemap, "show{$module}"))){ ?>

        <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . "sitemap/show{$module}.html.php");?>

<?php } ?>

    <?php endforeach; ?>

  </div>
</div>
<?php if($onlyBody == 'no'){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

<?php } ?>

