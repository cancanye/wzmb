<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{$config["appName"]} 编辑节点</title>
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
                                                <button class="btn btn-sm btn-primary fw-bold" onclick="zeroAdminUpdateNode('{$node->id}')">
                                                <i class="bi bi-cloud-plus fs-3"></i>保存节点
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body row g-5">
                                            <div class="col-xxl-4">
                                                <div id="custom_config_1"></div>
                                            </div>
                                            <div class="col-xxl-4">
                                                <div id="custom_config_2"></div>
                                            </div>
                                            <div class="col-xxl-4">
                                                <div id="custom_config_3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-5">
                                        <div class="col-xxl-6">
                                            <div class="card card-stretch">
                                                <div class="card-body">
                                                    <label class="form-label required">节点名称</label>
                                                    <input class="form-control mb-5" id="name" name="name" type="text" placeholder="节点名称" value="{$node->name}">
                                                    <label class="form-label required">节点地址</label>
                                                    <input class="form-control mb-5" data-bs-toggle="tooltip" title="填写域名,节点IP会自动设置解析的IP" id="server" name="server" type="text" placeholder="节点地址" value="{$node->server}">
                                                    <label class="form-label required">节点IP</label>
                                                    <input class="form-control mb-5" id="node_ip" name="node_ip" type="text" placeholder="节点IP" value="{$node->node_ip}">
                                                    <label class="form-label">流量比例</label>
                                                    <input class="form-control mb-5" id="traffic_rate" name="traffic_rate" type="text" placeholder="流量比例" value="{$node->traffic_rate}">
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
                                                    <input class="form-control mb-5" id="node_class" name="node_class" type="number" placeholder="节点等级" value="{$node->node_class}">
                                                    <label class="form-label required">节点群组</label>
                                                    <select class="form-select mb-5" id="node_group" data-control="select2" data-placeholder="节点分组" multiple="multiple">
                                                        <option></option>                              
                                                        {foreach $userGroups as $index => $value}
                                                            <option value="{$index}">{$value}</option>
                                                        {/foreach}
                                                    </select>
                                                    <label class="form-label">流量上限</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="0为不限制" id="node_traffic_limit" name="node_traffic_limit" type="text" value="{$node->node_traffic_limit/1024/1024/1024}" placeholder="流量上限">
                                                        <span class="input-group-text">GB</span>
                                                    </div>
                                                    <label class="form-label">流量上限清空日</label>
                                                    <input class="form-control mb-5" id="node_traffic_limit_reset_date" name="node_traffic_limit_reset_date" type="text" value="{$node->node_traffic_limit_reset_date}" placeholder="流量上限清空日">
                                                    <label class="form-label">节点速度</label>
                                                    <div class="input-group mb-5">
                                                        <input class="form-control" data-bs-toggle="tooltip" title="0为不限制" id="node_speedlimit" name="node_speedlimit" type="text" value="{$node->node_speedlimit}" placeholder="节点速度">
                                                        <span class="input-group-text">Mbps</span>
                                                    </div>
                                                    <label class="form-label required">节点排序</label>
                                                    <input class="form-control mb-5" data-bs-toggle="tooltip" title="数值越大,越靠前" id="node_sort" name="node_sort" type="text" value="{$node->node_sort}" placeholder="节点排序">
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
            const container_1 = document.getElementById('custom_config_1');
            var options_1 = {
                mode: 'text',
                modes: ['code', 'form', 'text', 'tree', 'view', 'preview'], // allowed modes
                onModeChange: function (newMode, oldMode) {
                    console.log('Mode switched from', oldMode, 'to', newMode)
                }
            };
            const editor_1 = new JSONEditor(container_1, options_1);
            editor_1.set({$node->custom_config});

            // config2
            const container_2 = document.getElementById('custom_config_2');
            var options_2 = {
                mode: 'text',
                modes: ['code', 'form', 'text', 'tree', 'view', 'preview'], // allowed modes
                onModeChange: function (newMode, oldMode) {
                    console.log('Mode switched from', oldMode, 'to', newMode)
                }
            };
            const editor_2 = new JSONEditor(container_2, options_2);
            editor_2.set({$node->custom_config_2});

            // config 3
            const container_3 = document.getElementById('custom_config_3');
            var options_3 = {
                mode: 'text',
                modes: ['code', 'form', 'text', 'tree', 'view', 'preview'], // allowed modes
                onModeChange: function (newMode, oldMode) {
                    console.log('Mode switched from', oldMode, 'to', newMode)
                }
            };
            const editor_3 = new JSONEditor(container_3, options_3);
            editor_3.set({$node->custom_config_3});
        </script>
        <script>
            function zeroAdminUpdateNode(id) {
                $.ajax({
                    type: "PUT",
                    url: "/{$config['website_admin_path']}/node/update",
                    dataType: "JSON",
                    data: {
                        id,
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
                        custom_config_1: editor_1.get(),
                        custom_config_2: (Object.keys(editor_2.get()).length === 0) ? '{}' : editor_2.get(),
                        custom_config_3: (Object.keys(editor_3.get()).length === 0) ? '{}' : editor_3.get()
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
        <script>
            $('#node_flag').val("{$node->node_flag}").trigger('change');
            $('#node_type').val("{$node->node_type}").trigger('change');
            $('#node_group').val({$node->node_group}).trigger('change');
            $('#node_classification').val("{$node->node_classification}").trigger('change');
        </script>
    </body>
</html>