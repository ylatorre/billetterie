<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>


    <div class="" id="cards">
        <div class="px-8">
            <div class="">
                <div class="blockTotalBillet">
                    @foreach($NumeroPlace as $Numero)
                        <tr>
                            <td></td>

                        </tr>
                        <div class="blockBillet">
                            <widget class="widget" type="ticket" class="--flex-column">
                                <div class="top --flex-column">
                                    <div class="bandname -bold">{{$concert->Name}}</div>
                                    <div class="tourname">Artiste : {{$concert->NameArtiste}}</div>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt=""/>
                                    <div class="deetz --flex-row-j!sb">
                                        <div class="event --flex-column">
                                            <div class="date">{{$concert->Date}}</div>
                                            <div class="location -bold">Institut G4, Lyon</div>
                                        </div>
                                        <div class="price flex flex-row">
                                            <div class="label pr-2">Price:</div>
                                            <div class="cost -bold" data-idconcert="{{$concert->id}}"> {{$concert->Price}} euros</div>
                                        </div>
                                        <div class="price flex flex-row">
{{--                                            <div class="label pr-2">Price:</div>--}}
                                            <div class="cost -bold" data-idconcert="{{$concert->id}}> {{$Numero}} euros</div>
                                        </div>
                                        <div>
                                            <div class="numeroPlace">Seat number: {{$Numero}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rip"></div>
                                <svg id="barcode{{$Numero}}"></svg>
                                <div class="bottom --flex-row-j!sb ">
                                    <a class="buy" href="#">Download</a>
                                </div>
                            </widget>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-col items-center pt-10" id="payment">
        <div class="w-52 flex">
            <form class="flex flex-col items-center" action="">
                {{--            paiment--}}
                <h1>Number of seat de place : {{count($NumeroPlace)}}</h1>
                <h1>Price total: {{count($NumeroPlace) * $concert->Price}} dollars</h1>
                <input type="text" id="cardNumber" placeholder="Card Number">
                <input type="text" id="cardExpiry" placeholder="MM / YY">
                <input type="text" id="cardCVC" placeholder="CVC">
                <a id="payBtn" class="px-4 py-1">Pay</a>
            </form>
        </div>
    </div>
</x-app-layout>