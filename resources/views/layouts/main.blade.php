<!doctype html >
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Database - @yield('title')</title>
        <link rel="stylesheet" type="text/css"href="{{ asset('css/style.css') }}" />
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('product-list') }}">
                        Product
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('shop-list') }}">
                        Shop
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div class="content-panel">
            @yield('content')
        </div>
        
        <footer>
        Copyright Week-08, 2020 Jutharat's Database.
        </footer>

    </body>
</html>  