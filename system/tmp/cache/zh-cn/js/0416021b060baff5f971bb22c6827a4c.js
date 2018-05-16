v.lang = {"confirmDelete":"\u60a8\u786e\u5b9a\u8981\u6267\u884c\u5220\u9664\u64cd\u4f5c\u5417\uff1f","deleteing":"\u5220\u9664\u4e2d","doing":"\u5904\u7406\u4e2d","loading":"\u52a0\u8f7d\u4e2d","updating":"\u66f4\u65b0\u4e2d...","timeout":"\u7f51\u7edc\u8d85\u65f6,\u8bf7\u91cd\u8bd5","errorThrown":"<h4>\u6267\u884c\u51fa\u9519\uff1a<\/h4>","continueShopping":"\u7ee7\u7eed\u8d2d\u7269","required":"\u5fc5\u586b","back":"\u8fd4\u56de","continue":"\u7ee7\u7eed","importTip":"\u53ea\u5bfc\u5165\u4e3b\u9898\u7684\u98ce\u683c\u548c\u6837\u5f0f","fullImportTip":"\u5c06\u4f1a\u5bfc\u5165\u6d4b\u8bd5\u6570\u636e\u4ee5\u53ca\u66ff\u6362\u7ad9\u70b9\u6587\u7ae0\u3001\u4ea7\u54c1\u7b49\u6570\u636e"};;v.currencySymbol = "\uffe5";;v.checkStock = false;;$().ready(function() { $('#execIcon').tooltip({title:$('#execInfoBar').html(), html:true, placement:'right'}); }); ;$(document).ready(function()
{
    $('.confirmDelivery').click(function()
    {
        confirmLink = $(this).data('rel');
        bootbox.confirm(v.confirmWarning, function(result)
        {
            if(!result) return true;
            $.getJSON(confirmLink, function (response)
            {
                if(response.result == 'success')
                {
                    bootbox.alert(response.message, function(){ location.reload(); });
                }
            })
            return true;
        });
        return false;
    });

    $('.cancelLink').click(function()
    {
        cancelLink = $(this).data('rel');
        bootbox.confirm(v.cancelWarning, function(result)
        {
            if(!result) return true;
            $.getJSON(cancelLink, function(response)
            {
                if(response.result == 'success')
                {
                    bootbox.alert(response.message, function(){location.reload();});
                }
            })
            return true;
        });
        return false;
    });

    $('.icon-plus').parent().click(function()
    {
        var countInput = $(this).prev('input');
        countInput.val(parseInt(countInput.val()) + 1);
        countInput.change();
    });

    $('.icon-minus').parent().click(function() 
    { 
        var countInput = $(this).next('input');
        if(countInput.val() <= 1) return false;
        countInput.val(parseInt(countInput.val()) - 1);
        countInput.change();
    });
    
    $('input[name*=count]').change(function()
    {
        if(v.checkStock && $(this).val() > $(this).data('stock')) $(this).val($(this).data('stock'));
        amount = $(this).val() * $(this).parents('tr').find('input[name^=price\\[]').val();
        amount = amount.toFixed(2);
        $(this).parents('tr').find('.amountContainer').text(amount);
        countAmount();
    });

    $('input[name*=count]').change();
    function countAmount()
    {
        amount = 0;
        $('.amountContainer').each(function()
        {
          amount += parseFloat($(this).html());    
        })
        $('#amount').text(v.currencySymbol + amount);
    }
})
$(document).ready(function()
{
    $('#addressList').load(
         createLink('address', 'browse') + ' .col-md-10 .panel-body',
         function()
         {
             if($('#addressList').find('.address-list').size() == 0) $('a.createAddress').click();
             $('#addressList a').remove();
         }
    );
    $(document).on('click', '.cartDeleter', function()
    {
        var deleter = $(this);
        bootbox.confirm(v.lang.confirmDelete, function(result)
        {
            if(result)
            {
                deleter.text(v.lang.deleteing);

                $.getJSON(deleter.attr('href'), function(data) 
                {
                    if(data.result == 'success')
                    {
                        deleter.parents('tr').remove();
                        $('input[name*=count]').change();
                    }
                    else
                    {
                        alert(data.message);
                    }
                });
            }
            return true;
       });
       return false;
    });

    $(document).on('click', '.icon-remove', function()
    {
        $('#createAddress').val(0);
        $('.div-create-address').hide();
        $('[name=address]').eq(0).prop('checked', true);
        return false;
    });

    $(document).on('click', '.cancelEdit', function(){ $(this).parents('.item').find('div').toggle()});

    $('a.createAddress').click(function()
    {
        $('#createAddress').val(1);
        $('[name=address]').prop('checked', false);
        $('.div-create-address').show();
        return false;
    });

    $.setAjaxForm('#confirmForm', function(response)
    {
        if(response.result == 'success')
        {
            location.href = response.locate;
        }
        else
        {
            if(typeof(response.message) == 'string')
            {
                bootbox.alert("<span class='text-danger'>" + response.message + "</span>");
            }
        }
    })
});

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
