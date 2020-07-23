@extends('layouts.basePage')

@section('title-block') Home @endsection

@section('content')

    <style type="text/css">
        a{
            color: black;
        }
        .col-md-4{
            margin-bottom: 8px;
            color: black;
            width: 170px;
            text-align: center
        }
        .btn-group{
            margin-top: 10px;
        }
    </style>

    <div class="container">
        <div class="row">
            @for( $i = 0; $i < count($data); $i++ )
                <div class="col-md-4">
                    @if( $data[$i]['title'] != "" )
                        <div style="background-color: {{ $data[$i]['color'] }}; height: 100%;">
                            <a id="{{$data[$i]['id']}}" href="{{ $data[$i]['link'] }}">
                                <h2>{{ $data[$i]['title'] }}</h2>
                            </a>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('edit', $data[$i]['id'] ) }}" type="button" class="btn btn-primary">Edit</a>
                                <a href="{{ route('home', $data[$i]['id'] ) }}" type="button" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    @else
                        <a id="{{$data[$i]['id_cell']}}" href="{{ route('add', ['id' => $data[$i]['id_cell'] ]) }}">
                            <img alt="addIcon" src="/public/image/add.png" width="100" height="100">
                        </a>
                    @endif
                </div>
            @endfor
        </div>
    </div>
@endsection
