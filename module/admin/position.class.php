<?php
class position extends main{
    function add(){
        $this->smarty->display("addPos.html");
    }

    function addCon(){
        $posname=$_POST["posname"];
        $db=new db("position");
        if($db->insert("posname='{$posname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=position&a=add");
        }
    }
    function showPos(){

        $db=new db("position");
        $result=$db->select();
        $this->smarty->assign("pos",$result);
        $this->smarty->display("showPos.html");
    }
    function del(){
        $posid=$_GET["id"];
        $db=new db("position");
        $result=$db->where("posid={$posid}")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=position&a=showPos");
        }
    }
    function update(){
        $posid=$_GET["id"];
        $db=new db("position");
        $result=$db->where("posid={$posid}")->select();
        $this->smarty->assign("pos",$result);
        $this->smarty->display("updatePos.html");
    }
    function updateCon(){
        $posid=$_POST["posid"];
        $posname=$_POST["posname"];
        $db=new db("position");
        $result=$db->update("posname='{$posname}' where posid={$posid}");
        if($result>0){
            $this->jump("修改成功","index.php?m=admin&f=position&a=showPos");
        }
    }
}