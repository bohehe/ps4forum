$(function() {
    $('#to-register').bind('click', function(event) {
        $('#login-form').modal('toggle')
        setTimeout(function(){
            $('#register-form').modal('toggle')
        }, 500)
    })

    $("#vcode-login").slider({
        width: 270,
        height: 35,
        successMsg: "验证通过了哦"
    })

    $("#vcode-register").slider({
        width: 270,
        height: 35,
        successMsg: "验证通过了哦"
    })
})
