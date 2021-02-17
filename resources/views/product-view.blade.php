@extends('layouts.main')

@section('title', $title)

@section('content')
    <nav>
        <ul>
            <li>
                <a href="{{ route('product-update-form', [
                    'product' => $product->code,
                    ]) }}">Update</a>
            </li>

            <li>
                <a href="{{ route('product-delete', [
                    'product' => $product->code,
                    ]) }}">Delete</a>
            </li>

        </ul>
    </nav>
    <main>
        <p>
            <b>Code::</b>
            <span>{{ $product->code }}</span>
            <br />

            <b>Name::</b>
            <em>{{ $product->name }}</em>
            <br />

            <b>Price::</b>
            <span>{{ $product->price }}</span>
            <br />
        </p>
        <pre>{{ $product->description }}</pre>
    </main>
@endsection