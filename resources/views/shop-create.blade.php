@extends('layouts.main')
@section('title',$title)

@section('content')
<form action="{{ route('shop-create') }}" method="post">
    @csrf
<div>
<table class="table2">
    <tr>
        <td><b>Code</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="code"></td>
    </tr>
    <tr>
        <td><b>Name</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="name"></td>
    </tr>
    <tr>
        <td><b>Owner</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="owner"></td>
    </tr>
    <tr>
        <td><b>Latitude</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="latitude"></td>
    </tr>
    <tr>
        <td><b>Longitude</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="longitude"></td>
    </tr>
    <tr>
        <td><b>Address</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<textarea name="address"></textarea></td>
    </tr>
</table>  
</div>

<div class="center">
<button type="submit">Create</button>
</div>
</form>
@endsection