@extends('layouts.basePage')
@section('title-block') Hyperlink @endsection
<style type="text/css">
form{
    text-align:center;
}
.form-group{
    margin: 5px;
}
#colors{
    width:173px;
    margin-right:5px;
}
</style>
@section('content')

    <form action="{{ route('home') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" id="link" name="link">
        </div>
        <div class="form-group">
            <label for="colors">Color:</label>
            <select name="colors" id="colors">
                <option selected disabled></option>
                <option style="color:red" value="red">Red</option>
                <option style="color:blue" value="blue">Blue</option>
                <option style="color:yellow" value="yellow">Yellow</option>
                <option style="color:green" value="green">Green</option>
                <option style="color:gold" value="gold">Gold</option>
            </select>
        </div>
        <input type="submit" value="Add">
        <input type="submit" value="Cancel">
    </form>

@endsection
