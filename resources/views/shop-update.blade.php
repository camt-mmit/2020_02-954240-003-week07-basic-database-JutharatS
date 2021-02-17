@extends('layouts.main')
@section('title',$title)

@section('content')
<form action="{{ route('shop-update', ['shop' => $shop->code]) }}" method="post">
    @csrf
<div>
<table class="table2">
    <tr>
        <td><b>Code</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="code" value="{{ $shop->code }}"></td>
    </tr>
    <tr>
        <td><b>Name</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="name" value="{{ $shop->name }}"></td>
    </tr>
    <tr>
        <td><b>Owner</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="owner" value="{{ $shop->owner }}"></td>
    </tr>
    <tr>
        <td><b>Latitude</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="latitude" value="{{ $shop->latitude }}" style="text-align: right;"></td>
    </tr>
    <tr>
        <td><b>Longitude</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="longitude" value="{{ $shop->longitude }} " style="text-align: right;"></td>
    </tr>
    <tr>
        <td><b>Address</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<textarea name="address">{{ $shop->address }}</textarea></td>
    </tr>
</table>  
</div>

<div class="center">
<button type="submit">Update</button>
</div>
</form>
@endsection