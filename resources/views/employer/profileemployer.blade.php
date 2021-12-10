@section('title','Profile')
@section('bodyclass','class=halfblue')
@include('header')

<div class='list-wrap'>
	<div class='profile-div'>
		<div class='profile-pic'>
			<div class='pic-wrapper'>
				<img src="{{asset('storage/uploads/vin.jpg')}}"/>
			</div>
			<h6> Alvin employer Merto </h6>
			<!--div class='expertise-div'>
				<ul class='colorgray flexit-center'>
					<li> programmer </li>
					<li> software </li>
				</ul>
			</div-->
			<div class='employer-reviews'>
				<div class='rev-item'>
					<h5> Commends </h5>
					<p>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</p>
					<h6> 3,000 </h6>
				</div>
				<!--div class='rev-item'>
					<h5> WORKS </h5>
					<h6> 3,000 </h6>
				</div>
				<div class='rev-item'>
					<h5> COMMITS </h5>
					<h6> 3,000 </h6>
				</div-->
			</div>
		</div>
	</div>
	<div class='work-done'>
		<div class='work-item'>
			<h6> Software Programmer <small class='completed'> completed </small> </h6>
			<p>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				&nbsp; <small class='blackit'> Alvin Merto </small>
			</p>
		</div>
		<div class='work-item'>
			<h6> Software Programmer <small class='completed'> completed </small> </h6>
			<p>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				&nbsp; <small class='blackit'> Alvin Merto </small>
			</p>
		</div>
		<div class='work-item'>
			<h6> Software Programmer <small class='completed'> completed </small> </h6>
			<p>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				&nbsp; <small class='blackit'> Alvin Merto </small>
			</p>
		</div>
		<div class='work-item'>
			<h6> Software Programmer <small class='completed'> completed </small> </h6>
			<p>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				&nbsp; <small class='blackit'> Alvin Merto </small>
			</p>
		</div>
		<div class='work-item'>
			<h6> Software Programmer <small class='completed'> completed </small> </h6>
			<p>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				&nbsp; <small class='blackit'> Alvin Merto </small>
			</p>
		</div>
		<div class='work-item'>
			<h6> Software Programmer <small class='completed'> completed </small> </h6>
			<p>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				&nbsp; <small class='blackit'> Alvin Merto </small>
			</p>
		</div>
	</div>
	<div class='spacer-big'></div>	
</div>
<div class='bottom-div'>
	<div class='bottom-wrap-div'>
		<div class='profile-div-buttons'>
			<i class="fas fa-heart"></i>
			<i class="fas fa-paper-plane"></i>
		</div>
	</div>
</div>
@include('footer')
