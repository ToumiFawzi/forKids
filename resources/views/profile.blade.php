
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
                'title' => __('NOM Prénom'),
                'type' => 'text',
                'name' => 'identity',
                'required' => true,
                ])
                        </div>
                    </div>
                    <table>
                    <tr>
                    <td>
                    <span class="elementlist">Email : </span>
                    </td>
                    <td>
                    @include('partials.form-group', [
                'title' => __(''),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])
                    </td>
                    </tr>
                    </table>
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