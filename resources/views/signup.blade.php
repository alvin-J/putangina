@section('title','Trabajo - Signup')
@section('bodyclass','class=giveheight')
@include('header')

	<div class='content-wrap-login'>
		<div class='login-mid-diff'>
				<div class='logodiv'>
					<img src="{{asset('public/images/trabajologo.png')}}"/>
				</div>
				<div class='afterlogo-div-login'>
					<form method='post' action="{{route('signupform')}}">
						@csrf
					<div class='div-container'>
						<input type="text" placeholder='username' name='username'/>
					</div>	
					<div class='div-container'>
						<input type="email" placeholder='email address' name='emailaddr'/>
					</div>	
					<div class='div-container'>
						<input type="password" placeholder='password' name='password'/>
					</div>
					<div class='div-container'>
						<input type="password" placeholder='confirm password' name='confirmpassword'/>
					</div>				
					<div class='div-container'>
						<h6> Account type </h6>
						<label class='radiobtn selectedlbl'> <input type='radio' name='typeofacct' value='1'/> Employer </label>
						<label class='radiobtn'> <input type='radio' name='typeofacct' value='0'/> Job Seeker </label> <br/>
						<hr/>
					</div>
					<div class='div-container' style='text-align: center;'>
						<input type='submit' value='Sign Up' class='loginbtn'/>
					</div>
					<div class='div-container colorgray' style='text-align: center;'>
						<h6> Please <a href="{{url('/login')}}">login</a> if you already have an account.</h6>
					</div>
					@if(session()->has('data'))
						<?php 
							$data = session()->get('data');
							echo "<p class='{$data['status']}'>{$data['msg']}</p>";
						?>
					@endif
					</form>
				</div>
		</div>
	</div>

@include('footer')