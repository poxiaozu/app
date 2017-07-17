<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:31:16
  from "E:\wamp\www\app\template\index\chooseStyle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b86c40264a3_79401628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d51d65c3ce910ebf95eefd687a389c8d84c5bd' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\chooseStyle.html',
      1 => 1500218070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b86c40264a3_79401628 (Smarty_Internal_Template $_smarty_tpl) {
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
/chooseStyle.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div class="back" STYLE="position: absolute;z-index: 999">
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
        <div class="t1">选择款式
        </div>
        <div class="t2">选择款式</div>

        <div class="t3">SELECT STYLE
        </div>
        <div class="t4">SELECT STYLE</div>
    </div>
</header>
<div class="main">
    <div class="rongqi">
        <img src="<?php echo IMG_PATH;?>
/xzks1.jpg" class="lunbo">
        <img class="lunbo" src="<?php echo IMG_PATH;?>
/xzks2.jpg" alt="">
    </div>
    <div class="biaoqian">
        <div class="btitle">
             棒球立领夹克
        </div>
        <div class="caizhi">
            材质：上等牛皮，顶级工艺
        </div>
        <div class="dengji">
            ★★★★★
        </div>
        <div class="caizhi">
            价格：<span class="btitle">RMB</span>
            <span class="btitle">982</span>
        </div>
        <div class="clear"></div>
        <div class="like">
            <span class="num">15634</span>
            <div class="touxiang">

            </div>
            <div class="touxiang">

            </div>
            <div class="touxiang">

            </div>
        </div>
    </div>
</div>
<div class="btn">
    <div class="next">
        选择款式
    </div>
    <div class="enext">
        NEXT
    </div>
</div>
<div class="lunbodian">
    <div class="dian"></div>
    <div class="dian"></div>
    <div class="dian"></div>
    <div class="dian"></div>
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
