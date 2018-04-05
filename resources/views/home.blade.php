@extends('layouts.app')
@section('content')
@guest
<script>window.location = "{{ route('login') }}";</script>
@else 
@component('components.nav')
@endcomponent
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endguest
@endsection
