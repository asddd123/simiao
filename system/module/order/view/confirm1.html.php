<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The create view file of product module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     product
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php include '../../common/view/ueditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<?php js::set('key', count($product->attributes));?>
<?php
$colorPlates = '';
foreach (explode('|', $lang->colorPlates) as $value)
{
    $colorPlates .= "<div class='color color-tile' data='#" . $value . "'><i class='icon-ok'></i></div>";
}
?>
<div class='panel'>
    <div class='panel-heading'><?php echo $lang->product->edit;?></div>
    <div class='panel-body'>
        <form method='post' id='editForm' action='<?php echo inlink('test'); ?>'>
            <table class='table table-form'>
                <tr>
                    <th class='w-100px'><?php echo $lang->product->number;?></th>
                    <td class='w-p40'><?php echo html::input('name', $product->name, "class='form-control' readonly='true'");?></td><td></td>
                </tr>
                <tr>
                    <th class='w-100px'><?php echo $lang->product->price;?></th>
                    <td class='w-p40'><?php echo html::input('price', $product->price, "class='form-control' readonly='true'");?></td><td></td>
                </tr>
                <tr>
                    <th class='w-100px'><?php echo $lang->product->userName;?></th>
                    <td class='w-p40'><?php echo html::input('userName', '', "class='form-control' required");?></td><td></td>
                </tr>
                <tr>
                    <th class='w-100px'><?php echo $lang->address->phone;?></th>
                    <td class='w-p40'><?php echo html::input('phone', '', "class='form-control' required");?></td><td></td>
                </tr>
                <tr>
                    <th class='w-100px'><?php echo $lang->address->address;?></th>
                    <td class='w-p40'><?php echo html::input('address', '', "class='form-control' required");?></td><td></td>
                </tr>
                <tr>
                    <th class='w-100px'><?php echo $lang->address->zipcode;?></th>
                    <td class='w-p40'><?php echo html::input('zipcode', '', "class='form-control' required");?></td><td></td>
                </tr>
                <?php echo html::hidden("product[]", $product->id) ?>
                <tr>
                    <th></th>
                    <td colspan='2'><?php echo html::submitButton();?></td>
                </tr>
            </table>
        </form>

        <div class='hide row-custom'>
            <div class='row form-group'>
                <div class="col-xs-3"> <?php echo html::input('label[key]', '', "class='form-control' placeholder='{$lang->product->placeholder->label}'" )?></div>
                <div class="col-xs-8"> <?php echo html::input('value[key]', '', "class='form-control' placeholder='{$lang->product->placeholder->value}'" )?></div>
                <div class="col-xs-1">
                    <?php echo html::a('javascript:;', "<i class='icon-plus'></i>", "class='btn btn-link pull-left btn-mini btn-add'");?>
                    <?php echo html::a('javascript:;', "<i class='icon-remove'></i>", "class='btn btn-link pull-left btn-mini btn-remove'");?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
