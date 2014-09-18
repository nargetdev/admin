<?php /* Smarty version Smarty-3.1.14, created on 2014-09-17 20:13:20
         compiled from "/var/www/html/group45/admin/pa1/php/html/templates/templates/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121468167354164a0b535689-28122481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '151996f99a57dd4990bd395d42e782d32d536f38' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/album.tpl',
      1 => 1410984493,
      2 => 'file',
    ),
    'b9f00fd8aad5e04f11433b329550efeb58c0ba8d' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/base.tpl',
      1 => 1410812586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121468167354164a0b535689-28122481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54164a0b5aa4d4_38544792',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54164a0b5aa4d4_38544792')) {function content_54164a0b5aa4d4_38544792($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUM</h1>
<p class="important">
 Welcome! <br>
 <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>