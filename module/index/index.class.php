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
        $db=new db("lists");
        $jcdzo=$db->where("lid like '7'")->select();
        $this->smarty->assign("jcdzo",$jcdzo);

        $jcxx=$db->where("lid like '15'")->select();
        $this->smarty->assign("jcxx",$jcxx);

        $jcdz=$db->where("lid like '16'")->select();
        $this->smarty->assign("jcdz",$jcdz);

        $jcgr=$db->where("posid like '%9%'")->select();
        $this->smarty->assign("jcgr",$jcgr);
        $this->smarty->display("dingzhi.html");
    }
    function gwd(){
        $this->smarty->display("gwd.html");
    }
    function geren(){
        if($this->session->get("indexLogin")){
            $mid=$this->session->get("mid");
            $db=new db("member");
            $res=$db->where("mid={$mid}")->select();
            $this->smarty->assign("res",$res);
            $this->smarty->display("geren.html");
        }else{
            $this->jump("您未登陆","index.php?m=index&f=login&a=login1");
        }
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
    function wdzl(){
        $this->smarty->display("wdzl.html");
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