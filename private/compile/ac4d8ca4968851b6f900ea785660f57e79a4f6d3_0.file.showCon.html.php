<?php
/* Smarty version 3.1.30, created on 2017-07-11 09:11:36
  from "E:\wamp\www\php\private\template\admin\showCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59647a28d91472_58774416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac4d8ca4968851b6f900ea785660f57e79a4f6d3' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\admin\\showCon.html',
      1 => 1499756919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59647a28d91472_58774416 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>所属分类</th>
        <th>标题</th>
        <th>缩略图</th>
        <th>推荐位</th>
        <th>关键词</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" width="200" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['keywords'];?>
</td>
        <td><a href="index.php?m=admin&f=lists&a=del&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">删除</a> <a href="index.php?m=admin&f=lists&a=update&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
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