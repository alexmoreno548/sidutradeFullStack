<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sidutrade</title>
        {{Html::style('/css/main.css')}}
        {{Html::style('/css/bootstrap.min.css')}}
        {{Html::style('/css/fontello.css')}}
        {{Html::style('/css/animate.css')}}
        {{Html::style('/css/swiper.min.css')}}
    </head>
    <body>
        <span class="icon-up-open buttonUp"></span>
        <!--SECTION MENU-->
            @yield('content')
        <br>
        <br>
        <br>
        <br>
        <br>

        {{Html::script('/js/jquery.js')}}
        {{Html::script('/js/bootstrap.js')}}
        
        @yield('js')
        
    </body>
</html>