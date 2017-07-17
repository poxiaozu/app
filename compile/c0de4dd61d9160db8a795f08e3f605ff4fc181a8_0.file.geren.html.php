<?php
/* Smarty version 3.1.30, created on 2017-07-16 19:04:53
  from "E:\wamp\www\app\template\index\geren.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b9cb5aca2b0_61783668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0de4dd61d9160db8a795f08e3f605ff4fc181a8' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\index\\geren.html',
      1 => 1500224692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b9cb5aca2b0_61783668 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/geren.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
</head>
<body style="background: url('<?php echo IMG_PATH;?>
/lx_bg.jpg');background-size:100%">
<div class="height" style="height:0.64rem"></div>
<div class="con1">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_03.png" alt="" style="height:0.5rem">
</div>
<div class="height" style="height:0.46rem"></div>
<div class="con2">
    <?php if ($_smarty_tpl->tpl_vars['res']->value[0]['photo'] == '') {?>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_07.png" alt="" style="height:1.86rem">
    <?php } else { ?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['photo'];?>
" alt="" style="height:1.86rem;width:1.86rem;border-radius: 50%;">
    <?php }?>
</div>
<div class="height" style="height:0.25rem"></div>
<div class="con3">
<p class="p1">
    <?php echo $_smarty_tpl->tpl_vars['res']->value[0]["mname"];?>
<br/>
    LV<span style="color:red;">10</span>
    <span class="wjxing">
         <img src="<?php echo IMG_PATH;?>
/lx_1_03.png" alt="">
         <img src="<?php echo IMG_PATH;?>
/lx_1_03.png" alt="">
         <img src="<?php echo IMG_PATH;?>
/lx_1_03.png" alt="">
         <img src="<?php echo IMG_PATH;?>
/lx_1_03.png" alt="">
         <img src="<?php echo IMG_PATH;?>
/lx_1_03.png" alt="">
    </span>
</p>
</div>
<div style="margin-top:0.95rem"></div>
<a href="index.php?m=index&f=index&a=wdzl"><div class="con4">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_15.png" alt="" class="img1">
    <span style="float: left">我的资料 DATA</span>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_21.png" alt="" class="img3">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_18.png" alt="" class="img2">
</div></a>
<div class="con4">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_26.png" alt="" class="img1">
    <span style="float: left">我的图片 PICTURE</span>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_21.png" alt="" class="img3">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_18.png" alt="" class="img2">
</div>
<div class="con4">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_28.png" alt="" class="img1">
    <span style="float: left">我的订单 ORDER</span>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_21.png" alt="" class="img3">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_18.png" alt="" class="img2">
</div>
<a href="index.php?m=index&f=member&a=xgnc1"><div class="con4">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_26.png" alt="" class="img1">
    <span style="float: left">修改昵称 NAME</span>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_21.png" alt="" class="img3">
    <a href="xgnc.html"><img src="<?php echo IMG_PATH;?>
/lx_gr_18.png" alt="" class="img2"></a>
</div></a>
<a href="index.php?m=index&f=member&a=xgmm"><div class="con4">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_28.png" alt="" class="img1">
    <span style="float: left">修改密码 PASS</span>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_21.png" alt="" class="img3">
    <a href="xgmm.html"><img src="<?php echo IMG_PATH;?>
/lx_gr_18.png" alt="" class="img2"></a>
</div></a>
<a href="index.php?m=index&f=login&a=logout"><div class="con4">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_34.png" alt="" class="img1">
    <span style="float: left">退出登陆 &nbsp;&nbsp;LOGOUT</span>
    <img src="<?php echo IMG_PATH;?>
/lx_gr_21.png" alt="" class="img3">
    <img src="<?php echo IMG_PATH;?>
/lx_gr_18.png" alt="" class="img2">
</div></a>
<div class="footer">
    <div class="dibu">
        <div class="db-1"><a href="index.php?m=index&f=index&a=main">
            <p class="iconfont icon-shouye sy" style="font-size: 0.3rem;color: #fff"></p>
            <p class="sy1" style="color: #fff">首页</p>
            <div class="c-dian"></div></a>
        </div>
        <div class="db-2"><a href="index.php?m=index&f=index&a=dingzhi">
            <p class="iconfont icon-yifu sy" style="font-size: 0.3rem;color: #fff"></p>
            <p class="sy1" style="color: #fff">定制</p>
            <div class="c-dian"></div></a>
        </div>
        <div class="db-3"><a href="index.php?m=index&f=index&a=gwd">
            <p class="iconfont icon-gouwudai sy" style="font-size: 0.3rem;color: #fff"></p>
            <p class="sy1" style="color: #fff">购物袋</p>
            <div class="c-dian"></div></a>
        </div>
        <div class="db-4"><a href="#">
            <p class="iconfont icon-ren sy" style="font-size: 0.3rem;color: yellow"></p>
            <p class="sy1" style="color: #fff">我的</p>
            <div class="c-dian"></div></a>
        </div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
>
    $(".iconfont").click(function(){
        $(".iconfont").css("color","#fff");
        $(this).css("color","#EBD415");
    })
<?php echo '</script'; ?>
>
</html><?php }
}
