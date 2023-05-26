<?php
/* Smarty version 4.3.1, created on 2023-04-03 16:17:29
  from '/var/www/zero/resources/views/zero/user/verify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642a8b9976f3d8_60063760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6379dc83b8355593ff4c69624909a1ddd80cc40' => 
    array (
      0 => '/var/www/zero/resources/views/zero/user/verify.tpl',
      1 => 1680509846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642a8b9976f3d8_60063760 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 Dashboard</title>
        <meta charset="UTF-8" />
        <meta name="renderer" content="webkit" />
        <meta name="description" content="Updates and statistics" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="theme-color" content="#3B5598" />
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
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<?php echo '<script'; ?>
>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }<?php echo '</script'; ?>
>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>body { background-image: url('/theme/zero/assets/media/auth/bg5.jpg'); } [data-bs-theme="dark"] body { background-image: url('/theme/zero/assets/media/auth/bg5-dark.jpg'); }</style>
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<div class="d-flex flex-column flex-center text-center p-10">
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<h1 class="fw-bolder text-gray-900 mb-5"><?php if ($_smarty_tpl->tpl_vars['verification_result']->value == 'true') {?>Success, Good job guys! <?php } else { ?> Failed, It's terrible<?php }?></h1>
							<div class="mb-11">
								<a href="/user/dashboard" class="btn btn-sm btn-primary fw-bold">Back Dashboard</a>
							</div>
							<div class="mb-0">
								<img src="/theme/zero/assets/media/auth/please-verify-your-email.png" class="mw-100 mh-300px theme-light-show" alt="" />
								<img src="/theme/zero/assets/media/auth/please-verify-your-email-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
>var hostUrl = "assets/";<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/theme/zero/assets/plugins/global/plugins.bundle.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/theme/zero/assets/js/scripts.bundle.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
