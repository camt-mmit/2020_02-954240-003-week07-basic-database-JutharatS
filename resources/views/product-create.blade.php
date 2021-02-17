@extends('layouts.main')
@section('title',$title)

@section('content')
<form action="{{ route('product-create') }}" method="post">
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
        <td><b>Price</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<input type="text" name="price"></td>
    </tr>
    <tr>
        <td><b>Description</b></td>
        <td><span class="blue">::</span></td>
        <td>&nbsp;<textarea name="description"></textarea></td>
    </tr>
</table>  
</div>

<div class="center">
<button type="submit">Create</button>
</div>
</form>
@endsection