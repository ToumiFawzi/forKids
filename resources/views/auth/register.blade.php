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
           {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('NOM Prenom'),
                'type' => 'text',
                'name' => 'identity',
                'required' => true,
                ])
                @include('partials.form-group', [
                'title' => __('NOM Prenom  1er Enfant'),
                'type' => 'text',
                'name' => 'kididentity1',
                'required' => true,
                ])
                @include('partials.form-group', [
                'title' => __('age 1er Enfant'),
                'type' => 'number',
                'name' => 'kidage1',
                'required' => true,
                ])
                @include('partials.form-group', [
                'title' => __('classe 1er Enfant'),
                'type' => 'text',
                'name' => 'classkid1',
                'required' => true,
                ])
                @include('partials.form-group', [
                'title' => __('NOM Prenom 2ème Enfant'),
                'type' => 'text',
                'name' => 'kididentity2',
                'required' => false,
                ])
                @include('partials.form-group', [
                'title' => __('age 2eme Enfant'),
                'type' => 'number',
                'name' => 'kidage2',
                'required' => false,
                ])
                 @include('partials.form-group', [
                'title' => __('classe 2eme Enfant'),
                'type' => 'text',
                'name' => 'classkid2',
                'required' => false,
                ])
                @include('partials.form-group', [
                'title' => __('NOM Prenom 3ème Enfant'),
                'type' => 'text',
                'name' => 'kididentity3',
                'required' => false,
                ])
                 @include('partials.form-group', [
                'title' => __('age 3ème Enfant'),
                'type' => 'number',
                'name' => 'kidage3',
                'required' => false,
                ])
                 @include('partials.form-group', [
                'title' => __('classe 3ème Enfant'),
                'type' => 'text',
                'name' => 'classkid3',
                'required' => false,
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