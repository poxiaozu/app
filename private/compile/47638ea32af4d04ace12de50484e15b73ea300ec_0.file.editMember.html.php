<?php
/* Smarty version 3.1.30, created on 2017-07-11 04:29:40
  from "E:\wamp\www\php\private\template\admin\editMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59643814023165_84248222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47638ea32af4d04ace12de50484e15b73ea300ec' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\admin\\editMember.html',
      1 => 1499740173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59643814023165_84248222 (Smarty_Internal_Template $_smarty_tpl) {
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
<body>
<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=admin&f=member&a=editCon">

    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="uname" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['uname'];?>
">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">密码</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入密码" name="upass" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['upass'];?>
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
    <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['uid'];?>
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
    var uid=$("input[name=uid]").attr("value");
    $(".del").click(function () {
        $.ajax({
            url:"index.php?m=admin&f=user&a=delImg&uid=uid",
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
