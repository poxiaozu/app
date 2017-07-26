<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:41:37
  from "G:\wamp\www\app\template\index\denglu3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59780161116968_67251347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c76e538450a873567f6805675a47cce172196116' => 
    array (
      0 => 'G:\\wamp\\www\\app\\template\\index\\denglu3.html',
      1 => 1500256612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59780161116968_67251347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
/jQuery.js"><?php echo '</script'; ?>
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
<div class="bj1">

    <div class="dayuan">
        <div class="xiaoyuan">
            <div class="touxiang">
                <img src="<?php echo IMG_PATH;?>
/lhtouxiang.jpg" alt="" id="touxiang">
            </div>
        </div>
    </div>
</div>
<div class="xiamian">
    <!--登录-->
    <div class="denglu">
        <form action="index.php?m=index&f=login&a=denglu2" id="denglu3form" method="post">
            <div class="lhh">
                <div class="lhdianhuakuang">
                    <div class="lhdianhuainput">
                        <img src="<?php echo IMG_PATH;?>
/lhzhanghao.png" alt="">
                    </div>
                    <input type="text" class="lhdlzhanghao" minlength="6" placeholder="请输入账号"   name="mname">
                </div>
                <div class="lhyanzhengma">
                    <div class="lhyanzhengmainput">
                        <img src="<?php echo IMG_PATH;?>
/lhmima.png" alt="">
                    </div>
                    <input type="password" class="lhdlmima" minlength="6" placeholder="请输入密码" name="mpass">
                </div>
                <div class="lhhenggangdenglu">
                </div>
            </div>
            <div class="lhwangjimima">
                <a href="">忘记密码</a>
            </div>
            <input type="submit" value="" id="lhdianji">
        </form>
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
