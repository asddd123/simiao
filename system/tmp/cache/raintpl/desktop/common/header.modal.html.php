<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php if(helper::isAjaxRequest()){ ?>

  <?php $webRoot=$this->var['webRoot']   = $config->webRoot;?>

  <?php $jsRoot=$this->var['jsRoot']    = $webRoot . "js/";?>

  <?php $themeRoot=$this->var['themeRoot'] = $webRoot . "theme/default/";?>

  <?php if(isset($pageCSS)){ ?>

    <?php echo css::internal($pageCSS); ?>

<?php } ?>

  <div class="modal-dialog" style="width:<?php echo empty($modalWidth) ? 600 : $modalWidth; ?>px;">
    <div class="modal-content">
      <div class="modal-header">
        <?php echo html::closeButton(); ?>

        <h4 class="modal-title"> <?php if(!empty($title)){ ?>

<?php echo $title;?>

<?php } ?></h4>
      </div>
      <div class="modal-body">
<?php }else{ ?>

  <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'common'  . DS . 'header.html.php');?>

<?php } ?>

