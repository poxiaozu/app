<?php
/* Smarty version 3.1.30, created on 2017-07-26 03:59:06
  from "G:\wamp\www\app\template\index\dingzhi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977f76ace68d9_41313508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e134a16d234cf8220f21a9cc1210062fdf5c3198' => 
    array (
      0 => 'G:\\wamp\\www\\app\\template\\index\\dingzhi.html',
      1 => 1501034345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977f76ace68d9_41313508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>定制</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/z-dz.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>

    <div class="title">
        <div class="t1">定制
        </div>
        <div class="t2">定制</div>

        <div class="t3">CUSTOMIZEN
        </div>
        <div class="t4">CUSTOMIZEN</div>
    </div>
    <div class="back">
        <a href="index.php?m=index&f=index&a=sou" style="width:100%;height:100%;display:block;position:relative;z-index: 999;"> <img src="<?php echo IMG_PATH;?>
/c-19.png" alt=""></a>
    </div>
    <a href="index.php?m=index&f=index&a=denglu"><div class="more">
        <img src="<?php echo IMG_PATH;?>
/c-18.png" alt="">
    </div></a>
</header>
    <div class="banner">
        <img src="<?php echo IMG_PATH;?>
/jc-ban.jpg" alt="">
    </div>
    <div class="jc1"></div>
    <div class="jc2">
        <div class="jc-tou">
            <div class="jc-toux1"></div>
            <div class="jc-toux2"></div>
            <div class="jc-toux3"></div>
            <div class="jc-toux4"></div>
            <div class="jc-toux5">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jcdzo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="index.php? m=index&f=index&a=detail&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt=""  style="position: relative;left: 0;top: 0;">
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jcxx']->value, 'jcxx1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jcxx1']->value) {
?>
            <div class="jc-xx"><?php echo $_smarty_tpl->tpl_vars['jcxx1']->value['dengji'];?>
</div>
        </div>
        <div class="jc2-right">
            <span style="color: #000"><?php echo $_smarty_tpl->tpl_vars['jcxx1']->value['title'];?>
</span>
            <span style="color: #447FF2;line-height: 0.1rem">...........</span>
            <span style="color: #646464;line-height: 0.1rem"><?php echo $_smarty_tpl->tpl_vars['jcxx1']->value['jianjie'];?>
</span>
            <span style="color: #FBAC29"><?php echo $_smarty_tpl->tpl_vars['jcxx1']->value['dengji'];?>
</span>
            <div class="xinji" style="color: red"><?php echo $_smarty_tpl->tpl_vars['jcxx1']->value['price'];?>
</div>
            <div class="dizhi">
                <img src="<?php echo IMG_PATH;?>
/jc-dizhi_07.png" alt="">
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jcdz']->value, 'jcdz1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jcdz1']->value) {
?>
            <p style="display:block;float:left;margin-left:0.05rem;margin-top: 0.1rem"><?php echo $_smarty_tpl->tpl_vars['jcdz1']->value['keywords'];?>
</p>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>

        <div class="jc2-zan">
            <li>
                <a href="javascript:;">
                    <img src="<?php echo IMG_PATH;?>
/jc-zan.jpg" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="<?php echo IMG_PATH;?>
/jc-zan.jpg" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="<?php echo IMG_PATH;?>
/jc-zan.jpg" alt="">
                </a>
            </li>
            <div class="jc-shuzi2"><?php echo $_smarty_tpl->tpl_vars['jcdz1']->value['dzrs'];?>
</div>
        </div>

    </div>
    <div class="jc-sc">
        <a href="index.php?m=index&f=index&a=shangchuan"><div class="sc">
            上传照片
        </div></a>
        <a href="index.php?m=index&f=index&a=xzks"><div class="xz">
            选择款式
        </div></a>
    </div>
    <div class="con-h">
        <div class="con-h1">
            <div class="con-h01"></div>
            <div class="jc-span1" style="color: #437EF2"></div>
            <div class="jc-span2"  style="color: #5FA429"></div>
            <div class="con-h02"></div>
        </div>
        <div class="con-h2">
            TREND PROMOTIONE
        </div>
        <div class="con-h3">
            潮 <span>|</span> 流 <span>|</span> 推 <span>|</span> 荐
        </div>
    </div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jcgr']->value, 'jcgr1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jcgr1']->value) {
?>
    <div class="con-b">
        <div class="con-m">
            <div class="tx">
                <a href="index.php? m=index&f=index&a=detail&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['jcgr1']->value['imgurl'];?>
" alt="">
                </a>
            </div>
            <div class="xinxi">
                <span style="color: #000;font-size: 0.2rem"><?php echo $_smarty_tpl->tpl_vars['jcgr1']->value['title'];?>
</span>
                <span style="color:#565454;font-size: 0.2rem"><?php echo $_smarty_tpl->tpl_vars['jcgr1']->value['keywords'];?>
</span>
                <span style="color:#8D8D8D;font-size: 0.2rem"><?php echo $_smarty_tpl->tpl_vars['jcgr1']->value['jianjie'];?>
</span>
                <span style="color:#6C97F4;font-size: 0.2rem"><?php echo $_smarty_tpl->tpl_vars['jcgr1']->value['price'];?>
</span>
                <div class="xiaopiao">TOP</div>
            </div>
            <div class="jc-right">
                <img src="<?php echo IMG_PATH;?>
/jc-t2_07.png" alt="">
            </div>
            <div class="jc-zan">
                <li>
                    <a href="javascript:;">
                        <img src="<?php echo IMG_PATH;?>
/jc-zan.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="<?php echo IMG_PATH;?>
/jc-zan.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="<?php echo IMG_PATH;?>
/jc-zan.jpg" alt="">
                    </a>
                </li>
                <div class="jc-shuzi"><?php echo $_smarty_tpl->tpl_vars['jcgr1']->value['dzrs'];?>
</div>
            </div>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="kong" style="width:7.5rem;height: 1.2rem;float: left"></div>
<div class="dibu">
    <div class="db-1"><a href="index.php?m=index&f=index&a=main">
        <p class="iconfont icon-shouye sy" style="font-size: 0.3rem;"></p>
        <p class="sy1">首页</p>
        <div class="c-dian"></div></a>
    </div>
    <div class="db-2"><a href="#">
        <p class="iconfont icon-yifu sy" style="font-size: 0.3rem;color: yellow"></p>
        <p class="sy1">定制</p>
        <div class="c-dian"></div></a>
    </div>
    <div class="db-3"><a href="index.php?m=index&f=index&a=gwd">
        <p class="iconfont icon-gouwudai sy" style="font-size: 0.3rem"></p>
        <p class="sy1">购物袋</p>
        <div class="c-dian"></div></a>
    </div>
    <div class="db-4"><a href="index.php?m=index&f=index&a=geren">
        <p class="iconfont icon-ren sy" style="font-size: 0.3rem"></p>
        <p class="sy1">我的</p>
        <div class="c-dian"></div></a>
    </div>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jc-js.js"><?php echo '</script'; ?>
>
</html><?php }
}
