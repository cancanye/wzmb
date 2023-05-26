<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{$config["appName"]} 节点分类</title>
        <link href="/theme/zero/assets/css/zero.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8" />
        <meta name="renderer" content="webkit" />
        <meta name="description" content="Updates and statistics" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
        <meta http-equiv="expires" content="0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="/theme/zero/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/zero/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/zero/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/favicon.png" rel="shortcut icon">
        <link href="/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
	{include file ='admin/menu.tpl'}
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">节点分类</div>
                                            <div class="card-toolbar">
                                                <button class="btn btn-primary fs-bold" data-bs-toggle="modal" data-bs-target="#zero_modal_create_node_classification">
                                                    <i class="bi bi-plus-lg fs-2"></i>创建分类
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {include file='table/table.tpl'}
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        {include file='admin/footer.tpl'}
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="zero_modal_create_node_classification" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header justify-content-end border-0 pb-0">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            
                        </div>
                    </div>
                    <div class="modal-body scroll-y pt-0 pb-15 px-5 px-xl-20">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">分类配置</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="form-label fw-bold">显示名称</label>
                            <input class="form-control mb-5" id="name" value="" type="text" placeholder="用于前端显示" />
                            <label class="form-label fw-bold">分类</label>
                            <select class="form-select mb-5" id="classification" value="" data-control="select2" data-hide-search="true">
                                <option value="america">美洲</option>>
                                <option value="asia">亚洲</option>
                                <option value="europe">欧洲</option>
                                <option value="africa">非洲</option>
                                <option value="oceania">大洋洲</option>
                            </select>
                            <label class="form-label fw-bold">排序</label>
                            <input class="form-control" id="sort" value="" placeholder="输入数字，数字越大越靠前" />
                        </div>
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{$trans->t('discard')}</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-create-node-classification-action="submit" onclick="zeroAdminNodeClassification('create')">
                                <span class="indicator-label">{$trans->t('submit')}</span>
                                <span class="indicator-progress">{$trans->t('please wait')}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {include file='admin/script.tpl'}
        <script>
            window.addEventListener('load', () => {
                {include file='table/js_2.tpl'}
            })
        </script>
        <script>
            $('#payment_gateway').change(function() {
                var configToggle = $(this).val();
                var $paymentConfigs = $('[id^=payment_config_]');
                $paymentConfigs.addClass('d-none');
                $('#payment_config_'+configToggle.toLowerCase()).removeClass('d-none');
            });
        </script>
        <script>
            function zeroAdminNodeClassification(type, id = 0) {
                const submitButton = document.querySelector('[data-kt-admin-create-node-classification-action="submit"]');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                $.ajax({
                    type: 'POST',
                    url: '/{$config['website_admin_path']}/node_classification/'+type,
                    dataType: 'json',
                    data: {
                        id,
                        name: $('#name').val(),
                        classification: $('#classification').val(),
                        sort: $('#sort').val()
                    },
                    success: function(data) {
                        if (data.ret == 1) {
                            getResult(data.msg, '', 'success');
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;
                            table_1.ajax.reload();
                            $("#zero_modal_create_node_classification").modal('hide');
                        } else {
                            getResult(data.msg, '', 'error');
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;
                        }
                    }
                })
            }
        </script>
        <script>
            function zeroAdminNodeClassificationGetInfo(id) {
                const submitButton = document.querySelector('[data-kt-admin-create-node-classification-action="submit"]');
                $.ajax({
                    type: 'POST',
                    url: '/{$config['website_admin_path']}/node_classification/getinfo',
                    dataType: "json",
                    data: {
                        id
                    },
                    success: function(data) {
                        $('#name').val(data.name);
                        $('#classification').val(data.classification).trigger('change');
                        $('#sort').val(data.sort);
                        $("#zero_modal_create_node_classification").modal('show');
                        submitButton.setAttribute('onclick', 'zeroAdminNodeClassification("update", ' + id + ')');
                    }
                });
            }
        </script>
    </body>
</html>