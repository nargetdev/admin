<?php /* Smarty version Smarty-3.1.14, created on 2014-09-15 20:40:47
         compiled from "/var/www/html/group45/admin/pa1/php/html/templates/templates/albumedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301194312541717bf8e79a6-05298726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a71c2336d1b4dc306d9dca3042e26b156c1d69c' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/albumedit.tpl',
      1 => 1410800551,
      2 => 'file',
    ),
    'b9f00fd8aad5e04f11433b329550efeb58c0ba8d' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/base.tpl',
      1 => 1410812586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301194312541717bf8e79a6-05298726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541717bf961e78_80319955',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541717bf961e78_80319955')) {function content_541717bf961e78_80319955($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUM EDIT</h1>
<p class="important">
 Welcome to edit!
 <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</p>


  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>