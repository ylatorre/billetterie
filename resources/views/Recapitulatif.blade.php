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


    <h1>Nom concert :{{$concert->Name}}</h1>
    @foreach($NumeroPlace as $NumeroPlace)
        <tr>
            <td>{{$NumeroPlace}}</td>
{{--            <td>{{$NumeroPlace->Prix}}</td>--}}
{{--            <td>{{$NumeroPlace->Quantite}}</td>--}}
{{--            <td>{{$NumeroPlace->Prix * $NumeroPlace->Quantite}}</td>--}}
        </tr>
    <div class="billet">
        <widget type="ticket" class="--flex-column">
            <div class="top --flex-column">
                <div class="bandname -bold">Ghost Mice</div>
                <div class="tourname">Home Tour</div>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt="" />
                <div class="deetz --flex-row-j!sb">
                    <div class="event --flex-column">
                        <div class="date">3rd March 2017</div>
                        <div class="location -bold">Bloomington, Indiana</div>
                    </div>
                    <div class="price --flex-column">
                        <div class="label">Price</div>
                        <div class="cost -bold">$30</div>
                    </div>
                </div>
            </div>
            <div class="rip"></div>
            <div class="bottom --flex-row-j!sb">
                <div class="barcode"></div>
                <a class="buy" href="#">BUY TICKET</a>
            </div>
        </widget>
    </div>
    @endforeach



</x-app-layout>