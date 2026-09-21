@php
    use App\Traits\PricesTrait;

    $isEnglish = app()->getLocale() == 'en';
    $brand = 'Punta Cana Airport Transfers';

    // Se conservan los identificadores originales de las tarifas.
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
                'answer' => 'Punta Cana Airport Transfers provides private transportation between Punta Cana International Airport (PUJ) and hotels, resorts and accommodations in the Dominican Republic. Our services include airport arrivals, hotel pickups for departing flights and transportation for couples, families and groups. Select your destination, travel dates and passenger count in the booking form to check the options for your trip.',
            ],
            [
                'question' => 'Which destinations can I reach from Punta Cana Airport?',
                'answer' => 'We offer airport transportation to Punta Cana, Bávaro, Cap Cana, Uvero Alto, Bayahibe, La Romana and Miches, as well as longer routes to Juan Dolio, Boca Chica and Santo Domingo. Choose your exact hotel or accommodation when requesting a quote, because properties in the same region can have different transfer distances. If your destination is not listed, contact us to confirm service availability before booking.',
            ],
            [
                'question' => 'Are your airport transfers private or shared?',
                'answer' => 'Our transfers are private, so the vehicle is reserved for you and the passengers included in your booking. You do not share the ride with unrelated travelers as you would on a shared airport shuttle. This makes private transportation a convenient option for families, couples and groups who want to travel together between the airport and their accommodation.',
            ],
            [
                'question' => 'How much do Punta Cana airport transfers cost?',
                'answer' => 'The cost depends on your destination, travel dates, passenger count and selected vehicle or service. Use the rate table as a reference, then enter your trip details in the booking form to review the price for your journey. Check whether your selection includes a one-way or return service, and confirm any special requests before completing your reservation.',
            ],
            [
                'question' => 'How do I book my airport transportation?',
                'answer' => 'Start by selecting your pickup and drop-off locations, travel dates and number of passengers in the booking form. Review the available transportation options and provide the requested flight, accommodation and contact details. Before completing your booking, check that the arrival date, airport and hotel are correct. Keep your reservation details accessible so you can refer to them when you travel.',
            ],
            [
                'question' => 'Where do I meet my driver at Punta Cana Airport?',
                'answer' => 'Follow the pickup instructions provided for your reservation. Your meeting point may depend on your arrival terminal and the arrangements for your transfer. After immigration, baggage collection and customs, go to the specified location. If you cannot find the meeting point or your arrival terminal changes, use the contact details associated with your booking to request assistance.',
            ],
            [
                'question' => 'What should I do if my flight is delayed or changed?',
                'answer' => 'Provide the correct flight number when booking and contact us if your airline changes your flight, arrival date or airport. If you become aware of a delay, share the updated details as soon as possible so pickup arrangements can be reviewed. Waiting time, rescheduling and any applicable charges are governed by the conditions of your reservation; check them before traveling.',
            ],
            [
                'question' => 'Can I arrange a return transfer to Punta Cana Airport?',
                'answer' => 'You can request transportation from your hotel or accommodation back to Punta Cana Airport. Include your departure flight details and the exact pickup location so the return journey can be coordinated. Confirm the pickup time before your departure day, allowing for road conditions, the distance from your hotel and your airline’s check-in requirements.',
            ],
            [
                'question' => 'Do you offer airport transportation for families and groups?',
                'answer' => 'Yes. We offer transportation options for couples, families and groups, with the passenger categories shown in our rate table. Include every traveler in your request and provide details about suitcases, strollers or bulky items, because luggage can affect the vehicle required. If you need a child seat or a particular accessibility arrangement, contact us before booking to confirm availability and suitability.',
            ],
            [
                'question' => 'How long does the transfer from PUJ to my hotel take?',
                'answer' => 'Travel time depends on the exact location of your hotel, traffic and road conditions. A resort in the Punta Cana area will have a different journey time from a property in Uvero Alto, Bayahibe or Santo Domingo. Ask for an estimate for your specific accommodation when planning your trip, and allow additional time for airport formalities on arrival and check-in before your return flight.',
            ],
        ]
        : [
            [
                'question' => '¿Qué servicios ofrece Punta Cana Airport Transfers?',
                'answer' => 'Punta Cana Airport Transfers ofrece transporte privado entre el Aeropuerto Internacional de Punta Cana (PUJ) y hoteles, resorts y alojamientos en República Dominicana. Nuestros servicios incluyen traslados de llegada, recogidas en hoteles para vuelos de salida y transporte para parejas, familias y grupos. Selecciona tu destino, fechas y número de pasajeros en el formulario para consultar las opciones de tu viaje.',
            ],
            [
                'question' => '¿A qué destinos puedo viajar desde el Aeropuerto de Punta Cana?',
                'answer' => 'Ofrecemos transporte hacia Punta Cana, Bávaro, Cap Cana, Uvero Alto, Bayahíbe, La Romana y Miches, además de rutas de mayor distancia a Juan Dolio, Boca Chica y Santo Domingo. Indica el hotel o alojamiento exacto al solicitar tu cotización, ya que dos propiedades de una misma zona pueden tener distancias diferentes. Si tu destino no aparece, contáctanos para confirmar la disponibilidad antes de reservar.',
            ],
            [
                'question' => '¿Los traslados son privados o compartidos?',
                'answer' => 'Nuestros traslados son privados: el vehículo se reserva para ti y los pasajeros incluidos en tu reservación. No compartes el viaje con otros viajeros ajenos a tu grupo, como sucede en un transporte colectivo. Es una opción práctica para parejas, familias y grupos que desean trasladarse juntos entre el aeropuerto y su alojamiento.',
            ],
            [
                'question' => '¿Cuánto cuesta un traslado desde el Aeropuerto de Punta Cana?',
                'answer' => 'El precio depende del destino, las fechas, el número de pasajeros y el vehículo o servicio seleccionado. Consulta la tabla de tarifas como referencia e introduce los datos de tu viaje en el formulario para revisar el precio de tu traslado. Antes de completar la reservación, verifica si elegiste un servicio sencillo o de ida y vuelta y confirma cualquier solicitud especial.',
            ],
            [
                'question' => '¿Cómo puedo reservar mi transporte?',
                'answer' => 'Selecciona el lugar de recogida, el destino, las fechas y el número de pasajeros en el formulario. Revisa las opciones disponibles y proporciona los datos solicitados de tu vuelo, alojamiento y contacto. Antes de completar la reserva, comprueba que la fecha de llegada, el aeropuerto y el hotel sean correctos. Conserva los datos de tu reservación para consultarlos durante tu viaje.',
            ],
            [
                'question' => '¿Dónde encuentro a mi conductor al llegar al aeropuerto?',
                'answer' => 'Sigue las instrucciones de recogida correspondientes a tu reservación. El punto de encuentro puede variar según la terminal de llegada y la coordinación de tu traslado. Después de pasar migración, recoger tu equipaje y salir de aduanas, dirígete al lugar indicado. Si no encuentras el punto de reunión o cambia tu terminal, utiliza los datos de contacto de tu reserva para solicitar ayuda.',
            ],
            [
                'question' => '¿Qué debo hacer si mi vuelo se retrasa o cambia?',
                'answer' => 'Proporciona el número de vuelo correcto al reservar y avísanos si la aerolínea modifica tu vuelo, fecha de llegada o aeropuerto. Si te informan de un retraso, comparte los nuevos datos lo antes posible para revisar la coordinación de tu recogida. Los tiempos de espera, cambios de horario y posibles cargos dependen de las condiciones de tu reservación; revísalas antes de viajar.',
            ],
            [
                'question' => '¿Puedo solicitar el traslado de regreso al Aeropuerto de Punta Cana?',
                'answer' => 'Puedes solicitar transporte desde tu hotel o alojamiento hacia el Aeropuerto de Punta Cana. Incluye los datos de tu vuelo de salida y la ubicación exacta de recogida para coordinar el regreso. Confirma el horario antes del día de salida y considera la distancia desde tu hotel, las condiciones del tránsito y la anticipación que solicita tu aerolínea para documentar.',
            ],
            [
                'question' => '¿Tienen transporte para familias y grupos?',
                'answer' => 'Sí. Contamos con opciones para parejas, familias y grupos dentro de las categorías de pasajeros indicadas en nuestra tabla. Incluye a todos los viajeros y especifica si llevan maletas, carriolas o artículos voluminosos, porque el equipaje puede determinar el vehículo necesario. Si necesitas una silla infantil o alguna adaptación de accesibilidad, contáctanos antes de reservar para confirmar disponibilidad y compatibilidad.',
            ],
            [
                'question' => '¿Cuánto dura el traslado desde PUJ hasta mi hotel?',
                'answer' => 'La duración depende de la ubicación exacta de tu alojamiento, el tránsito y las condiciones de la carretera. El recorrido a un resort de Punta Cana no es igual al de un hotel en Uvero Alto, Bayahíbe o Santo Domingo. Solicita una estimación para tu alojamiento al organizar el viaje y contempla tiempo adicional para los trámites de llegada y la documentación de tu vuelo de regreso.',
            ],
        ];
