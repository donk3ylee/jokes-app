<a href="{{ url('/jokes/{$joke}/show/') }}">
    <div class="bg-slate-300 mx-3 mt-2 flex max-w-xl rounded-xl border-4 border-slate-500 p-5">
        <div class="flex-auto pr-2">
            <x-jokes.joke-title :name="$joke->name" class="text-red-500"/>
            <x-jokes.joke-text :text="$joke->joke" length=104 link="{{ url('/jokes/{$joke}/show/') }}" />
            <x-jokes.joke-category :cat="$joke->category" />
            <span class="ml-1 text-xs">joke</span>
            <x-jokes.joke-author-signature :link="$joke->author_link" :author="$joke->author_name" />
        </div>
        {{-- TODO: upto here adding a conditional image into this card for the joke graphic --}}
        <div class="flex-initial hidden w-60 xs:block">
            <img src="img.jpg" alt="" class="h-32 w-32 border-4">
        </div>
    </div>
</a>
