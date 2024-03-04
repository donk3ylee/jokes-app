<x-layout title="{{ $joke->title }}">

    <x-jokes.joke-title :title="$joke->title" class="text-2xl" />
    <x-jokes.joke-text :text="$joke->joke" class="text-base" />

</x-layout>
