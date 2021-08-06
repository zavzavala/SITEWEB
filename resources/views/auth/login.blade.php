<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/my-login.css')}}">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
			
					<div class="cardx fat mt-5">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Insira o seu email">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="password">palavra-passe
										<a href="{{route('password.request')}}" class="float-right">
											Esqueceu a palavra-passe?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Insira palavra-passe">
                                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>

								<!--<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Lembrar</label>
									</div>
								</div>-->

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Entrar
									</button>
								</div>
								<div class="mt-4 text-center">
									Nao tem conta? <a href="{{route('register')}}">Criar uma</a>
								</div>
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>


	<script src="{{asset('bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('js/my-login.js')}}"></script>
</body>
</html>