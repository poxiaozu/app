/**
 * Created by lenovo on 2017/7/11.
 */
$(function () {
    $.validator.addMethod("lhinput1", function (val) {
        var reg = /^[0-9a-zA-Z]{6,20}$/;
        return reg.test(val);
    }, "不能少于6位");

    $("#denglu3form").validate({
        rules: {
            lhinput1: {
                required: true,
                lhinput1:true
            },
            lhyanzhengma1: {
                required: true,
                lhinput1:true
            }
        },
        messages: {
            lhinput1: {
                required: "请输入账号"
            },
            lhyanzhengma1: {
                required: "请输入密码"
            }
        }
    })
});