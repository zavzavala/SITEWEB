@extends('layouts.TicsLivro')

@section('content-page')

<div class="col s12">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<div class="bookshelf">
		<div class="shelf">
			<div class="row-1">
				<div class="loc">
				<div> <a href="{{asset('manuais')}}"><div class="sample thumb1" ></div></a></div> 
					<div><a href=""> <div class="sample thumb2"></div> </a></div>
					<div> <a href=""><div class="sample thumb3"></div> </a></div>
				</div>
			</div>

			<div class="row-2">
				<div class="loc">
				
					<div><aa href="{{asset('manuais')}}"> <div class="sample thumb4" ></div></a> </div>
					<div> <div class="sample thumb5" ></div> </div>
					<div> <div class="sample thumb6" sample="{{url('Animated/pics/digital.jpg')}}"></div> </div>
				</div>
			</div>

		</div>
</div>
<div class="col-md-4"></div>

</div>
</div>

<script type="text/javascript">
                $('.loc').click(function(){

        $(this).toggleClass('flip');
       
        });
                </script>
@endsection