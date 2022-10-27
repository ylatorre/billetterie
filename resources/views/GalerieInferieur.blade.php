<div class="placeHaut">
    <div class="absolute blockPlaceHaut">
        @php
            $numeroDePlace = 1368;
            $etat = 0;
        @endphp


        @for($i = 0; $i < 6; $i++,$numeroDePlace++)
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 40; $i2++,$numeroDePlace++)

                    @foreach($placesTotal as $place)
                        @if($place->NumberPlace === $numeroDePlace)
                            @php($etat = 1)

                            <button id="{{$numeroDePlace}}" data-NumeroPlace="{{$numeroDePlace}}"
                                    class="blockPlace p-1 m-1 placeReserve"></button>
                            @break
                        @endif
                    @endforeach
                    @if($etat === 0)
                        <button id="{{$numeroDePlace}}" data-NumeroPlace="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>
                    @endif
                    @if($i2% 10 == 0 && $i2 != 0)

                        <span style="padding: 4px;"></span>
                    @endif
                    @php($etat = 0)
                @endfor
            </div>

        @endfor
    </div>
    <div class="absolute blockPlaceGauche">
        @for($i = 0; $i < 30; $i++,$numeroDePlace++)
            <div class="flex flex-row">
                @if($i % 10 == 0 && $i != 0)
                    <br>
                @endif
                @for($i2 = 0; $i2 < 6; $i2++,$numeroDePlace++)

                    @foreach($placesTotal as $place)
                        @if($place->NumberPlace === $numeroDePlace)
                            @php($etat = 1)

                            <button id="{{$numeroDePlace}}" data-NumeroPlace="{{$numeroDePlace}}"
                                    class="blockPlace p-1 m-1 placeReserve"></button>
                            @break
                        @endif
                    @endforeach
                    @if($etat === 0)
                        <button id="{{$numeroDePlace}}" data-NumeroPlace="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>
                    @endif

                    @php($etat = 0)
                @endfor
            </div>
        @endfor
    </div>
    <div class="absolute blockPlaceDroit">
        @for($i = 0; $i < 30; $i++,$numeroDePlace++)
            <div class="flex flex-row">
                @if($i % 10 == 0 && $i != 0)

                    {{--                    <span style="padding: 2px;"></span>--}}
                    <br>
                @endif
                @for($i2 = 0; $i2 < 6; $i2++,$numeroDePlace++)

                    @foreach($placesTotal as $place)
                        @if($place->NumberPlace === $numeroDePlace)
                            @php($etat = 1)

                            <button id="{{$numeroDePlace}}" data-NumeroPlace="{{$numeroDePlace}}"
                                    class="blockPlace p-1 m-1 placeReserve"></button>
                            @break
                        @endif
                    @endforeach
                    @if($etat === 0)
                        <button id="{{$numeroDePlace}}" data-NumeroPlace="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>
                    @endif

                    @php($etat = 0)
                @endfor
            </div>

        @endfor
    </div>
</div>

<style>
    .blockPlaceActive{
        background-color: green;
    }

    .placeReserve{
        background-color: red;
    }</style>




