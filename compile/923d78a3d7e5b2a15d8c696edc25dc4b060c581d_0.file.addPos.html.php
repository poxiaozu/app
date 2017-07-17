<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:39:15
  from "E:\wamp\www\app\template\admin\addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b88a33aa547_77918286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923d78a3d7e5b2a15d8c696edc25dc4b060c581d' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\admin\\addPos.html',
      1 => 1500218069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b88a33aa547_77918286 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=position&a=addCon" method="post">
    名称: <input type="text" name="posname"><br>
    <input type="submit" value="添加">
</form>
</body>
</html><?php }
}
