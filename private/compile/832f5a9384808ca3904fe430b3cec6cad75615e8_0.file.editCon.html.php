<?php
/* Smarty version 3.1.30, created on 2017-07-11 10:10:58
  from "E:\wamp\www\php\private\template\admin\editCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596488126587b2_74053643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '832f5a9384808ca3904fe430b3cec6cad75615e8' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\admin\\editCon.html',
      1 => 1499760656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596488126587b2_74053643 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<body style="padding:15px;">
<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=admin&f=lists&a=editCon">
    <div class="form-group">
        <label for="exampleInputEmail1">所属分类</label>
        <select class="form-control" name="cid">
            <option>选择分类</option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="标题" name="title" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['title'];?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">关键词</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="关键词" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['keywords'];?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">简介</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="简介" name="jianjie"  value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['jianjie'];?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">价格</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="价格" name="price" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['price'];?>
">
    </div>
    <div class="form-group con" con="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['con'];?>
">
        <?php echo '<script'; ?>
 id="editor" type="text/plain" name="con"><?php echo '</script'; ?>
>
    </div>
    <div class="form-group uploadbox">

        <label for="exampleInputFile">图片预览</label>
        <div class="img" style="width:200px;position:relative;overflow: hidden">
            <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['imgurl'];?>
" width="200" alt="">
            <div class="del" style="width:15px;height:15px;border-radius: 50%;background:#ccc;color:#000;position:absolute;top:0;right:0;cursor: pointer;line-height: 15px;text-align: center;">x</div>
        </div>

        <input type="hidden" name="imgurl" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['imgurl'];?>
">

    </div>
    <input type="hidden" name="lid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['lid'];?>
">
    推荐位：
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="checkbox" style="margin-left:20px;">

        <input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>


    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php echo '<script'; ?>
>
    var lid=$("input[name=lid]").attr("value");
    $(".del").click(function () {
        $.ajax({
            url:"index.php?m=admin&f=lists&a=delImg&lid=lid",
            type:"post",
            success:function (e) {
                if(e=="ok"){
                    $(".img img").remove();
                }
            }
        })

    })


    var ue = UE.getEditor('editor');
    ue.addListener( 'ready', function( editor ) {
        setContent(); //编辑器加载完成后，
    } );
    function setContent() {
        ue.setContent(document.querySelector(".con").getAttribute("con"));
    }


    var obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadbox")
    });
    obj.up("index.php?m=admin&f=lists&a=upload",function(data){
        document.querySelector("input[name=imgurl]").value=data;
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
