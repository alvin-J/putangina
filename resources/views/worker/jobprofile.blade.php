@section('title','Job Profile')
@include('header')

	<div class='list-wrap'>
		<div class='header-page-div'>
			<h6> Your job applications </h6>
		</div>
		<div class='list-result-div'>
			<div class='item-block-display'>
				<h6> Software Programmer </h6>
				<p> Alvin Merto </p>
				<p><i class="fas fa-check-circle"></i> <span> You are being hired</span></p>
				<div class='buttondisplay'> 
					<button id='yesbtn'> Yes </button>
					<button id='nobtn'> No </button>
				</div>
			</div>
		</div>
	</div>

@include('footer')