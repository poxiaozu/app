<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:58:06
  from "D:\wamp\www\app\private\template\admin\addCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965741edc74f3_22756338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe277c5bd33dbff8a183eb44961e5b3031839855' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\admin\\addCategory.html',
      1 => 1499761913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965741edc74f3_22756338 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal" method="post" action="index.php?m=admin&f=category&a=addCon">
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
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="cname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加分类</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
