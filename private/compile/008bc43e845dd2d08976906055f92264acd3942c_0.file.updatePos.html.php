<?php
/* Smarty version 3.1.30, created on 2017-07-11 08:13:19
  from "E:\wamp\www\php\private\template\admin\updatePos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59646c7f090e50_64455557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '008bc43e845dd2d08976906055f92264acd3942c' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\admin\\updatePos.html',
      1 => 1499744123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59646c7f090e50_64455557 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="padding:15px;">
<form action="index.php?m=admin&f=position&a=updateCon" method="post">
    <input type="text" name="posname" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value[0]['posname'];?>
">

    <input type="hidden" name="posid" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value[0]['posid'];?>
">
    <input type="submit" value="修改">
</form>
</body>
</html><?php }
}
