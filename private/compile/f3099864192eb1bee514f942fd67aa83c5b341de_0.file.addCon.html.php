<?php
/* Smarty version 3.1.30, created on 2017-07-11 08:49:22
  from "E:\wamp\www\php\private\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596474f22e1934_43431681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3099864192eb1bee514f942fd67aa83c5b341de' => 
    array (
      0 => 'E:\\wamp\\www\\php\\private\\template\\admin\\addCon.html',
      1 => 1499755758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596474f22e1934_43431681 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body style="padding:15px;">
<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=admin&f=lists&a=addCon">
    <div class="form-group">
        <label for="exampleInputEmail1">所属分类</label>
        <select class="form-control" name="cid">
            <option>选择分类</option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="标题" name="title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">关键词</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="关键词" name="keywords">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">简介</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="简介" name="jianjie">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">价格</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="价格" name="price">
    </div>
    <div class="form-group">
        <?php echo '<script'; ?>
 id="editor" type="text/plain" name="con"><?php echo '</script'; ?>
>
    </div>
    <div class="form-group uploadbox">

        <label for="exampleInputFile">上传图片</label>

        <input type="hidden" name="imgurl">

    </div>
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
    var ue = UE.getEditor('editor');

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
