<x-app-layout>
    <x-slot name="header">
        {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
        {{--            {{ __('Dashboard') }}--}}
        {{--        </h2>--}}
        {{--        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Tabby_cat_with_blue_eyes-3336579.jpg" alt="">--}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($concerts as $concert)
                        <div>
                            <div class="flex flex-row justify-start mb-2">
                                <a href="/reservation/{{$concert->id}}">
                                    <picture class=""><img class="pr-3 w-40"
                                                           src="{{$concert->Image}}"
                                                           alt="{{$concert->Description}}"></picture>
                                </a>
                                <div>
                                    <span class="pl-2 pr-2 text-xs text-bold" style="background-color: #be1836;color:white;">Nouveau</span>
                                    <p class="font-bold	text-xl">
                                        <a href="/reservation/{{$concert->id}}"> {{$concert->Description}} </a></p>
                                    <div class="" style="color:rgba(9,10,11,0.5)">
                                        <span>{{$concert->type}}</span>
                                        <span>({{$concert->duree}})</span>

                                    </div>
                                </div>
                            </div>
                            <hr class="mb-2">
                            @endforeach


                        </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
