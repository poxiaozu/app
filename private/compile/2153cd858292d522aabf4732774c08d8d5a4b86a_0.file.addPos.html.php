<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:58:19
  from "D:\wamp\www\app\private\template\admin\addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965742bde6218_70747268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2153cd858292d522aabf4732774c08d8d5a4b86a' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\admin\\addPos.html',
      1 => 1499761913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965742bde6218_70747268 (Smarty_Internal_Template $_smarty_tpl) {
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
