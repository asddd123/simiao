<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'common/header.modal.html.php');?>

<table class='table table-form'>
  <tr>
    <th class='w-80px'><?php echo $lang->order->productInfo; ?></th>
    <td>
      <?php foreach($products as $product): ?>

      <div>
        <span><?php echo html::a(commonModel::createFrontLink('product', 'view', "id=$product->productID"), $product->productName, "target='_blank'"); ?></span>
        <span><?php echo $lang->order->price . $lang->colon . $product->price . ' ' . $lang->order->count . $lang->colon . $product->count; ?></span>
      </div>
      <?php endforeach; ?>

    </td>
  </tr>
  <?php if($type == 'shop'){ ?>

  <tr>
    <th class='w-80px'><?php echo $lang->order->expressInfo; ?></th>
    <td>
    <?php if($order->deliveryStatus !== 'not_send'){ ?> 
      <?php echo $control->order->expressInfo($order) . '&nbsp;' . $order->waybill; ?>

    <?php }else{ ?>

      <?php echo $lang->order->noRecord;?>

<?php } ?>

    </td>
  </tr>
  <tr>
    <th class='w-80px'><?php echo $lang->order->address; ?></th>
    <td>
      <?php $address=$this->var['address'] = json_decode($order->address);?>

      <?php echo $address->contact . ',' . $address->address . ',' . str2Entity($address->phone) . ',' . $address->zipcode; ?>

    </td>
  </tr> 
  <?php } ?>

  <tr>
    <th class='w-80px'><?php echo $lang->order->account; ?></th>
    <td><?php echo zget($users, $order->account, $order->account); ?></td>
  </tr> 
  <tr>
    <th><?php echo $lang->order->status; ?></th>
    <td><?php echo $control->order->processStatus($order); ?></td>
  </tr> 
  <tr>
    <th><?php echo $lang->order->amount; ?></th>
    <td><?php echo $order->amount; ?></td>
  </tr> 
  <tr>
    <th><?php echo $lang->order->payment; ?></th>
    <td><?php echo zget($lang->order->paymentList, $order->payment); ?></td>
  </tr> 
  <tr>
    <th class='w-80px'><?php echo $lang->order->note; ?></th>
    <td><?php echo $order->note; ?></td>
  </tr> 
  <tr>
    <th><?php echo $lang->order->createdDate; ?></th>
    <td><?php echo $order->createdDate; ?></td>
  </tr> 
  <?php if($order->payment != 'COD' and ($order->paidDate > $order->createdDate)){ ?>

  <tr>
    <th><?php echo $lang->order->paidDate; ?></th>
    <td><?php echo $order->paidDate; ?></td>
  </tr> 
  <?php } ?>

  <?php if($order->deliveriedDate > $order->createdDate){ ?>

  <tr>
    <th><?php echo $lang->order->deliveriedDate; ?></th>
    <td><?php echo $order->deliveriedDate; ?></td>
  </tr> 
  <?php } ?>

  <?php if($order->confirmedDate > $order->deliveriedDate){ ?>

  <tr>
    <th><?php echo $lang->order->confirmedDate; ?></th>
    <td><?php echo $order->confirmedDate; ?></td>
  </tr> 
  <?php } ?>

  <?php if($order->payment == 'COD' and ($order->paidDate > $order->createdDate)){ ?>

  <tr>
    <th><?php echo $lang->order->paiedDate; ?></th>
    <td><?php echo $order->paiedDate; ?></td>
  </tr> 
  <?php } ?>

</table>
<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT .'/common/footer.modal.html.php');?>

