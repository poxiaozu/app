<?php
/* Smarty version 3.1.30, created on 2017-07-16 18:12:09
  from "E:\wamp\www\app\template\index\denglu1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b9059bdfa50_59189743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1f3f8d227c0988f6e42e6d1a81a7ff838735e0' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\denglu1.html',
      1 => 1500221528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b9059bdfa50_59189743 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minnmum-scale=1,maximum-scale=1,user-scalable=no">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/denglu1.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/messages_zh.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/lhdenglu.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--背景-->
<div class="lhtoubu" style="position: fixed;
    top:0.72rem;
    z-index:999;margin-top: 0">
    <div class="lhfanhui">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
/lhfanhui.png" alt="" style="display: block;margin-top: 0">
        </a>
    </div>
</div>
<?php echo '<script'; ?>
>
    document.querySelector(".lhfanhui").onclick=function () {
        location.href=history.go(-1);
    }
<?php echo '</script'; ?>
>
<div class="bj">
    <div class="dayuan">
        <div class="xiaoyuan">
            <div class="touxiang">
                <img src="<?php echo IMG_PATH;?>
/lhtouxiang.jpg" alt="" id="touxiang">
            </div>
        </div>
    </div>
</div>
<!--下面-->
<div class="xiamian">
<!--登录-->
    <div class="denglu">
        <a href="index.php?m=index&f=login&a=login1">
        <div class="denglukuang">
            <input type="button" value="登录" id="denglu" >
        </div></a>
        <a href="index.php?m=index&f=login&a=zuce">
        <div class="zhucekuang">
            <input type="button" value="注册" id="zhuce">
        </div></a>
        <div class="fenge">
        </div>
        <span class="sanfang">第三方登录</span>
        <div class="fenge1">
        </div>
        <div class="weixin">
            <a href="" class="weixina">
                <img src="<?php echo IMG_PATH;?>
/lhwei.png" alt="">
            </a>
        </div>
        <div class="qq">
            <a href="" class="qqa">
                <img src="<?php echo IMG_PATH;?>
/lhqq.jpg" alt="">
            </a>
        </div>
    </div>
</div>
</body>

</html><?php }
}
