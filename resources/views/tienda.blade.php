@extends('plantilla.cabecera')
@section('titulo', 'Tienda')
    
@section('contenido')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Nuestra Tienda</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{route('inicio')}}">Inicio</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Comprar</p>
        </div>
    </div>
</div>
{{-- <nav>
    <a href="{{ route('tienda') }}" class="nav-item nav-link">Todos</a>
    @foreach($categories as $category)
        <a href="{{ route('tienda', ['category_id' => $category->id]) }}" class="nav-item nav-link">{{ $category->nombre }}</a>
    @endforeach
</nav> --}}
<!-- Page Header End -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Shop Start -->
<div class="container-fluid pt-2">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Price Start -->
            <div class=" d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categorias</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        
                        <a href="{{ route('tienda') }}" class="nav-item nav-link">Todos</a>
                        @foreach($categories as $category)
                        <a href="{{ route('tienda', ['category_id' => $category->id]) }}" class="nav-item nav-link">{{ $category->nombre }}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
                <!-- Size End -->
        </div>
        <!-- Shop Product Start -->
        
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <!-- Aquí comienza el bucle para mostrar los productos -->
                @foreach($products as $producto)
                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('img/'.$producto->image)}}" alt="{{ $producto->name }}">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{ $producto->name}}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>S/. {{ number_format($producto->price,2) }}</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{route('detalle',['id' => $producto->id])}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>ver detalles</a>
                            <form method="POST" action="{{ route('add', ['id' => $producto->id]) }}" class="btn btn-sm text-dark p-0">
                                @csrf <!-- Agrega el campo de token CSRF para protección -->
                                <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Enviar a carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Fin del bucle  -->
            </div>
            <div class="col-12 pb-1">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-3">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
<!-- Shop End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000); // 3000 milisegundos = 3 segundos
</script>
@endsection