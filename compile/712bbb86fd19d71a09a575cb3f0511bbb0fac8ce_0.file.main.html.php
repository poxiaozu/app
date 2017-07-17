<?php
/* Smarty version 3.1.30, created on 2017-07-16 17:38:27
  from "E:\wamp\www\app\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596b88731bb337_36219818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712bbb86fd19d71a09a575cb3f0511bbb0fac8ce' => 
    array (
      0 => 'E:\\wamp\\www\\app\\template\\admin\\main.html',
      1 => 1500218069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596b88731bb337_36219818 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\app\\libs\\smarty\\plugins\\modifier.date_format.php';
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
    <style>
        *{
            padding: 0;margin: 0;border:0;
            box-sizing: border-box;
            list-style: none;
        }
        a{
            color: #12C43E;
        }
        body,html{
            /*background: red;*/
            /*background:;*/
            width: 100%;
            height: 100%;
            background-image:url("<?php echo IMG_PATH;?>
/33.png");
            /*background-size: 100%;*/
            overflow: hidden;
            /*color: #fff;*/

        }
        header{
            width: 100%;
            height:7%;
            background:black;

            font-size:20px;
            line-height:50px;
            text-align: center;
            color:#fff;
        }
        .header-k{
            width: 90%;
            height: 100%;
            margin:0 auto;
        }
        .header-k .zi{
            float:left;
        }
        .header-k .back{
            float: right;
            font-size: 18px;
            line-height: 60px;
        }

        .neirong{
            width: 95%;
            height:93%;
            overflow: hidden;
            margin:0 auto;
            margin-top:20px;

        }

        .left {
            width: 20%;
            height:auto;
            /*background: green;*/
            float: left;
            cursor: pointer;
        }
        .gr{
            width:100%;
            height: auto;
            /*background: #fff;*/
            background: rgba(255,255,255,1);

            margin-bottom: 30px;
            float: left;
        }
        .gr .title{
            width: 80%;
            height: 30px;
            border-bottom: 2px solid #b0b0b0;
            margin:0 auto;
            margin-top: 10px;
            font-size: 16px;
            line-height: 30px;
            color:#0A892C;
            font-weight: 700;
        }
        .gr img{
            width: 100%;
            height: 150px;
            padding:20px 30px;
        }
        .gr .zi{
            width: 100%;
            height: auto;
            padding:0 30px;
            text-align: center;
            line-height: 20px;
        }
        .right {
            width:78%;
            height:95%;
            overflow: hidden;
            background: rgba(255,255,255,1);
            float: right;
        }
        iframe{
            width: 100%;
            height:100%;
            /*overflow: hidden;*/
            /*min-height: 800px;*/
        }
        .h5{
            width: 100%;
            height: auto;
            max-height: 400px;
            overflow-y: auto;
            overflow-x: hidden;

            /*background: #fff;*/
            background: rgba(255,255,255,1);
            padding: 20px 30px;
            float: left;
        }
        .h5 a{
            /*color:#D30000;*/
            font-size: 14px;
            text-decoration: dashed;
        }
        .small{
            display: none;

            width: 80%;
            margin:0 auto;
            margin-top: -8px;
            margin-bottom: 10px;


        }
        .small li{
            width: 100%;
            color: black;
            text-align: center;
            line-height: 25px;
            border-radius: 5px;
            background:rgba(0,0,0,0.6);
            margin-bottom: 2px;
        }
        .anniu{
            width: 100%;
            height: 30px;
            background: green;
            border-radius: 10px;
            text-align: center;
            line-height: 30px;
            margin-bottom: 10px;
            color:#fff;
        }
        .back{
            font-size: 30px;
        }

    </style>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $("li span").click(function () {
                $(this).nextAll("ul").toggle();
            })
        })
    <?php echo '</script'; ?>
>
    <body>
    <header>
        <div class="header-k">
            <div class="zi">欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
来到后台管理系统</div>
            <div class="back" time="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
"><?php echo $_smarty_tpl->tpl_vars['currtime']->value;?>
</div>
        </div>
    </header>
    <div class="neirong">
        <div class="left">
            <div class="gr">
                <div class="title">潮定制</div>
                <a href="index.php" target="_blank"><img src="<?php echo IMG_PATH;?>
/1.jpg" alt=""></a>
                <!--            <div class="zi">公司地址:太原市小店区</div>-->
                <div class="zi" style="margin-bottom: 20px;color: #0C912E"><a href="index.php" target="_blank">进入主页</a> &nbsp;<a href="index.php?m=admin&f=login&a=logout">退出登录</a></div>
            </div>
            <div class="h5">
                <ul>
                    <li>
                        <a href="javaScript:;"></a><span><div class="anniu">用户管理</div></span>
                        <ul class="small">
                            <li>
                                <a href="index.php?m=admin&f=user&a=add" target="iframe">添加用户</a>
                            </li>
                            <li>
                                <a href="index.php?m=admin&f=user&a=show" target="iframe">用户信息</a>
                            </li>
                        </ul>
                    </li>


                    <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?>
                    <li>
                        <a href="javaScript:;"></a><span><div class="anniu">商家管理</div></span>
                        <ul class="small">
                            <li>
                                <a href="index.php?m=admin&f=member&a=add" target="iframe">添加商家</a>
                            </li>

                            <li>
                                <a href="index.php?m=admin&f=member&a=show" target="iframe">查看商家</a>
                            </li>
                        </ul>
                    </li>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>
                    <li>
                        <a href="javaScript:;"></a><span><div class="anniu">分类管理</div></span>
                        <ul class="small">
                            <li>
                                <a href="index.php?m=admin&f=category&a=add" target="iframe">添加分类</a>
                            </li>

                            <li>
                                <a href="index.php?m=admin&f=category&a=show" target="iframe">查看分类</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javaScript:;"></a><span><div class="anniu">内容管理</div></span>
                        <ul class="small">
                            <li>
                                <a href="index.php?m=admin&f=lists&a=add" target="iframe">添加内容</a>
                            </li>

                            <li>
                                <a href="index.php?m=admin&f=lists&a=show" target="iframe">查看内容</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javaScript:;"></a><span><div class="anniu">推荐位管理</div></span>
                        <ul class="small">
                            <li>
                                <a href="index.php?m=admin&f=position&a=add" target="iframe">添加位置</a>
                            </li>

                            <li>
                                <a href="index.php?m=admin&f=position&a=showPos" target="iframe">查看位置</a>
                            </li>
                        </ul>
                    </li>
                    <?php }?>


                </ul>
            </div>
        </div>
        <div class="right">
            <iframe src="<?php echo URL_PATH;?>
/template/admin/welcome1.html" frameborder="0" name="iframe"></iframe>
        </div>
    </div>

    </body>
    </html><?php }
}
