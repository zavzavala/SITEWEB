<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Registar</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/my-login.cs')}}s">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				
					<div class="cardx fat mt-4">
						<div class="card-body">
							<h4 class="card-title">Registar</h4>
							<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">

								@if ( Session::get('success'))
									 <div class="alert alert-success">
										 {{ Session::get('success') }}
									 </div>
								@endif
								@if ( Session::get('error'))
									 <div class="alert alert-danger">
										 {{ Session::get('error') }}
									 </div>
								@endif
                                @csrf
								<div class="form-group">
									<label for="name">Nome</label>
									<input id="name" type="text" class="form-control" name="name"  autofocus placeholder="Insira seu nome" value="{{ old('name') }}">
									<span class="text-danger">@error('name'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="email">Seu email</label>
									<input id="email" type="email" class="form-control" name="email"  placeholder="Insira seu email" value="{{ old('email') }}">
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
                                <div class="form-group">
									<label for="favoriteColor">Cor favorita </label>
									<input id="favoriteColor" type="text" class="form-control" name="favoriteColor"  placeholder="Cor favorita">
									<span class="text-danger">@error('favoriteColor'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="password">palavra-passe</label>
									<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Enter password">
									<span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Confirmar palavra-passe</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Confirmar palavra-passe">
									<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                                    
								</div>

						<!--
								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input">
										<label for="agree" class="custom-control-label">Concordo com os<a href="#"> termos e condições</a></label>
										<div class="invalid-feedback">
											Concorda com nossos termos?
										</div>
									</div>
								</div>-->

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Registar
									</button>
								</div>
								<div class="mt-4 text-center">
									Já tem uma conta? <a href="{{route('login')}}">Login</a>
								</div>
							</form>
						</div>
					</div>
			
				</div>
			</div>
		</div>
	</section>

<script src="{{asset('jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('js/my-login.js')}}"></script>
</body>
</html>