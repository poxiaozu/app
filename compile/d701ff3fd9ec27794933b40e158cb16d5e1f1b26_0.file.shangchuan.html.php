<?php
/* Smarty version 3.1.30, created on 2017-07-26 03:21:24
  from "G:\wamp\www\app\template\index\shangchuan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977ee94ec9795_77098210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd701ff3fd9ec27794933b40e158cb16d5e1f1b26' => 
    array (
      0 => 'G:\\wamp\\www\\app\\template\\index\\shangchuan.html',
      1 => 1500256612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977ee94ec9795_77098210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/c-shangchuan.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div class="back"  style="position:relative;z-index: 999;">
        <img src="<?php echo IMG_PATH;?>
/zn-back.png" alt="">
    </div>
    <div class="more">
        <div class="dian">

        </div>
        <div class="dian">

        </div>
        <div class="dian">

        </div>
    </div>
    <div class="title">
        <div class="t1">上传图片
        </div>
        <div class="t2">上传图片</div>

        <div class="t3">Upload picture
        </div>
        <div class="t4">Upload picture</div>
    </div>
</header>
<div class="kong2"style="width: 100%;height:1.02rem;"></div>
<div class="c-nei">
    <div class="c-nei1">
        <div class="c-zi1">
            上传图片
        </div>
        <div class="c-zi2">
            personal photo
        </div>
        <div class="c-heng">

        </div>
        <div class="c-zi3">
            快选择一个好看的图片做自己的衣服
        </div>
        <div class="c-zhaoxiangji">
            <img src="<?php echo IMG_PATH;?>
/c-34.png" alt="">
        </div>
        <div class="c-xiangce">
            <img src="<?php echo IMG_PATH;?>
/c-35.png" alt="">
        </div>
        <div class="c-zi4">
            点击上传自己喜欢的图片
        </div>
        <div class="c-zi5">
            Click upload your favorite pictures
        </div>
        <div class="c-zi6">
            图片高清定制效果更好
        </div>
        <div class="c-kuai">
            <div class="c-tiao">

            </div>
            <div class="c-zi7">
                CHAODING
            </div>
        </div>
        <div class="c-kuai2">
            NEXT
            <img src="<?php echo IMG_PATH;?>
/c-36.png" alt="" style="position: absolute;top: 0;bottom: 0;right:0.9rem;margin: auto;background: #169354;width: 0.45rem;height:0.43rem;display: block">
            <div class="c-zi7" style="top:-0.4rem">
                PERSONAL
            </div>
        </div>
    </div>
</div>
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
