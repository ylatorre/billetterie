<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    {{--    @foreach ($)--}}
    {{--{{$PrixPlace}}--}}
    {{--    @endforeach--}}
    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
    {{--                <div class="container">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-12">--}}
    {{--                            <h1 class="text-center">Récapitulatif</h1>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-12">--}}
    {{--                            <h2 class="text-center">Votre commande</h2>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-12">--}}
    {{--                            <table class="table table-striped">--}}
    {{--                                <thead>--}}
    {{--                                <tr>--}}
    {{--                                    <th scope="col">Nom</th>--}}
    {{--                                    <th scope="col">Prix</th>--}}
    {{--                                    <th scope="col">Quantité</th>--}}
    {{--                                    <th scope="col">Total</th>--}}
    {{--                                </tr>--}}
    {{--                                </thead>--}}
    {{--                                <tbody>--}}
    {{--                                @foreach($Panier as $Panier)--}}
    {{--                                    <tr>--}}
    {{--                                        <td>{{$Panier->Nom}}</td>--}}
    {{--                                        <td>{{$Panier->Prix}}</td>--}}
    {{--                                        <td>{{$Panier->Quantite}}</td>--}}
    {{--                                        <td>{{$Panier->Prix * $Panier->Quantite}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                @endforeach--}}
    {{--                                </tbody>--}}
    {{--                            </table>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-12">--}}
    {{--                            <h2 class="text-center">Votre commande</h2>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-12">--}}
    {{--                            <table class="table table-striped">--}}
    {{--                                <thead>--}}
    {{--                                <tr>--}}
    {{--                                    <th scope="col">Nom</th>--}}
    {{--                                    <th scope="col">Prix</th>--}}
    {{--                                    <th scope="col">Quantité</th>--}}
    {{--                                    <th scope="col">Total</th>--}}
    {{--                                </tr>--}}
    {{--                                </thead>--}}
    {{--                                <tbody>--}}
    {{--                                @foreach($Panier as $Panier)--}}
    {{--                                    <tr>--}}
    {{--                                        <td>{{$Panier->Nom}}</td>--}}
    {{--                                        <td>{{$Panier->Prix}}</td>--}}
    {{--                                        <td>{{$Panier->Quantite}}</td>--}}
    {{--                                @endforeach--}}


    <div class="" id="cards">
        <div class="px-8">
            <div class="">


    <div class="blockTotalBillet">
        @foreach($NumeroPlace as $Numero)
            <tr>
                <td></td>
                {{--            <td>{{$NumeroPlace->Prix}}</td>--}}
                {{--            <td>{{$NumeroPlace->Quantite}}</td>--}}
                {{--            <td>{{$NumeroPlace->Prix * $NumeroPlace->Quantite}}</td>--}}
            </tr>
            {{--    <div class="billet">--}}
            <div class="blockBillet">
                {{--                    "id": 1--}}
                {{--                    +"Name": "test"--}}
                {{--                    +"duree": "test"--}}
                {{--                    +"Price": "23"--}}
                {{--                    +"Description": "er"--}}
                {{--                    +"Image": "fesfes"--}}
                {{--                    +"type": "e"--}}
                {{--                    +"IdArtiste": 2--}}
                {{--                    +"NumberPlacesReserved": 2--}}
                {{--                    +"NumberPlacesAvailable": 2--}}
                {{--                    +"Date": "1970-01-15"--}}
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
                                <div class="label pr-2">Prix:</div>
                                <div class="cost -bold"> {{$concert->Price}} euros</div>
                            </div>
                            <div>
                                <div>Numero de place: {{$Numero}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="rip"></div>
{{--                    <svg class="barcode"--}}
{{--                         jsbarcode-format="upc"--}}

{{--                         jsbarcode-value="{{$Numero.$concert->Price.$concert->Name}}"--}}
{{--                         jsbarcode-textmargin="0"--}}
{{--                         jsbarcode-fontoptions="bold">--}}
{{--                    </svg>--}}
                    <svg id="barcode{{$Numero}}"></svg>
                    <div class="bottom --flex-row-j!sb ">
                        <a class="buy" href="#">Download</a>
                    </div>
                </widget>
                {{--    </div>--}}
            </div>
        @endforeach
    </div>

            </div>
        </div>
    </div>

<div class="flex flex-col items-center" style="padding-top:45% " id="payment">
    <div class="w-52 flex">
        <form class="flex flex-col items-center" action="">
{{--            paiment--}}
            <input type="text"  id="cardNumber" placeholder="Card Number">
            <input type="text"  id="cardExpiry" placeholder="MM / YY">
            <input type="text" id="cardCVC" placeholder="CVC">
            <a id="payBtn">Pay</a>
        </form>
    </div>
</div>
</x-app-layout>