<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:38:50
  from "E:\wamp\www\app\template\admin\showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b888a02a113_86985311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc797c913d971a316aa395d5ee7623338bf7314' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\admin\\showUser.html',
      1 => 1500218069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b888a02a113_86985311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="padding:15px;">
<table class="table table-striped">
    <tr>
        <th>用户名</th>
        <th>昵称</th>
        <th>头像</th>
        <th>联系方式</th>
        <th>地址</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nicheng'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" width="200" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
        <td><a href="index.php?m=admin&f=user&a=del&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">删除</a> <a href="index.php?m=admin&f=user&a=update&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">编辑</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

</body>
</html><?php }
}
