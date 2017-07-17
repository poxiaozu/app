<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:38:48
  from "E:\wamp\www\app\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b88886404d9_33726894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b4a6b6c5846bb3f3be404810fbcc4923ade782' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\admin\\addUser.html',
      1 => 1500218069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b88886404d9_33726894 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</head>
<body style="padding:15px;">
<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=admin&f=user&a=addCon">

    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="mname">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">密码</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入密码" name="mpass">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">昵称</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入昵称" name="nicheng">

    </div>
    <div class="form-group uploadbox">

        <label for="exampleInputFile">上传图片</label>

        <input type="hidden" name="photo">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">联系方式</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入联系方式" name="phone">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">地址</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入地址" name="address">

    </div>


    <button type="submit" class="btn btn-default">添加用户</button>
</form>
</body>
<?php echo '<script'; ?>
>

    var obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadbox")
    });
    obj.up("index.php?m=admin&f=user&a=upload",function(data){
        document.querySelector("input[name=photo]").value=data;
    });
<?php echo '</script'; ?>
>
</html><?php }
}
