<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <title>@yield('title', 'Loja Online')</title>
</head>
<body >

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="#">Online Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link active" href="#">About</a>
            </div>
        </div>
    </div>
</nav>
<header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
    </div>
</header>

<div class="container my-4">
    @yield('content')
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@endpush
</body>
    <footer class="text-center text-white footer-espaco" style="background-color: #000000">
        <div class="container">
            <section class="mt-1">
                <div class="row mb-1 text-center d-flex justify-content-center pt-5 ">
                    <div class="col-md-2 ">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Sobre</a>
                        </h6>
                    </div>

                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Produtos</a>
                        </h6>
                    </div>

                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">F.A.Q</a>
                        </h6>
                    </div>

                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Contato</a>
                        </h6>
                    </div>
                </div>
            </section>
            <section class="foot text-center">
                <a href="https://www.facebook.com/MatheusdosSantos100/" class="text-white me-4" target="_blank">
                    <img src="{{asset('storage/footer/facebook.png')}}" alt="facebook-logo">
                </a>
                <a href="https://twitter.com/mds_matheus100" class="text-white me-4" target="_blank">
                    <img src="{{asset('storage/footer/twitter.png')}}" alt="twitter-logo">
                </a>
                <a href="https://www.instagram.com/matheussan_99/" class="text-white me-4" target="_blank">
                    <img src="{{asset('storage/footer/instagram.png')}}" alt="instagram-logo">
                </a>
                <a href="https://www.linkedin.com/in/matheussan/" class="text-white me-4" target="_blank">
                    <img src="{{asset('storage/footer/linkedin.png')}}" alt="linkedin-logo">
                </a>
                <a href="https://github.com/MatheusSan99" class="text-white me-4" target="_blank">
                    <img src="{{asset('storage/footer/github.png')}}" alt="github-logo">
                </a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

            <a class="text-white" href="https://www.linkedin.com/in/matheussan/"
            ><b>© Copyright Matheus Dos Santos - Este Site Não Tem Propósitos Comerciais</b>
            </a>
        </div>
    </footer>
</html>
