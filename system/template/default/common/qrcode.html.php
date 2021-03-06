{if(!defined("RUN_MODE"))} {!die()} {/if}
{if(isset($config->wechatPublic->hasPublic) and $config->wechatPublic->hasPublic)} 
{$publicList=$control->loadModel('wechat')->getList()}
{/if}
<div id='rightDocker' class='hidden-xs'>
  {if(!empty($publicList) or extension_loaded('gd'))}
  <button id='rightDockerBtn' class='btn' data-toggle="popover" data-placement="left" data-target='$next'><i class='icon-qrcode'></i></button>
  {/if}
  <div class='popover fade'>
    <div class='arrow'></div>
    <div class='popover-content docker-right'>
      <table class='table table-borderless'>
        <tr>
          {if(isset($publicList))}
            {foreach($publicList as $public)}
              {if(!$public->qrcode)} {continue} {/if}
              <td>
                <div class='heading'><i class='icon-weixin'>&nbsp;</i> {$public->name}</div>
                {!html::image('data:image/png;base64', "data-src='$public->qrcode' width='200' height='200'")}
              </td>
            {/foreach}
          {/if}
          {if(extension_loaded('gd'))}
            <td>
              <div class='heading'>
                <i class='icon-mobile-phone'></i>
                {$lang->qrcodeTip}
              </div>
              {!html::image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', "width='200' height='200' data-src='" . helper::createLink('misc', 'qrcode') . "'")}
            </td>
          {/if}
        </tr>
      </table>
    </div>
  </div>
</div>
