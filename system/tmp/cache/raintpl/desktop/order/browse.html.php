<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>

<?php echo js::set('confirmWarning', $lang->order->confirmWarning); ?>

<?php echo js::set('cancelWarning',  $lang->order->cancelWarning); ?>

<div class="page-user-control">
  <div class="row">
    <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'user/side.html.php');?>

    <div class="col-md-10">
      <div class='panel'>
        <div class='panel-heading'>
        <strong><i class="icon-shopping-cart"> </i><?php echo $lang->order->admin;?></strong>
        </div>
        <table class='table table-hover tablesorter table-fixed' table-layout='fixed'>
          <thead>
            <tr class='text-center'>
              <td class='w-100px'><?php echo $lang->order->type;?></td>
              <td class='w-280px text-left'><?php echo $lang->order->productInfo;?></td>
              <td class='w-80px text-right'><?php echo $lang->order->amount;?></td>
              <td class='w-80px'><?php echo $lang->product->status;?></td>
              <td class='w-80px'><?php echo $lang->order->payStatus;?></td>
              <td><?php echo $lang->order->note;?></td>
              <td><?php echo $lang->order->last;?></td>
              <td class='w-220px'><?php echo $lang->actions;?></td>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orders as $order): ?>

              <?php $goodsInfo=$this->var['goodsInfo'] = $control->order->printGoods($order);?>

              <tr>
                <td class='text-center text-middle'><?php echo zget($lang->order->types, $order->type); ?></td>
                <td class='text-middle' title='<?php echo strip_tags($goodsInfo); ?>'><?php echo $goodsInfo;?></td>
                <td class='text-right text-middle'><?php echo $order->amount + $order->balance; ?></td>
                <td class='text-center text-middle'>
                  <?php echo $control->order->processStatus($order);?>

                </td>
                <td class='text-center text-middle'>
                  <?php echo zget($lang->order->payStatusList, $order->payStatus, ''); ?>

                </td>
                <td class='text-left' title='<?php echo $order->note;?>'><?php echo $order->note;?></td>
                <td class='text-center'><?php echo ($order->last == '0000-00-00 00:00:00') ? '' : formatTime($order->last, 'm-d H:i'); ?></td>
                <td class='text-left text-middle'><?php echo $control->order->printActions($order);?></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
          <tfoot><tr><td colspan='8'><?php echo $pager->show();?></td></tr></tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

