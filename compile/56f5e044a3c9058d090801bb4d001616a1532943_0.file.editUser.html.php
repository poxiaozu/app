<?php
/* Smarty version 3.1.30, created on 2017-07-17 03:11:50
  from "E:\wamp\www\app\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c0ed6383b37_36871161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56f5e044a3c9058d090801bb4d001616a1532943' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\admin\\editUser.html',
      1 => 1500218069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c0ed6383b37_36871161 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</head>
<body style="padding:15px;">
<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=admin&f=user&a=editCon">

    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="mname" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['mname'];?>
">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">密码</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入密码" name="mpass" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['mpass'];?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">昵称</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入昵称" name="nicheng" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['nicheng'];?>
">

    </div>

    <div class="form-group uploadbox">

        <label for="exampleInputFile">图片预览</label>
        <div class="img" style="width:200px;position:relative;overflow: hidden">
            <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['photo'];?>
" width="200" alt="">
            <div class="del" style="width:15px;height:15px;border-radius: 50%;background:#ccc;color:#000;position:absolute;top:0;right:0;cursor: pointer;line-height: 15px;text-align: center;">x</div>
        </div>

        <input type="hidden" name="photo" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['photo'];?>
">

    </div>
    <input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['mid'];?>
">
    <div class="form-group">
        <label for="exampleInputEmail1">联系方式</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入联系方式" name="phone"  value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['phone'];?>
">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">地址</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入地址" name="address" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['address'];?>
">

    </div>


    <button type="submit" class="btn btn-default">添加用户</button>
</form>
</body>
<?php echo '<script'; ?>
>
    var mid=$("input[name=mid]").attr("value");
    $(".del").click(function () {
        $.ajax({
            url:"index.php?m=admin&f=user&a=delImg&mid=mid",
            type:"post",
            success:function (e) {
                if(e=="ok"){
                    $(".img img").remove();
                }
            }
        })

    })


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
