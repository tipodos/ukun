@extends('tablar::page')

@section('title', 'View Product')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Ver
                    </div>
                    <h2 class="page-title">
                        {{ __('Producto ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('products.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Lista de productos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if (config('tablar', 'display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="container my-5">
                        <div class="card product-card">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="{{ asset('img/'.$product->image) }}" class="card-img" alt="Imagen del producto">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body product-card-body">
                                        <h3 class="card-title text-center">Detalle del Producto</h3>
                                        <div class="form-group">
                                            <strong>Nombre:</strong>
                                            <span>{{ $product->name }}</span>
                                        </div>
                                        <div class="form-group">
                                            <strong>Descripción:</strong>
                                            <span>{{ $product->description }}</span>
                                        </div>
                                        <div class="form-group">
                                            <strong>Precio:</strong>
                                            <span class="product-price">${{ $product->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
<style>
    .product-card {
        max-width: 800px;
        margin: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .product-card img {
        border-radius: 10px 0 0 10px;
    }
    .product-card-body {
        padding: 20px;
    }
    .product-card-body .form-group {
        margin-bottom: 1.5rem;
    }
    .product-card-body .form-group strong {
        display: block;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
    .product-card-body .form-group span {
        font-size: 1rem;
        color: #555;
    }
    .product-price {
        font-size: 2rem;
        color: #28a745;
        font-weight: bold;
    }
</style>
@endpush
