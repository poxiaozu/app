<?php
class login extends indexMain{
    function reg(){

            $mname=$_POST["mname"];

            if(empty($mname)){
                echo "用户不能为空";
                exit;
            }
            $db=new db("member");
            $result=$db->where("mname='{$mname}'")->select();
            if(count($result)>0){
                echo "用户名存在";
                exit;
            }

            $mpass=$_POST["mpass"];
            if(empty($mpass)){
                echo "密码不能为空";
                exit;
            }
            $mpass1=$_POST["mpass1"];
            if(empty($mpass)){
                echo "确认密码不能为空";
                exit;
            }

            if($mpass!=$mpass1){
                echo "两次密码不一致";
                exit;
            }

            $mpass=md5($mpass);

            if($db->insert("mname='{$mname}',mpass='{$mpass}'")){
                $this->jump("注册成功","index.php?m=index&f=login&a=login1");
            }


    }
    function denglu(){
        $this->smarty->display("denglu1.html");
    }
    function login1(){
        if($this->session->get("indexLogin")){
            $this->jump("已经登陆","index.php?m=index&f=index&a=main");
        }
        $this->smarty->display("denglu3.html");
    }
    function denglu2(){
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();
        foreach ($result as $v){
            if($v["mname"]==$mname){
                if($v["mpass"]==md5($mpass)){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("mname",$mname);
                    $this->session->set("mid",$v["mid"]);
                    $this->session->set("nicheng",$v["nicheng"]);
                    $this->jump("登陆成功","index.php?m=index&f=index&a=main");
                    exit();
                }
            }
        }
        $this->jump("用户名或密码错误","index.php?m=index&f=login&a=login1");
    }
    function willLogin(){
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();

        foreach ($result as $v){
            if($v["mname"]==$mname){
                if($v["mpass"]==md5($mpass)){$this->session->set("indexLogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    $this->session->set("nicheng",$v["nicheng"]);
                    $this->session->set("email",$v["email"]);
                    $this->session->set("mrole",$v["mrole"]);
                    $near=$this->session->get("near")?$this->session->get("near"):"index.php";

                    echo "ok".$near;
                    exit();
                }
            }
        }

        echo "用户名或密码有误";

    }
    function zuce(){
        $this->smarty->display("zhuce.html");
    }
    function logout(){
        $this->session->clear();
        $this->jump("退出成功","index.php?m=index&f=login&a=denglu");
    }
}