<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <link rel="stylesheet" href="{{ asset('font-awesone/css/all.min.css') }}">
  <script src="{{ asset('font-awesone/js/pro.min.js') }}"></script> --}}
  <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="{{ route('index') }}" style="font-family: monospace">Billa's Cafe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('category') }}">Categories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('product') }}"> Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('cart') }}"><i class="fa-solid me-2 fa-cart-shopping"></i>Cart</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
  </header>
  <main class="container vh-100">
    @yield('content')
  </main>
  <footer>
    <!-- place footer here -->
    <div class="container-fluid text-center p-3 bg-dark text-white">
        <small style="font-family: monospace">Develops By Salsabila</small>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
