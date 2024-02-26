    <x-layout title="all jokes">

        @foreach($jokes as $joke)

            <x-jokes.joke-name :name="$joke->name" class="text-center text-red-500 align-middle from-stone-600"/>

        @endforeach

        {{  $jokes->onEachSide(5)->links() }}

    </x-layout>
p
