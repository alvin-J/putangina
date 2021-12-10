@section('title','Trabajo - Open a Job')
@include('header')

	<div class='content-wrap'>
		<div class='login-mid'>
			<div class='logodiv'>
				<img src="{{asset('public/images/trabajologo.png')}}"/>
			</div>
			<div class='afterlogo-div'>
				<div class='div-container'>
					<select class='big-select'>
						<option> Open a job </option>
					</select>
				</div>
				<div class='div-container'>
					<h6 class='colorgray'> Work Category </h6>
					<select>
						<option> Looking for an opened Job </option>
					</select>
				</div>
				<div class='div-container'>
					<h6 class='colorgray'> Open job Within </h6>
					<select>
						<option> 1KM </option>
					</select>
				</div>
				<div class='div-container'>
					<h6 class='colorgray'> Duration of Work </h6>
					<select>
						<option> Within specified dates </option>
					</select>
				</div>
				<div class='div-container'>
					<div class='flexit'>
						<div class='div-container' style='width:50%'>
							<h6 class='colorgray'> From </h6>
							<h5> 21-Oct-2021 </h5>
						</div>
						<div class='div-container' style='width:50%'>
							<h6 class='colorgray'> To </h6>
							<h5> 21-Oct-2021 </h5>
						</div>
					</div>
				</div>
				<div class='div-container '>
					<input type='submit' value='Open this Job'/>
				</div>
			</div>
		</div>
	</div>

@include('footer')