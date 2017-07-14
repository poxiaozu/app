<?php
/* Smarty version 3.1.30, created on 2017-07-14 18:40:10
  from "D:\wamp\www\app\private\template\index\pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968f3eae789d8_25094296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec54f224916ca1c530928e8d887fcf2a300a9af' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\index\\pay.html',
      1 => 1500050295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968f3eae789d8_25094296 (Smarty_Internal_Template $_smarty_tpl) {
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
