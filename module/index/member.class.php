<?php
class member extends indexMain{
   function init(){
       $this->smarty->assign("login",$this->session->get("indexLogin"));
       $this->smarty->assign("mname",$this->session->get("mname"));

       $this->smarty->assign("mid",$this->session->get("mid"));
       $this->smarty->assign("email",$this->session->get("email"));
       $this->smarty->assign("nicheng",$this->session->get("nicheng"));

      $this->smarty->display("member.html");
   }
    function xgnc1(){
       $nicheng=$this->session->get("nicheng");
       $this->smarty->assign("nicheng",$nicheng);
        $this->smarty->display("xgnc.html");
    }
    function editNC(){
        $nicheng=$_POST["nicheng"];
        $mid=$this->session->get("mid");
        $db=new db("member");
        $result=$db->where("mid={$mid}")->update("nicheng='{$nicheng}'");
        if($result>0){
            $this->session->set("nicheng",$nicheng);
            $this->jump("修改成功","index.php?m=index&f=member&a=xgnc1");
        }
    }
    function xgmm(){
        $this->smarty->display("xgmm.html");
    }
    function editPass(){
        $oldpass=$_POST["oldpass"];
        $mid=$this->session->get("mid");
        $db=new db("member");
        $mpass=$_POST["mpass"];
        if($oldpass==$mpass){
            $this->session->clear();
            $this->jump("修改成功","index.php?m=index&f=login&a=login1");
            exit;
        }
        $info=$db->where("mid={$mid}")->select();
        if(md5($oldpass)==$info[0]["mpass"]){
            $mpass=md5($mpass);
            $result=$db->where("mid={$mid}")->update("mpass='{$mpass}'");
            if($result>0){
                $this->session->clear();
                $this->jump("修改成功","index.php?m=index&f=login&a=login1");
            }
        }else{
            $this->jump("原密码错误","index.php?m=index&f=member&a=xgmm");
        }
    }
   function edit(){
       $mid=$_POST["mid"];
       $filed=$_POST["filed"];
       $val=$_POST["val"];
       $db=new db("member");
       if($db->where("mid={$mid}")->update("$filed='{$val}'")>0){
           echo "更新成功";
           if($filed=="nicheng"){
               $this->session->set("nicheng",$val);
           }elseif ($filed=="email"){
               $this->session->set("email",$val);
           }

       }else{
           echo "更新失败";
       }
   }
}