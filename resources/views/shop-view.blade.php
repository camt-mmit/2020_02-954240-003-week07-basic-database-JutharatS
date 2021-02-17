@extends('layouts.main')

@section('title', $title)

@section('content')
<nav>
        <ul>
            <li>
                <a href="{{ route('shop-update-form', [
                    'shop' => $shop->code,
                    ]) }}">Update</a>
            </li>

            <li>
                <a href="{{ route('shop-delete', [
                    'shop' => $shop->code,
                    ]) }}">Delete</a>
            </li>

        </ul>
    </nav>
    <main>
        <div class="center">
        <p>
        <b>Code::</b>
            <span>{{ $shop->code }}</span>
            <br />

            <b>Name::</b>
            <em>{{ $shop->name }}</em>
            <br />

            <b>Owner::</b>
            <span>{{ $shop->owner }}</span>
            <br />

            <b>Location::</b>
            <span>{{ $shop->latitude }}, {{ $shop->longitude }}</span>
            <br />

            <b>Address::</b>
            <span>{{ $shop->address }}</span>
            <br />
</div>
    </main>
@endsection