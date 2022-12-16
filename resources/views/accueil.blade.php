<x-app-layout>
    <x-slot name="header">
        {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
        {{--            {{ __('Dashboard') }}--}}
        {{--        </h2>--}}
        {{--        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Tabby_cat_with_blue_eyes-3336579.jpg" alt="">--}}
    </x-slot>

    <section class="h-screen bg-gray">

        <div id="default-carousel" class="relative h-full z-0" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden rounded-lg md:h-full">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                     data-carousel-item="">
                    <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="https://www.coulisses-tv.fr/media/k2/items/cache/90e68ab6087c1a1b93ecca8fe2f7c7dc_XL.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                     data-carousel-item="">
                    <img src="https://www.popnmusic.fr/wp-content/uploads/2022/06/4-artistes-que-vous-devez-voir-au-Neversea-Festival-2022.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                     data-carousel-item="">
                    <img src="https://www.olyrix.com/files/picture/photos/SocialImage/33667/concert-de-paris-le-14-juillet-2020-artistes-et-programme-complet-batiashvili-bernheim-buniatishvili-gabetta-kidjo-said-tezier-vary-yoncheva-ballet-preljocaj-eun-sun-kim-batic-jeannin-orchestre-national-france-choeur-maitrise-radio.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                        class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                        class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev="">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
            </button>
            <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next="">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
            </button>
        </div>
    </section>

{{--    <section class="card-section">--}}

{{--        <div class="englob-all-cards">--}}

{{--            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">--}}
{{--                <a href="#">--}}
{{--                    <img class="rounded-t-lg"--}}
{{--                         src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg" alt="">--}}
{{--                </a>--}}
{{--                <div class="p-5">--}}
{{--                    <a href="#">--}}
{{--                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy--}}
{{--                            technology acquisitions 2021</h5>--}}
{{--                    </a>--}}
{{--                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise--}}
{{--                        technology acquisitions of 2021 so far, in reverse chronological order.</p>--}}
{{--                    <a href="#"--}}
{{--                       class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 transition focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                        Read more--}}
{{--                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"--}}
{{--                                  clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}

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
                                    <span class="pl-2 pr-2 text-xs text-bold"
                                          style="background-color: #be1836;color:white;">Nouveau</span>
                                    <p class="font-bold	text-xl">
                                        <a href="/reservation/{{$concert->id}}"> {{$concert->Description}} </a></p>
                                    <div class="" style="color:rgba(9,10,11,0.5)">
                                        <span>{{$concert->type}}</span>
                                        <span>({{$concert->duree}})</span>

                                    </div>
                                </div>
                                <div class="flex items-end">
                                    <a class="bouttonReservation " href="/reservation/{{$concert->id}}">Réserver votre
                                        billet</a>
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
