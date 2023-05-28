<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{$config["appName"]} 创建节点</title>
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
        <link href="https://cdn.jsdelivr.net/npm/jsoneditor/dist/jsoneditor.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/jsoneditor/dist/jsoneditor.min.js"></script>
        <link href="/favicon.png" rel="shortcut icon">
        <link href="/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
	{include file ='admin/menu.tpl'}
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="card mb-5">
                                        <div class="card-header card-flush">
                                            <div class="card-title fw-bold">节点配置</div>
                                            <div class="card-toolbar">
                                                <button class="btn btn-sm btn-primary fw-bold" onclick="zeroAdminCreateNode()">
                                                <i class="bi bi-cloud-plus fs-3"></i>创建节点
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="custom_config"></div>
                                        </div>
                                    </div>
                                    <div class="row g-5">
                                        <div class="col-xxl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="form-label required">节点名称</label>
                                                    <input class="form-control mb-5" id="name" name="name" type="text" placeholder="节点名称" value="">
                                                    <label class="form-label required">节点地址</label>
                                                    <input class="form-control mb-5" data-bs-toggle="tooltip" title="填写域名,节点IP会自动设置解析的IP" id="server" name="server" type="text" placeholder="节点地址" value="">
                                                    <label class="form-label required">节点IP</label>
                                                    <input class="form-control mb-5" id="node_ip" name="node_ip" type="text" placeholder="节点IP" value="">
                                                    <label class="form-label">流量比例</label>
                                                    <input class="form-control mb-5" id="traffic_rate" name="traffic_rate" type="text" placeholder="流量比例" value="1">
                                                    <label class="form-label required">节点旗帜</label>
                                                    <select class="form-select mb-5" id="node_flag">
                                                        {foreach $flags as $flag => $value}
                                                            <option value="{$flag}" data-kt-select2-country="/theme/zero/assets/media/flags/{$flag}.svg">{$value}</option>
                                                        {/foreach}
                                                    </select>
                                                    <label class="form-label required">节点类型</label>
                                                    <select class="form-select mb-5" id="node_type" data-control="select2" data-hide-search="true">
                                                        <option value="1">Shadowsocks</option>
                                                        <option value="2">VMESS</option>
                                                        <option value="4">TROJAN</option>
                                                        <option value="3">VLESS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="form-label">节点等级</label>
                                                    <input class="form-control mb-5" id="node_class" name="node_class" type="number" placeholder="节点等级" value="0">
                                                    <label class="form-label required">节点群组</label>
                                                    <select class="form-select mb-5" id="node_group" data-control="select2" data-placeholder="节点分组" multiple="multiple">
                                                        <option></option>                              
                                                        {foreach $userGroups as $index => $value}
                                                            <option value="{$index}">{$value}</option>
                                                        {/foreach}
                                                    </select>
                                                    <label class="form-label">流量上限</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="0为不限制" id="node_traffic_limit" name="node_traffic_limit" type="text" value="0" placeholder="流量上限">
                                                        <span class="input-group-text">GB</span>
                                                    </div>
                                                    <label class="form-label">流量上限清空日</label>
                                                    <input class="form-control mb-5" id="node_traffic_limit_reset_date" name="node_traffic_limit_reset_date" type="text" value="1" placeholder="流量上限清空日">
                                                    <label class="form-label">节点速度</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="0为不限制" id="node_speedlimit" name="node_speedlimit" type="text" value="0" placeholder="节点速度">
                                                        <span class="input-group-text">Mbps</span>
                                                    </div>
                                                    <label class="form-label required">节点排序</label>
                                                    <input class="form-control mb-5" data-bs-toggle="tooltip" title="数值越大,越靠前" id="node_sort" name="node_sort" type="text" value="0" placeholder="节点排序">
                                                    <label class="form-label required">节点分类</label>
                                                    <select class="form-select" id="node_classification" data-control="select2" data-placeholder="节点分类" data-hide-search="true">
                                                        <option></option>
                                                        {foreach $classifications as $classification}
                                                            <option value="{$classification->classification}">{$classification->name}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>  
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
        {include file='admin/script.tpl'}
        <script>
            const container = document.getElementById('custom_config');
            var options = {
                mode: 'text',
                modes: ['code', 'form', 'text', 'tree', 'view', 'preview'], // allowed modes
                onModeChange: function (newMode, oldMode) {
                    console.log('Mode switched from', oldMode, 'to', newMode)
                }
            };
            const editor = new JSONEditor(container, options);
        </script>
        <script>
            function zeroAdminCreateNode() {
                $.ajax({
                    type: "POST",
                    url: "/{$config['website_admin_path']}/node/create",
                    dataType: "JSON",
                    data: {
                        name: $('#name').val(),
                        server: $('#server').val(),
                        node_ip: $('#node_ip').val(),
                        traffic_rate: $('#traffic_rate').val(),
                        node_flag: $('#node_flag').val(),
                        node_type: $('#node_type').val(),
                        node_class: $('#node_class').val(),
                        node_group: $('#node_group').val(),
                        node_classification: $('#node_classification').val(),
                        node_traffic_limit: $('#node_traffic_limit').val(),
                        node_traffic_limit_reset_date: $('#node_traffic_limit_reset_date').val(),
                        node_speedlimit: $('#node_speedlimit').val(),
                        node_sort: $('#node_sort').val(),
                        custom_config: editor.get(),
                    },
                    success: function(data){
                        if(data.ret === 1) {
                            Swal.fire({
                                text: data.msg,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            getResult(data.msg, '', 'error');
                        }
                    }
                });
            }
        </script>
        <script>
            // Format options
            var optionFormat = function(item) {
                if ( !item.id ) {
                    return item.text;
                }
            
                var span = document.createElement('span');
                var imgUrl = item.element.getAttribute('data-kt-select2-country');
                var template = '';
            
                template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
                template += item.text;
            
                span.innerHTML = template;
            
                return $(span);
            }
            
            // Init Select2 --- more info: https://select2.org/
            $('#node_flag').select2({
                templateSelection: optionFormat,
                templateResult: optionFormat
            });
        </script>
    </body>
</html>