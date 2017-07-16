<?php
class member extends main {
    function add(){
        $this->smarty->display("addMember.html");
    }
    function addCon(){
        $uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        $nicheng=$_POST["nicheng"];
        $photo=$_POST["photo"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $db=new db("user");
        $result=$db->where("uname='{$uname}'")->select();
        if(count($result)>0){
            $this->jump("用户名存在","index.php?m=admin&f=user&a=add");
            exit;
        }
        if($db->insert("uname='{$uname}',upass='{$upass}',nicheng='{$nicheng}',photo='{$photo}',phone='{$phone}',address='{$address}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=user&a=add");
        }
    }
    function show(){
        $db=new db("user");
        $result=$db->select();
        $this->smarty->assign("user",$result);
        $this->smarty->display("showMember.html");
    }
    function del(){
        $uid=$_GET["uid"];
        $db=new db("user");
        $result=$db->where("uid={$uid}")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=member&a=show");
        }
    }
    function update(){
        $uid=$_GET["uid"];
        $db=new db("user");
        $result=$db->where("uid={$uid}")->select();
        $this->smarty->assign("res",$result);
        $this->smarty->display("editMember.html");
    }
    function delImg(){
        $uid=$_GET["uid"];
        $db=new db("user");
        $result=$db->where("uid={$uid}")->update("photo=''");
        if($result>0){
            echo "ok";
        }
    }
    function editCon(){
        $uid=$_POST["uid"];
        $uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        $nicheng=$_POST["nicheng"];
        $photo=$_POST["photo"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $db=new db("user");
        $result=$db->update("uname='{$uname}',upass='{$upass}',nicheng='{$nicheng}',photo='{$photo}',phone='{$phone}',address='{$address}' where uid={$uid}");
        if($result>0){
            $this->jump("修改成功","index.php?m=admin&f=member&a=update&uid={$uid}");
        }
    }
}