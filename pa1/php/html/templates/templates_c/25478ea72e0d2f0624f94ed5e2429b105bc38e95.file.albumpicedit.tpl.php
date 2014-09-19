<?php /* Smarty version Smarty-3.1.14, created on 2014-09-18 20:50:43
         compiled from "/var/www/html/group45/admin/pa1/php/html/templates/templates/albumpicedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105662500541b45a39728e1-20911196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25478ea72e0d2f0624f94ed5e2429b105bc38e95' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/albumpicedit.tpl',
      1 => 1411073270,
      2 => 'file',
    ),
    'b9f00fd8aad5e04f11433b329550efeb58c0ba8d' => 
    array (
      0 => '/var/www/html/group45/admin/pa1/php/html/templates/templates/base.tpl',
      1 => 1410812586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105662500541b45a39728e1-20911196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541b45a39f48c6_97644488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541b45a39f48c6_97644488')) {function content_541b45a39f48c6_97644488($_smarty_tpl) {?>

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
 Add or Delete Pictures From This Album! <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 <br>
 <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</p>


  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>