@extends('plantilla.cabecera')
@section('titulo', 'Checkout')

@section('contenido')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Checkout Start -->
    <div class="container-fluid pt-3">
        <div class="row px-xl-3">
            <div class="col-lg-10">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Total del Pedido</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Productos</h5>
                        @foreach (Cart::content() as $item)
                            <div class="d-flex justify-content-between">
                                <p>{{ $item->name }}</p>
                                <p>S/{{ number_format($item->price, 2) }}</p>
                            </div>
                        @endforeach
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">S/{{ Cart::subtotal() }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Envío</h6>
                            <h6 class="font-weight-medium">S/10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">S/{{ Cart::total() + 10 }}</h5>
                        </div>
                    </div>
                </div>

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Pago</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal" checked>
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <form action="{{ route('paypal.createOrder') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <h4 class="font-weight-semi-bold mb-2">Datos de Facturación</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="nombre" placeholder="Juan" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Correo Electrónico</label>
                                        <input class="form-control" type="email" name="email" placeholder="ejemplo@correo.com"
                                            required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Teléfono</label>
                                        <input class="form-control" type="text" name="telefono" placeholder="987654321"
                                            required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Dirección</label>
                                        <input class="form-control" type="text" name="direccion" placeholder="Av. Principal 123"
                                            required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Ciudad</label>
                                        <input class="form-control" type="text" name="ciudad" placeholder="Lima" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Departamento</label>
                                        <input class="form-control" type="text" name="departamento" placeholder="Lima" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Código Postal</label>
                                        <input class="form-control" type="text" name="postal" placeholder="15023" required>
                                    </div>
                                </div>
                            </div>

                            @foreach (Cart::content() as $item)
                                <input type="hidden" name="items[{{ $loop->index }}][name]" value="{{ $item->name }}">
                                <input type="hidden" name="items[{{ $loop->index }}][price]" value="{{ $item->price }}">
                                <input type="hidden" name="items[{{ $loop->index }}][quantity]"
                                    value="{{ $item->qty }}">
                            @endforeach

                            <!-- Total y envío -->
                            <input type="hidden" name="subtotal" value="{{ Cart::subtotal() }}">
                            <input type="hidden" name="shipping_cost" value="10">
                            <input type="hidden" name="total" value="{{ Cart::total() + 10 }}">

                            <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3"
                                value="Realizar Pedido">
                        </form>
                        <div id="paypal-button-container"></div>
                        <script src="https://www.paypal.com/sdk/js?client-id={{ config('paypal.sandbox.client_id') }}&currency=USD"></script>
                        <script>
                            paypal.Buttons({
                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: '100.00' // Aquí puedes usar la variable PHP que contiene el total a pagar
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(details) {
                                        // Aquí puedes redirigir al usuario a una página de éxito o hacer otras acciones
                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                    });
                                }
                            }).render('#paypal-button-container'); // Renderiza el botón de PayPal en el contenedor especificado
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

    <!-- Footer Start -->
    <!-- Footer End -->
@endsection
