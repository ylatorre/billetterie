<x-app-layout>
    <x-slot name="header">
        {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
        {{--            {{ __('Dashboard') }}--}}
        {{--        </h2>--}}
        {{--        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Tabby_cat_with_blue_eyes-3336579.jpg" alt="">--}}
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue border-b border-gray-200 flex justify-center text-3xl">
                    CONTACTER NOUS
                </div>
                <!--Formulaire -->
                <section class="bg-white BG-WHITE:bg-gray-900 max-w-3xl ">
                    <div class="py-0 lg:py-2 px-4 mx-auto max-w-screen-md">
                        <h2 class="mb-0 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contacter Nous</h2>
                        <p class="mb-1 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Vous avez un problème technique ? Vous voulez envoyer des commentaires sur une fonctionnalité ? Besoin de détails sur un concert ? Faites-nous savoir !</p>
                        <form action="#" class="space-y-8">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre Email</label>
                                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="nom@gmail.com" required>
                            </div>
                            <div>
                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sujet</label>
                                <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Dites-nous comment nous pouvons vous aider" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Votre Message</label>
                                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ecrivez votre message ici..."></textarea>
                            </div>
                            <div class="flex justify-end mr-9 pt-9">
                                <button type="submit" class=" flex justify-end text-black bg-gray-300 rounded-md p-3  duration-500 ease-out hover:ease-in  hover:bg-gray-700 hover:text-gray-300 ">Envoyer message</button>

                            </div>
                        </form>
                    </div>
                    <div class="flex flex-row justify-start ml-4 mb-9 pl-5 space-x-1.5">
                        <img src="{{ asset('instagram.png') }}">
                        <img src="{{ asset('facebook.png') }}">
                        <img src="{{ asset('snapchat.png') }}">
                    </div>
                </section>
                <!--Formulaire -->
            </div>

        </div>
    </div>




</x-app-layout>
