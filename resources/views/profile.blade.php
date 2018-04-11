
@extends('layouts.app')
@section('content')
@guest
<script>window.location = "{{ route('login') }}";</script>
@else
@component('components.nav')
@endcomponent
        <div class="row rowhome">
            <div class="col-xl-4">
                <div class="colonne">
                <form method="POST" action="{{ route('login') }}">
                    <div class="avatarnom">
                        <div class="avatar"></div>
                        <div class="parentsname">
            @include('partials.form-group', [
                'title' => __(''),
                'type' => 'text',
                'name' => 'identity',
                'required' => true,
                ])
                        </div>
                    </div>
				<table style="width: 100%;">
					<tr>
						<td><span class="elementlist">Métier : </span></td>
						<td style="text-align: right;">@include('partials.form-group', [ 'title' => __(''), 'type' =>
							'text', 'name' => 'job', 'required' => true, ])</td>
					</tr>
					<tr>
						<td><span class="elementlist">Situation : </span></td>
						<td style="text-align: right;">@include('partials.form-group', [ 'title' => __(''), 'type' =>
							'text', 'name' => 'situation', 'required' => true, ])</td>
					</tr>
					<tr>
						<td><span class="elementlist">Téléphone : </span></td>
						<td style="text-align: right;">@include('partials.form-group', [ 'title' => __(''), 'type' =>
							'int', 'name' => 'email', 'required' => true, ])</td>
					</tr>
					<tr>
						<td><span class="elementlist">Email : </span></td>
						<td style="text-align: right;">@include('partials.form-group', [ 'title' => __(''), 'type' =>
							'email', 'name' => 'email', 'required' => true, ])</td>
					</tr>
					<tr>
						<td><span class="elementlist">Adresse : </span></td>
						<td style="text-align: right;">@include('partials.form-group', [ 'title' => __(''), 'type' =>
							'text', 'name' => 'email', 'required' => true, ])</td>
					</tr>
				</table>
            @component('components.button')
                @lang('Profil')
            @endcomponent
				</form>
				</div>
            </div>
            <div class="col-xl-4">
                <div class="colonne">
                    <div class="categorie">Communautés</div><br>
                    @component('components.communaute_href')
                    @endcomponent
                </div>
            </div>
            <div class="col-xl-4">
                <div class="colonne">
                    <div class="categorie">Enfants</div><br>
                    <div class="enfant">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="avatarenfant"></div>
                                </td>
                                <td>
                                    <span class="kidsname">{{Auth::user()->kididentity1}}</span><br>
                                    <span class="kidsetablissement">Ecole primaire de la cotonne</span>
                                </td>
                                <td>
                                    <span class="kidsage">{{Auth::user()->kidage1}} ans</span><br><span class="kidslevel">{{Auth::user()->classkid1}}</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
@component('components.foot')
@endcomponent
@endguest
@endsection