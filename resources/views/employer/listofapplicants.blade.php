@section('title','List of Applicants')
@include('header')
	<!--div class='app-header-div'>
		<h5> List of Applicants </h5>
	</div-->
	<div class='list-wrap'>
		<div class='header-page-div'>
			<h6> Applicants </h6>
		</div>
		<div class='option-div'>
			<p> &nbsp;&nbsp;&nbsp;&nbsp; Programmer </p>
		</div>
		<div class='list-result-div'>
				<div class='item-div'>
					<div class='left-div'>
						<div class='left-div-image'>
							<img src="{{asset('storage/uploads/vin.jpg')}}"/>
						</div>
					</div>
					<div class='right-div'>
						<h6 class=''> Alvin Merto </h6>
						<div class='expertise-div'>
							<ul class='colorgray'>
								<li> programmer </li>
								<li> software </li>
							</ul>
						</div>
						<div class='reviews-div'>
							<div class='item-rev'>
								<p> 
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									&nbsp; <small class='blackit'> 219 reviews </small>
								</p>
							</div>
							<!--div class='item-rev'>
								<p> <strong class='blackit'> hardworking <br/></strong>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									&nbsp; <small class='blackit'> 219 reviews </small>
								</p>
							</div>
							<div class='item-rev'>
								<p> <strong class='blackit'> trustworthy <br/></strong>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									&nbsp; <small class='blackit'> 219 reviews </small>
								</p>
							</div>
							<div class='item-rev'>
								<p> <strong class='blackit'> master of craft <br/></strong>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									&nbsp; <small class='blackit'> 219 reviews </small>
								</p>
							</div-->
						</div>
						<div class='distance-div'>
							<p><i class="fas fa-map-marker-alt"></i> 2kms from you 
							<br/> <small> Gatungan, Bunawan District, Davao City </small></p>
						</div>
						<div class='price-div'>
							<h6> PHP  <span>2,204.00 </span> <small>/day</small> </h6>
						</div>
					</div>
				</div>
			
		</div>
	</div>

@include('footer')