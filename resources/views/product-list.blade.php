@extends('layouts.main')

@section('title', $title)

@section('content')
<form action="{{ route('product-list') }}" method="get" class="center" style="width: 30">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{ $term }}" />
        </label>
    </form>

    <nav class="actions-panel">
        <ul>
            <li>
                <a href="{{ route('product-create-form') }}">New Product</a>
            </li>
        </ul>
</nav>

    {{ $products->withQueryString()->links() }}

    <main>
        <table class="centerized top-header" style="width: 450px;">
        <colspan>
            <col style="width: 6ch;" />
            </col>
        </colspan>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th>
                        <a href="{{ route('product-view', [
                            'product' => $product->code,
                        ]) }}">
                            {{ $product->code }}
                        </a>
                    </th>
                    <td>{{ $product->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection