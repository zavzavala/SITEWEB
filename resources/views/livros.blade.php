@extends('layouts.TicsLivro')
<style></style>
@section('content-page')
					
<div id="flipbook">
		
		<div><img src="{{asset('images/Background/digital.jpg')}}" alt=""></div>
		<div> 
		<h1>pagina 1</h1> 
		<p>I'm Emmanuel García, a front-end developer from Venezuela, who loves to push the web forward with new technologies. I look forward to releasing new projects. One of those will allow you to split HTML content into pages depending on the size of the pages. While loading pages with turn.js, this library would have an infinity potential. Think about detecting the number of pages automatically, creating a table of contents that knows where every page is.</p>
		</div>

		<div> 
		<h1>pagina 2</h1> 
		<p>I'm Emmanuel García, a front-end developer from Venezuela, who loves to push the web forward with new technologies. I look forward to releasing new projects. One of those will allow you to split HTML content into pages depending on the size of the pages. While loading pages with turn.js, this library would have an infinity potential. Think about detecting the number of pages automatically, creating a table of contents that knows where every page is, </p>		
		</div>
		<div> 
		<h1>pagina 3</h1> 
		<p>I'm Emmanuel García, a front-end developer from Venezuela, who loves to push the web forward with new technologies. I look forward to releasing new projects. One of those will allow you to split HTML content into pages depending on the size of the pages. While loading pages with turn.js, this library would have an infinity potential. Think about detecting the number of pages automatically, creating a table of contents that knows where every page is, </p>		
		</div>

		<div><img src="{{asset('images/Background/tecnologie.jpg')}}" alt=""></div>
	</div>
		<!--							Teste
	<div id="flipbook">
		
		<div> <img src="{{url('Animated/steve-jobs/pics/05.jpg')}}" alt=""> </div>
		<div><img src="{{url('Animated/steve-jobs/pics/06.jpg')}}" alt=""> </div>
		<div><img src="{{url('Animated/steve-jobs/pics/07.jpg')}}" alt=""> </div>
		<div> <img src="{{url('Animated/steve-jobs/pics/08.jpg')}}" alt=""> </div>	
	</div>-->
	<script type="text/javascript">
		$("#flipbook").turn({
			width: 700,
			height: 500,
			autoCenter: true, 
			page:1,
			//autofloat:true,
			duration:2000,
			//gradients: true, //acceleration: true
		});
		
	</script>

@endsection