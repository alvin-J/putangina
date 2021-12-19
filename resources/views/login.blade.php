@section('title','Trabajo - Login')
@section('bodyclass','class=giveheight')
@include('header')

	<div class='content-wrap-login'>
		<div class='login-mid-diff'>
				<div class='logodiv margin-top-bot'>
					<img src="{{asset('public/images/trabajologo.png')}}"/>
				</div>
				<div class='afterlogo-div-login'>
					<form method='post' action="{{route('signinform')}}">
						@csrf
						<div class='div-container'>
							<input type="text" name="username" placeholder='username'/>
						</div>	
						<div class='div-container'>
							<input type="password" name="password" placeholder='password'/>
						</div>				
						<div class='div-container margin-top-small' style='text-align: center;'>
							<input type='submit' value='Search Job' class='loginbtn'/>
						</div>
						@if(session()->has('data'))
							<?php 
								$data = session()->get('data');
								echo "<p class='{$data['status']}'>{$data['msg']}</p>";
							?>
						@endif
						<div class='div-container margin-top-small colorgray' style='text-align: center;'>
							<h6> If you don't have an account, please <a href="{{url('/signup')}}">sign up</a> </h6>
						</div>
					</form>
				</div>
		</div>
	</div>

@include('footer')