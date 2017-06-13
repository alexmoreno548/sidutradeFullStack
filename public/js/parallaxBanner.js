$(document).ready(function(){
    //PARALLAX BANNER PRINCIPAL
    $(window).scroll(function(){
        barra = $(this).scrollTop(),
            posicion = barra * .60
        
        $('.banner').css({
            "background-position" : "0 -" + posicion + "px"
        })

    })
    //PARALLAX TRIANGULO
    $(window).scroll(function(){
        barra2 = $(this).scrollTop(),
        posicion = barra2 * .50

        $('.triangle-img').css({
            "background-position" : "0 -" + posicion + "px"
        })

    })

    //PARALLAX BANNER VALORES
    $(window).scroll(function(){
        barra3 = $(this).scrollTop(),
        posicion = barra3 * .20

        $('.valores__banner').css({
            "background-position" : "0 -" + posicion + "px"
        })

    })
})