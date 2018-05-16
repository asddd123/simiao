<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>


<?php echo die(); ?>

<?php } ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>


<?php echo js::set('path',  $product->path); ?>


<?php echo js::set('objectType', 'product'); ?>


<?php echo js::set('productID', $product->id); ?>


<?php echo js::set('objectID', $product->id); ?>


<?php echo js::set('categoryID', $category->id); ?>


<?php echo js::set('categoryPath', explode(',', trim($category->path, ','))); ?>


<?php echo js::set('addToCartSuccess', $lang->product->addToCartSuccess); ?>


<?php echo js::set('gotoCart', $lang->product->gotoCart); ?>


<?php echo js::set('goback', $lang->product->goback); ?>


<?php echo js::set('stockOpened', $stockOpened); ?>


<?php echo js::set('stock', $product->amount); ?>


<?php echo css::internal($product->css); ?>


<?php echo js::execute($product->js); ?>


<?php echo js::set('pageLayout', $control->block->getLayoutScope('product_view', $product->id)); ?>


<?php echo $common->printPositionBar($category, $product);?>


<div class='row blocks' data-region='product_view-topBanner'><?php echo $control->block->printRegion($layouts, 'product_view', 'topBanner', true);?>

</div>
<div class='row' id='columns' data-page='product_view'>
  <?php if(!empty($layouts['product_view']['side']) and !empty($sideFloat) && $sideFloat != 'hidden'){ ?>


    <div class="col-md-<?php echo 12 - $sideGrid; ?> col-main<?php echo ($sideFloat === 'left') ? ' pull-right' : ''; ?>">
  <?php }else{ ?>

    <div class='col-md-12'>
  <?php } ?>

    <div class='row blocks' data-region='product_view-top'><?php echo $control->block->printRegion($layouts, 'product_view', 'top', true);?>

