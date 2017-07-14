<?php
/* Smarty version 3.1.30, created on 2017-07-14 18:42:33
  from "D:\wamp\www\app\private\template\index\choose.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968f479429895_31964522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb20fe7a482030878ee7a1096a0faeea2eaa68a0' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\index\\choose.html',
      1 => 1500050549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968f479429895_31964522 (Smarty_Internal_Template $_smarty_tpl) {
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
/choose.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>

    <div class="more">
        <div class="heng"></div>
        <div class="shu"></div>
    </div>
    <div class="title">
        <div class="t1">选择银行卡
        </div>
        <div class="t2">选择银行卡</div>

        <div class="t3">XUANZEYINHANGKA
        </div>
        <div class="t4">XUANZEYINHANGKA</div>
    </div>
    <div class="back" style="position: absolute;z-index:999;">
        <img src="<?php echo IMG_PATH;?>
/zn-back.png" alt="">
    </div>
</header>
<div class="zi1">
    SELECT BANK CARD
</div>
<div class="zi2">
    选择银行卡
</div>
<div class="fenge">

</div>
<div class="bg">
    <div class="yuan1"></div>
    <div class="yuan2"></div>
    <div class="anniu">
        <div class="btnbg">
            <div class="btnr"></div>
            <div class="ka1">储蓄卡 08</div>
            <div class="ka2">信用卡 02</div>
        </div>
    </div>
    <div class="ctitle">
        选择银行卡
    </div>
    <div class="js">
        <img src="<?php echo IMG_PATH;?>
/zn-js.png" alt="">
        <div class="des">中国建设银行</div>
        <div class="circle"></div>
    </div>
    <div class="js">
        <img src="<?php echo IMG_PATH;?>
/zn-ny.png" alt="">
        <div class="des">中国农业银行</div>
        <div class="circle"></div>
    </div>
    <div class="js">
        <img src="<?php echo IMG_PATH;?>
/zn-gd.png" alt="">
        <div class="des">光大银行</div>
        <div class="circle"></div>
    </div>
    <div class="js">
        <img src="<?php echo IMG_PATH;?>
/zn-yz.png" alt="">
        <div class="des">中国邮政</div>
        <div class="circle"></div>
    </div>
    <div class="js">
        <img src="<?php echo IMG_PATH;?>
/zn-gs.png" alt="">
        <div class="des">中国工商银行</div>
        <div class="circle"></div>
    </div>
    <div class="js">
        <img src="<?php echo IMG_PATH;?>
/zn-bh.png" alt="">
        <div class="des">渤海银行</div>
        <div class="circle"></div>
    </div>

</div>
<a href="index.php?m=index&f=index&a=pay" style="text-underline: none"><div class="btn">
    <div class="next">
        立即支付
    </div>
    <div class="enext">
        NEXT
    </div>
</div></a>
</body>
<?php echo '<script'; ?>
>
    document.querySelector(".back").onclick=function () {
        location.href=history.go(-1);
    }
<?php echo '</script'; ?>
>
</html><?php }
}
