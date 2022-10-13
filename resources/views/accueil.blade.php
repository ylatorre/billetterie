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
                    Page Accueil
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-around" >
        <a href="/">
            <picture class=""><img class="pr-3 w-40"
                        src="https://www.cinemaspathegaumont.com/media/movie/9205592/poster/1665132746468/md/136/film_927829.jpg"
                        alt="Jack Mimoun et les secrets de Val Verde"></picture>
        </a>
        <div >
            <span class="pl-2 pr-2 text-xs" style="background-color: #be1836;color:white;">Nouveau</span>
            <p class="font-bold	text-xl">
                <a href=""> Jack Mimoun et les secrets de Val Verde </a></p>
            <div class="" style="color:rgba(9,10,11,0.5)">
                <span>type</span>
                <span>(date)</span>

            </div>
        </div>

    </div>


</x-app-layout>
