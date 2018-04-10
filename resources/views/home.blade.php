
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
                    <div class="avatarnom">
                        <div class="avatar"></div>
                        <div class="parentsname">
<<<<<<< HEAD
                            NOM Prénom
                        </div>
                        <a href="#"><img src="../resources/images/picto_edit.svg" class="picto" style="float: right"></a>
                    </div>

                    <span class="elementlist">Métier : </span>Electricien<br>
                    <span class="elementlist">Situation : </span>Marié<br>
                    <span class="elementlist">Téléphone : </span>06 12 34 56 78 90<br>
                    <span class="elementlist">Email : </span>david.dupont@adresse.fr<br>
                    <span class="elementlist">Adresse : </span>42 rue Larionov<br>La Cotonne<br>42000 Saint-Etienne<br>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="colonne">
                    <div class="categorie">Communautés</div><br>
        		    	@component('components.communaute_href')
                    	@endcomponent
=======
                          {{ Auth::user()->identity}}
                        </div>
                        
                        <a href="#"><img src="../resources/images/picto_edit.svg" class="picto" style="float: right"></a>
                    </div>
                    <span class="elementlist">Email : </span>{{Auth::user() -> email }}<br>
       
                </div>
            </div>
            <div class="col-xl-4">
                <div class="colonne">
                    <div class="categorie">Communautés</div><br>
                    <a href="{{route('thematics')}}">
                    <div class="communaute_lien">
                        <div class="communaute_titre">{{Auth::user() -> classkid1 }}</div>
                        <div class="communaute_arrow"><img src="../resources/images/picto_arrow.svg" class="picto" style="padding-right: -4px;"></div>
                    </div>
                    </a>
                    <a href="#">
                    <div class="communaute_lien">
                        <div class="communaute_titre">{{Auth::user() -> classkid2 }}</div>
                        <div class="communaute_arrow"><img src="../resources/images/picto_arrow.svg" class="picto" style="padding-right: -4px;"></div>
                    </div>
                    </a>

>>>>>>> origin/integration_du_chat
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
<<<<<<< HEAD
                                    <span class="kidsname">Jeanne</span><br>
                                    <span class="kidsetablissement">Collège Honoré d'Urfé</span>
                                </td>
                                <td>
                                    <span class="kidsage">12 ans</span><br><span class="kidslevel">6ème</span>
=======
                                    <span class="kidsname">{{Auth::user()->kididentity1}}</span><br>
                                    <span class="kidsetablissement">Ecole primaire de la cotonne</span>
                                </td>
                                <td>
                                    <span class="kidsage">{{Auth::user()->kidage1}} ans</span><br><span class="kidslevel">{{Auth::user()->classkid1}}</span>
>>>>>>> origin/integration_du_chat
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="enfant">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="avatarenfant"></div>
                                </td>
                                <td>
<<<<<<< HEAD
                                    <span class="kidsname">Marc</span><br>
                                    <span class="kidsetablissement">Ecole primaire de la cotonne</span>
                                </td>
                                <td>
                                    <span class="kidsage">9 ans</span><br><span class="kidslevel">CM1</span>
=======
                                    <span class="kidsname">{{Auth::user()->kididentity2}}</span><br>
                                    <span class="kidsetablissement">Collège Honoré d'Urfé</span>
                                </td>
                                <td>
                                    <span class="kidsage">{{Auth::user()->kidage2}} ans</span><br><span class="kidslevel">{{Auth::user()->classkid2}}</span>
>>>>>>> origin/integration_du_chat
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