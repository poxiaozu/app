<?php
class user extends main{

     function __construct(){
         parent::__construct();
         $this->db=new db("member");
     }

    function add(){

          /*$this->db->table="role";
          $result=$this->db->select();
          $this->smarty->assign("roles",$result);*/
          $this->smarty->display("addUser.html");
      }
      function addCon(){
          $mname=$_POST["mname"];
          $mpass=md5($_POST["mpass"]);
          $nicheng=$_POST["nicheng"];
          $photo=$_POST["photo"];
          $phone=$_POST["phone"];
          $address=$_POST["address"];
          $result=$this->db->where("mname='{$mname}'")->select();
          if(count($result)>0){
              $this->jump("用户名存在","index.php?m=admin&f=user&a=add");
              exit;
          }
          if($this->db->insert("mname='{$mname}',mpass='{$mpass}',nicheng='{$nicheng}',photo='{$photo}',phone='{$phone}',address='{$address}'")>0){
              $this->jump("添加成功","index.php?m=admin&f=user&a=add");
          }
      }
      function upload(){
          $obj=new upload();
          $obj->move();
      }
      function show(){
          $db=new db("member");
          $result=$db->select();
          $this->smarty->assign("user",$result);
          $this->smarty->display("showUser.html");
      }
      function del(){
          $mid=$_GET["mid"];
          $db=new db("member");
          $result=$db->where("mid={$mid}")->del();
          if($result>0){
              $this->jump("删除成功","index.php?m=admin&f=user&a=show");
          }
      }
      function update(){
          $mid=$_GET["mid"];
          $db=new db("member");
          $result=$db->where("mid={$mid}")->select();
          $this->smarty->assign("res",$result);
          $this->smarty->display("editUser.html");
      }
      function delImg(){
          $mid=$_GET["mid"];
          $db=new db("member");
          $result=$db->where("mid={$mid}")->update("photo=''");
          if($result>0){
              echo "ok";
          }
      }
      function editCon(){
          $mid=$_POST["mid"];
          $mname=$_POST["mname"];
          $mpass=md5($_POST["mpass"]);
          $nicheng=$_POST["nicheng"];
          $photo=$_POST["photo"];
          $phone=$_POST["phone"];
          $address=$_POST["address"];
          $db=new db("member");
          $result=$db->update("mname='{$mname}',mpass='{$mpass}',nicheng='{$nicheng}',photo='{$photo}',phone='{$phone}',address='{$address}' where mid={$mid}");
          if($result>0){
              $this->jump("修改成功","index.php?m=admin&f=user&a=update&mid={$mid}");
          }
      }
}