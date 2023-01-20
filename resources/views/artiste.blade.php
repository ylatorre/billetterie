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
                    <section class="overflow-hidden text-gray-700 ">

                        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32" >

                            <div class="flex flex-wrap -m-1 md:-m-2">
{{--                                <div class="flex flex-wrap w-1/3 imgartiste">--}}
{{--                                    <div class="w-full p-1 md:p-2">--}}
{{--                                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"--}}
{{--                                             src="https://cdn.sortiraparis.com/images/80/1462/489853-celine-dion-a-la-defense-arena-de-paris-en-juillet-2020-pour-des-concerts-inoubliables.jpg">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="flex flex-wrap w-1/3 imgartiste">--}}
{{--                                    <div class="w-full p-1 md:p-2">--}}
{{--                                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"--}}
{{--                                             src="data:image/jpeg;base64,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">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="flex flex-wrap w-1/3 imgartiste">--}}
{{--                                    <div class="w-full p-1 md:p-2">--}}
{{--                                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"--}}
{{--                                             src="https://images.rtl.fr/~c/770v513/rtl/www/1241167-aya-nakamura-le-24-septembre-2019.jpg">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="flex flex-wrap w-1/3 imgartiste">--}}
{{--                                    <div class="w-full p-1 md:p-2">--}}
{{--                                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"--}}
{{--                                             src="https://cdn-s-www.bienpublic.com/images/CFC86BBA-1B6A-460F-8D5D-E5CE1B2D2009/NW_raw/angele-numero-1-des-ventes-en-france-en-2019-est-nommee-dans-trois-categories-quot-artiste-feminine-quot-(face-a-clara-luciani-et-catherine-ringer)-quot-concert-quot-avec-son-quot-brol-tour-quot-et-quot-creation-audiovisuelle-quot-pour-quot-balance-ton-quoi-quot-son-album-quot-brol-quot-a-depasse-le-demi-million-de-ventes-damnant-le-pion-a-un-certain-johnny-hallyday-une-belle-prouesse-pour-la-belge-agee-de-seulement-24-ans-photo-benoit-do-quang-1581491974.jpg">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="flex flex-wrap w-1/3 imgartiste">--}}
{{--                                    <div class="w-full p-1 md:p-2">--}}
{{--                                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"--}}
{{--                                             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWTLllQTFZl3jtt39eSx8itgXc5M9Tn4pR6A&usqp=CAU">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="flex flex-wrap w-1/3 imgartiste">--}}
{{--                                    <div class="w-full p-1 md:p-2">--}}
{{--                                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"--}}
{{--                                             src="https://france3-regions.francetvinfo.fr/image/7OtkGkO7SIzuje7bIES-ImNKC7E/600x400/regions/2020/06/09/5edf7f12e1a2c_gaume_c_jean_marie_jagu-4088409.jpg">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                @foreach($artistes as $artist)
                                    <div class="flex flex-wrap w-1/3 imgartiste">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                 src="{{$artist->ImageArtiste}}">
                                            <span class="artiseName">{{$artist->NameArtiste}}</span>
                                            <span class="artiseDescription">{{$artist->DescriptionArtiste}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
