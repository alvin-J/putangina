@section('title','List of Workers')
@include('header')

	<div class='list-wrap'>
		<h5> List of opened jobs </h5>
		<div class='option-div'>
			<p> &nbsp;&nbsp;&nbsp;&nbsp; 21-Oct. 2021 to 31-Oct. 2021 </p>
		</div>
		<div class='list-result-div'>
			<div class='item-div'>
				<div class='left-div'>
					<div class='left-div-image'>
						<img src="{{asset('storage/uploads/vin.jpg')}}"/>
					</div>
				</div>
				<div class='right-div'>
					<h6 class=''> Programmer <small class='personnel-name'> | Alvin Merto </small></h6>
					<div class='employer-div'>
						
					</div>
					<div class='reviews-div'>
						<!--div class='item-rev'>
							<p> 
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								&nbsp; <small class='blackit'> 219 reviews </small>
							</p>
						</div-->
						<!--div class='item-rev'>
							<p> <strong class='blackit'> Good Payer: <br/></strong>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								&nbsp; <small class='blackit'> 219 reviews </small>
							</p>
						</div>
						<div class='item-rev'>
							<p> <strong class='blackit'> Trustworthy:<br/></strong>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								&nbsp; <small class='blackit'> 219 reviews </small>
							</p>
						</div>
						<div class='item-rev'>
							<p> <strong class='blackit'> Good Employer: <br/></strong>
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