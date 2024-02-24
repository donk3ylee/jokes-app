    <x-layout title="all jokes">

        @foreach($jokes as $joke)

            <x-jokes.joke-name :name="$joke->name" class="text-red-500"/>

        @endforeach

    
    </x-layout>