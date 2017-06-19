@extends('layouts.master')
	
@section('content')
<div class="snBody">
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
			<div class="col-md-7 textNotice cardShowNotice">
			<h2>{{$Post->title}}</h2>
			<br>
			<p>{!!$Post->body!!}</p>
			</div>
			<div class="col-md-4 col-md-offset-1 cardShowNotice">
				
				<div class="">
					<img src="/img/logo.png" alt="">
					<hr>

					<h3>Destacadas</h3>
					@foreach($Posts as $posts)
					<img src="/storage/{{$posts->image}}" alt="" class="asideImage">
					<h4>{{$posts->title}}</h4>
					<a href="/notice/{{$posts->id}}" class="btn btn-primary" type="button">Ver Noticia</a>
					<hr>
					@endforeach
				</div>
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