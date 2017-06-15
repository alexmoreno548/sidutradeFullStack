@extends('layouts.master')

@section('content')
<section class="banner" style="background: url('/storage/{{$Post->image}}') no-repeat fixed; background-size: cover; height: 100vh;">
    <!--  aqui se incluye el header mano -->
    <header class="" id="supermenu">
	    <div class="navegacion container">
	        <img src="/img/logo2.png" class="logotipo">
	        <nav class="menu">
	            <ul>
	                <li><a href="/">HOME</a></li>
	            </ul>
	        </nav>
	    </div>
	</header>
    <div class="banner__txt">
        <h1 class="titleNotice">{{$Post->title}}</h1>
    </div>
    </section>
    <br>
    <br>
	<div class="container">
		<div class="row">
			<div class="col-md-7 textNotice">
			<h4 class="">{!!$Post->body!!}</h4>
			</div>
			<div class="col-md-4 col-md-offset-1">
				
				<div class="">
					<img src="/img/logo.png" alt="">
					<hr>
					<h3>Descripcion</h3>
					<h4>{!!$Post->excerpt!!}</h4>
				</div>
			</div>
		</div>
		
	</div>
	

@endsection 

@section('js')
    {{Html::script('/js/parallaxBanner.js')}}
    {{Html::script('/js/buttonUp.js')}}
    {{Html::script('/js/smoothScroll.js')}}
    {{Html::script('/js/wow.min.js')}}
    {{Html::script('/js/swiper.min.js')}}
@endsection