$().ready(function() { $('#execIcon').tooltip({title:$('#execInfoBar').html(), html:true, placement:'right'}); }); ;$(document).ready(function()
{
    $.setAjaxForm('#createForm');
    $.setAjaxForm('.editForm');
    $('.form-edit').hide();
    $('#createForm').load(createLink('address', 'create')).hide();
    $('#createBtn').click(function(){$('#createForm').toggle();});
  
    $(document).on('click', '.submit', function(){$(this).parents('form').submit()});

    $('.editor').click(function()
    {
        $(this).parents('.item').find('div').toggle();
        $(this).parents('.item').find('.form-edit').load($(this).attr('href'));
        return false;
    });

    $(document).on('click', '.cancelEdit', function(){ $(this).parents('.item').find('div').toggle()});
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
