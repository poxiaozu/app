$(".w").each(function (index,val) {
    $(this).click(function () {

        $(".w").css({"background":"#fff","color":"#000"}).filter(this).css({"background":"#0CBEF1","color":"#fff"});

//            $(this).css({"background":"#0CBEF1","color":"#fff"}).siblings().css({"background":"#fff","color":"#000"})
    })
});
$(".sy").each(function () {
    $(this).click(function(){
        $(".sy").css("color","#fff").filter(this).css("color","yellow")
    })
})