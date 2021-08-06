	@extends('layouts.default')

	@section('content-page')
	<div class="container-fluid">
	<div class="responsive">
	<div class="cont">
	<a href="{{ url('start') }}"><div class="mouse" href="{{ url('start') }}"></div></a>
		<div class="app">
			<div class="app__bgimg">
				<div class="app__bgimg-image app__bgimg-image--1">
				</div>
				<div class="app__bgimg-image app__bgimg-image--2">
				</div>
				<div class="app__bgimg-image app__bgimg-image--3">
				</div>
				<div class="app__bgimg-image app__bgimg-image--4">
				</div>
			</div>
			<div class="app__img">
				<img onmousedown="return false" src="{{url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/whiteTest4.png')}}" alt="city" />
			</div>
			
			<div class="app__text app__text--1">
				<div class="app__text-line app__text-line--4">Importação</div>
				<div class="app__text-line app__text-line--3"><a class="btn btn-success" href="{{ route('Importa&Exportacao') }}">Ver</a></div>
							
			</div>
			
			<div class="app__text app__text--2">
				<div class="app__text-line app__text-line--4">Contabilidade </div>
				<div class="app__text-line app__text-line--3"><a class="btn btn-success" href="{{ route('SercicosDeContabilidade') }}">Ver</a>
				</div>
			</div>

		</div>
		<div class="pages">
			<ul class='pages__list'>
				<li data-target='1' class='pages__item pages__item--1 page__item-active'></li>
				<li data-target='2' class='pages__item pages__item--2'></li>
				
				<li data-target='4'><a class="btn btn-info" href="{{ route('tics') }}">TIC'S</a></li>
				
			</ul>
		</div>
	</div>


	</div>
	</div>
	@endsection