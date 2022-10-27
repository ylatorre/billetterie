<x-app-layout>
    <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--             {{ __('Reservation') }}--}}
             </h2>
{{--         <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Tabby_cat_with_blue_eyes-3336579.jpg" alt="">--}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
{{--                    <h4>{{$concert}}</h4>--}}
                    <p>{{$concert[0]->Date}}</p>
                    <p>{{$concert[0]->Description}}</p>
                    <p>Reservation pour le concert {{$concert[0]->Name}} </p>
                </div>
                <div>
                    <p>Choix de la place</p>
                </div>
            </div>
            <div class="flex" >
                <div class="flex flex-col">
                    <button id="GalSup" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Galerie supérieure</button>
                    <button id="GalCen" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Galerie centrale</button>
                    <button id="GalInf" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Galerie inférieure</button>
                    <button id="Cour" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Cour</button>
                    <button id="valider" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Valider</button>

                </div>

                <img class="h-96" id="imgSalle" src="https://production.tnew-assets.com/orgs/SGTH/syos/Images/smap-13/smap-13.png?tnewToken=e3a502ee-4854-4e4b-b4ac-c073187593c5" alt="">
                <div id="ReservationBouton" class="w-20 h-1"></div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    window.userID = {{ auth()->id() }};
</script>