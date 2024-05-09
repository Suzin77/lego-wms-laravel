@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            Session status is: {{ session('status') }}

                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <div>
                        <p class="p-lg-3">Dodaj zestaw LEGO do katalogu.</p>

                        <a class="btn btn-primary" href="{{route('sets.create')}}">Create</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
