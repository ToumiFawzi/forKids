@extends('layouts.app') @section('content') @guest
<script>window.location = "{{ route('login') }}";</script>
@else
<div class="container_hidden">
	@component('components.nav') @endcomponent
	<div class="row" style="height: 100%;">
		<div class="col-md-3">
			<div class="liste_users">
		    	@component('components.liste_users_href')
            	@endcomponent
			</div>
		</div>
		<div class="col-md-9">
		    @component('components.thematics_href')
            @endcomponent
		</div>
	</div>
	@component('components.foot_input') @endcomponent
</div>
@endguest @endsection
