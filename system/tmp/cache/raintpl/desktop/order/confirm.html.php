<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>

<?php echo js::set('currencySymbol', $currencySymbol); ?>

<?php echo js::set('checkStock', isset($control->config->product->stock) ? $control->config->product->stock : false); ?>

<?php if(!empty($products)){ ?>

<?php $total=$this->var['total'] = 0;?>

<div class='panel my-order'>
  <div class='panel-heading'><strong><?php echo $lang->order->confirm; ?></strong></div>
  <form id='confirmForm' action='<?php echo helper::createLink('order', 'create'); ?>' method='post'>
    <div class='panel-body'>
      <div id='addressBox'>
        <div>
          <strong><?php echo $lang->order->address; ?></strong>
          <?php echo html::a(helper::createLink('address', 'create') . ' form', $lang->address->create, "class='createAddress'"); ?>

          <?php echo html::hidden("createAddress", ''); ?>

        </div>
        <div id='addressList'></div>
        <div class='div-create-address hide'>
          <table class='table table-borderless address-form table-list'>
            <tr>
              <td class='w-100px'><?php echo html::input('contact', '', "class='form-control' placeholder='{$lang->address->contact}'"); ?></td>
              <td class='w-130px'><?php echo html::input('phone', '', "class='form-control' placeholder='{$lang->address->phone}'"); ?></td>
              <td><?php echo html::input('address', '', "class='form-control' placeholder='{$lang->address->address}'"); ?></td>
              <td class='w-100px'><?php echo html::input('zipcode', '', "class='form-control' placeholder='{$lang->address->zipcode}'"); ?></td>
              <td class='w-50px text-middle'><strong class='icon icon-remove' style='cursor:pointer'> </i></td>
            </tr>
          </table>
        </div>
      </div>
      <table class='table table-list'>
        <thead>
          <tr class='text-center'>
            <td class='text-left'><strong><?php echo $lang->order->productInfo; ?></strong></td>
            <td class='hidden-xs'></td>
            <td class='text-left hidden-xs'><?php echo $lang->order->price; ?></td>
            <td><?php echo $lang->order->count; ?></td>
            <td><?php echo $lang->order->amount; ?></td>
            <td><?php echo $lang->actions; ?></td>
          </tr>
        </thead>
        <?php foreach($products as $productID => $product): ?>

        <?php $productLink=$this->var['productLink'] = helper::createLink('product', 'view', "id=$productID", "category={$product->categories[$product->category]->alias}&name=$product->alias");?>

        <tr>
          <td class='w-100px'>
            <?php if(!empty($product->image)){ ?>

                <?php $title=$this->var['title'] = $product->image->primary->title ? $product->image->primary->title : $product->name;?>

                <?php echo html::a($productLink, html::image($control->loadModel('file')->printFileURL($product->image->primary, 'smallURL'), "title='$title' alt='$product->name'"), "class='media-wrapper'"); ?>

<?php } ?>

            <h6 class='visible-xs'><?php echo html::a($productLink, '<div class="" data-id="' . $product->id . '">' . $product->name . '</div>', "class='media-wrapper'"); ?></h6>
          </td>
          <td class='text-left text-middle hidden-xs'>
            <?php echo html::a($productLink, '<div class="" data-id="' . $product->id . '">' . $product->name . '</div>', "class='media-wrapper'"); ?>

          </td>
          <td class='w-100px text-middle hidden-xs'> 
            <?php if($product->promotion != 0){ ?>

            <?php $price=$this->var['price'] = $product->promotion;?>

            <div class='text-muted'><del><?php echo $currencySymbol . $product->price; ?></del></div>
            <div class='text-price'><?php echo $currencySymbol . $product->promotion; ?></div>
            <?php }else{ ?>

            <?php $price=$this->var['price']  = $product->price;?>

            <div class='text-price'><?php echo $currencySymbol . $product->price; ?></div>
            <?php } ?>

            <?php echo html::hidden("price[$product->id]", $price); ?>

            <?php $amount=$this->var['amount'] = $product->count * $price;?>

            <?php $total=$this->var['total'] += $amount;?>

          </td>
          <td class='w-140px text-middle'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='icon icon-minus'></i></span>
              <?php echo html::input("count[$product->id]", $product->count, "data-stock='{$product->amount}' class='form-control'"); ?>

              <span class='input-group-addon'><i class='icon icon-plus'></i></span>
            </div>
          </td>
          <td class='w-200px text-center text-middle'>
            <strong class='text-danger'><?php echo $currencySymbol; ?></strong>
            <strong class='text-danger amountContainer'><?php echo $amount; ?></strong>
          </td>
          <td class='text-middle text-center'>
            <?php echo html::a(helper::createLink('cart', 'delete', "product={$product->id}"), $lang->delete, "class='cartDeleter'"); ?>

            <?php echo html::hidden("product[]", $product->id); ?>

          </td>
        </tr>
        <?php endforeach; ?>

        <tr>
          <th class='text-left text-middle'><?php echo $lang->order->note; ?></th>
          <td colspan='5'><?php echo html::textarea('note', '', "class='form-control' rows=1"); ?></td>
        </tr>
      </table>
    </div>
    <div class='panel-footer text-right'>
      <?php printf($lang->order->selectProducts, count($products)); ?>

      <?php printf($lang->order->totalToPay, $currencySymbol . $total); ?>

      <?php echo html::submitButton($lang->order->submit, 'btn-order-submit'); ?>

    </div>
  </form>
  <form class='hide' id='payForm' method='post' action="<?php echo inlink('redirect'); ?>" target='_blank'>
    <?php echo html::hidden('payLink', ''); ?>

    <input class='submitBtn' type='submit' value="<?php echo $lang->confirm; ?>" />
  </form>
</div>
<?php }else{ ?>

<div class='panel'>
  <div class='panel-heading'>
    <strong><?php echo $lang->order->browse; ?></strong>
  </div>
  <div class='panel-body'>
    <?php echo $lang->order->noProducts; ?>

    <?php echo html::a(helper::createLink('product', 'browse'), $lang->order->pickProducts, "class='btn btn-xs btn-primary'"); ?>

    <?php echo html::a(helper::createLink('index', 'index'), $lang->order->goHome, "class='btn btn-xs btn-default'"); ?>

  </div>
</div>
<?php } ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

