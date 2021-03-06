@if (Session::has('success'))

<div class="alert alert-success validation">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<p class="text-left">{{ Session::get('success') }}</p> 
</div>

@endif

@if (Session::has('unsuccess'))

<div class="alert alert-danger validation">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<p class="text-left">{{ Session::get('unsuccess') }}</p> 
</div>

@endif

@if(session('message')==='f')
<div class="alert alert-danger validation">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<p>Credentials doesn't match.</p>
</div>
@endif    


@if(session('info'))
<div class="alert alert-warning validation">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<p class="text-left">{{ Session::get('info') }}</p> 
</div>
@endif    