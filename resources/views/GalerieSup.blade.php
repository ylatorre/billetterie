<div class="placeHaut">
    <div class="absolute blockPlaceHaut">
        @php
            $numeroDePlace = 0;
//dd($placesTotal)
//        @endphp


        @for($i = 0; $i < 5; $i++,$numeroDePlace++)
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 40; $i2++,$numeroDePlace++)

                    @foreach($placesTotal as $place)
                        {{--                        <button href="" data-NumeroPlace="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>--}}

                        @if($place->NumberPlace === $numeroDePlace)
                            <button href="" data-NumeroPlace="{{$numeroDePlace}}"
                                    class="blockPlace p-1 m-1 placeReserve"></button>
                            <span>{{$numeroDePlace}}</span>
{{--                            @php($numeroDePlace++);--}}
{{--                            @php($i2++);--}}
                            @break;
                        @endif
                        <button href="" data-NumeroPlace="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>
                        <span>{{$}}</span>

                        @php($numeroDePlace++)
                        @php($i2++)
                    @endforeach
                    @if($i2% 10 == 0 && $i2 != 0)

                        <span style="padding: 4px;"></span>
                    @endif
                @endfor
            </div>

        @endfor
    </div>
    <div class="absolute blockPlaceGauche">
        @for($i = 0; $i < 40; $i++, $numeroDePlace++)
            @if($i% 10 == 0 && $i != 0)
                <span style="padding: 2px;"></span>
            @endif
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 5; $i2++,$numeroDePlace++)
                    <button href="" data-NumeroPlace="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>

                @endfor

            </div>
        @endfor
    </div>
    <div class="absolute blockPlaceDroit">
        @for($i = 0; $i < 40; $i++, $numeroDePlace++)
            @if($i% 10 == 0 && $i != 0)
                <span style="padding: 2px;"></span>
            @endif
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 5; $i2++,$numeroDePlace++)
                    <button href="" class="blockPlace p-1 m-1" data-NumeroPlace="{{$numeroDePlace}}"></button>

                @endfor

            </div>
        @endfor
    </div>

</div>
{{--@foreach($placesTotal as $place)--}}
{{--    <h1>$place->id </h1>--}}
{{--@endforeach--}}
{{--{{$placesTotal->$numeroDePlace or "notPlace"}}--}}

<script type="text/javascript">


    let blockPlace = document.querySelectorAll('.blockPlace');
    let array      = @json($placesTotal);
    console.log("tresudhj")
    blockPlace.forEach(function (element) {
        let attribute = element.getAttribute('data-NumeroPlace')
        for (let i = 0; i < array.length; i++) {
            let valeur = array[i];
            if (attribute == valeur.NumberPlace) {
                element.classList.add('placeReserve')
                console.log(attribute, valeur.NumberPlace)

            }
        }
    });

</script>

