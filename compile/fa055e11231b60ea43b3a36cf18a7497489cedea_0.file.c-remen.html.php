<?php
/* Smarty version 3.1.30, created on 2017-07-17 03:33:04
  from "E:\wamp\www\app\template\index\c-remen.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c13d0c41989_24433149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa055e11231b60ea43b3a36cf18a7497489cedea' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\c-remen.html',
      1 => 1500218070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c13d0c41989_24433149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/c-remen.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>

    <div class="title">
        <div class="t1">热门活动
        </div>
        <div class="t2">热门活动</div>

        <div class="t3">POPULAR ACTIVITIES
        </div>
        <div class="t4">POPULAR ACTIVITIES</div>
    </div>
    <div class="back">
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
</header>
<div class="kong2"style="width: 100%;height:1.02rem;"></div>
<div class="c-nei">
    <ul class="c-rong">
        <li><a href="" style="background-image: url('<?php echo IMG_PATH;?>
/c-30.jpg')">
            <div class="c-heng" style="background: #FFC600">
                青春正好学院风系列定制
            </div>
            <div class="c-heng1" style="background: #FFAE00;font-family: 'San Francisco Display';font-size: 0.3rem">
                SEAL <span>50%</span>
            </div>
        </a></li>
        <li><a href="" style="background-image: url('<?php echo IMG_PATH;?>
/c-31.jpg')">
            <div class="c-heng" style="background: #3BD493">
                准备好做一个小清新了吗
            </div>
            <div class="c-heng1" style="background: #1EB06D">
                买三件送一件
            </div>
        </a></li>
        <li><a href="" style="background-image: url('<?php echo IMG_PATH;?>
/c-32.jpg')">
            <div class="c-heng" style="background: #75A0FF">
                为自己定制属于自己的裙子
            </div>
            <div class="c-heng1" style="background: #4D7EE3">
                第二件半价
            </div>
        </a></li>
        <li><a href="" style="background-image: url('<?php echo IMG_PATH;?>
/c-33.jpg')">
            <div class="c-heng" style="background: #9F73E7">
                时尚的都市丽人御姐风
            </div>
            <div class="c-heng1" style="background: #7E47D9">
                邀请好友立减50元
            </div>
        </a></li>
    </ul>
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
