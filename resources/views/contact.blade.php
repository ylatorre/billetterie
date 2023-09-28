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
                <div class="p-6 bg-blue border-b border-gray-200">
                    CONTACT US
                </div>
                      <!--Formulaire -->
        <section class="bg-white BG-WHITE:bg-gray-900 max-w-3xl">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-0 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contacter Us</h2>
                <p class="mb-1 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Do you have a technical issue? Do you want to send feedback on a feature? Need details about a concert? Let us know!</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
                        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="nom@gmail.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                        <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Tell us how we can help you." required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                        <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write your message here..."></textarea>
                    </div>
                    <button type="submit" class="text-black bg-gray-300 rounded-md p-3   hover:bg-sky-700">Send message</button>                </form>

            </div>
            <div class="flex flex-row justify-end mr-4 mb-9 pr-5">
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
