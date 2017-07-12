<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:58:07
  from "D:\wamp\www\app\private\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965741f7a7e52_88182915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '944300acd5baed953633c7fa11f2ea591c15bcfe' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\admin\\showCategory.html',
      1 => 1499761913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965741f7a7e52_88182915 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>cid</th>
        <th>分类名称</th>
        <th>所属分类</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
        <td><a href="index.php?m=admin&f=category&a=del&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">删除</a> <a href="index.php?m=admin&f=category&a=update&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
