@section('title','Trabajo - Open a Job')
@include('header')

	<div class='content-wrap'>
		<div class='login-mid'>
			<!--div class='logodiv' style='margin-top:5vh'>
				<img src="{{asset('public/images/trabajologo.png')}}"/>
			</div-->
			<div class='afterlogo-div'>
				<div class='div-container'>
					<h6 class='givepad'> OPEN A JOB </h6>
				</div>
				<form method='post' action="{{ route('postopenjob') }}">
					@csrf
					<!--div class='div-container'>
						<select class='big-select'>
							<option> Open a job </option>
						</select>
					</div-->
					<div class='div-container'>
						<h6 class='colorgray'> Job Category </h6>
						<input type='text' list='jobcatlist' name='jobcategory' placeholder="Category" />
						<datalist id='jobcatlist'>
							<?php 
								if (count($data) > 0) {
									foreach($data as $d) {
										$d = strtoupper($d);
										echo "<option> {$d} </option>";		
									}
								}
							?>
						</datalist>
					</div>
					<div class='div-container'>
						<h6 class='colorgray'> Job Description </h6>
						<textarea name='jobdescription'></textarea>
					</div>
					<div class='div-container'>
						<h6 class='colorgray'> Price <small> (please indicate if its per hour, day or month </small></h6>
						<input type='text' name='jobprice'/>
					</div>
					<div class='div-container'>
						<h6 class='colorgray'> Open job Within <span id='kminwords'> </span></h6>
						<input type='range' id='rangeinput' name='rangeinput' min="1" max="100"/>
					</div>
					<div class='div-container'>
						<h6 class='colorgray'> Duration of Work </h6>
						<label class='radiobtn' id='oneday'> <input type='radio' name='workonlyfor' value='1'/> One day </label>
						<label class='radiobtn' id='multidate'> <input type='radio' name='workonlyfor' value='0'/> Within specified dates </label>
						<!--hr/-->
					<!--/div>
					<div class='div-container'-->
						<div class='flexit tabshow'>
							<div class='div-container' style='width:50%; padding-top:13px;' id='fromdiv'>
								<h6 class='colorgray'> From </h6>
								<input type='date' name='datefrom'/>
							</div>
							<div class='div-container' style='width:50%; padding-top:13px;' id='todiv'>
								<h6 class='colorgray'> To </h6>
								<input type='date' name='dateto'/>
							</div>
						</div>
					</div>
					<div class='div-container '>
						<input type='submit' value='Open this Job' name='openthisjob'/>
					</div>
				</form>
			</div>
		</div>
	</div>


@include('footer')
<script src="{{ asset('public/js/openjob.proc.js') }}"></script>