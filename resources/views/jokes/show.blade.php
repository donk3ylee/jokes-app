<x-layout title="{{ $joke->title }}">
    <x-jokes.joke-graphic :uri="$joke->graphics" class="max-h-56 w-100" />
    <x-jokes.joke-title :title="$joke->title" class="text-2xl" />
    <x-jokes.joke-text :text="$joke->joke" class="text-base" />
    <x-jokes.joke-punchline :punchline="$joke->punchline" hide=true />
    <div class="inline-flex items-center mt-3">
        <x-jokes.joke-author-photo :uri="$joke->author_photo" size="50" class="mr-2" />
        <x-jokes.joke-author-signature :author="$joke->author_name" :link="$joke->author_link" />
    </div>
</x-layout>