</div>
    <div class='panel panel-body panel-product' id='product' data-id='<?php echo $product->id;?>'>
      <div class='row'>
        <?php if(!empty($product->image->list)){ ?>


          <div class='col-sm-5' id='productImageWrapper'>
            <div class='product-image media-wrapper' id='productImage'>
              <?php $title=$this->var['title'] = $product->image->primary->title ? $product->image->primary->title : $product->name;?>

              <?php echo html::image($control->loadModel('file')->printFileURL($product->image->primary), "title='$title' alt='$product->name'"); ?>


              <div class='image-zoom-region'></div>
            </div>
            <?php if(count($product->image->list) > 1){ ?>


              <div class='product-image-menu-wrapper' id='imageMenuWrapper'>
                <button type='button' class='btn btn-link btn-img-scroller btn-prev-img'><i class="icon icon-chevron-left"></i></button>
                <button type='button' class='btn btn-link btn-img-scroller btn-next-img'><i class="icon icon-chevron-right"></i></button>
                <div class='product-image-menu clearfix' id='imageMenu'>
                  <?php foreach($product->image->list as $image): ?>


                  <?php $title=$this->var['title'] = $image->title ? $image->title : $product->name;?>

                  <div class="product-image-wrapper">
                    <div class='product-image little-image'>
                      <?php echo html::image($control->file->printFileURL($image), "title='{$title}' alt='{$product->name}'"); ?>


                    </div>
                  </div>
                  <?php endforeach; ?>

                </div>
              </div>
            <?php } ?>

          </div>
          <div class='col-sm-7'>
        <?php }else{ ?>

        <div class='col-md-12'>
        <?php } ?>

          <div class='product-property<?php echo empty($product->image->list) ? ' product-lack-img' : ''; ?>'>
            <h1 class='header-dividing'><?php echo $product->name;?></h1>
            <ul class='list-unstyled meta-list'>
              <?php $attributeHtml=$this->var['attributeHtml'] = '';?>

              <?php if(!$product->unsaleable){ ?>


                <?php if($product->negotiate){ ?>


                  <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='priceItem'><span class='meta-name'>" . $lang->product->price . "</span>";?>

                  <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'><span class='text-danger text-lg text-latin'>" . $lang->product->negotiate . "</span></li>";?>

                <?php }else{ ?>

                  <?php if($product->promotion != 0){ ?>


                    <?php if($product->price != 0){ ?>


                      <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='priceItem'><span class='meta-name'>" . $lang->product->price . "</span>";?>

                      <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'><span class='text-muted text-latin'>" . $config->product->currencySymbol . "</span> <del><strong class='text-latin'>" . $product->price . "</del></strong></span></li>";?>

<?php } ?>

                    <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='promotionItem'><span class='meta-name'>" . $lang->product->promotion . "</span>";?>

                    <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'><span class='text-muted text-latin'>" . $config->product->currencySymbol . "</span> <strong class='text-danger text-latin text-lg'>" . $product->promotion . "</strong></span></li>";?>

                  <?php }elseif($product->price != 0){ ?>


                    <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='priceItem'><span class='meta-name'>" . $lang->product->price . "</span>";?>

                    <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'><span class='text-muted text-latin'>" . zget($lang->product->currencySymbols, $config->product->currency, '￥') . "</span> <strong class='text-important text-latin text-lg'>" . $product->price . "</strong></span></li>";?>

<?php } ?>

<?php } ?>

<?php } ?>

              <?php if($product->amount and isset($config->product->stock)){ ?>


                <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='amountItem'><span class='meta-name'>" . $lang->product->stock . "</span>";?>

                <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . $product->amount . " <small>" . $product->unit . "</small></span></li>";?>

<?php } ?>

              <?php if($product->brand){ ?>


                <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='brandItem'><span class='meta-name'>" . $lang->product->brand . "</span>";?>

                <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . $product->brand . " <small>" . $product->model . "</small></span></li>";?>

<?php } ?>

              <?php if(!$product->brand and $product->model){ ?>


                <?php $attributeHtml=$this->var['attributeHtml'] .= "<li id='modelItem'><span class='meta-name'>" . $lang->product->model . "</span>";?>

                <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . $product->model . "</span></li>";?>

<?php } ?>

              <?php if($product->color){ ?>


                <?php $attributeHtml=$this->var['attributeHtml'] .= "<li><span class='meta-name'>" . $lang->product->color . "</span>";?>

                <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . $product->color . "</span></li>";?>

<?php } ?>

              <?php if($product->origin){ ?>


                <?php $attributeHtml=$this->var['attributeHtml'] .= "<li><span class='meta-name'>" . $lang->product->origin . "</span>";?>

                <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . $product->origin . "</span></li>";?>

<?php } ?>

              <?php foreach($product->attributes as $attribute): ?>


                <?php if(empty($attribute->label) and empty($attribute->value)){ ?>


<?php continue; ?>

<?php } ?>

                  <?php $attributeHtml=$this->var['attributeHtml'] .= "<li><span class='meta-name'>" . $attribute->label . "</span>";?>

                <?php if(strpos($attribute->value, 'http://') === 0 or strpos($attribute->value, 'https://') === 0){ ?>


                  <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . html::a($attribute->value, $attribute->value, "target='_blank'") . "</span></li>";?>

                <?php }else{ ?>

                  <?php $attributeHtml=$this->var['attributeHtml'] .= "<span class='meta-value'>" . $attribute->value . "</span></li>";?>

<?php } ?>

              <?php endforeach; ?>

              <?php echo $attributeHtml;?>

            </ul>
            <?php if(empty($attributeHtml)){ ?>

 <div class="product-summary"><?php echo $product->desc;?></div> <?php } ?>

            <?php if(!$product->unsaleable and commonModel::isAvailable('shop')){ ?>


              <?php if($product->negotiate){ ?>


              <span id='buyBtnBox'>
                <?php echo html::a(helper::createLink('company', 'contact'), $lang->product->contact, "class='btn btn-primary'"); ?>


              </span>
            <?php }else{ ?>

              <?php if(!$stockOpened or $product->amount > 0){ ?>


                <ul class='list-unstyled meta-list'>
                  <li id='countBox'>
                    <span class='meta-name'><?php echo $lang->product->count;?></span>
                    <span class='meta-value'>
                      <span class='input-group'>
                        <span class='input-group-addon'><i class='icon icon-minus'></i></span>
                        <?php echo html::input('count', 1, "class='form-control'"); ?>


                        <span class='input-group-addon'><i class='icon icon-plus'></i></span>
                      </span>
                    </span>
                  </li>
                </ul>
              <?php } ?>

              <span id='buyBtnBox'>
                <?php if($stockOpened and $product->amount < 1){ ?>


                  <label class='btn-soldout'><?php echo $lang->product->soldout;?></label>
                <?php }else{ ?>

                  <label class='btn-buy'><?php echo $lang->product->buyNow;?></label>
                  <label class='btn-cart'><?php echo $lang->product->addToCart;?></label>
                <?php } ?>

              </span>
              <?php } ?>

<?php } ?>

            <?php if(!commonModel::isAvailable('shop') and !$product->unsaleable and $product->mall and !$product->negotiate){ ?>


              <hr>
              <div class='btn-gobuy'>
                  111111111111
                <?php echo html::a(inlink('redirect', "id={$product->id}"), $lang->product->buyNow, "class='btn btn-lg btn-primary' target='_blank'"); ?>


              </div>
            <?php } ?>

          </div>
        </div>
      </div>
      <h5 class='header-dividing'><i class='icon-file-text-alt text-muted'></i> <?php echo $lang->product->content;?></h5>
      <div class='article-content'>
        <?php echo $product->content;?>

      </div>
      <div class="article-files">
        <?php echo $control->loadModel('file')->printFiles($product->files);?>


      </div>
    </div>
    <div class='row blocks' data-region='product_view-bottom'><?php echo $control->block->printRegion($layouts, 'product_view', 'bottom', true);?>

</div>
    <?php if(commonModel::isAvailable('message')){ ?>


    <div id='comments'>
      <div id='commentBox'>
        <?php echo $control->fetch('message', 'comment', "objectType=product&objectID={$product->id}"); ?>


      </div>
      <?php echo html::a('', '', "name='comment'"); ?>


    </div>
    <?php } ?>

  </div>
  <?php if(!empty($layouts['product_view']['side']) and !(empty($sideFloat) || $sideFloat === 'hidden')){ ?>


  <div class='col-md-<?php echo $sideGrid;?> col-side'>
    <side class='page-side blocks' data-region='product_view-side'><?php echo $control->block->printRegion($layouts, 'product_view', 'side');?>

</side>
  </div>
  <?php } ?>

</div>
<div class='row blocks' data-region='product_view-bottomBanner'><?php echo $control->block->printRegion($layouts, 'product_view', 'bottomBanner', true);?>

</div>
<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'common/video.html.php');?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>


