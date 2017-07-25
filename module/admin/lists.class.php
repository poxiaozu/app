<?php
/*
 * 1.  回复的言论   禁止回复
 * 2.  发表的内容   禁止发表
 * 3.  注销
 * 4.  正常
 * 5.  精华         权限
 *
 *
 *     事务型操作
 *
 *     一个功能需要多个步骤去实现，叫做是事务型处理
 *
 *
 *     商城   购物车
 *
 *     shop
 *
 * id    shopname    price  num
 *  1     手机         100    10
 *
 *
 * car
 *
 * id    name    price  num
 *
 *
 * 1.    更新 lists  status =4
 * 2.    查询   lists   status=4
 * 3.    >3    member  mrole=1   禁言  4
 * 4.    <=3   member  mrole=0
 * 5.    查询   lists   status=3
 * 6.      >3   member   mrole=2  免审核  4
 * 7.     <=3    member   mrole=0
 *
 * 1.  禁止
 *
 * 2.  正常
 *
 * 3.  免审核
 *
 * */
class lists extends main{
    function add(){
        $db=new db("category");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);

        $db1=new db("position");
        $pos=$db1->select();
        $this->smarty->assign("position",$pos);
        $this->smarty->display("addCon.html");
    }

    function upload(){
        $obj=new upload();
        //$obj->root="../root";
        $obj->move();
    }
    function addCon(){
        $cid=$_POST["cid"];
        $title=$_POST["title"];
        $keywords=$_POST["keywords"];
        $jianjie=$_POST["jianjie"];
        $price=$_POST["price"];
        $con=$_POST["con"];
        $imgurl=$_POST["imgurl"];
        $posid=empty($_POST["posid"])?0:implode(";",$_POST["posid"]);
        $db=new db("lists");
        $result=$db->insert("cid={$cid},title='{$title}',keywords='{$keywords}',jianjie='{$jianjie}',price='{$price}',con='{$con}',imgurl='{$imgurl}',posid='{$posid}'");
        if($result>0){
            $this->jump("添加成功","index.php?m=admin&f=lists&a=add");
        }
    }
    function show(){
        $db=new db("lists");
        $result=$db->where("lists.cid=category.cid")->setField("category.cname,lists.*")->join("lists,category");
        /*$result=$db->select();*/
        $this->smarty->assign("res",$result);
        $this->smarty->display("showCon.html");
    }
    function del(){
        $lid=$_GET["lid"];
        $db=new db("lists");
        $result=$db->where("lid={$lid}")->del();
        if($result>0){
            $this->jump("删除成功","index.php?m=admin&f=lists&a=show");
        }
    }
    function update(){
        $lid=$_GET["lid"];
        $db=new db("lists");
        $result=$db->where("lid={$lid}")->select();
        $tree=new tree();
        $cid=$result[0]["cid"];
        $tree->getTree3(0,0,"-",$db->db,"category",$cid);
        $this->smarty->assign("str",$tree->str);

        $posid=empty($result[0]['posid'])?[]:explode(";",$result[0]["posid"]);
        $db1=new db("position");
        $pos=$db1->select();
        $this->smarty->assign("posid",$posid);
        $this->smarty->assign("position",$pos);
        $this->smarty->assign("res",$result);
        $this->smarty->display("editCon.html");
    }
    function delImg(){
        $lid=$_GET["lid"];
        $db=new db("lists");
        $result=$db->where("lid={$lid}")->update("imgurl=''");
        if($result>0){
            echo "ok";
        }
    }
    function editCon(){
        $lid=$_POST["lid"];
        $cid=$_POST["cid"];
        $title=$_POST["title"];
        $keywords=$_POST["keywords"];
        $jianjie=$_POST["jianjie"];
        $price=$_POST["price"];
        $con=$_POST["con"];
        $imgurl=$_POST["imgurl"];
        $posid=empty($_POST["posid"])?0:implode(";",$_POST["posid"]);
        $db=new db("lists");
        $result=$db->update("cid={$cid},title='{$title}',keywords='{$keywords}',jianjie='{$jianjie}',price='{$price}',con='{$con}',imgurl='{$imgurl}',posid='{$posid}' where lid={$lid}");
        if($result>0){
            $this->jump("修改成功","index.php?m=admin&f=lists&a=update&lid={$lid}");
        }
    }
    function edit(){
        $sid=$_GET["sid"];
        $mid=$_GET["mid"];
        $db=new db("lists");
        $result=$db->setField("status")->where("sid={$sid}")->select();
        $this->smarty->assign("status",$result[0]["status"]);
        $this->smarty->assign("sid",$sid);
        $this->smarty->assign("mid",$mid);
        $this->smarty->display("editLists.html");
    }

    function editStatus(){
        $sid=$_POST["sid"];
        $mid=$_POST["mid"];
        $status=$_POST["status"];
        $db=new db("lists");
        if($db->where("sid={$sid}")->update("status={$status}")>0){

            $db=new db("");
            $db->db->autocommit(false);
            $result1=$db->db->query("select * from lists where status=4 and mid={$mid}");

            $num=mysqli_num_rows($result1);

            if($num>3){

                $result2=$db->db->query("update member set mrole=1 where mid={$mid}");
                $result3=!null;


            }else{
                $result2=$db->db->query("update member set mrole=0 where mid={$mid}");

                $result1=$db->db->query("select * from lists where status=3 and mid={$mid}");
               $num= mysqli_num_rows($result1);

               if($num>3){
                   $result3=$db->db->query("update member set mrole=2 where mid={$mid}");
               }
                $result3=!null;
            }

            if($result1&&$result2&&$result3){
                $db->db->commit();
                $db->db->autocommit(true);
               $this->jump("修改成功","index.php?m=admin&f=lists&a=add");
            }else{
                $this->jump("修改失败","index.php?m=admin&f=lists&a=add");
            }


          /*
           *   0 正常
           *   1 禁止
           *   2 免审核
           * */



        }


    }

}