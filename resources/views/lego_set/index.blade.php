@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                <div>        
                    <a class="btn btn-primary" href="{{route('sets.create')}}">Dodaj nowy</a>
                </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            Session status is: {{ session('status') }}

                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Serial number</th>
                                    <th>Name</th>
                                    <th>Ean</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lego_sets as $set)
                                    <tr>
                                        <td>{{ $set->serial_number }}</td>
                                        <td>{{ $set->name }}</td>
                                        <td>{{ $set->ean }}</td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
