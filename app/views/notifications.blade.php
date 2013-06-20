@if (count($errors->all()) > 0)
<div class="row">
	<div class="centered seven columns text-center">
		<li class="danger alert">
			Please check the form below for errors
		</li>
	</div>
</div>
@endif

@if ($message = Session::get('success'))
<div class="row">
	<div class="centered seven columns text-center">
	<li class="success alert">
		{{ $message }}
	</li>
	</div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="row">
	<div class="centered seven columns text-center">
	<li class="danger alert">
		{{ $message }}
	</li>
	</div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="row">
	<div class="centered seven columns text-center">
	<li class="warning alert">
		{{ $message }}
	</li>
	</div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="row">
	<div class="centered seven columns text-center">
	<li class="info alert">
		{{ $message }}
	</li>
	</div>
</div>
@endif
