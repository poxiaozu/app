<?php
/* Smarty version 3.1.30, created on 2017-07-11 06:05:37
  from "E:\wamp\www\php\private\template\admin\editCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59644e913464b9_42010853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f8c65caaaec22795cc7f8438b1152ca9e6d183' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\admin\\editCategory.html',
      1 => 1499745930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59644e913464b9_42010853 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body style="padding:15px;">
<form class="form-horizontal" method="post" action="index.php?m=admin&f=category&a=edit">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label" name="rid">所属分类</label>
        <div class="col-sm-10">
            <select name="pid" id="" class="form-control">
                <option value="0">
                    --一级分类--
                </option>
                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['cname'];?>
">
        </div>
    </div>
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['cid'];?>
">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">修改分类</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
