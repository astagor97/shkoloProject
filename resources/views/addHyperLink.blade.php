@extends('layouts.basePage')
@section('title-block') Hyperlink @endsection

@section('content')

    @if( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $e )
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form style="width: 70%; margin: 0 15%;" action="{{ route('add', $id ) }}" method="post">
        @csrf

        <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping">Title:</span>
            </div>
            <input type="text" class="form-control" name="title" placeholder="Title" aria-label="Title" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping">Link:</span>
            </div>
            <input type="text" class="form-control" name="link" placeholder="https://example.com" aria-label="Link" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Colors</label>
            </div>
            <select class="custom-select" name="color" id="inputGroupSelect01">
                <option selected disabled></option>
                <option style="color:red" value="red">Red</option>
                <option style="color:blue" value="blue">Blue</option>
                <option style="color:yellow" value="yellow">Yellow</option>
                <option style="color:green" value="green">Green</option>
                <option style="color:gold" value="gold">Gold</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Add Hyperlink">
        <a href="{{ route('home') }}" class="btn btn-primary">Cancel</a>
    </form>

@endsection
