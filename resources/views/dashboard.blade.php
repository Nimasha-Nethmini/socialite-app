<x-app-layout>
    <x-slot name="header">
        <nav class="bg-white-800 p-4">
            <div class="flex justify-center items-center">
                <div class="flex">
                   
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-white" style="margin-right: 30px;">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-white" style="margin-right: 30px;">About Me</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white">Contact Me</a>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>After successfully logging in using Laravel Socialite, you’ll be greeted by a seamless and intuitive screen that confirms your authentication. Laravel Socialite is a powerful package that simplifies the process of integrating OAuth authentication into your Laravel application, supporting popular social platforms like Facebook, Google, and GitHub. Once logged in, the user is directed to a dedicated screen that typically displays their profile information and any relevant details pulled from the social provider. This not only enhances user experience by reducing the need for additional sign-up steps but also leverages the convenience and security of social login systems.</p>
            </div>
        </div>
    </div>
</x-app-layout>
