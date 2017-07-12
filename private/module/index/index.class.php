<?php
class index extends indexMain {
    function init(){
        /*$this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $db=new db("lists");
        $result=$db->where("status=2")->select();
        $hot=$db->where("status=3")->limit("0,3")->order("sid desc")->select();
        $this->smarty->assign("normal",$result);
        $this->smarty->assign("hot",$hot);*/
        $db=new db("lists");
        $res=$db->where("posid like '%6%'")->select();
        $this->smarty->assign("lunbo",$res);
        
        $dz=$db->where("posid like '%4%'")->select();
        $this->smarty->assign("dz",$dz);

        $jx=$db->where("posid like '%5%'")->select();
        $this->smarty->assign("jx",$jx);

        $pz=$db->where("posid like '%5%'")->select();
        $this->smarty->assign("pz",$pz);
        $this->smarty->display("index.html");
    }

    function remen(){
        $this->smarty->display("c-remen.html");
    }
    function sou(){
        $this->smarty->display("c-sousuo.html");
    }
    function dingzhi(){
        $this->smarty->display("dingzhi.html");
    }
    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->width=120;
        $obj->height=30;
        $obj->output();
        $this->session->set("code",$obj->current);
    }
}