@endphp

@extends('layout.master')

@push('push-top')
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
        /* Estilos limitados a esta página. */
        .pca-home .main-content .right,
        .pca-home .content_two .left,
        .pca-home .faqs_section {
            min-width: 0;
        }

        .pca-home .main-content .right p,
        .pca-home .content_two .left p {
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .pca-home .main-content h1,
        .pca-home .content_one h2,
        .pca-home .content_four h2 {
            overflow-wrap: break-word;
        }

        .pca-home .transfer-rate-note {
            margin-top: 1rem;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .pca-home .content_five {
            align-items: flex-start;
        }

        .pca-home .faqs_section .top p {
            font-size: 1.125rem;
            line-height: 1.8;
        }

        .pca-home .faqs_section .bottom > div {
            margin-bottom: 1.25rem;
        }

        .pca-home .faqs_section .bottom h3 {
            font-size: 1.25rem;
            line-height: 1.5;
            white-space: normal;
            overflow-wrap: break-word;
        }

        .pca-home .faqs_section .bottom > div > div p {
            font-size: 1.125rem;
            line-height: 1.85;
            margin: 0 0 1rem;
            white-space: normal;
        }

        .pca-home .trip-planning-card h3 {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 0.75rem;
        }

        .pca-home .trip-planning-card p {
            line-height: 1.8;
        }

        @media (max-width: 767px) {
            .pca-home .faqs_section .bottom h3 {
                font-size: 1.1875rem;
            }

            .pca-home .faqs_section .bottom > div > div p {
                font-size: 1.125rem;
                line-height: 1.75;
            }
        }
    </style>
@endpush

@push('push-bottom')
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <x-analytics/>
@endpush

@section('content')
    @include('layout.header.general', [
        'link' => \App\Traits\GeneralTrait::getAlternate($seo),
        'active' => 1
    ])

    <div class="pca-home">
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
                    alt="{{ $brand }}"
                    title="{{ $brand }}"
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
                        Arrange your airport pickup to Bávaro, Cap Cana or
                        Uvero Alto, or plan a longer journey to Bayahibe,
                        La Romana or Miches. Select your exact destination,
                        dates and passenger count to find transportation
                        suited to your itinerary.
                    </p>

                    <p>
                        Enjoy a vehicle reserved for your party, professional
                        drivers and a comfortable ride to your accommodation.
                        Our private airport transfer service helps you organize
                        an important part of your trip before you arrive,
                        with pricing available through our booking form.
                    </p>

                    <p>
                        Planning your departure as well? Request your hotel
                        pickup for the return journey to PUJ and keep both
                        airport journeys organized. Review the rates below
                        or enter your travel details to get started.
                    </p>
                @else
                    <h2>Transporte privado del aeropuerto a tu hotel o resort</h2>

                    <p>
                        Comienza tus vacaciones en República Dominicana con
                        <strong>Punta Cana Airport Transfers</strong>.
                        Ofrecemos transporte privado entre el Aeropuerto
                        Internacional de Punta Cana (PUJ) y tu hotel, resort
                        o alojamiento vacacional, con opciones para parejas,
                        familias y grupos que viajan juntos.
                    </p>

                    <p>
                        Organiza tu recogida en el aeropuerto hacia Bávaro,
                        Cap Cana o Uvero Alto, o un recorrido de mayor distancia
                        a Bayahíbe, La Romana o Miches. Selecciona el destino
                        exacto, las fechas y el número de pasajeros para
                        consultar el transporte adecuado para tu itinerario.
                    </p>

                    <p>
                        Viaja en un vehículo reservado para tu grupo, con
                        conductores profesionales y comodidad hasta tu
                        alojamiento. Nuestro servicio de traslados privados
                        te permite organizar esta parte del viaje antes de
                        llegar y consultar el precio desde el formulario
                        de reservación.
                    </p>

                    <p>
                        También puedes solicitar la recogida en tu hotel para
                        regresar a PUJ y dejar organizados ambos trayectos.
                        Consulta las tarifas de referencia o introduce
                        los datos de tu viaje para comenzar.
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
                            Plan your arrival around your destination and
                            travel party. Our private transportation combines
                            personalized service, coordinated pickups and
                            comfortable vehicles for your airport journey.
                        </p>
                    @else
                        <h2>¿Por qué elegir Punta Cana Airport Transfers?</h2>
                        <p>
                            Organiza tu llegada según tu destino y las
                            necesidades de tu grupo. Nuestro transporte
                            privado combina atención personalizada, recogidas
                            coordinadas y vehículos cómodos para tu traslado.
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
                                <p>Private Airport Transfers</p>
                                <p>
                                    Travel with your own party in a reserved
                                    vehicle. Choose transportation for your
                                    airport arrival, hotel departure or
                                    both journeys.
                                </p>
                            @else
                                <p>Traslados privados</p>
                                <p>
                                    Viaja con tu grupo en un vehículo
                                    reservado. Solicita transporte para tu
                                    llegada al aeropuerto, salida del hotel
                                    o ambos trayectos.
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
                                    Share your flight and accommodation
                                    details so your pickup can be planned
                                    around your itinerary and confirmed
                                    meeting point.
                                </p>
                            @else
                                <p>Recogidas coordinadas</p>
                                <p>
                                    Comparte los datos de tu vuelo y
                                    alojamiento para organizar la recogida
                                    según tu itinerario y el punto de
                                    encuentro confirmado.
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
                                <p>Comfort for Your Group</p>
                                <p>
                                    Choose a transportation option that
                                    fits your passenger count. Tell us
                                    about your luggage and special
                                    requirements before traveling.
                                </p>
                            @else
                                <p>Comodidad para tu grupo</p>
                                <p>
                                    Elige una opción acorde al número
                                    de pasajeros. Indícanos cuánto
                                    equipaje llevan y cualquier necesidad
                                    especial antes de viajar.
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
                                <p>Professional Drivers</p>
                                <p>
                                    Enjoy private transportation with
                                    professional drivers, whether your
                                    destination is a Punta Cana resort
                                    or a hotel farther along the coast.
                                </p>
                            @else
                                <p>Conductores profesionales</p>
                                <p>
                                    Disfruta de transporte privado con
                                    conductores profesionales, tanto
                                    hacia resorts de Punta Cana como
                                    hacia hoteles de otras zonas.
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
                        Your airport journey should match the vacation you
                        have planned. Punta Cana Airport Transfers connects
                        PUJ with hotels and resorts in Punta Cana, Bávaro,
                        Cap Cana and Uvero Alto, as well as destinations
                        farther from the airport.
                    </p>

                    <p>
                        Staying in Bayahibe, Casa de Campo, La Romana or
                        Miches? Plan your private transportation before
                        departure and provide the exact name of your
                        accommodation. We also offer longer routes to
                        Juan Dolio, Boca Chica and Santo Domingo.
                    </p>

                    <p>
                        Whether you are traveling as a couple, arriving with
                        children or organizing a group holiday, include all
                        passengers and luggage in your request. These details
                        help identify the right transportation option for
                        your journey.
                    </p>

                    <p>
                        Use the booking form to check your route and price.
                        If your hotel is not listed or your itinerary involves
                        a special pickup location, contact us to confirm
                        the arrangements before booking.
                    </p>
                @else
                    <h2>Traslados a Bávaro, Cap Cana y otros destinos</h2>

                    <p>
                        El transporte desde el aeropuerto debe adaptarse a
                        tus vacaciones. Punta Cana Airport Transfers conecta
                        PUJ con hoteles y resorts de Punta Cana, Bávaro,
                        Cap Cana y Uvero Alto, además de otros destinos
                        de mayor distancia.
                    </p>

                    <p>
                        ¿Te hospedas en Bayahíbe, Casa de Campo, La Romana
                        o Miches? Organiza tu transporte privado antes de
                        viajar e indica el nombre exacto del alojamiento.
                        También ofrecemos rutas a Juan Dolio, Boca Chica
                        y Santo Domingo.
                    </p>

                    <p>
                        Si viajas en pareja, con niños o en grupo, incluye
                        a todos los pasajeros y detalla el equipaje en tu
                        solicitud. Esta información ayuda a identificar
                        la opción de transporte adecuada para tu recorrido.
                    </p>

                    <p>
                        Consulta tu ruta y precio desde el formulario.
                        Si tu hotel no aparece o necesitas un punto de
                        recogida especial, contáctanos para confirmar
                        los detalles antes de reservar.
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
                        Compare reference rates for transportation between
                        PUJ and popular destinations in the Dominican Republic.
                        Select the passenger category for your group, then
                        check your exact trip details in the booking form.
                    </p>
                @else
                    <h2>Tarifas de traslados desde el Aeropuerto de Punta Cana</h2>
                    <p>
                        Compara las tarifas de referencia entre PUJ y
                        los principales destinos de República Dominicana.
                        Identifica la categoría de pasajeros de tu grupo
                        y consulta tu viaje exacto en el formulario.
                    </p>
                @endif
            </div>

            <div class="bottom">
                <table class="table table-striped table-responsive">
                    <caption>
                        {{ $isEnglish
                            ? 'Punta Cana Airport Transfers — reference rates in USD by destination and passenger category.'
                            : 'Punta Cana Airport Transfers — tarifas de referencia en USD por destino y categoría de pasajeros.' }}
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

                <p class="transfer-rate-note">
                    @if($isEnglish)
                        PUJ refers to Punta Cana International Airport.
                        The arrows identify the route, not an included
                        round trip. Prices may vary by season and special
                        requests. Confirm your exact destination, service
                        type, luggage requirements and final price
                        before booking.
                    @else
                        PUJ corresponde al Aeropuerto Internacional de
                        Punta Cana. Las flechas identifican la ruta y no
                        significan que se incluya un viaje redondo.
                        Los precios pueden variar según la temporada y
                        las solicitudes especiales. Confirma el destino,
                        tipo de servicio, equipaje y precio final
                        antes de reservar.
                    @endif
                </p>
            </div>
        </div>

        {{-- Información del servicio, sin testimonios ni calificaciones no verificadas. --}}
        <div class="bg_blue_two">
            <div class="container content_four">
                <div class="left">
                    @if($isEnglish)
                        <h2>Plan Your Arrival with Confidence</h2>
                        <p>
                            Organize the essentials of your airport
                            transportation before you travel. A complete
                            itinerary helps coordinate your pickup,
                            select a suitable vehicle and prepare for
                            the journey to your hotel.
                        </p>
                    @else
                        <h2>Prepara tu llegada con tranquilidad</h2>
                        <p>
                            Organiza los detalles de tu transporte antes
                            de viajar. Un itinerario completo ayuda a
                            coordinar la recogida, elegir un vehículo
                            adecuado y preparar el recorrido hasta
                            tu hotel.
                        </p>
                    @endif
                </div>

                <div class="right">
                    <div class="trip-planning-card">
                        <div>
                            @if($isEnglish)
                                <h3>Before Your Flight</h3>
                                <p>
                                    Check the arrival date, flight number
                                    and hotel name on your reservation.
                                    Include a contact number you can use
                                    while traveling and keep your pickup
                                    instructions readily available.
                                </p>
                            @else
                                <h3>Antes de tu vuelo</h3>
                                <p>
                                    Revisa la fecha de llegada, el número
                                    de vuelo y el nombre del hotel en
                                    tu reserva. Incluye un teléfono que
                                    puedas utilizar durante el viaje y
                                    conserva tus instrucciones de recogida.
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="trip-planning-card">
                        <div>
                            @if($isEnglish)
                                <h3>When You Arrive at PUJ</h3>
                                <p>
                                    Complete immigration and customs,
                                    collect your luggage and follow
                                    your confirmed meeting instructions.
                                    Use your reservation contact details
                                    if you need help locating the
                                    pickup point.
                                </p>
                            @else
                                <h3>Cuando llegues a PUJ</h3>
                                <p>
                                    Completa los trámites de migración
                                    y aduanas, recoge tus maletas y
                                    sigue las indicaciones de encuentro.
                                    Utiliza los datos de contacto de
                                    tu reservación si necesitas ayuda
                                    para ubicar la recogida.
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="trip-planning-card">
                        <div>
                            @if($isEnglish)
                                <h3>For Your Return Journey</h3>
                                <p>
                                    Confirm your hotel pickup location
                                    and departure details in advance.
                                    Allow enough time for the drive
                                    and your airline’s airport
                                    check-in requirements.
                                </p>
                            @else
                                <h3>Para tu viaje de regreso</h3>
                                <p>
                                    Confirma con anticipación el punto
                                    de recogida en tu hotel y los datos
                                    de salida. Considera tiempo suficiente
                                    para el recorrido y la documentación
                                    requerida por tu aerolínea.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content_five">
            <div class="left faqs_section">
                <div class="top">
                    @if($isEnglish)
                        <h2>Punta Cana Airport Transfers FAQs</h2>
                        <p>
                            Find practical answers about private airport
                            transportation, destinations, prices, pickup
                            arrangements and group travel. Review these
                            details before booking your transfer to
                            or from PUJ.
                        </p>
                    @else
                        <h2>Preguntas frecuentes sobre Punta Cana Airport Transfers</h2>
                        <p>
                            Resuelve tus dudas sobre transporte privado,
                            destinos, precios, puntos de encuentro y
                            viajes en grupo. Revisa esta información
                            antes de reservar tu traslado de llegada
                            o regreso a PUJ.
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
                            ? 'Punta Cana Airport Transfers travel assistance'
                            : 'Asistencia para tu viaje con Punta Cana Airport Transfers' }}"
                        loading="lazy"
                        width="60"
                        height="60"
                    >
                </picture>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection
