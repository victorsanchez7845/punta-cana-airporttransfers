@php
    use App\Traits\PricesTrait;

    $isEnglish = app()->getLocale() == 'en';

    $transferDestinations = [
        1 => 'Bávaro',
        2 => 'Uvero Alto',
        3 => $isEnglish ? 'Bayahibe' : 'Bayahíbe',
        4 => 'Casa de Campo / La Romana',
        5 => 'Juan Dolio',
        6 => 'AILA / Boca Chica',
        7 => 'Santo Domingo',
        8 => 'Miches',
    ];

    $passengerGroups = $isEnglish
        ? [
            1 => '1 to 6 passengers',
            2 => '7 to 12 passengers',
            3 => '13 to 21 passengers',
        ]
        : [
            1 => '1 a 6 pasajeros',
            2 => '7 a 12 pasajeros',
            3 => '13 a 21 pasajeros',
        ];

    $faqs = $isEnglish
        ? [
            [
                'question' => 'What services does Punta Cana Airport Transfers offer?',
                'answer' => 'Punta Cana Airport Transfers provides private transportation between Punta Cana International Airport (PUJ) and hotels, resorts and vacation accommodations in the Dominican Republic. Our services include airport arrivals, hotel pickups for departing flights and transportation for couples, families and groups. Enter your destination, travel dates and passenger count in the booking form to check the options for your journey.',
            ],
            [
                'question' => 'Which destinations do you serve from Punta Cana Airport?',
                'answer' => 'We offer airport transportation to Punta Cana, Bávaro, Cap Cana, Uvero Alto, Bayahibe, La Romana and Miches, as well as longer routes to Juan Dolio, Boca Chica and Santo Domingo. Select your exact hotel or accommodation when requesting a quote, because properties within the same area can have different transfer distances. If your destination is not listed, contact us to confirm availability before booking.',
            ],
            [
                'question' => 'Are your airport transfers private or shared?',
                'answer' => 'Our transfers are private, so the vehicle is reserved for you and the passengers included in your booking. You do not share the ride with unrelated travelers. Private transportation is a convenient option for couples, families and groups who want to travel together between Punta Cana Airport and their accommodation.',
            ],
            [
                'question' => 'How much do Punta Cana airport transfers cost?',
                'answer' => 'The price depends on your destination, travel dates, passenger count and selected transportation option. Use the rate table as a reference, then enter your trip details in the booking form to review the price for your journey. Before completing your reservation, check whether you selected a one-way or return service and confirm any special requests.',
            ],
            [
                'question' => 'How do I book my airport transfer?',
                'answer' => 'Select your pickup and drop-off locations, travel dates and number of passengers in the booking form. Review the available options and provide the requested flight, accommodation and contact details. Check that your arrival date, airport and hotel are correct before completing the reservation. Keep your booking information accessible during your trip.',
            ],
            [
                'question' => 'Where do I meet my driver at Punta Cana Airport?',
                'answer' => 'Follow the pickup instructions provided for your reservation. Your meeting point may depend on your arrival terminal and the arrangements for your transfer. After immigration, baggage collection and customs, go to the specified location. If you cannot find the meeting point or your terminal changes, use the contact details associated with your booking to request assistance.',
            ],
            [
                'question' => 'What happens if my flight is delayed or changed?',
                'answer' => 'Provide the correct flight number when booking and contact us if your airline changes your flight, arrival date or airport. Share any updated details as soon as possible so pickup arrangements can be reviewed. Waiting time, rescheduling and any applicable charges depend on the conditions of your reservation, so review them before traveling.',
            ],
            [
                'question' => 'Can I book transportation back to Punta Cana Airport?',
                'answer' => 'You can request a private transfer from your hotel or accommodation back to Punta Cana Airport. Provide your departure flight details and exact pickup location to coordinate the journey. Confirm your pickup time before departure day and allow enough time for the drive, traffic and your airline’s airport check-in requirements.',
            ],
            [
                'question' => 'Do you offer transportation for families and groups?',
                'answer' => 'Yes. We offer transportation options for couples, families and groups within the passenger categories shown in our rate table. Include every traveler in your request and tell us about suitcases, strollers or bulky items, because luggage can affect the vehicle required. If you need a child seat or a particular accessibility arrangement, contact us before booking to confirm availability and suitability.',
            ],
            [
                'question' => 'How long does the transfer from PUJ to my hotel take?',
                'answer' => 'Travel time depends on your hotel’s exact location, traffic and road conditions. A resort in Punta Cana will have a different journey time from an accommodation in Uvero Alto, Bayahibe or Santo Domingo. Request an estimate for your specific hotel when planning your trip, and allow additional time for airport formalities on arrival and check-in before your return flight.',
            ],
        ]
        : [
            [
                'question' => '¿Qué servicios ofrece Punta Cana Airport Transfers?',
                'answer' => 'Punta Cana Airport Transfers ofrece transporte privado entre el Aeropuerto Internacional de Punta Cana (PUJ) y hoteles, resorts y alojamientos vacacionales en República Dominicana. Nuestros servicios incluyen traslados de llegada, recogidas en hoteles para vuelos de salida y transporte para parejas, familias y grupos. Introduce tu destino, fechas y número de pasajeros en el formulario para consultar las opciones de tu viaje.',
            ],
            [
                'question' => '¿A qué destinos ofrecen traslados desde el Aeropuerto de Punta Cana?',
                'answer' => 'Ofrecemos transporte hacia Punta Cana, Bávaro, Cap Cana, Uvero Alto, Bayahíbe, La Romana y Miches, además de rutas de mayor distancia a Juan Dolio, Boca Chica y Santo Domingo. Selecciona el hotel o alojamiento exacto al solicitar tu cotización, ya que las distancias pueden variar dentro de una misma zona. Si tu destino no aparece, contáctanos para confirmar disponibilidad antes de reservar.',
            ],
            [
                'question' => '¿Los traslados son privados o compartidos?',
                'answer' => 'Nuestros traslados son privados: el vehículo se reserva para ti y los pasajeros incluidos en tu reservación. No compartes el viaje con personas ajenas a tu grupo. Es una opción práctica para parejas, familias y grupos que desean trasladarse juntos entre el Aeropuerto de Punta Cana y su alojamiento.',
            ],
            [
                'question' => '¿Cuánto cuesta un traslado desde el Aeropuerto de Punta Cana?',
                'answer' => 'El precio depende del destino, las fechas, el número de pasajeros y la opción de transporte seleccionada. Consulta la tabla de tarifas como referencia e introduce los datos de tu viaje en el formulario para revisar el precio de tu traslado. Antes de completar la reserva, verifica si elegiste un servicio sencillo o de ida y vuelta y confirma cualquier solicitud especial.',
            ],
            [
                'question' => '¿Cómo puedo reservar mi traslado?',
                'answer' => 'Selecciona el lugar de recogida, el destino, las fechas y el número de pasajeros en el formulario. Revisa las opciones disponibles y proporciona los datos solicitados de tu vuelo, alojamiento y contacto. Comprueba que la fecha de llegada, el aeropuerto y el hotel sean correctos antes de completar la reservación. Conserva la información de tu reserva durante el viaje.',
            ],
            [
                'question' => '¿Dónde encuentro a mi conductor al llegar al aeropuerto?',
                'answer' => 'Sigue las instrucciones de recogida correspondientes a tu reservación. El punto de encuentro puede variar según la terminal de llegada y la coordinación de tu traslado. Después de pasar migración, recoger tu equipaje y salir de aduanas, dirígete al lugar indicado. Si no encuentras el punto de reunión o cambia tu terminal, utiliza los datos de contacto de tu reserva para solicitar ayuda.',
            ],
            [
                'question' => '¿Qué sucede si mi vuelo se retrasa o cambia?',
                'answer' => 'Proporciona el número de vuelo correcto al reservar y avísanos si la aerolínea modifica tu vuelo, fecha de llegada o aeropuerto. Comparte los nuevos datos lo antes posible para revisar la coordinación de tu recogida. Los tiempos de espera, cambios de horario y posibles cargos dependen de las condiciones de tu reservación, por lo que conviene revisarlas antes de viajar.',
            ],
            [
                'question' => '¿Puedo reservar el regreso al Aeropuerto de Punta Cana?',
                'answer' => 'Puedes solicitar un traslado privado desde tu hotel o alojamiento hacia el Aeropuerto de Punta Cana. Proporciona los datos de tu vuelo de salida y la ubicación exacta de recogida para coordinar el recorrido. Confirma el horario antes del día de salida y considera tiempo suficiente para el trayecto, el tránsito y la documentación requerida por tu aerolínea.',
            ],
            [
                'question' => '¿Tienen transporte para familias y grupos?',
                'answer' => 'Sí. Contamos con opciones para parejas, familias y grupos dentro de las categorías de pasajeros indicadas en nuestra tabla. Incluye a todos los viajeros e indícanos si llevan maletas, carriolas o artículos voluminosos, porque el equipaje puede determinar el vehículo necesario. Si necesitas una silla infantil o alguna adaptación de accesibilidad, contáctanos antes de reservar para confirmar disponibilidad y compatibilidad.',
            ],
            [
                'question' => '¿Cuánto dura el traslado desde PUJ hasta mi hotel?',
                'answer' => 'La duración depende de la ubicación exacta de tu alojamiento, el tránsito y las condiciones de la carretera. El recorrido a un resort de Punta Cana es diferente al de un hotel en Uvero Alto, Bayahíbe o Santo Domingo. Solicita una estimación para tu alojamiento al organizar el viaje y contempla tiempo adicional para los trámites de llegada y la documentación de tu vuelo de regreso.',
            ],
        ];
@endphp

@extends('layout.master')

@push("push-top")
    <link
        rel="preload"
        as="image"
        href="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp"
        media="(max-width: 414px)"
    >

    <link
        href="{{ mix('/assets/css/website/index.min.css') }}"
        rel="preload"
        as="style"
    >

    <link
        href="{{ mix('/assets/css/website/index.min.css') }}"
        rel="stylesheet"
    >

    <style>
        /* Ajustes exclusivos de las preguntas frecuentes. */
        #airport-transfer-faqs .faqs_section {
            min-width: 0;
        }

        #airport-transfer-faqs .faqs_section .top p {
            font-size: 18px;
            line-height: 1.75;
        }

        #airport-transfer-faqs .faqs_section .bottom h3 {
            font-size: 20px;
            line-height: 1.5;
            white-space: normal;
            overflow-wrap: break-word;
        }

        #airport-transfer-faqs .faqs_section .bottom > div > div p {
            font-size: 18px;
            line-height: 1.8;
            white-space: normal;
            overflow-wrap: break-word;
        }

        @media (max-width: 767px) {
            #airport-transfer-faqs .faqs_section .bottom h3 {
                font-size: 19px;
            }

            #airport-transfer-faqs .faqs_section .bottom > div > div p {
                font-size: 18px;
                line-height: 1.75;
            }
        }
    </style>
