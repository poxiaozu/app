<?php
/* Smarty version 3.1.30, created on 2017-07-11 11:17:17
  from "D:\wamp\www\app\private\template\admin\showMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964979d4b6410_00662550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b687025109b18ee52ed3c85455b238f8b6abe5e' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\admin\\showMember.html',
      1 => 1499761913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964979d4b6410_00662550 (Smarty_Internal_Template $_smarty_tpl) {
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
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nicheng'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" width="200" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
        <td><a href="index.php?m=admin&f=member&a=del&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">删除</a> <a href="index.php?m=admin&f=member&a=update&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
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
