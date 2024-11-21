@extends('plantilla.cabecera')
@section('titulo', 'inicio')
@section('contenido')
<div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 410px;">
                <img class="img-fluid" src="https://st4.depositphotos.com/2249091/20159/i/450/depositphotos_201592286-stock-photo-real-photo-modern-painting-placed.jpg"
                    alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de descuento en tu primera compra
                        </h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Mas comprados</h3>
                        <a href="" class="btn btn-light py-2 px-3">Comprar ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid"
                    src="https://mueblescarrusel.weebly.com/uploads/4/6/6/4/46648817/4063623_orig.jpg"
                    alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de descuento en tu primer envio
                        </h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Precios rasonables</h3>
                        <a href="" class="btn btn-light py-2 px-3">Comprar ahora</a>
                    </div>
                </div>
            </div>
            @foreach ($promotions as $index => $promotion)
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid"
                    src="{{asset('img/promo/'. $promotion->image_url )}}"
                    alt="Image">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
    </div>
    </div>
    </div>
    <!-- Navbar End -->
    <div id="promotion-popover" class="popover fade bs-popover-bottom" role="tooltip" style="display: none;">
        <div class="popover-arrow"></div>
        <div class="popover-body"></div>
    </div>

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Productos de calidad</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Envio gratis</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Devolución en 14 dias</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Soporte a 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mb-4 mb-lg-0" src="https://yolodecoro.pe/wp-content/uploads/2021/01/sofa-cama-para-sala.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Nosotros</h6>
                    <h1 class="display-4 mb-3"><span class="text-primary">Más de 25 años de experiencia</span> diseño y armado de muebles</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor mollitia voluptatibus quisquam sint pariatur quidem unde earum rerum, nam nostrum? Praesentium veritatis commodi fugiat aut vitae sunt vel nam quis!</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="service">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Servicios</h6>
                <h1 class="font-secondary display-4">¿Qué ofrecemos?</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">                            
                            <img class="img-fluid" src="{{asset('img/diseño.jpg')}}" alt="" style="width: 300px; height: 250px;">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos1">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Diseño Personalizado y Exclusivo</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{asset('img/calidad.jpg')}}" alt="" style="width: 300px; height: 250px;">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos2">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Calidad en Materiales y Acabados</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="https://www.mariasoto.com.ar/w/wp-content/uploads/2022/02/bookflor-00017-scaled.jpg" alt="" style="width: 300px; height: 250px;">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos3">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Asesoría de Estilo y Decoración</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="https://content.uship.com/images/vortals/v3/furniture/furniture_floater5.jpg" alt="" style="width: 300px; height: 250px;">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos4">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Entrega y Montaje a Domicilio</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- comienza galeria -->
    <div class="container-fluid bg-gallery" id="carouselExample" style="padding: 50px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px; font-family: Roboto, sans-serif">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Proyectos</h6>
            <h1 class="font-secondary display-4 text-white">Galeria de fotos de proyectos</h1>
        </div>
        <div class="owl-carousel gallery-carousel">
            <div class="gallery-item">
                <img class="img-fluides w-100" src="https://oniria.pe/wp-content/uploads/2024/06/Portada-para-post-TERRAZA-Y-CONSULTORES-6-768x469.png" alt="">
                <a class="btn btn-primary" href="https://oniria.pe/wp-content/uploads/2024/06/Portada-para-post-TERRAZA-Y-CONSULTORES-6-768x469.png" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluides w-100" src="https://www.dmad.es/wp-content/uploads/salon-paisaje-min.webp" alt="">
                <a class="btn btn-primary" href="https://www.dmad.es/wp-content/uploads/salon-paisaje-min.webp" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluides w-100" src="https://deleitedesign.com/wp-content/uploads/2023/11/reforma-integral-interiorismo-madrid-diseno-interiores-decoracion-salon-comedor-2-e1701349684329-750x520.jpg" alt="">
                <a class="btn btn-primary" href="https://deleitedesign.com/wp-content/uploads/2023/11/reforma-integral-interiorismo-madrid-diseno-interiores-decoracion-salon-comedor-2-e1701349684329-750x520.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluides w-100" src="https://imcesa.com.pe/wp-content/uploads/2023/11/diseno-y-arquitectura-de-interiores-cocinas.webp" alt="">
                <a class="btn btn-primary" href="https://imcesa.com.pe/wp-content/uploads/2023/11/diseno-y-arquitectura-de-interiores-cocinas.webp" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluides w-100" src="https://cocinobra.es/wp-content/uploads/2021/06/06-NA-TAFALLA-MARTINEZ-DE-ESPRONCEDA-PROYECTOS-DECORACION-INTERIORISMO.jpg" alt="">
                <a class="btn btn-primary" href="https://cocinobra.es/wp-content/uploads/2021/06/06-NA-TAFALLA-MARTINEZ-DE-ESPRONCEDA-PROYECTOS-DECORACION-INTERIORISMO.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Termina galeria -->

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid"
                            src="https://yolodecoro.pe/wp-content/uploads/2021/01/sofa-cama-para-sala.jpg" height="200">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Camas</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid"
                            src="https://planner5d.com/blog/content/images/2022/06/sidekix-media-iu4K1XPnNAY-unsplash.jpg"
                            alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Juegos de sala</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" 
                            src="https://content.elmueble.com/medio/2024/04/08/lamparas-que-anaden-mucho-estilo-a-la-decoracion_276e50a7_00580740_240408173521_900x900.jpg" 
                            style="height: 340px;" width="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Iluminacion</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    
    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-1.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-2.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-3.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-4.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-5.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-6.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-7.jpg') }}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{ asset('img/vendor-8.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Título por defecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImagen" class="img-fluid mb-4" src="default-image.jpg" alt="Imagen de la categoría" style="width:750px; height:400px">
                    <p>Texto por defecto</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script>
        $(document).ready(function(){
            $(".gallery-carousel").owlCarousel({
                items: 3,     
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                
            });
        });
    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
    $.ajax({
        url: '/promotions/active',
        method: 'GET',
        success: function(promotions) {
            console.log('Promotions:', promotions); // Verificar si se obtienen promociones

            if (promotions.length > 0) {
                let promotion = promotions[0];  // Mostrar la primera promoción activa
                console.log('First Promotion:', promotion); // Verificar la primera promoción

                let popover = $('promotion-popover');
                popover.find('.popover-body').html('<img src="/img/promo/' + promotion.image_url + '" alt="' + promotion.title + '" style="max-width: 100%;">');
                popover.show();

                // Mostrar el popover después de 1 segundo (1000 ms)
                setTimeout(function() {
                    $('#promotion-popover').popover({
                        html: true,
                        placement: 'bottom',
                        content: function() {
                            return popover.html();
                        }
                    }).popover('show');
                }, 1000);
            } else {
                console.log('No active promotions found'); // Mensaje si no hay promociones activas
            }
        },
        error: function(error) {
            console.error('Error fetching promotions:', error); // Mensaje en caso de error
        }
    });
});

    </script>
    <script>
        var categoriasData = {
    'ofrecemos1': {
        'titulo': 'Diseño Personalizado y Exclusivo',
        'imagen': '{{ asset("img/diseño.jpg") }}',
        'texto': 'En UKUN, nos especializamos en crear diseños únicos y personalizados que reflejan la visión y el estilo de cada cliente. Nuestro enfoque está en cada detalle, desde los materiales de alta calidad hasta las líneas modernas y elegantes, asegurando que cada pieza sea tanto funcional como una obra de arte exclusiva.'
    },
    'ofrecemos2': {
        'titulo': 'Calidad en Materiales y Acabados',
        'imagen': '{{ asset("img/calidad.jpg") }}',
        'texto': 'En UKUN, garantizamos la excelencia en cada detalle, desde la selección de los mejores materiales hasta los acabados más finos. Cada mueble está diseñado para ofrecer durabilidad, resistencia y un estilo inigualable, pensado para quienes valoran la calidad y la estética en su hogar.'
    },
    'ofrecemos3': {
        'titulo': 'Asesoría de Estilo y Decoración',
        'imagen': 'https://www.mariasoto.com.ar/w/wp-content/uploads/2022/02/bookflor-00017-scaled.jpg',
        'texto': 'En UKUN, Nuestro equipo de expertos en diseño y decoración te acompaña en cada paso para crear ambientes que reflejen tu estilo y personalidad. Desde la elección de colores y materiales hasta la disposición de los muebles, ofrecemos asesoría personalizada para hacer realidad tus ideas.'
    },
    'ofrecemos4': {
        'titulo': 'Entrega y Montaje a Domicilio',
        'imagen': 'https://content.uship.com/images/vortals/v3/furniture/furniture_floater5.jpg',
        'texto': 'En UKUN, nos comprometemos a brindarte la mejor experiencia de compra de muebles con nuestro servicio de entrega y montaje a domicilio. Sabemos lo importante que es recibir tus productos de forma rápida y segura, por eso, nuestro equipo se encarga de llevar tus muebles directamente hasta tu hogar, asegurando que lleguen en perfectas condiciones. Además, contamos con expertos en montaje que harán que tu espacio esté listo para disfrutar en el menor tiempo posible, sin complicaciones.'
    },
};
$('#exampleModalLong').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Botón que activó el modal
    var categoria = button.data('categoria'); // Obtener el valor de data-categoria

    // Obtener los datos de la categoría correspondiente
    var datos = categoriasData[categoria];
    
    if (datos) {
        // Actualizar contenido del modal
        $('#exampleModalLongTitle').text(datos.titulo);
        $('#modalImagen').attr('src', datos.imagen);
        $('#exampleModalLong .modal-body p').text(datos.texto);
    } else {
        // Contenido por defecto si no se encuentra la categoría
        $('#exampleModalLongTitle').text('Título por defecto');
        $('#modalImagen').attr('src', 'default-image.jpg');
        $('#exampleModalLong .modal-body p').text('Texto por defecto');
    }
});
    </script>


    </html>
@endsection
