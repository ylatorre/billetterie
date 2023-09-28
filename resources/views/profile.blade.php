<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="flex items-center flex-col pt-4 bg-gray-50 pb-4">
        <h2>Hello {{ Auth::user()->name }}</h2>
        <h2>email :{{ Auth::user()->email }}</h2>

    </div>

    {{--foreach of $reservations--}}
    @php
        $i = 0;
    @endphp
    @foreach($reservations as $reservation)

        <div class="flex flex-row justify-between">
            {{--            <h2>{{  }}</h2>--}}
            {{--            <h2>{{ $reservation->id }} id</h2>--}}
            {{--            <h2>{{ $reservation->prixPlace }} prix place</h2>--}}
            {{--            <h2>{{ $reservation->dateReservation }} date reservation</h2>--}}
            {{--            <h2>{{ $reservation->NumberPlace }} Numero Place</h2>--}}
            {{--        <h2>{{ $reservation->NumberPlace }}</h2>--}}

        </div>
        {{--  TODO: continuer la page modifer les commentaire pour faire des billetes foncionnelle  --}}
        {{--            @php--}}
        {{--                dd($reservation);--}}


        {{--            @endphp--}}
        {{--                        <tr>--}}
        <td></td>
        </tr>
        <div class="blockBillet">
            <widget class="widget" type="ticket" class="--flex-column">
                <div class="top --flex-column">
                    <div class="bandname -bold">{{$reservation->Name}}</div>
                    {{--                                    <div class="tourname">Artiste : {{$reservation->}}</div>--}}
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt=""/>
                    <div class="deetz --flex-row-j!sb">
                        <div class="event --flex-column">
                            <div class="date">{{$reservation->Date}}</div>
                            <div class="location -bold">Institut G4, Lyon</div>
                        </div>
                        <div class="price flex flex-row">
                            <div class="label pr-2">Prix:</div>
                            <div class="cost -bold" data-idconcert="{{$reservation->id}}"> {{$reservation->Price}}
                                euros
                            </div>
                        </div>
                        <div>
                            <div class="numeroPlace">Numero de place: {{$reservation->NumberPlace}}</div>
                        </div>
                    </div>
                </div>
                <div class="rip"></div>
                <svg id="barcode{{$reservation->id}}"></svg>
                <div class="bottom --flex-row-j!sb ">
                    <a class="buy pdf{{$i}}" href="#">Download</a>
                </div>
            </widget>
        </div>
        @php
            $i++;
        @endphp
    @endforeach


    <div class="mb-24"></div>
</x-app-layout>


{{--    +"id": 86
    +"Name": "test"
    +"duree": "test"
    +"Price": "10"
    +"Description": "er"
    +"Image": "fesfes"
    +"type": "e"
    +"IdArtiste": 1
    +"NumberPlacesReserved": 2
    +"NumberPlacesAvailable": 2
    +"Date": "1970-01-15"
    +"IdUser": 1
    +"idConcert": 1
    +"NumberPlace": 6
    +"dateReservation": "2022-10-27"
    +"prixPlace": 23.0
    +"created_at": "2022-10-27 07:55:33"
    +"updated_at": "2022-10-27 07:55:33"--}}