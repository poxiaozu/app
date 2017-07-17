<?php
/* Smarty version 3.1.30, created on 2017-07-16 18:19:16
  from "E:\wamp\www\app\template\index\zhuce.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b92042ffbb1_19244238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43155637c3a7a7b6a77dc0ae2638979a45609fce' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\zhuce.html',
      1 => 1500221955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b92042ffbb1_19244238 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="lhbeijing">
    <div class="lhzhezhao">
        <!--返回-->
        <div class="lhtoubu">
            <div class="lhzhucezi">
                <span class="lhzhucezi1">注册</span>
            </div>
        </div>
        <!--dixia-->
        <div class="lhbuzhou">
            <div class="lhbuzhou1">
                <span>1</span>
            </div>
            <div class="lhbuzhouhenggan"></div>
            <div class="lhbuzhou2">
            </div>
            <div class="lhbuzhou3">
            </div>
        </div>
        <div class="lhzimu">
            <span>REGISTER</span>
        </div>
        <div class="lhdakuang">
            <div class="lhyoucezi">
                <div class="lhyoucehengan">

                </div>
                <div class="lhyoucezier">
                    <img src="<?php echo IMG_PATH;?>
/lhchaoding1.png" alt="">
                </div>
            </div>
            <div class="lhzhucezhanghaozi">
                <span>注册账号</span>
            </div>
            <div class="lhzhucezhanghaozimu">
                <span>REGISTERED ACCOUNT</span>
            </div>
            <div class="lhzhucezhanghaohengang"></div>
            <div class="lhzhanghaomima">
                <span>账号密码</span>
            </div>
            <div class="lhzhanghaomimazimu">
                <span>Username</span>
            </div>
            <div class="lhzhanghaomimafenge">
                <span>·····················································</span>
            </div>
            <form action="index.php?m=index&f=login&a=reg" method="post" id="lhzcfrom">
                <div class="lhzhanghaoinput">
                    <div class="lhzhanghaoimg">
                        <img src="<?php echo IMG_PATH;?>
/lhzhanghao.png" alt="">
                    </div>
                    <input type="text" placeholder="请输入账号" class="lhshuruzhanghao" minlength="6" name="mname">
                </div>
                <div class="lhmimainput">
                    <div class="lhmimaimg">
                        <img src="<?php echo IMG_PATH;?>
/lhmima.png" alt="">
                    </div>
                    <input type="password" id="lhfristshurumima" placeholder="请输入密码" class="lhshurumima" minlength="6" name="mpass">
                </div>
                <div class="lhmimainput1">
                    <div class="lhmimaimg1">
                        <img src="<?php echo IMG_PATH;?>
/lhmima.png" alt="">
                    </div>
                    <input type="password" placeholder="请再次输入密码" class="lhshurumima1" minlength="6" name="mpass1">
                </div>
                <div class="lhyuedu">
                    <input type="checkbox">
                    <span>我已经阅读潮定制的条款</span>
                </div>
                <a href="index.php?m=index&f=index&a=zuce2"><div class="lhnext">
                    <input type="submit" value="NEXT" id="lhnext">
                    <div class="lhimgnext">
                        <img src="<?php echo IMG_PATH;?>
/lhnext.png" alt="">
                    </div>
                    <div class="lhnextzi">
                        <img src="<?php echo IMG_PATH;?>
/lhchaoding2.png" alt="">
                    </div>
                </div></a>
            </form>
            <div class="lhcuowutishi">
                <!--<span>! 你的用户名占用</span>-->
            </div>

        </div>
    </div>
</div>
</body>
</html><?php }
}
