@extends('layouts.form')
<div class="row">
	<div class="col-md-6">
		<div class="colonne_invisible" style="text-align: center;">
			<img src="../resources/images/logo.svg" width=50><br>
			<div class="categorie">ForKids ?</div>
			<br> Bienvenue sur ForKids. Blabla bla blabla blabla bla blablabla
			bla bla blabla blabla bla blablabla 
			<div class="categorie">Ca m'interesse !</div>
			<br> Vous êtes un établissement et désirez utiliser notre outil ?
			Blabla blablabla blalb bla blablalbla blablal bblabl<br><br>
          <a href="{{ route('login') }}" class="btn btn-primary">Je suis déjà inscris</a>
		</div>
	</div>
	<div class="col-md-6">
		<div class="colonne">
			<div class="categorie">Inscription</div>
        @slot('title')
            @lang('Inscription')
        @endslot
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Mot de passe'),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Confirmation du mot de passe'),
                'type' => 'password',
                'name' => 'password_confirmation',
                'required' => true,
                ])
            @component('components.button')
                @lang('Inscription')
            @endcomponent
        </form>
		</div>
	</div>
</div>