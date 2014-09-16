<?php /* Smarty version Smarty-3.1.14, created on 2014-09-15 21:25:07
         compiled from "/var/www/html/group45/admin/pa1/php/html/templates/templates/albums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30324386454164a076a7d19-71310014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb3c3cbad83a1e02c9f07d569cfaa723106db03' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/albums.tpl',
      1 => 1410812586,
      2 => 'file',
    ),
    'b9f00fd8aad5e04f11433b329550efeb58c0ba8d' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/base.tpl',
      1 => 1410812586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30324386454164a076a7d19-71310014',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54164a07730ef3_34608814',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54164a07730ef3_34608814')) {function content_54164a07730ef3_34608814($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUMS</h1>
<p class="important">
 Welcome! <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>