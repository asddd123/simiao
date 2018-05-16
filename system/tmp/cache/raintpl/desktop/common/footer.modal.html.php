<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php if(helper::isAjaxRequest()){ ?>

      </div>
    </div>
  </div>
  <?php if(isset($pageJS)){ ?>

    <?php echo js::execute($pageJS);; ?>

<?php } ?>

<?php }else{ ?>

  <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

<?php } ?>

