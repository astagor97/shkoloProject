@extends('layouts.basePage')

@section('title-block') Home @endsection
<style type="text/css">
    a:link, a:visited {
      background-color: black;
      color: white;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }
</style>
@section('content')
    <div>
        <a href="{{ route('add') }}">
        <img border="0" alt="addIcon" src="addIcon.png" width="100" height="100">
        </a>
    </div>
@endsection
