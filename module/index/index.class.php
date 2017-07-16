<?php
class index extends indexMain {
    function init(){
        $this->smarty->display("index.html");
    }
    function main(){
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
        $this->smarty->display("main.html");
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
    function gwd(){
        $this->smarty->display("gwd.html");
    }
    function geren(){
        $this->smarty->display("geren.html");
    }
    function shangchuan(){
        $this->smarty->display("shangchuan.html");
    }
    function xzks(){
        $this->smarty->display("chooseStyle.html");
    }
    function payStyle(){
        $this->smarty->display("payStyle.html");
    }
    function xzyhk(){
        $this->smarty->display("choose.html");
    }
    function zfmm(){
        $this->smarty->display("pay.html");
    }
    function pay(){
        $this->smarty->display("pay.html");
    }
    function xgnc1(){
        $this->smarty->display("xgnc.html");
    }
    function xgmm(){
        $this->smarty->display("xgmm.html");
    }
    function wdzl(){
        $this->smarty->display("wdzl.html");
    }
    function denglu(){
        $this->smarty->display("denglu1.html");
    }
    function denglu1(){
        $this->smarty->display("denglu3.html");
    }
    function zuce(){
        $this->smarty->display("zhuce.html");
    }
    function zuce2(){
        $this->smarty->display("zhuce2.html");
    }
    function zuce3(){
        $this->smarty->display("zhuce3.html");
    }
    function detail(){
        $lid=$_GET["lid"];
        $db=new db("lists");
        $det=$db->where("lid={$lid}")->select();
        $this->smarty->assign("det",$det);
        $this->smarty->display("grdz.html");
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