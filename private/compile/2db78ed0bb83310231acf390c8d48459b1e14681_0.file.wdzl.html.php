<?php
/* Smarty version 3.1.30, created on 2017-07-14 19:12:19
  from "D:\wamp\www\app\private\template\index\wdzl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968fb73030e28_98924497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2db78ed0bb83310231acf390c8d48459b1e14681' => 
    array (
      0 => 'D:\\wamp\\www\\app\\private\\template\\index\\wdzl.html',
      1 => 1500052337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968fb73030e28_98924497 (Smarty_Internal_Template $_smarty_tpl) {
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
/wdzl.css">
</head>
<body>
<!--背景-->
<div class="lhbeijing">
        <!--返回-->
        <div class="lhtoubu">
            <div class="lhfanhui">
                <a href="">
                    <img src="<?php echo IMG_PATH;?>
/lhfanhui.png" alt="">
                </a>
            </div>
            <div class="lhzhucezi">
                <span class="lhzhucezi1">我的资料</span>
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
                <span>UPDATE</span>
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
                <span>修改资料</span>
            </div>
            <div class="lhzhucezhanghaozimu">
                <span>UPDATE DATA</span>
            </div>
            <div class="lhzhucezhanghaohengang"></div>
            <div class="lhzhanghaomima">
                <span>修改资料</span>
            </div>
            <div class="lhzhanghaomimafenge">
                <span>·····················································</span>
            </div>
            <form action="" class="lhfrom">
                <div class="lhzhanghaoinput">
                    <div class="lhzhanghaoimg">
                        <img src="<?php echo IMG_PATH;?>
/lhzhanghao.png" alt="">
                    </div>
                    <input type="text" placeholder="修改昵称" class="lhshuruzhanghao">
                </div>
                <div class="lhmimainput">
                    <div class="lhmimaimg">
                        <img src="<?php echo IMG_PATH;?>
/lhmima.png" alt="">
                    </div>
                    <input type="password" placeholder="修改密码" class="lhshurumima">
                </div>
                <div class="lhmimainput1">
                    <div class="lhmimaimg1">
                        <img src="<?php echo IMG_PATH;?>
/lhmima.png" alt="">
                    </div>
                    <input type="password" placeholder="再次确认密码" class="lhshurumima1">
                </div>
                <div class="lhyuedu">
                    <input type="checkbox">
                    <span>我已经阅读潮定制的条款</span>
                </div>
                <div class="lhnext">
                    <input type="submit" value="NEXT" id="lhnext">
                    <div class="lhimgnext">
                        <img src="<?php echo IMG_PATH;?>
/lhnext.png" alt="">
                    </div>
                    <div class="lhnextzi">
                        <img src="<?php echo IMG_PATH;?>
/lhchaoding2.png" alt="">
                    </div>
                </div>
            </form>
        </div>
</div>
</body>
<?php echo '<script'; ?>
>
    document.querySelector(".lhfanhui").onclick=function () {
        location.href=history.go(-1);
    }
<?php echo '</script'; ?>
>
</html><?php }
}
