<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="UKUN, tienda líder en muebles e iluminación en Huancayo.">
    <meta name="keywords" content="muebles, iluminación, e-commerce, tienda online, Huancayo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    <title>@yield('titulo')</title>
    </head>
    <body>
        <!-- Topbar Start -->
        <div class="container-fluid">
            <div class="row bg-secondary py-2 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark" href="">Correo</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Ayuda</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Soporte</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="https://www.facebook.com/people/UKUN/100092439151015/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="https://www.tiktok.com/@estudio.ukun">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="https://www.tiktok.com/@estudio.ukun">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="https://www.instagram.com/estudioukun/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-dark pl-2" href="https://www.tiktok.com/@estudio.ukun">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-3 px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRnAVJD6bmXgdN6S5jZwlGId9NT522Vc6ixQ&s" style="width: 80px; height: auto;"> </span>tienda</h1>
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-left">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar por producto">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-6 text-right">
                    <a href="{{route('cart')}}" class="btn border">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge">{{\Cart::count()}}</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
    
    
        <!-- Navbar Start -->
        <div class="container-fluid mb-5">
            <div class="row border-top px-xl-5">

                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">UKUN </span>tienda</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{route('inicio')}}" class="nav-item nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
                                <a href="{{route('tienda')}}" class="nav-item nav-link {{ request()->routeIs('tienda') ? 'active' : '' }}">Nuestra tienda</a>
                                <a href="" class="nav-item nav-link {{ request()->routeIs('Detail') ? 'active' : '' }}">Detalle Tienda</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">pago</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="" class="dropdown-item">Carrito de compra</a>
                                        <a href="{{route('checkout')}}" class="dropdown-item">Metodo de pago</a>
                                    </div>
                                </div>
                                <a href="{{route('contacto')}}" class="nav-item nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a>
                            </div>
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                <a href="{{ route('logout')}}" class="text-sm text-gray-700 underline">Cerrrar session</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">inicio de sesio</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>        
                                @endif
                            @endif
                            </div>
                            @endif
                        </div>
                    </nav>
    @yield('contenido')
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">UKUN</span>tienda</h1>
                </a>
                <p>Tienda virtual de muebles y iluminacion lider en el campo en todo Huancayo con años de experiencia.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>AV. Huancavelica Nro: 655</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>tiendaukun@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>987654321</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Link</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="{{route('inicio')}}"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-dark mb-2" href="{{route('tienda')}}"><i class="fa fa-angle-right mr-2"></i>Nuestra tienda</a>
                            <a class="text-dark mb-2" href="{{route('cart')}}"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>
                            <a class="text-dark" href="{{route('contacto')}}"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                        </div>
                    </div>
                    <div class="col-md-8 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Ubicación en el mapa</h5>
                        <!-- Aquí va el mapa embebido de Google Maps -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.4664935780102!2d-75.21909985671049!3d-12.063542181256999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e9646d5332a5d%3A0xe48cbe15218a3bf3!2sAv.%20Huancavelica%20607%2C%2012004!5e0!3m2!1ses!2spe!4v1727468184553!5m2!1ses!2spe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">UKUN</a>.Tienda virtual con derechos de autor
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">software</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">software</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>