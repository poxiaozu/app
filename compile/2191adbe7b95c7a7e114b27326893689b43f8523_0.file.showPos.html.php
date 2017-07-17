<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:39:16
  from "E:\wamp\www\app\template\admin\showPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b88a4b4bca7_85174701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2191adbe7b95c7a7e114b27326893689b43f8523' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\admin\\showPos.html',
      1 => 1500218069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b88a4b4bca7_85174701 (Smarty_Internal_Template $_smarty_tpl) {
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
