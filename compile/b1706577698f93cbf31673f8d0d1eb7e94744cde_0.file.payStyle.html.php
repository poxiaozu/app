<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:32:37
  from "E:\wamp\www\app\template\index\payStyle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b871505f733_88205161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1706577698f93cbf31673f8d0d1eb7e94744cde' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\payStyle.html',
      1 => 1500218070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b871505f733_88205161 (Smarty_Internal_Template $_smarty_tpl) {
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
/style.css">
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
        <div class="dian">

        </div>
        <div class="dian">

        </div>
        <div class="dian">

        </div>
    </div>
    <div class="title">
        <div class="t1">支付方式
        </div>
        <div class="t2">支付方式</div>

        <div class="t3">PAYMENT METHOD
        </div>
        <div class="t4">PAYMENT METHOD</div>
    </div>
    <div class="back">
        <img src="<?php echo IMG_PATH;?>
/zn-back.png" alt="">
    </div>
</header>
<div class="zi1">
    PAYMENT METHOD
</div>
<div class="zi2">
    选择支付方式
</div>
<div class="fenge">

</div>
<div class="bg">
    <div class="yuan1"></div>
    <div class="yuan2"></div>
    <div class="ctitle">
        第三方支付
    </div>
    <div class="ftitle">
        THIRD PAYMENT
    </div>
    <div class="zfb">

    </div>
    <div class="wx">

    </div>
    <div class="clear"></div>
    <div class="ctitle">
        其他付款方式
    </div>
    <div class="ftitle">
        OTHER PAYMENT METHOD
    </div>
    <div class="hdfk">
        <div class="tb">
            <img src="<?php echo IMG_PATH;?>
/zn-hdfk.png" alt="" style="width:0.41rem;height:0.41rem;">
        </div>
        <div class="method">货到付款</div>
        <div class="em">HUODAOFUKUAN</div>
        <div class="tiao">

        </div>
    </div>
    <div class="hdfk">
        <div class="tb qb">
            <img src="<?php echo IMG_PATH;?>
/zn-qb.png" alt="" style="width:0.4rem;height:0.33rem;">
        </div>
        <div class="method">本地钱包</div>
        <div class="em">BENDIQIANBAO</div>
        <div class="tiao" style="background:#0ecf8a;">

        </div>
    </div>
    <a href="index.php?m=index&f=index&a=xzyhk" style="text-decoration: none">
        <div class="hdfk">
            <div class="tb card">
                <img src="<?php echo IMG_PATH;?>
/zn-card.png" alt="" style="width:0.43rem;height:0.31rem;">
            </div>
            <div class="method">银行卡付款</div>
            <div class="em">YINHANGKAFUKUAN</div>
            <div class="tiao" style="background:#4584f8;">

            </div>
        </div>
    </a>
</div><a href="index.php?m=index&f=index&a=pay">
<div class="btn">
    <div class="next">
        下一步
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
