<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'header'));?>

<style>
#panel-404 {padding: 40px 80px 60px;}
#panel-404 h1 {margin-bottom: 40px;}
#panel-404 form {max-width: 300px}
.screen-phone #panel-404 {padding: 20px 20px 30px;}
</style>
<div class='panel' id='panel-404'>
  <h1>404 <small> - <?php echo $lang->error->pageNotFound; ?></small></h1>
  <p><small><?php echo $lang->error->searchTip; ?></small></p>
  <form action='<?php echo helper::createLink('search'); ?>' method='get' role='search'>
    <div class='input-group'>
      <?php $keywords=$this->var['keywords'] = ($control->app->getModuleName() == 'search') ? $control->session->serachIngWord : '';?>

      <?php echo html::input('words', $keywords, "class='form-control' placeholder=''"); ?>

      <?php if($control->config->requestType == 'GET'){ ?>

<?php echo html::hidden($control->config->moduleVar, 'search') . html::hidden($control->config->methodVar, 'index'); ?>

<?php } ?>

      <div class='input-group-btn'>
        <button class='btn btn-default' type='submit'><i class='icon icon-search'></i></button>
      </div>
    </div>
  </form>
</div>
<?php echo $control->fetch('sitemap', 'index', 'onlyBody=yes'); ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer'));?>

