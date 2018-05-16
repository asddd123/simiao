<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>

<div class="page-user-control">
  <div class="row">
    <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'user/side.html.php');?>

    <div class="col-md-10">
      <div class="panel panel-body">
        <div class="jumbotron-bg">
          <?php printf($lang->user->control->welcome, $realname); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

