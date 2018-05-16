v.lang = {"confirmDelete":"\u60a8\u786e\u5b9a\u8981\u6267\u884c\u5220\u9664\u64cd\u4f5c\u5417\uff1f","deleteing":"\u5220\u9664\u4e2d","doing":"\u5904\u7406\u4e2d","loading":"\u52a0\u8f7d\u4e2d","updating":"\u66f4\u65b0\u4e2d...","timeout":"\u7f51\u7edc\u8d85\u65f6,\u8bf7\u91cd\u8bd5","errorThrown":"<h4>\u6267\u884c\u51fa\u9519\uff1a<\/h4>","continueShopping":"\u7ee7\u7eed\u8d2d\u7269","required":"\u5fc5\u586b","back":"\u8fd4\u56de","continue":"\u7ee7\u7eed","importTip":"\u53ea\u5bfc\u5165\u4e3b\u9898\u7684\u98ce\u683c\u548c\u6837\u5f0f","fullImportTip":"\u5c06\u4f1a\u5bfc\u5165\u6d4b\u8bd5\u6570\u636e\u4ee5\u53ca\u66ff\u6362\u7ad9\u70b9\u6587\u7ae0\u3001\u4ea7\u54c1\u7b49\u6570\u636e"};;v.path = ["7"];;v.objectType = "product";;v.productID = 113;;v.objectID = 113;;v.categoryID = 7;;v.categoryPath = ["7"];;v.addToCartSuccess = "\u6210\u529f\u52a0\u5165\u8d2d\u7269\u8f66\u3002";;v.gotoCart = "\u53bb\u8d2d\u7269\u8f66\u7ed3\u7b97";;v.goback = "\u8fd4\u56de";;v.stockOpened = false;;v.stock = 0;;
;v.pageLayout = "global";;
$(document).ready(function()
{
    $('.tree .list-toggle').mousedown(function(){$(this).parents('.panel-block').height('auto');})
    $('.row.blocks .tree').resize(function(){$(this).parents('.row.blocks').tidy({force: true});})
})
;
$(function()
{
    var videoContainer = "<video id=\"VIDEO_ID\" class=\"video-js vjs-default-skin vjs-big-play-centered\" controls preload=\"auto\" loop=\"loop\" data-setup='{\"autoplay\": VIDEO_AUTOSTART, \"width\": VIDEO_WIDTH, \"height\": VIDEO_HEIGHT, \"controlBar\": {\"fullscreenToggle\": VIDEO_FULLSCREEN}}'><source src=\"VIDEO_SRC\" type=\"video\/VIDEO_TYPE\" \/> <\/video>";
    $('embed').each(function(index)
    {
        if($(this).hasClass('videojs')) 
        {
            var $embed      = $(this),
                src         = $embed.attr('src'),
                w           = $embed.width(),
                h           = $embed.height(),
                type        = src.match(/t=\w+/g),
                autostart   = $embed.attr('autostart'),
                fullscreen  = $embed.attr('allowfullscreen'),
                containerID = 'video_' + index;

            $container = videoContainer.replace(/VIDEO_SRC/g, src);
            $container = $container.replace(/VIDEO_WIDTH/, w);
            $container = $container.replace(/VIDEO_HEIGHT/, h);
            $container = $container.replace(/VIDEO_ID/, containerID);
            $container = $container.replace(/VIDEO_AUTOSTART/, autostart);
            $container = $container.replace(/VIDEO_FULLSCREEN/, fullscreen);
            $container = $container.replace(/VIDEO_TYPE/, type[0].replace('t=', ''));
            $(this).replaceWith($container);
        }
    })
});
;$().ready(function() { $('#execIcon').tooltip({title:$('#execInfoBar').html(), html:true, placement:'right'}); }); ;$(document).ready(function()
{
    /* Set current active topNav. */
    var hasActive = false;
    if(v.categoryID > 0 && $('.nav-product-' + v.categoryID).length >= 1)
    {
        hasActive = true;
        $('.nav-product-' + v.categoryID).addClass('active');
    }

    if(v.categoryID > 0 && $('.nav-product-' + '0').length >= 1)
    {
      if(!hasActive)
      {
        hasActive = true;
        $('.nav-product-' + '0').addClass('active');
      }
    }
    if(v.categoryPath && v.categoryPath.length)
    {
        $.each(v.categoryPath, function(index, category)
        {
            if(!hasActive)
            {
                if($('.nav-product-' + category).length >= 1) hasActive = true;
                $('.nav-product-' + category).addClass('active');
            }
        });
    }
    else if(v.path && v.path.length)
    {
        $.each(v.path, function(index, category)
        {
            if(!hasActive)
            {
                if($('.nav-product-' + category).length >= 1) hasActive = true;
                $('.nav-product-' + category).addClass('active');
            }
        });
        if(!hasActive) $('.nav-product-0').addClass('active');
    }
    
    if(v.categoryID !== 0) $('#category' + v.categoryID).parent().addClass('active');
})
$(document).ready(function()
{
   	$('.little-image').mouseover(function()
    {
        $('.product-image.media-wrapper img').attr('src', $(this).find('img').attr('src').replace('s_', 'f_'));
        return false;
    });

    $('.btn-buy').click(function()  { location.href = createLink('order', 'confirm', 'product=' + v.productID + '&count=' + $('#count').val()); });

    $('.btn-cart').click(function() 
    { 
        var button = $('#cartBox');
        cartLink = createLink('cart', 'add', 'product=' + v.productID + '&count=' + $('#count').val());
        $.getJSON(cartLink, function(response)
        {
            if(response.result == 'success')
            {
                loadCartInfo(true);
            }
            else
            {
                location.href = response.locate;           
            }
        });
    });
    $('.icon-plus').parent().click(function(){ $('#count').val(parseInt($('#count').val()) + 1).change(); });
    if(v.stockOpened) 
    {
       $('#count').change(function()
       {
          if($('#count').val() > v.stock) $(this).val(v.stock);
       })
    }
    $('.icon-minus').parent().click(function() 
    { 
        if($('#count').val() <= 1) return false;
        $('#count').val(parseInt($('#count').val()) - 1);  
    });

    // set product image menu
    var $imageMenu = $('#imageMenu');
    var $imageMenuWrapper = $('#imageMenuWrapper');
    var setImageMenu = function()
    {
        
        var imgMenuWidth = 0;
        $imageMenu.children('.product-image-wrapper').each(function()
        {
            imgMenuWidth += $(this).outerWidth();
        });
        $imageMenu.width(imgMenuWidth);

        var imgWrapperWidth = $imageMenuWrapper.width();
        $imageMenuWrapper.toggleClass('scrollable', imgWrapperWidth < imgMenuWidth);
    };
    $(document).on('click', '.product-image-menu-wrapper.scrollable .btn-img-scroller', function()
    {
        var $btn = $(this);
        var imgMenuWidth = $imageMenu.outerWidth();
        var imgWrapperWidth = $imageMenuWrapper.width();
        var left = parseInt($imageMenu.css('left').replace('px', ''));
        if($btn.hasClass('btn-next-img'))
        {
            if(imgMenuWidth + left > imgWrapperWidth)
            {
                $imageMenu.css('left', Math.min(0, Math.max(imgWrapperWidth - imgMenuWidth, left - 56)));
            }
        }
        else
        {
            if(left < 0)
            {
                $imageMenu.css('left', Math.min(0, Math.max(imgWrapperWidth - imgMenuWidth, left + 56)));
            }
        }
    });

    $(window).resize(setImageMenu);
    setImageMenu();

    // zoom product image on hover
    var $productImage = $('#productImage');
    var $productImage2x = $('<div id="productImage2x" class="product-image-2x-wrapper" />').append($productImage.clone().attr('id', 'productImage2xWrapper').addClass('product-image-2x'));
    $productImage2x.find('.image-zoom-region').remove();
    $productImage.after($productImage2x);
    var resizeImage2x = function()
    {
        $productImage2x.width($productImage.width());
    };
    $(window).resize(resizeImage2x);
    resizeImage2x();

    var $imageZoom = $productImage.find('.image-zoom-region');
    var $productImage2xWrapper = $('#productImage2xWrapper');
    var $pageWrapper = $('.page-wrapper');
    var $img = $productImage.find('img');
    $productImage.on('mousemove', function(e)
    {
        var width = $productImage.width(), height = 300;
        var offset = $productImage.offset();
        var x = e.pageX - offset.left, y = e.pageY - offset.top;
        var position = $img.position();
        var imgWidth = $img.width(), imgHeight = $img.height();
        x = Math.max(position.left, Math.min(Math.min(width/2, position.left + imgWidth - width/2), x - width/4));
        y = Math.max(position.top, Math.min(Math.min(height/2, position.top + imgHeight - height/2), y - height/4));
        $imageZoom.css({left: x, top: y});
        $productImage2xWrapper.css({left: -2*x, top: -2*y});
    }).on('mouseleave', function(){$productImage2x.removeClass('show');})
    .on('mouseenter', function(){$productImage2x.addClass('show');});
})

;
function loadCartInfo(twinkle)
{
    $('#siteNav').load(createLink('misc', 'printTopBar'),
        function()
        {
            if(twinkle) 
            {
                bootbox.dialog(
                {  
                    message: v.addToCartSuccess,  
                    buttons:
                    {  
                        back:
                        {  
                            label:     v.lang.continueShopping,
                            className: 'btn-primary',  
                            callback:  function(){location.reload();}  
                        },
                        cart:
                        {  
                            label:     v.gotoCart,  
                            className: 'btn-primary',  
                            callback:  function(){location.href = createLink('cart', 'browse');}  
                        }  
                    }  
                });
            }
        }
    );
}
