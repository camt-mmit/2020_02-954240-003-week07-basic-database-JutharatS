@extends('layouts.main')

@section('title', $title)

@section('content')
<form action="{{ route('shop-list') }}" method="get" class=" center " style="width: 30">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{ $term }}" />
        </label>
    </form>

    <nav class="actions-panel">
        <ul>
            <li>
                <a href="{{ route('shop-create-form') }}">New shop</a>
            </li>
        </ul>
</nav>

    {{ $shop->withQueryString()->links() }}

    <main>
    <div class="center">
    <table>
        <colspan>
            <col style="width: 6ch;" />
            </col>
        </colspan>
        <table >
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Owner</th>
                </tr>
            </thead>
            <tbody>
            @foreach($shop as $shop)
                <tr>
                    <th>
                        <a href="{{ route('shop-view', [
                            'shop' => $shop->code,
                        ]) }}">
                            {{ $shop->code }}
                        </a>
                    </th>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->owner }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </main>
@endsection