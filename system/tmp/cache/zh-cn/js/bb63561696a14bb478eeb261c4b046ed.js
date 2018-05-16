v.lang = {"confirmDelete":"\u60a8\u786e\u5b9a\u8981\u6267\u884c\u5220\u9664\u64cd\u4f5c\u5417\uff1f","deleteing":"\u5220\u9664\u4e2d","doing":"\u5904\u7406\u4e2d","loading":"\u52a0\u8f7d\u4e2d","updating":"\u66f4\u65b0\u4e2d...","timeout":"\u7f51\u7edc\u8d85\u65f6,\u8bf7\u91cd\u8bd5","errorThrown":"<h4>\u6267\u884c\u51fa\u9519\uff1a<\/h4>","continueShopping":"\u7ee7\u7eed\u8d2d\u7269","required":"\u5fc5\u586b","back":"\u8fd4\u56de","continue":"\u7ee7\u7eed","importTip":"\u53ea\u5bfc\u5165\u4e3b\u9898\u7684\u98ce\u683c\u548c\u6837\u5f0f","fullImportTip":"\u5c06\u4f1a\u5bfc\u5165\u6d4b\u8bd5\u6570\u636e\u4ee5\u53ca\u66ff\u6362\u7ad9\u70b9\u6587\u7ae0\u3001\u4ea7\u54c1\u7b49\u6570\u636e"};;v.goToPay = "\u8ba2\u5355\u521b\u5efa\u6210\u529f\uff0c\u8bf7\u5230\u652f\u4ed8\u9875\u9762\u5b8c\u6210\u4ed8\u6b3e\u3002";;v.paid = "\u6211\u5df2\u4ed8\u6b3e";;$().ready(function() { $('#execIcon').tooltip({title:$('#execInfoBar').html(), html:true, placement:'right'}); }); ;$(document).ready(function()
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
    $('[name=payment]').eq(0).prop('checked', true);
    $('#submit').click(function()
    {
        var payment = $('input:radio[name=payment]:checked').val();
        if(payment == 'COD')
        {
            $('#checkForm').attr('target', '');
        }
        else
        {
            $('#checkForm').attr('target', '_blank');

            bootbox.dialog(
            {  
                message: v.goToPay,  
                buttons:
                {  
                    paySuccess:
                    {
                        label:     v.paid,  
                        className: 'btn-primary',  
                        callback:  function() { setTimeout(function(){location.href = createLink('order', 'browse');}, 600); }  
                    }
                }
            });
        }
    });
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
