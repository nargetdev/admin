<?php /* Smarty version Smarty-3.1.14, created on 2014-09-19 14:00:20
         compiled from "/var/www/html/group45/admin/pa1/php/html/templates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201412840754136001674ee2-24718481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67adbf8626fc68fd5a97974d66a0c3810b0a8190' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/index.tpl',
      1 => 1411135220,
      2 => 'file',
    ),
    'b9f00fd8aad5e04f11433b329550efeb58c0ba8d' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/base.tpl',
      1 => 1410812586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201412840754136001674ee2-24718481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541360017341c1_31183355',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541360017341c1_31183355')) {function content_541360017341c1_31183355($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1 style="background:#f22; text-align:center; padding:5px;">Nate is currently modifying files!</h1>
<!-- <h1 style="background:#f22; text-align:center; padding:5px;">Akshay is currently modifying files!</h1> -->
<!-- <h1 style="background:#f22; text-align:center; padding:5px;">Sid is currently modifying files!</h1> -->
<!-- <div style="background:#0f9; text-align:center; padding:5px;"><h1>Nobody is making changes right now, sftp is safe to use.</h1><p>(You can set a flag in templates/index.tpl)</p></div> -->
<div style="background:#ddd; text-align:center; padding:5px;">
</div>
<h1>INDEX</h1>
<p class="center">
	<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>