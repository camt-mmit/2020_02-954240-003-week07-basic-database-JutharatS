@extends('layouts.main')
@section('title',$title)

@section('content')
<form action="{{ route('product-update', ['product' => $product->code]) }}" method="post">
    @csrf
<div>
<table class="table2">
    <tr>
        <td><b>Code</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="code" value="{{ $product->code }}"></td>
    </tr>
    <tr>
        <td><b>Name</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="name" value="{{ $product->name }}"></td>
    </tr>
    <tr>
        <td><b>Price</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="price" value="{{ $product->price }}"></td>
    </tr>
    <tr>
        <td><b>Description</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<textarea name="description">{{ $product->description }}</textarea></td>
    </tr>
</table>  
</div>

<div class="center">
<button type="submit">Update</button>
</div>
</form>
@endsection