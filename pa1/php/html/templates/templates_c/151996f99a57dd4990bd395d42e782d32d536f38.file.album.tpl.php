<?php /* Smarty version Smarty-3.1.14, created on 2014-09-19 23:00:03
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
      1 => 1411166500,
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

<div class="changelog" align="left">
	<p>
		<strong>Changelog:</strong><br>
		-Delete works on /album/edit now<br>
		-Also, you may have noticed that this message now shows up everywhere.<br>
		-I added additional code for the album upload / delete pictures. I also commented out the query so that it does not actually delete files from the database anymore. <br>

		<br>
		Toggle your status from Active (RED) to Inactive (GREEN) in "templates/base.tpl"<br>
		<!-- Add updates here! -->
	</p>
</div>
<div class="status">
	<p class="active">Nate</p>
	<p class="inactive">Akshay</p>
	<p class="active">Sid</p>
</div>



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