@endpush

@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <x-analytics/>
@endpush

@section('content')
    @include('layout.header.general', [
        'link' => \App\Traits\GeneralTrait::getAlternate($seo),
        'active' => 1
    ])

    <div class="banner">
        <picture>
            <source
                media="(min-width: 415px)"
                srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.webp"
                type="image/webp"
            >
            <source
                media="(min-width: 415px)"
                srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.png"
                type="image/png"
            >
            <source
                srcset="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp"
                type="image/webp"
            >
            <img
                src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png"
                alt="Punta Cana Airport Transfers"
                title="Punta Cana Airport Transfers"
                width="2160"
                height="400"
            >
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>

        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>

            <h1>Punta Cana Airport Transfers</h1>

            @if($isEnglish)
                <h2>Private Airport Transportation to Your Hotel or Resort</h2>

                <p>
                    Start your Dominican Republic vacation with
                    <strong>Punta Cana Airport Transfers</strong>.
                    We provide private transportation between Punta Cana
                    International Airport (PUJ) and your hotel, resort or
                    vacation accommodation, with options for couples,
                    families and groups traveling together.
                </p>

                <p>
                    Book your airport pickup to Bávaro, Cap Cana or Uvero Alto,
                    or arrange a longer journey to Bayahibe, La Romana or
                    Miches. Select your exact destination, travel dates and
                    passenger count to find transportation suited to your
                    itinerary.
                </p>

                <p>
                    Travel in a vehicle reserved for your party, with
                    professional drivers and a comfortable ride to your
                    accommodation. Organize your private airport transfer
                    before you arrive and review the price for your trip
                    through our booking form.
                </p>

                <p>
                    Planning your departure as well? Request a hotel pickup
                    for your return journey to PUJ. From your first airport
                    pickup to the end of your stay, keep your transportation
                    organized so you can focus on enjoying Punta Cana.
                </p>
            @else
                <h2>Transporte privado del aeropuerto a tu hotel o resort</h2>

                <p>
                    Comienza tus vacaciones en República Dominicana con
                    <strong>Punta Cana Airport Transfers</strong>.
                    Ofrecemos transporte privado entre el Aeropuerto
                    Internacional de Punta Cana (PUJ) y tu hotel, resort o
                    alojamiento vacacional, con opciones para parejas,
                    familias y grupos que viajan juntos.
                </p>

                <p>
                    Reserva tu recogida en el aeropuerto hacia Bávaro,
                    Cap Cana o Uvero Alto, o coordina un recorrido de mayor
                    distancia a Bayahíbe, La Romana o Miches. Selecciona el
                    destino exacto, las fechas y el número de pasajeros para
                    consultar las opciones de tu viaje.
                </p>

                <p>
                    Viaja en un vehículo reservado para tu grupo, con
                    conductores profesionales y comodidad hasta tu
                    alojamiento. Organiza tu traslado privado antes de
                    llegar y consulta el precio correspondiente a tu viaje
                    desde nuestro formulario de reservación.
                </p>

                <p>
                    ¿También estás preparando tu salida? Solicita la
                    recogida en tu hotel para regresar a PUJ. Desde tu
                    llegada hasta el final de la estancia, deja organizado
                    el transporte para disfrutar de Punta Cana con
                    tranquilidad.
                </p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if($isEnglish)
                    <h2>Why Choose Punta Cana Airport Transfers?</h2>
                    <p>
                        Plan your airport journey around your destination
                        and travel party. Enjoy personalized service,
                        coordinated pickups and comfortable private
                        transportation from the airport to your accommodation.
                    </p>
                @else
                    <h2>¿Por qué elegir Punta Cana Airport Transfers?</h2>
                    <p>
                        Organiza tu traslado según tu destino y las necesidades
                        de tu grupo. Disfruta de atención personalizada,
                        recogidas coordinadas y transporte privado cómodo
                        desde el aeropuerto hasta tu alojamiento.
                    </p>
                @endif
            </div>

            <div class="bottom">
                <div>
                    <div class="icon">
                        <svg width="25" height="25" aria-hidden="true">
                            <use xlink:href="/assets/img/svg/icons.svg#booking"></use>
                        </svg>
                    </div>
                    <div>
                        @if($isEnglish)
                            <p>Personalized Service</p>
                            <p>
                                Private transportation planned around your
                                hotel, travel dates and passenger count,
                                with options for arrivals and departures.
                            </p>
                        @else
                            <p>Servicio personalizado</p>
                            <p>
                                Transporte privado organizado según tu hotel,
                                fechas y número de pasajeros, con opciones
                                para llegadas y salidas.
                            </p>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <svg width="25" height="25" aria-hidden="true">
                            <use xlink:href="/assets/img/svg/icons.svg#standing"></use>
                        </svg>
                    </div>
                    <div>
                        @if($isEnglish)
                            <p>Coordinated Pickups</p>
                            <p>
                                Share your flight and accommodation details
                                to coordinate your pickup and prepare
                                your journey before you travel.
                            </p>
                        @else
                            <p>Recogidas coordinadas</p>
                            <p>
                                Comparte los datos de tu vuelo y alojamiento
                                para coordinar la recogida y preparar
                                el trayecto antes de viajar.
                            </p>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <svg width="25" height="25" aria-hidden="true">
                            <use xlink:href="/assets/img/svg/icons.svg#comfort"></use>
                        </svg>
                    </div>
                    <div>
                        @if($isEnglish)
                            <p>Comfortable Vehicles</p>
                            <p>
                                Travel comfortably with your partner,
                                family or group. Select an option suited
                                to your passengers and luggage.
                            </p>
                        @else
                            <p>Vehículos cómodos</p>
                            <p>
                                Viaja cómodamente en pareja, en familia
                                o con tu grupo. Elige una opción adecuada
                                para tus pasajeros y equipaje.
                            </p>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <svg width="25" height="25" aria-hidden="true">
                            <use xlink:href="/assets/img/svg/icons.svg#private"></use>
                        </svg>
                    </div>
                    <div>
                        @if($isEnglish)
                            <p>Private Transportation</p>
                            <p>
                                Your vehicle is reserved for your party,
                                with professional drivers for the journey
                                between PUJ and your destination.
                            </p>
                        @else
                            <p>Transporte privado</p>
                            <p>
                                Tu vehículo se reserva para tu grupo,
                                con conductores profesionales para
                                el recorrido entre PUJ y tu destino.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_two">
        <div class="left">
            @if($isEnglish)
                <h2>Airport Transfers to Bávaro, Cap Cana and Beyond</h2>

                <p>
                    Punta Cana Airport Transfers connects PUJ with hotels,
                    resorts and vacation accommodations in Punta Cana,
                    Bávaro, Cap Cana and Uvero Alto. Arrange your private
                    ride before traveling and arrive with your airport
                    transportation already planned.
                </p>

                <p>
                    Staying farther from the airport? We also offer
                    transportation to Bayahibe, Casa de Campo, La Romana
                    and Miches, as well as longer routes to Juan Dolio,
                    Boca Chica and Santo Domingo.
                </p>

                <p>
                    Whether you are traveling as a couple, arriving with
                    children or organizing a group holiday, include all
                    passengers and luggage in your request. These details
                    help identify the right transportation option for
                    your journey.
                </p>

                <p>
                    Select your exact hotel in the booking form to check
                    your route and price. If your accommodation is not
                    listed or you need a special pickup location, contact
                    us to confirm the arrangements before booking.
                </p>
            @else
                <h2>Traslados a Bávaro, Cap Cana y otros destinos</h2>

                <p>
                    Punta Cana Airport Transfers conecta PUJ con hoteles,
                    resorts y alojamientos vacacionales de Punta Cana,
                    Bávaro, Cap Cana y Uvero Alto. Organiza tu viaje
                    privado antes de salir y llega con el transporte
                    desde el aeropuerto ya planeado.
                </p>

                <p>
                    ¿Te hospedas más lejos del aeropuerto? También
                    ofrecemos transporte a Bayahíbe, Casa de Campo,
                    La Romana y Miches, además de rutas de mayor
                    distancia a Juan Dolio, Boca Chica y Santo Domingo.
                </p>

                <p>
                    Si viajas en pareja, con niños o en grupo, incluye
                    a todos los pasajeros y detalla el equipaje en tu
                    solicitud. Esta información ayuda a identificar
                    la opción adecuada para tu recorrido.
                </p>

                <p>
                    Selecciona tu hotel exacto en el formulario para
                    consultar la ruta y el precio. Si tu alojamiento
                    no aparece o necesitas un punto de recogida especial,
                    contáctanos para confirmar los detalles antes de reservar.
                </p>
            @endif
        </div>

        <div class="right">
            <picture>
                <source
                    srcset="/assets/img/home/general-client.webp"
                    type="image/webp"
                >
                <img
                    src="/assets/img/home/general-client.jpg"
                    alt="{{ $isEnglish
                        ? 'Private transportation with Punta Cana Airport Transfers'
                        : 'Transporte privado con Punta Cana Airport Transfers' }}"
                    title="Punta Cana Airport Transfers"
                    loading="lazy"
                    width="352"
                    height="258"
                >
            </picture>
        </div>
    </div>

    <div class="container content_three">
        <div class="top">
            @if($isEnglish)
                <h2>Punta Cana Airport Transfer Rates</h2>
                <p>
                    Compare reference rates between Punta Cana International
                    Airport and popular destinations in the Dominican Republic.
                    Choose your passenger category and check the price for
                    your exact itinerary in the booking form.
                </p>
            @else
                <h2>Tarifas de traslados desde el Aeropuerto de Punta Cana</h2>
                <p>
                    Compara las tarifas de referencia entre el Aeropuerto
                    Internacional de Punta Cana y los principales destinos
                    de República Dominicana. Elige tu categoría de pasajeros
                    y consulta el precio de tu itinerario en el formulario.
                </p>
            @endif
        </div>

        <div class="bottom">
            <table class="table table-striped table-responsive">
                <caption>
                    {{ $isEnglish
                        ? 'Punta Cana Airport Transfers rates in USD. Prices may vary depending on season and special requests.'
                        : 'Tarifas de Punta Cana Airport Transfers en USD. Los precios pueden variar según la temporada y las solicitudes especiales.' }}
                </caption>

                <thead>
                    <tr>
                        <th scope="col" class="destino">
                            {{ $isEnglish ? 'Destination' : 'Destino' }}
                        </th>

                        @foreach($passengerGroups as $groupLabel)
                            <th scope="col">{{ $groupLabel }}</th>
                        @endforeach
                    </tr>
                </thead>

                <tbody>
                    @foreach($transferDestinations as $destinationId => $destinationName)
                        <tr>
                            <td>
                                <strong>{{ $destinationName }} ⇄ PUJ</strong>
                            </td>

                            @foreach($passengerGroups as $groupId => $groupLabel)
                                <td data-label="{{ $groupLabel }}">
                                    ${{ PricesTrait::price($destinationId, $groupId, 'USD') }} USD
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if($isEnglish)
                <p>
                    PUJ refers to Punta Cana International Airport.
                    The arrows identify the route and do not indicate
                    an included round trip. Confirm your destination,
                    service type, luggage requirements and final price
                    before completing your reservation.
                </p>
            @else
                <p>
                    PUJ corresponde al Aeropuerto Internacional de Punta Cana.
                    Las flechas identifican la ruta y no significan que se
                    incluya un viaje redondo. Confirma tu destino, tipo de
                    servicio, equipaje y precio final antes de completar
                    la reservación.
                </p>
            @endif
        </div>
    </div>

    <div class="bg_blue_two">
        <div class="container content_four">
            <div class="left">
                @if($isEnglish)
                    <h2>What Our Travelers Say</h2>
                    <p>
                        Read traveler feedback about airport pickups,
                        comfortable vehicles and private transportation
                        to their hotels.
                    </p>
                @else
                    <h2>Lo que dicen nuestros viajeros</h2>
                    <p>
                        Conoce las experiencias de los viajeros sobre
                        la recogida en el aeropuerto, la comodidad de los
                        vehículos y el transporte privado hasta su hotel.
                    </p>
                @endif

                <div>
                    <picture>
                        <source
                            srcset="/assets/img/reviews/clients-list.webp"
                            type="image/webp"
                        >
                        <img
                            src="/assets/img/reviews/clients-list.jpg"
                            alt="{{ $isEnglish ? 'Traveler reviews' : 'Opiniones de viajeros' }}"
                            title="{{ $isEnglish ? 'Traveler reviews' : 'Opiniones de viajeros' }}"
                            loading="lazy"
                            width="60"
                            height="60"
                        >
                    </picture>

                    <div>
                        @if($isEnglish)
                            <p>4.9 Rating</p>
                            <p>+180 Travelers</p>
                        @else
                            <p>4.9 Calificación</p>
                            <p>+180 Viajeros</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="right">
                <div>
                    <picture>
                        <source
                            srcset="/assets/img/reviews/1.webp"
                            type="image/webp"
                        >
                        <img
                            src="/assets/img/reviews/1.jpg"
                            alt="Jennifer S."
                            title="Jennifer S."
                            loading="lazy"
                            width="60"
                            height="60"
                        >
                    </picture>

                    <div>
                        <p>Jennifer S. <span>4.5</span></p>

                        @if($isEnglish)
                            <p>The private transfer was comfortable, on time and the driver was very professional.</p>
                        @else
                            <p>El traslado privado fue cómodo, puntual y el conductor fue muy profesional.</p>
                        @endif
                    </div>
                </div>

                <div>
                    <picture>
                        <source
                            srcset="/assets/img/reviews/2.webp"
                            type="image/webp"
                        >
                        <img
                            src="/assets/img/reviews/2.jpg"
                            alt="Karla J."
                            title="Karla J."
                            loading="lazy"
                            width="60"
                            height="60"
                        >
                    </picture>

                    <div>
                        <p>Karla J. <span>4.5</span></p>

                        @if($isEnglish)
                            <p>Everything was easy from the airport pickup to the hotel drop-off. Communication was clear and the vehicle was clean and comfortable.</p>
                        @else
                            <p>Todo fue fácil desde la recogida en el aeropuerto hasta la llegada al hotel. La comunicación fue clara y el vehículo estaba limpio y cómodo.</p>
                        @endif
                    </div>
                </div>

                <div>
                    <picture>
                        <source
                            srcset="/assets/img/reviews/3.webp"
                            type="image/webp"
                        >
                        <img
                            src="/assets/img/reviews/3.jpg"
                            alt="Sarah W."
                            title="Sarah W."
                            loading="lazy"
                            width="60"
                            height="60"
                        >
                    </picture>

                    <div>
                        <p>Sarah W. <span>4.5</span></p>

                        @if($isEnglish)
                            <p>We booked transportation for our group and everything was perfect. The driver was friendly and the ride was smooth from start to finish.</p>
                        @else
                            <p>Reservamos transporte para nuestro grupo y todo fue perfecto. El conductor fue amable y el viaje fue cómodo de principio a fin.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_five" id="airport-transfer-faqs">
        <div class="left faqs_section">
            <div class="top">
                @if($isEnglish)
                    <h2>Punta Cana Airport Transfers FAQs</h2>
                    <p>
                        Find answers about private airport transportation,
                        destinations, prices, pickup arrangements and group
                        travel. Review these details before booking your
                        transfer to or from PUJ.
                    </p>
                @else
                    <h2>Preguntas frecuentes sobre Punta Cana Airport Transfers</h2>
                    <p>
                        Resuelve tus dudas sobre transporte privado,
                        destinos, precios, puntos de encuentro y viajes
                        en grupo. Revisa esta información antes de reservar
                        tu traslado de llegada o regreso a PUJ.
                    </p>
                @endif
            </div>

            <div class="bottom">
                @foreach($faqs as $faq)
                    <div>
                        <h3>{{ $faq['question'] }}</h3>
                        <div>
                            <p>{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="right">
            <picture>
                <source
                    srcset="/assets/img/faqs/faqs-client.webp"
                    type="image/webp"
                >
                <img
                    src="/assets/img/faqs/faqs-client.jpg"
                    alt="{{ $isEnglish
                        ? 'Travel assistance with Punta Cana Airport Transfers'
                        : 'Asistencia para tu viaje con Punta Cana Airport Transfers' }}"
                    title="Punta Cana Airport Transfers"
                    loading="lazy"
                    width="60"
                    height="60"
                >
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection
