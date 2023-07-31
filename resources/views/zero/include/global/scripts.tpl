<script src="/theme/zero/assets/plugins/global/plugins.bundle.js"></script>
<script src="/theme/zero/assets/js/scripts.bundle.js"></script>
<script src="/theme/zero/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="/js/datatable.min.js"></script>
<script src="/js/chart.min.js"></script>
<script src="/js/general.js"></script>
<script src="/js/i18nextBrowserLanguageDetector.min.js"></script>
<script src="/js/i18next.min.js"></script>
<script src="/js/language.js"></script>
<script>var webName = "{$config['appName']}";</script>
<script>
    {if $config['verify_email'] === 'open'}
        var veried = {$user->verified};
        if (veried == 0) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toastr-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300000",
                "hideDuration": "100000000",
                "timeOut": "5000000",
                "extendedTimeOut": "1000000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.warning('<span class=fw-bold fs-5>请验证邮箱</span> <button type="button" class="btn btn-light-primary btn-sm fw-bold" id="zero_user_verify_email">验证</button>');
            $('#zero_user_verify_email').click(function() {
                $.ajax({
                    type: 'POST',
                    url: '/user/verify/email/send',
                    dataType: 'json',
                    data: {},
                    success: function(data){
                        if (data.ret == 1) {
                            getResult(data.msg, '', 'success');
                        } else {
                            getResult('失败', '', 'error');
                        }
                    }								
                })
            });
        }
    {/if}

    function zeroMarkMessageAsRead(id, all = null) {
        if (all == null) {
            $.ajax({
                type: 'POST',
                url: '/user/message/update',
                dataType: 'json',
                data: {
                    id
                },
                success: function(data) {
                    const num = $('#zero_unread_message_num').html() - 1;
                    $('#zero_unread_message_num').html(num);
                    console.log(data.msg);
                }
            });
        } else {
            $('#kt_drawer_chat_messenger_body [data-kt-card-action="remove"]').each(function() {
                $(this).removeAttr('onclick');
            });
            $.ajax({
                type: 'POST',
                url: '/user/message/update_all',
                dataType: 'json',
                data: {},
                success: function(data) {
                    $('#kt_drawer_chat_messenger_body [data-kt-card-action="remove"]').each(function() {
                        $(this).click();
                    });
                    $('#zero_unread_message_num').html(0);
                    console.log(data.msg);
                }
            });
        }
    }
</script>
{include file='live_chat.tpl'}