<?php
class category extends main{
    function add(){
         $db=new db("");
         $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);

        $this->smarty->display("addCategory.html");
    }

    function addCon(){
        $pid=$_POST["pid"];
        $cname=$_POST["cname"];
        $db=new db("category");
        if($db->insert("pid={$pid},cname='{$cname}'")){
            $this->jump("添加成功","index.php?m=admin&f=category&a=add");
        }
    }
    function show(){
        $db=new db("category");
        $result=$db->select();
        $this->smarty->assign("res",$result);
        $this->smarty->display("showCategory.html");
    }
    function del(){
        $cid=$_GET["cid"];
        $db=new db("category");
        $result=$db->where("cid={$cid}")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=category&a=show");
        }
    }
    function update(){
        $cid=$_GET["cid"];
        $db=new db("category");
        $result=$db->where("cid={$cid}")->select();
        $this->smarty->assign("res",$result);
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category",$cid);
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("editCategory.html");
    }
    function edit(){
        $cid=$_POST["cid"];
        $cname=$_POST["cname"];
        $pid=$_POST["pid"];
        $db=new db("category");
        $result=$db->update("cname='{$cname}',pid={$pid} where cid={$cid}");
        if($result>0){
            $this->jump("修改成功","index.php?m=admin&f=category&a=update&cid={$cid}");
        }
    }
}