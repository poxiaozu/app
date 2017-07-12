<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:03:36
  from "D:\wamp\www\app\private\template\admin\showPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964a2783c22c1_03858698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabc873190e2f1eb2bd0a32a9ff3a1fbcace6079' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\admin\\showPos.html',
      1 => 1499761913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964a2783c22c1_03858698 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>posid</th>
        <th>posname</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pos']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
</td>
        <td><a href="index.php?m=admin&f=position&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">删除</a> <a href="index.php?m=admin&f=position&a=update&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
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
