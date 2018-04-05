<div class="header">
	<table class="header_table">
		<tr>
			<td class="header_td_left"></td>
			<td class="header_td_center">
			    <a href="{{ route('home') }}"> {{
					config('app.name', 'Album') }} - Etablissement 1
				</a>
			</td>
			<td class="header_td_right">
			    @guest
    				<div class="nav-item{{ currentRoute(route('login')) }}">
    					<a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a>
    				</div>
    				<div class="nav-item{{ currentRoute(route('register')) }}">
    					<a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a>
    				</div>
    			@else
    			    <a id="logout" href="{{ route('logout') }}">
    			        <img src="../resources/images/picto_logoff.svg" class="picto">
    			    </a>
    				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide" hidden>
    					{{ csrf_field() }}
    				</form>
			@endguest
			</td>
		</tr>
	</table>
</div>