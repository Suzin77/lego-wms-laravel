@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Create") }}</div>
                    <div class="card-body">
                        <p>Create form</p>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                Session status is: {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            </div>

                        </div>
                        <form action="{{ route('sets.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="serial_number">Serial number:</label>
                                <input type="number" class="form-control" id="serial_number" name="serial_number" value="{{old('serial_number')}}" required>
                                @error('serial_number')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">

                            <label for="ean">Ean</label>
                            <input type="text" class="form-control" id="ean" name="ean" value="{{old('ean')}}">

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>

{{--                        <form>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="serial_number">Serial number:</label>--}}
{{--                                <input type="number" id="serial_number" name="serial_number" required>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                        <form action="{{route('sets.store')}}">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlInput1">Email address</label>--}}
{{--                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlSelect1">Example select</label>--}}
{{--                                <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                    <option>1</option>--}}
{{--                                    <option>2</option>--}}
{{--                                    <option>3</option>--}}
{{--                                    <option>4</option>--}}
{{--                                    <option>5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlSelect2">Example multiple select</label>--}}
{{--                                <select multiple class="form-control" id="exampleFormControlSelect2">--}}
{{--                                    <option>1</option>--}}
{{--                                    <option>2</option>--}}
{{--                                    <option>3</option>--}}
{{--                                    <option>4</option>--}}
{{--                                    <option>5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlTextarea1">Example textarea</label>--}}
{{--                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>--}}
{{--                            </div>--}}
{{--                        </form>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
