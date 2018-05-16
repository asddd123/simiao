<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>

<?php echo js::set('goToPay', $lang->order->goToPay); ?>

<?php echo js::set('paid', $lang->order->paid); ?>

<div class='panel order-check'>
  <div class='panel-heading'><strong><?php echo $lang->order->selectPayment; ?></strong></div>
  <form id='checkForm' action='<?php echo helper::createLink('order', 'pay', "orderID=$order->id"); ?>' method='post' target='_blank'>
    <div class='panel-body'>
      <div id='products'>
        <table class='table table-list'>
          <thead>
            <tr class='text-center'>
              <td class='text-left'><strong><?php echo $lang->order->productInfo; ?></strong></td>
              <td><?php echo $lang->order->count; ?></td>
              <td><?php echo $lang->order->amount; ?></td>
            </tr>
          </thead>
          <?php foreach($products as $productID => $product): ?>

          <tr>
            <td class='text-left text-middle'>
              <?php echo $product->productName; ?>

            </td>
            <td class='w-140px text-middle text-center'>
              <div class='text-count'><?php echo $product->count; ?></div>
            </td>
            <td class='w-100px text-middle text-danger'> 
              <div class='text-price'><?php echo $currencySymbol . number_format($product->price * $product->count, 2); ?></div>
            </td>
          </tr>
          <?php endforeach; ?>

        </table>
      </div>
      <div id='paymentBox'>
        <h5><?php echo $lang->order->payment; ?></h5>
        <dl>
          <dd id='payment'><?php echo html::radio('payment', $paymentList); ?></dd>
        </dl>
      </div>
    </div>
    <div class='panel-footer text-right'>
      <?php printf($lang->order->totalToPay, $currencySymbol . $order->amount); ?>

      <?php echo html::submitButton($lang->order->settlement, 'btn-order-submit'); ?>

    </div>
  </form>
  <form class='hide' id='payForm' method='post' action="<?php echo inlink('redirect'); ?>" target='_blank'>
    <?php echo html::hidden('payLink', ''); ?>

    <input class='submitBtn' type='submit' value="<?php echo $lang->confirm; ?>" />
  </form>
</div>
<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

