v.lang = {"confirmDelete":"\u60a8\u786e\u5b9a\u8981\u6267\u884c\u5220\u9664\u64cd\u4f5c\u5417\uff1f","deleteing":"\u5220\u9664\u4e2d","doing":"\u5904\u7406\u4e2d","loading":"\u52a0\u8f7d\u4e2d","updating":"\u66f4\u65b0\u4e2d...","timeout":"\u7f51\u7edc\u8d85\u65f6,\u8bf7\u91cd\u8bd5","errorThrown":"<h4>\u6267\u884c\u51fa\u9519\uff1a<\/h4>","continueShopping":"\u7ee7\u7eed\u8d2d\u7269","required":"\u5fc5\u586b","back":"\u8fd4\u56de","continue":"\u7ee7\u7eed","importTip":"\u53ea\u5bfc\u5165\u4e3b\u9898\u7684\u98ce\u683c\u548c\u6837\u5f0f","fullImportTip":"\u5c06\u4f1a\u5bfc\u5165\u6d4b\u8bd5\u6570\u636e\u4ee5\u53ca\u66ff\u6362\u7ad9\u70b9\u6587\u7ae0\u3001\u4ea7\u54c1\u7b49\u6570\u636e"};;v.random = "f6cc3bb34f35182f08be14120457da71";;
$().ready(function()
{
    $('a.btn-oauth').each(function()
    {
        fingerprint = getFingerprint();
        $(this).attr('href', $(this).attr('href').replace('fingerprintval', fingerprint) )
    })
});
;$().ready(function() { $('#execIcon').tooltip({title:$('#execInfoBar').html(), html:true, placement:'right'}); }); ;/* Keep session random valid. */
needPing = true;
$('#submit').click(function()
{
    var password = $('#password').val();
    var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if(!reg.test($('#account').val())) password = md5(md5(md5($('#password').val()) + $('#account').val()) + v.random);

    fingerprint = getFingerprint();

    loginURL = createLink('user', 'login');
    $.ajax(
    {
        type: "POST",
        data:"account=" + $('#account').val() + '&password=' + password + '&referer=' + encodeURIComponent($('#referer').val()) + '&fingerprint=' + fingerprint,
        url:loginURL,
        dataType:'json',
        success:function(data)
        {
            if(data.result == 'success') return location.href=data.locate;
            $.ajax(
            {
                type: "POST",
                data:"account=" + $('#account').val() + '&password=' + $('#password').val() + '&referer=' + encodeURIComponent($('#referer').val()) + '&fingerprint=' + fingerprint,
                url:loginURL,
                dataType:'json',
                success:function(data)
                {
                    if(data.result == 'fail') showFormError(data.message);
                    if(data.result == 'success') location.href=data.locate;
                    if(typeof(data) != 'object') showFormError(data);
                },
                error:function(data){showFormError(data.responseText);}
            })
        },
        error:function(data){showFormError(data.responseText);}
    })
    return false;
});

function showFormError(text)
{
    var error = $('#formError').text(text);
    var parent = error.closest('.form-group');
    if(parent.length) parent.show();
    else error.show();
}

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
