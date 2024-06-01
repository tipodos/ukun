@extends('tablar::page')

@section('title', 'View Order')

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
                        {{ __('Orden ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('orders.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Lista de orden
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
                        <div class="row">
                            <!-- Datos del Cliente -->
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Detalles del Cliente</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <strong>Nombre:</strong>
                                            <p>{{ $order->nombre }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            <p>{{ $order->email }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Teléfono:</strong>
                                            <p>{{ $order->telefono }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Dirección:</strong>
                                            <p>{{ $order->direccion }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Ciudad:</strong>
                                            <p>{{ $order->ciudad }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Departamento:</strong>
                                            <p>{{ $order->departamento }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Código Postal:</strong>
                                            <p>{{ $order->postal }}</p>
                                        </div>
                                        <div class="form-group">
                                            <strong>Total:</strong>
                                            <p>{{ $order->total }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Detalles de Productos -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Detalles del Producto</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nombre del Producto</th>
                                                        <th>Precio</th>
                                                        <th>Cantidad</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($detalle as $item)
                                                        <tr>
                                                            <td>{{ $item->product_name }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
