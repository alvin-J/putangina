@section('title','Home')
@include('header')

	@if(session()->has('msg'))
		<div class='notification-div'>
			<ul>
				<?php 
					$msg = session()->get('msg');
					echo "<li> {$msg} </li>";
				?>				
			</ul>
		</div>
	@endif
	<div class='list-wrap'>
		<div class='div-greeter'>
			<h6> Welcome <br/> Home, Alvin [<small> <a href="{{ url('/logout') }}"> logout </a> </small>]</h6>
		</div>
		<div class='div-navigation'>
			<h6> Navigation </h6>
			<div class='thenavs'>
				<div class='nav-item'>
					<a href="{{ url('employer/openajob') }}">
						<div class='nav-item-bg'>
							<i class="fas fa-door-open"></i>
						</div>
						<p> OPEN A JOB </p>
					</a>
				</div>
				<div class='nav-item'>
					<div class='nav-item-bg'>
						<i class="fas fa-comments"></i>
					</div>
					<p> MESSAGES </p>
				</div>
				<div class='nav-item'>
					<div class='nav-item-bg'>
						<i class="fas fa-id-card-alt"></i>
					</div>
					<p> PROFILE </p>
				</div>
			</div>
		</div>
		<div class='div-navigation'>
			<h6> Activity Navigation </h6>
			<div class='cross-div'>
				<div class='an-div-content bottom-border'>
					<div class='nav-item-an right-border'>
						<div class='nav-wrap'>
							<i class="fas fa-briefcase"></i> <br/>
							<p> Status of opened Job </p>
						</div>
					</div>
					<div class='nav-item-an'>
						<div class='nav-wrap'>
							<i class="fas fa-clipboard-list"></i> <br/>
							<p> List of opened jobs </p>
						</div>
					</div>
				</div>
				<div class='an-div-content'>
					<div class='nav-item-an right-border'>
						<div class='nav-wrap'>
							<i class="fas fa-address-book"></i> <br/>
							<p> Contact details </p>
						</div>
					</div>
					<div class='nav-item-an'>
						<div class='nav-wrap'>
							<i class="fas fa-hand-holding-heart"></i> <br/>
							<p> Followed workers </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@include('footer')