@section('title','Trabajo - Signup')
@section('bodyclass','class=giveheight')
@include('header')

	<div class='content-wrap-login'>
		<div class='login-mid-diff'>
				<div class='logodiv'>
					<img src="{{asset('public/images/trabajologo.png')}}"/>
				</div>
				<div class='afterlogo-div-login'>
					<div class='div-container'>
						<input type="text" name="" placeholder='username'/>
					</div>	
					<div class='div-container'>
						<input type="email" name="" placeholder='email address'/>
					</div>	
					<div class='div-container'>
						<input type="password" name="" placeholder='password'/>
					</div>
					<div class='div-container'>
						<input type="password" name="" placeholder='confirm password'/>
					</div>				
					<div class='div-container' style='text-align: center;'>
						<input type='submit' value='Sign Up' class='loginbtn'/>
					</div>
					<div class='div-container colorgray' style='text-align: center;'>
						<h6> Please <a href="{{url('/')}}">login</a> if you already have an account.</h6>
					</div>
				</div>
		</div>
	</div>

@include('footer')