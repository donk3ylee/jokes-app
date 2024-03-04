<x-layout title="{{ $joke->title }}">

    <x-jokes.joke-title :title="$joke->title" class="text-2xl" />
    <x-jokes.joke-text :text="$joke->joke" class="text-base" />
    <x-jokes.joke-punchline :punchline="$joke->punchline" hide=true />

    {{-- {{ $joke->category }}
    {{ $joke->graphics }}
    {{ $joke->author_name }}
    {{ $joke->author_link }}
    {{ $joke->author_photo }} --}}
</x-layout>
