<?php
/* Smarty version 3.1.30, created on 2017-07-12 04:02:49
  from "E:\wamp\www\php\private\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59658349e81f00_33118484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97c423d4ffa2e115d1aaf9af8cdc38e64862f15' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\index\\index.html',
      1 => 1499824170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59658349e81f00_33118484 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/c-index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo CSS_PATH;?>
/mui.min.css" rel="stylesheet"/>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
        mui.init();
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body style="background: #2A2E36;">

<header>
    <div class="c-tou">
        <img src="<?php echo IMG_PATH;?>
/c-18.png" alt="">
    </div>
    <div class="c-sou">
        <a href="index.php?m=index&f=index&a=sou" style="width:100%;height:100%;display:block;position:relative;z-index: 999;"> <img src="<?php echo IMG_PATH;?>
/c-19.png" alt=""></a>
    </div>
    <div class="title">
        <div class="t1">潮 定 制
        </div>
        <div class="t2">潮 定 制</div>

        <div class="t3">CHEN CUSTOMIZED
        </div>
        <div class="t4">CHEN CUSTOMIZED</div>
    </div>
</header>
<div class="kong2" style="width: 100%;height:1.02rem;"></div>
<div id="slider" class="mui-slider" >
    <div class="mui-slider-group mui-slider-loop c-lunbo">
    <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
    <div class="mui-slider-item mui-slider-item-duplicate">
        <a href="#">

        </a>
    </div>
    <!-- 第一张 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunbo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="mui-slider-item  c-lunbo" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
)">
        <a href="#">

        </a>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
    <div class="mui-slider-item mui-slider-item-duplicate c-lunbo" style="background-image: url('<?php echo IMG_PATH;?>
/c-7.jpg')">
        <a href="#">
        </a>
    </div>
</div>
    <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
    </div>
</div>
<div class="c-nei">
    <div class="c-xuan">
        <a href="#">
            <div class="c-xuan1 w" >
                <div class="c-yuan">

                </div>
                <div class="c-yuan1">

                </div>
                流行款式
                <div class="c-yuan2">

                </div>
                <div class="c-yuan3">

                </div>
            </div>
        </a>
        <a href="index.php?m=index&f=index&a=remen"><div class="c-xuan2 w">
            热门活动
        </div></a>
        <a href="#"><div class="c-xuan2 w">
            全新款式
        </div></a>
    </div>
    <div class="c-nei1">
        <div class="c-biao">
            <div class="c-biao1">
                01
            </div>
            <div class="c-biao4">
                <div class="c-biao2">
                    PROMOTION
                </div>
                <div class="c-biao3">
                    为 你 定 制
                    <div class="c-biao5">

                    </div>
                    <div class="c-biao6">

                    </div>
                </div>
            </div>
            <ul class="c-biao7">
                <li style="margin: 0 0 0 0.05rem"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="c-nei2">
        <ul class="c-tu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dz']->value, 'dz1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dz1']->value) {
?>
            <li>
                <img src="<?php echo $_smarty_tpl->tpl_vars['dz1']->value['imgurl'];?>
" alt="">
                <div class="c-tu1">
                    <div class="c-tu4"><?php echo $_smarty_tpl->tpl_vars['dz1']->value['price'];?>
</div>
                    <div class="c-tu2">RMB</div>
                    <div class="c-tu3"><?php echo $_smarty_tpl->tpl_vars['dz1']->value['dengji'];?>
</div>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </ul>
        <img src="<?php echo IMG_PATH;?>
/c-6.jpg" alt="" style="position: absolute;left: 0;bottom:0;width: 100%;height:2.65rem;z-index: -22">
    </div>
    <div class="c-nei1" style="margin-top: 0.6rem">
        <div class="c-biao">
            <div class="c-biao1">
                02
            </div>
            <div class="c-biao4">
                <div class="c-biao2">
                    SURPRISESALE
                </div>
                <div class="c-biao3">
                    惊 喜 活 动
                    <div class="c-biao5">

                    </div>
                    <div class="c-biao6">

                    </div>
                </div>
            </div>
            <ul class="c-biao7">
                <li style="margin: 0 0 0 0.05rem"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!--<div class="c-nei3">
        <div class="c-nei3-1">
            <div class="c-kuang5">

            </div>
            <div class="c-kuang6">

            </div>
            <div class="c-kuang7">

            </div>
            <div class="c-zi8">
                BaoXiXiXi
            </div>
            <div class="c-xian" style="width: 0.81rem;height:0.01rem; background: #fff;">

            </div>
            <div class="c-zi9">
                人气单品活动进行中现在购 买还有礼品
            </div>
            <div class="c-zi10">
                <span style="float: left">1999</span>
                <span style="font-family: 'San Francisco Display';font-size: 0.22rem;color:#fff; float: left;margin: 0.05rem 0.5rem 0 0.05rem">RMB</span>
                <img src="img/c-8.png" alt="" style="float: left">
                <span style="font-size: 0.18rem;color:#fff; float: left;margin-left: 0.1rem">12865</span>
                <img src="img/c-9.png" alt="" style="float: left;margin-left: 0.1rem">
                <span style="font-size: 0.18rem;color:#fff;float: left;margin-left: 0.1rem">105</span>
            </div>
        </div>
        <div class="c-nei3-1" style="position: absolute;left: 4.6rem">
            <div class="c-kuang5" style="background-image: url('img/c-10.jpg')">

            </div>
            <div class="c-kuang6">

            </div>
            <div class="c-kuang7">

            </div>
            <div class="c-zi8">
                BaoXiXiXi
            </div>
            <div class="c-xian" style="width: 0.81rem;height:0.01rem; background: #fff;">

            </div>
            <div class="c-zi9">
                人气单品活动进行中现在购 买还有礼品
            </div>
            <div class="c-zi10">
                <span style="float: left">1999</span>
                <span style="font-family: 'San Francisco Display';font-size: 0.22rem;color:#fff; float: left;margin: 0.05rem 0.5rem 0 0.05rem">RMB</span>
                <img src="img/c-8.png" alt="" style="float: left">
                <span style="font-size: 0.18rem;color:#fff; float: left;margin-left: 0.1rem">12865</span>
                <img src="img/c-9.png" alt="" style="float: left;margin-left: 0.1rem">
                <span style="font-size: 0.18rem;color:#fff;float: left;margin-left: 0.1rem">105</span>
            </div>
        </div>

    </div>-->
    <div class="mui-slider c-nei3">
        <div class="mui-slider-group c-nei3-1">
            <!--第一个内容区容器-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jx']->value, 'jx1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jx1']->value) {
?>
            <div class="mui-slider-item">
                <!-- 具体内容 -->
                <div class="c-kuang5" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['jx1']->value['imgurl'];?>
)">

                </div>
                <div class="c-kuang6">

                </div>
                <div class="c-kuang7">

                </div>
                <div class="c-zi8">
                    <?php echo $_smarty_tpl->tpl_vars['jx1']->value['title'];?>

                </div>
                <div class="c-xian" style="width: 0.81rem;height:0.01rem; background: #fff;">

                </div>
                <div class="c-zi9">
                    <?php echo $_smarty_tpl->tpl_vars['jx1']->value['jianjie'];?>

                </div>
                <div class="c-zi10">
                    <span style="float: left"> <?php echo $_smarty_tpl->tpl_vars['jx1']->value['price'];?>
</span>
                    <span style="font-family: 'San Francisco Display';font-size: 0.22rem;color:#fff; float: left;margin: 0.05rem 0.5rem 0 0.05rem">RMB</span>
                   <!-- <img src="<?php echo IMG_PATH;?>
/c-8.png" alt="" style="float: left">
                    <span style="font-size: 0.18rem;color:#fff; float: left;margin-left: 0.1rem">12865</span>
                    <img src="<?php echo IMG_PATH;?>
/c-9.png" alt="" style="float: left;margin-left: 0.1rem">
                    <span style="font-size: 0.18rem;color:#fff;float: left;margin-left: 0.1rem">105</span>-->
                </div>
            </div>
            <!--第二个内容区-->
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="c-nei1">
        <div class="c-biao">
            <div class="c-biao1">
                03
            </div>
            <div class="c-biao4">
                <div class="c-biao2">
                    LIGHTLUXURY
                </div>
                <div class="c-biao3">
                    轻 奢 品 质
                    <div class="c-biao5">

                    </div>
                    <div class="c-biao6">

                    </div>
                </div>
            </div>
            <ul class="c-biao7">
                <li style="margin: 0 0 0 0.05rem"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pz']->value, 'pz1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pz1']->value) {
?>
    <div class="c-nei4">
        <div class="c-la">
            <div class="c-touxiang" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['pz1']->value['imgurl'];?>
)">

            </div>
            <div class="c-shu"></div>
            <div class="c-zi12">
                SHIRT
            </div>
            <div class="c-zi13">
                <?php echo $_smarty_tpl->tpl_vars['pz1']->value['title'];?>

            </div>
            <div class="c-zi14">
               <?php echo $_smarty_tpl->tpl_vars['pz1']->value['jianjie'];?>

            </div>
            <div class="c-touxiang1">

            </div>
            <div class="c-touxiang2">

            </div>
            <div class="c-touxiang3">

            </div>
            <div class="c-zi15">
                186589
            </div>
            <div class="c-zi16">
                2345
            </div>
            <div class="c-zi17">
                105
            </div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="kong" style="width: 100%;height:1rem;"></div>
</div>
<div class="dibu">
    <div class="db-1"><a href="javascript:;">
        <p class="iconfont icon-shouye sy" style="font-size: 0.3rem;color: yellow"></p>
        <p class="sy1">首页</p>
        <div class="c-dian"></div></a>
    </div>
    <div class="db-2"><a href="index.php?m=index&f=index&a=dingzhi">
        <p class="iconfont icon-yifu sy" style="font-size: 0.3rem"></p>
        <p class="sy1">定制</p>
        <div class="c-dian"></div></a>
    </div>
    <div class="db-3"><a href="">
        <p class="iconfont icon-gouwudai sy" style="font-size: 0.3rem"></p>
        <p class="sy1">购物袋</p>
        <div class="c-dian"></div></a>
    </div>
    <div class="db-4"><a href="">
        <p class="iconfont icon-ren sy" style="font-size: 0.3rem"></p>
        <p class="sy1">我的</p>
        <div class="c-dian"></div></a>
    </div>
</div>

</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/cc.js"><?php echo '</script'; ?>
>
</html><?php }
}
