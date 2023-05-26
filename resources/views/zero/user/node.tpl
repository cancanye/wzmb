<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{$config["appName"]} Node</title>
        
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
    {include file ='include/index/menu.tpl'}                
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="card" id="kt_pricing">
                                        <div class="card-body p-lg-17">
                                            <div class="d-flex flex-column">
                                                {if !$class->isEmpty()}
                                                    <div class="nav-group nav-group-outline mx-auto mb-15 nav" data-kt-buttons="true">
                                                        {foreach $classifications as $classification}
                                                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 {if $classification->sort == $firstShow} active{/if}" data-bs-toggle="tab" data-bs-target="#node_show_{$classification->classification}">{$classification->name}</button>
                                                        {/foreach}
                                                    </div>
                                                {else}
                                                    <span class="fw-bold fs-3 text-center">对不起，系统中没有任何节点</span>     
                                                {/if}
												<div class="tab-content">
                                                    {foreach $classifications as $classification}
                                                    <div class="tab-pane fade {if $classification->sort == $firstShow}active show{/if}" id="node_show_{$classification->classification}">
                                                            <div class="row g-10">
                                                                {foreach $servers as $server} 
                                                                    {if $server->node_classification == $classification->classification}                     
                                                                        <div class="col-xl-4">
                                                                            
                                                                            <div class="d-flex h-100 rounded-3 bg-light bg-opacity-75 align-items-center flex-wrap ribbon ribbon-top" type="button" onclick="KTUsersShowNodeInfo({$server->id}, {$user->class}, {$server->node_class})">
                                                                                {if $user->class >= $server->node_class}
                                                                                    <div class="d-flex ribbon-label bg-success fs-9">
                                                                                        已解锁
                                                                                    </div>
                                                                                {else}
                                                                                    <div class="d-flex ribbon-label bg-danger fs-9">
                                                                                        未解锁
                                                                                    </div>
                                                                                {/if}
                                                                                <div class="w-100 px-10 py-5 d-flex flex-warp">                                                      
                                                                                    <div class="d-flex flex-column">
                                                                                        <img alt="image" class="rounded-circle shadow" width="35"
                                                                                            src="/theme/zero/assets/media/flags/{$server->node_flag}.svg">
                                                                                    </div>
                                                                                    <div class="d-flex flex-row-fluid flex-column flex-center">
                                                                                        <span class="fw-bold fs-3">{$server->name}</span>                                                                                       
                                                                                        
                                                                                    </div>                             
                                                                                </div>
                                                                                <div class="px-10 mb-3 d-flex flex-warp">
                                                                                    <span class="me-2"><i class="bi bi-people fs-4 me-1"></i>{$server->getNodeOnlineUserCount()}</span>
                                                                                    <span class="me-2"><i class="bi bi-lightning-charge fs-4 me-1"></i>{$server->traffic_rate}倍</span>
                                                                                    <span class="me-2"><i class="bi bi-hdd-rack fs-4 me-1"></i>{$server->nodeType()}</span>
                                                                                    {if $user->is_admin}
                                                                                        <span class="me-2"><i class="bi bi-arrow-clockwise me-1"></i>{$server->nodeLoad()}</span>
                                                                                        {if $server->node_traffic_limit > 0}
                                                                                            <span><i class="bi bi-activity fs-4 me-1"></i>{$server->nodeUsedTraffic()}/{$server->node_traffic_limit/1024/1024/1024}GB</span>
                                                                                        {/if}
                                                                                    {/if}
                                                                                </div>    
                                                                            </div>
                                                                        </div>
                                                                    {/if}
                                                                {/foreach}
                                                            </div>
                                                        </div>
                                                    {/foreach}
												</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-dark-75 order-2 order-md-1">
                                    &copy;<script>document.write(new Date().getFullYear());</script>,&nbsp;<a>{$config["appName"]},&nbsp;Inc.&nbsp;All rights reserved.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {include file='include/index/news.tpl'}
		<!-- vmess modal -->
        <div class="modal fade" id="zero_modal_vmess_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_vmess_node_info_remark">{$trans->t('node name')}</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_vmess_node_info_body">
						<nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_vmess_qrcode">
								{$trans->t('qrcode')}
							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_vmess_config">
								{$trans->t('config')}
							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_vmess_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_vmess_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_vmess_config">
								<div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p>{$trans->t('address')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_address"></span></p>
                                    <p>{$trans->t('port')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_port"></span></p>
                                    <p>{$trans->t('alter id')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_aid"></span></p>
                                    <p>{$trans->t('uuid')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_uuid"></span></p>
                                    <p>{$trans->t('network')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_net"></span></p>
                                    <p>{$trans->t('path')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_path"></span></p>
									<p>{$trans->t('host')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_host"></span></p>
                                    <p>{$trans->t('grpc servicename')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_servicename"></span></p>
                                    <p>{$trans->t('protocol')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_type"></span></p>
                                    <p>{$trans->t('security')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vmess_node_info_security"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">{$trans->t('discard')}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- vless modal -->
        <div class="modal fade" id="zero_modal_vless_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vless_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_vless_node_info_remark">{$trans->t('node name')}</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_vless_node_info_body">
						<nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_vless_qrcode">
								{$trans->t('qrcode')}
							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_vless_config">
								{$trans->t('config')}
							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_vless_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_vless_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_vless_config">
								<div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p>{$trans->t('address')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_address"></span></p>
                                    <p>{$trans->t('port')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_port"></span></p>
                                    <p>{$trans->t('uuid')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_uuid"></span></p>
                                    <p>{$trans->t('network')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_net"></span></p>
                                    <p>{$trans->t('path')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_path"></span></p>
									<p>{$trans->t('host')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_host"></span></p>
                                    <p>{$trans->t('grpc servicename')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_servicename"></span></p>
                                    <p>{$trans->t('protocol')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_type"></span></p>
                                    <p>{$trans->t('security')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_security"></span></p>
                                    <p>{$trans->t('flow')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_flow"></span></p>
                                    <p>{$trans->t('sni')}: <span class="badge badge-secondary badge-lg" id="zero_modal_vless_node_info_sni"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">{$trans->t('discard')}
                        </button>
                    </div>
                </div>
            </div>
        </div>
		<!-- ss modal -->
		<div class="modal fade" id="zero_modal_shadowsocks_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_shadowsocks_node_info_remark">{$trans->t('node name')}</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_shadowsocks_node_info_body">
                        <nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_shadowsocks_qrcode">
								{$trans->t('qrcode')}
							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_shadowsocks_config">
								{$trans->t('config')}
							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_shadowsocks_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_shadowsocks_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_shadowsocks_config">
                                <div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p>{$trans->t('address')}: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_address"></span></p>
                                    <p>{$trans->t('port')}: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_port"></span></p>
									<p>{$trans->t('encrypt')}: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_method"></span></p>
                                    <p>{$trans->t('passwd')}: <span class="badge badge-secondary badge-lg" id="zero_modal_shadowsocks_node_info_passwd"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">{$trans->t('discard')}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- trojan modal -->
		<div class="modal fade" id="zero_modal_trojan_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">
						<strong id="zero_modal_trojan_node_info_remark">{$trans->t('node name')}</strong></h4>
                    </div>
                    <div class="modal-body align-items-center" id="zero_modal_trojan_node_info_body">
                        <nav class="nav nav-tabs nav-justified" role="tablist">
							<button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true" data-bs-target="#zero_modal_tab_trojan_qrcode">
								{$trans->t('qrcode')}
							</button>
							<button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false" data-bs-target="#zero_modal_tab_trojan_config">
								{$trans->t('config')}
							</button>
                        </nav>
                        <div class="tab-content m-0 p-0">
                            <div class="tab-pane fade active show" id="zero_modal_tab_trojan_qrcode">
                                
                                    <div class="text-center pt-10" id="zero_modal_trojan_node_info_qrcode">
                                    </div>
                                
                            </div>
                            <div class="tab-pane fade show" id="zero_modal_tab_trojan_config">
                                <div class="pt-10 pl-10 ms-10 text-start fs-4">
                                    <p>{$trans->t('address')}: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_address"></span></p>
                                    <p>{$trans->t('port')}: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_port"></span></p>
									<p>{$trans->t('sni')}: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_sni"></span></p>
                                    <p>{$trans->t('uuid')}: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_uuid"></span></p>
                                    <p>{$trans->t('security')}: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_security"></span></p>
                                    <p>{$trans->t('flow')}: <span class="badge badge-secondary badge-lg" id="zero_modal_trojan_node_info_flow"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">{$trans->t('discard')}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {include file='include/global/scripts.tpl'}
        <script src="/js/qrcode.min.js"></script>
    </body>
</html>
                                            
                                                            
                                                                    