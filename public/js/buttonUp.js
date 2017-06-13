$(document).ready(function(){
    $('.buttonUp').hide()

    $('.buttonUp').click(function(){
        $('body, html').animate({
            scrollTop: "0px"
        },400)
    })

    $(window).scroll(function(){
        if($(this).scrollTop() > 500)
            $('.buttonUp').fadeIn(1000)
        else
            $('.buttonUp').fadeOut()
    })
})