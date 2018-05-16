<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<style>
ul.user-control-nav > li > a{ padding:8px 18px;}
ul.user-control-nav > li.nav-icon > a{border-top:none; border-bottom:dashed 1px #ddd;}
ul.user-control-nav > li.nav-icon.active > a{border-bottom:none}
ul.user-control-nav > li.nav-icon:last-child > a{ border-bottom:1px solid #DDD;}

.nav-secondary > li.active > a,
.nav-secondary > li.active > a:hover,
.nav-secondary > li.active > a:focus,
.nav-primary > li.active > a,
.nav-primary > li.active > a:hover,
.nav-primary > li.active > a:focus {background-color: #2277da; border-color: #2277da}
.nav-secondary > li > a:hover, .nav-primary > li > a:hover {border-color: #3684e0}
</style>

<?php echo $control->loadModel('user')->fixMenus();?>

<?php $extView=$this->var['extView'] = $control->getExtViewFile(TPL_ROOT . 'user/side.html.php');?>

<?php if($extView){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($extView);?>

<?php return helper::cd(); ?>

<?php } ?>

<div class='col-md-2'>
  <?php foreach($control->config->user->navGroups as $group => $items): ?>

  <ul class='nav nav-primary nav-stacked user-control-nav'>
    <?php if(isset($lang->user->navGroups->$group)){ ?>

      <li class='nav-heading'> <?php echo $lang->user->navGroups->$group;?></li>
    <?php } ?>

    <?php $navs=$this->var['navs'] = explode(',', $items);?>

    <?php foreach($navs as $nav): ?>

      <?php $class=$this->var['class'] = '';?>

      <?php $menu=$this->var['menu'] = zget($lang->user->control->menus, $nav, '');?>

      <?php if(empty($menu)){ ?>

<?php continue; ?>

<?php } ?>

      <?php list($label, $module, $method) = explode('|', $menu); ?>

      <?php $module=$this->var['module'] = strtolower($module);?>

      <?php $method=$this->var['method'] = strtolower($method);?>

      <?php $menuInfo=$this->var['menuInfo'] = explode('|', $menu);?>

      <?php $params=$this->var['params']   = zget($menuInfo, 3 ,'');?> 
      <?php if(!commonModel::isAvailable($module)){ ?>

<?php continue; ?>

<?php } ?>

      <?php if($module == $control->app->getModuleName() && $method == $control->app->getMethodName()){ ?>

      <?php $class=$this->var['class'] .= 'active';?>

<?php } ?>

      <?php echo '<li class="nav-icon ' . $class . '">' . html::a($control->createLink($module, $method, $params), $label) . '</li>'; ?>

    <?php endforeach; ?>

  </ul>
  <?php endforeach; ?>

</div>
