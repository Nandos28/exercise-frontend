<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'MyStoreApp') | MyStoreApp</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="text-center">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">MyStoreApp</h3>
                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link {{ Route::is('product') ? 'active' : '' }}" href="{{route('product')}}">Product</a>
                        <a class="nav-link {{ Route::is('customer') ? 'active' : '' }}" href="{{route('customer')}}">Customer</a>
                        <a class="nav-link {{ Route::is('supplier') ? 'active' : '' }}" href="{{route('supplier')}}">Supplier</a>
                    </nav>
                </div>
            </header>
            <main role="main" class="inner cover"> @yield('content') </main>
            <footer class="mastfoot mt-auto"> <div class="inner">
                <p> ©{{ date("Y") }}
                    <a href="{{route('product')}}">MyStoreApp</a>
                </p>
            </div>
        </footer>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
