$(".c1").click(function(){
    $(".c1").css({"background":"#E6E6E6","color":"#000"});
    $(this).css({"background":"#169354","color":"#fff"});
});
var num=0;
var numObj = $(".num");
$(".jian:eq(0)").click(function(){
    num=parseInt(numObj.val());
    num--;
    if(num<=0){
        num=0;
    }
    $(".cc2").html(num);
    numObj.val(num);
});
$(".jia").click(function(){
    var num=parseInt(numObj.val());
    ++num;
    console.log(typeof  num);
    numObj.val(num);
    $(".cc2").html(num);
})