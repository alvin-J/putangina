@section('title','Trabajo - Login')
@section('bodyclass','class=giveheight')
@include('header')

	<div class='content-wrap-login'>
		<div class='login-mid-diff'>
				<div class='logodiv margin-top-bot'>
					<img src="{{asset('public/images/trabajologo.png')}}"/>
				</div>
				<div class='afterlogo-div-login'>
					<div class='div-container'>
						<input type="text" name="" placeholder='username'/>
					</div>	
					<div class='div-container'>
						<input type="password" name="" placeholder='password'/>
					</div>				
					<div class='div-container margin-top-small' style='text-align: center;'>
						<input type='submit' value='Search Job' class='loginbtn'/>
					</div>
					<div class='div-container margin-top-small colorgray' style='text-align: center;'>
						<h6> If you don't have an account, please <a href="{{url('/signup')}}">sign up</a> </h6>
					</div>
				</div>
		</div>
	</div>

@include('footer')