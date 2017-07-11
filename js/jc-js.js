/**
 * Created by Administrator on 2017/7/10.
 */
$(".xz").click(function () {
    $(this).css({"background":"#0CBEF1"});
    $(".sc").css({"background":"#fff"});
})
$(".sc").click(function () {
    $(this).css({"background":"#0CBEF1"});
    $(".xz").css({"background":"#fff"});
});
$flag=true;
$(".jc-xz ").each(function(index,val) {
    $(".del").eq(index).click(function () {
        $(".con").eq(index).css({"display":"none"});
    });
    $(".jc-xz").eq(index).click(function () {
        if($flag){
            $(".jc-xz a").eq(index).css({"display":"block"});
//            $.ajax(
//                    {
//                        type:"POST",
//                        url:"",
//                        data:"",
//                        datatype:"JSON",
//                        success:function (e) {
//                            if(e=="ok"){
//
//                            }
//                        }
//                    }
//            )
        }else if(!$flag){
            $(".jc-xz a").eq(index).css({"display":"none"});
        }
        $flag=!$flag;
    });
});

$(".jc-dian li").each(function (index,val) {
    $(this).click(function () {
        $(".jiaqian").css({"display":"none"})
        $(".jiaqian").eq(index).css({"display":"block"})
        $(".jc-tu li").css({"z-index":"0"})
//                $(".jc-dian li").css({"border":"0"})
        $(".jc-tu li").eq(index).css({"z-index":"1"});
        $(".jc-dian li").eq(index).css({"border":"0.02rem solid #241A60"}).siblings().css({"border":"0"})
    });
})
//    t=setInterval(fn,1000);
//    var num=0;
//    function fn() {
//        num++;
//        if(num==4){
//            num=1;
//        }else if(num==1){
//            num=4;
//        }
//        $(".jc-tu li").css({"z-index":"0"});
//        $(".jc-tu li").eq(num).css({"z-index":"1"});
//        $(".jc-dian li").eq(num).css({"border":"0.01rem solid #00ff00"}).siblings().css({"border":"0"})
//    }
$(".jc-china").each(function (index,val) {
    $(this).click(function () {
        $(".jc-china").css({"display":"block"});
        $(".jc-china").eq(index).css({"display":"none"})
        $(".jc-china1").css({"display":"none"});
        $(".jc-china1").eq(index).css({"display":"block"});
        $(".jc-english").css({"display":"none"})
        $(".jc-english").eq(index).css({"display":"block"})
    });
})

$(".con-geren").each(function(index,val) {
    $(".del").eq(index).on("taphold",function(){
        $(".del").eq(index).css({"display":"block"});
    })
})