<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:32:48
  from "E:\wamp\www\app\template\index\pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b8720a3d7d9_91666790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0e0cfbe2ffe8a7f8877dd3c8f0bb8a47e3fb7b' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\pay.html',
      1 => 1500218070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b8720a3d7d9_91666790 (Smarty_Internal_Template $_smarty_tpl) {
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
/pay.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>


    <div class="title">
        <div class="t1">支付页面
        </div>
        <div class="t2">支付页面</div>

        <div class="t3">PAYMENT PAGE
        </div>
        <div class="t4">PAYMENT PAGE</div>
    </div>
    <div class="back" style="position: absolute;z-index:999;">
        <img src="<?php echo IMG_PATH;?>
/zn-back.png" alt="">
    </div>
</header>
<div class="zi1">
    请输入你的支付密码
</div>
<div class="zi2">
    PLEASE ENTER YOUR PAYMENT PASSWORD
</div>
<div class="zt">
    <div class="circle">
    </div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
</div>
<div class="jianpan">
    <div class="j1">
        1
    </div>
    <div class="j1">2</div>
    <div class="j1">3</div>
</div>
<div class="jianpan">
    <div class="j1">4</div>
    <div class="j1">5</div>
    <div class="j1">6</div>
</div>
<div class="jianpan">
    <div class="j1">7</div>
    <div class="j1">8</div>
    <div class="j1">9</div>
</div>
<div class="jianpan">
    <div class="j1">√</div>
    <div class="j1">0</div>
    <div class="j1">×</div>
</div>

</body>
<?php echo '<script'; ?>
>
    document.querySelector(".back").onclick=function () {
        location.hrerf=history.go(-1);
    }
<?php echo '</script'; ?>
>
</html><?php }
}
