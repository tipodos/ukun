@extends('plantilla.cabecera')
@section('titulo', 'carrito')

@section('contenido')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Carrito de Compra</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Carrito de Compra</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                @if (Cart::count())
                    <table class="table table-bordered text-center mb-0">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>cantidad</th>
                                <th>Total</th>
                                <th>eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach (Cart::content() as $item)
                                <tr data-rowid="{{ $item->rowId }}">
                                    <td class="align-middle">
                                        <img src="img/{{ $item->options->image }}" alt="" style="width: 50px;">
                                        {{ $item->name }}
                                    </td>
                                    <td class="align-middle" data-price="{{ $item->price }}">
                                        S/{{ number_format($item->price, 2) }}</td>
                                    <td class="align-middle">
                                        <button class="btn-minus">-</button>
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <input type="text" name="qty"
                                                class="form-control form-control-sm bg-secondary text-center"
                                                value="{{ $item->qty }}">
                                        </div>
                                        <button class="btn-plus">+</button>

                                    </td>

                                    <td class="align-middle show-subtotal">
                                        S/{{ number_format($item->price * $item->qty, 2) }}
                                    </td>
                                    <td>
                                        <form action="{{ route('remover') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="X">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <a href="/" class="text_center">Agregar un producto</a>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium" id="subtotal">{{number_format( Cart::Subtotal(),2) }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">inpuestos</h6>
                            <h6 class="font-weight-medium" id="impuestos">S/{{number_format( Cart::tax(),2) }}</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold" id="total">S/{{ number_format(Cart::Total(),2) }}</h5>
                        </div>

                        <form action="{{route('checkout')}}" method="POST">
                            @csrf
                            <!-- Campos ocultos para enviar información del carrito -->
                            <input type="hidden" name="productos" value="{{ Cart::content() }}">
                            <input type="hidden" name="subtotal" value="{{ Cart::Subtotal() }}">
                            <input type="hidden" name="impuestos" value="{{ Cart::tax() }}">
                            <input type="hidden" name="total" value="{{ Cart::Total() }}">

                            <!-- Botón "Ingresar Datos" -->
                            <input type="submit" value="Ingresar Datos" class="btn btn-block btn-primary my-3 py-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->



    <!-- Footer Start -->

    <!-- Footer End -->


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
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInputs = document.querySelectorAll('.quantity input[type="text"]');

            quantityInputs.forEach(input => {
                input.addEventListener('input', function(event) {
                    const row = this.closest('tr');
                    let quantity = parseInt(this.value);
                    const price = parseFloat(row.querySelector('.align-middle:nth-child(2)')
                        .textContent.replace('S/', '').replace(',', ''));
                    const totalPriceElement = row.querySelector('.align-middle:nth-child(4)');

                    if (!isNaN(quantity) && quantity >= 1) {
                        const newTotal = quantity * price;
                        totalPriceElement.textContent = 'S/' + newTotal.toFixed(2);
                    } else {
                        // Si la cantidad no es válida, mostrar un mensaje de error o tomar alguna otra acción
                        // Ejemplo: alert('La cantidad ingresada no es válida');
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnMinusList = document.querySelectorAll('.btn-minus');
            const btnPlusList = document.querySelectorAll('.btn-plus');

            // Función para manejar la lógica de disminuir la cantidad
            function handleMinusClick(e) {
                const row = e.target.closest('tr');
                const input = row.querySelector('input[name="qty"]');
                if (Number(input.value) === 1) {
                    return;
                }
                const unitPrice = parseFloat(row.querySelector('td[data-price]').getAttribute('data-price'));
                const rowId = row.getAttribute('data-rowid');
                input.value = Number(input.value) - 1;
                updateQuantity(rowId, input.value, unitPrice, row);
            }

            // Función para manejar la lógica de aumentar la cantidad
            function handlePlusClick(e) {
                const row = e.target.closest('tr');
                const input = row.querySelector('input[name="qty"]');
                const unitPrice = parseFloat(row.querySelector('td[data-price]').getAttribute('data-price'));
                const rowId = row.getAttribute('data-rowid');
                input.value = Number(input.value) + 1;
                updateQuantity(rowId, input.value, unitPrice, row);
            }

            // Función para actualizar la cantidad y los totales
            function updateQuantity(rowId, qty, unitPrice, row) {
                fetch("{{ route('actualizarCantidad') }}", {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': "{{ csrf_token() }}"
                    },
                    method: 'post',
                    body: JSON.stringify({
                        rowId: rowId,
                        qty: qty
                    })
                }).then((r) => r.json()).then(data => {
                    row.querySelector('.show-subtotal').textContent = 'S/' + (unitPrice * qty).toFixed(2);
                    document.getElementById('subtotal').textContent = 'S/' + data.subTotal;
                    document.getElementById('impuestos').textContent = 'S/' + data.impuestos;
                    document.getElementById('total').textContent = 'S/' + data.total;
                }).catch(error => console.error('Error:', error));
            }

            // Agregar event listeners a todos los botones de menos
            btnMinusList.forEach(btnMinus => {
                btnMinus.addEventListener('click', handleMinusClick);
            });

            // Agregar event listeners a todos los botones de más
            btnPlusList.forEach(btnPlus => {
                btnPlus.addEventListener('click', handlePlusClick);
            });

            // Event listener para cambios manuales en la cantidad
            const inputsQty = document.querySelectorAll('input[name="qty"]');
            inputsQty.forEach(function(input) {
                input.addEventListener('change', function() {
                    const row = input.closest('tr');
                    const unitPrice = parseFloat(row.querySelector('td[data-price]').getAttribute(
                        'data-price'));
                    const rowId = row.getAttribute('data-rowid');
                    updateQuantity(rowId, input.value, unitPrice, row);
                });
            });
        });
    </script>
@endsection
