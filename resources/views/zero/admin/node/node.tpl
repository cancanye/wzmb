<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{$config["appName"]} 节点</title>
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
                                            <div class="card-title text-dark fs-3 fw-bolder">节点列表</div>
                                            <div class="card-toolbar">
                                                <a class="btn btn-primary btn-sm fw-bold" href="node/create">
                                                    <i class="bi bi-cloud-plus fs-3"></i>创建节点
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-stack flex-wrap mb-5">
                                                <div class="d-flex align-items-center position-relative me-2 my-2">
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                    </span>
                                                    <input type="text" data-kt-admin-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="搜索"/>
                                                </div>
                                                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i> 过滤
                                                    </button>
                                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter" style="">
                                                        <div class="px-7 py-5">
                                                            <div class="fs-4 text-dark fw-bold">过滤条件</div>
                                                        </div>
                                                        <div class="separator border-gray-200"></div>
                                                        <div class="px-7 py-5">
                                                            <div class="mb-10">
                                                                <div class="d-flex flex-column flex-wrap fw-semibold" id="zero_admin_node_filter_value">
                                                                    <label class="form-label fs-5 fw-semibold mb-3">分组:</label>
                                                                    
                                                                    {foreach $userGroups as $index => $value}
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                                            <input class="form-check-input" type="checkbox" name="node_group" value="{$index}">
                                                                            <span class="form-check-label text-gray-600">
                                                                                {$value}
                                                                            </span>
                                                                        </label>
                                                                    {/foreach}
                                                                </div>        
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-admin-node-table-filter="reset">重置</button>
                                                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-admin-node-table-filter="filter">确定</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        {include file='admin/script.tpl'}
    </body>
    <script>
        window.addEventListener('load', () => {
            {include file='table/js_2.tpl'}
        })
    </script>
    <script>
        function updateNodeStatus(id) {
            if ($("#node_status_"+id).prop("checked")) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.ajax({
                type: "PUT",
                url: "/{$config['website_admin_path']}/node/update/status",
                dataType: "JSON",
                data: {
                    status,
                    id,
                },
                success: function(data){}
            });
        }
    </script>
    <script>
        const filterSearch = document.querySelector('[data-kt-admin-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            table_1.search(e.target.value).draw();
        });
    </script>
    <script>
        const nodeFilter = document.querySelector('[data-kt-admin-node-table-filter="filter"]');
        const nodeFilterReset = document.querySelector('[data-kt-admin-node-table-filter="reset"]');
        const nodeTableReload = function () {{
            table_1.search('').draw();
        }}
        nodeFilter.addEventListener('click', function () {
            const node_values = [];
            $('input[name="node_group"]').each(function(key, value) {
                if ($(this).prop('checked')) {
                    node_values[key] = $(this).val();
                }
            });
            table_1.search(JSON.stringify(node_values.filter(v => v.value !== null))).draw();
            
        });
        nodeFilterReset.addEventListener('click', function () {
           nodeTableReload();
           $('input[name="node_group"]').prop({ checked: false });
        })
    </script>
    <script>
        function switchActiveCustomConfig(config_id, node_id) {
            $.ajax({
                type: "PUT",
                url: "/{$config['website_admin_path']}/node/update/active_custom_config",
                dataType: "JSON",
                data: {
                    config_id,
                    node_id
                },
                success: function(data){
                    table_1.ajax.reload();
                }
            });
        }
    </script>
</html>