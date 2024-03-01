    <x-layout  title="Search all jokes">
        {{-- TODO: need to add search functionality --}}
        <div class="grid place-items-center">
        @foreach($jokes as $joke)
            <a href="/jokes/{{ $joke->id }}/show/">
                <x-jokes.joke-card.card-container :joke="$joke" />
            </a>
        @endforeach
        </div>
        {{  $jokes->onEachSide(5)->links() }}
        <p>ksadk sda dkkdk skad sad k as sdkadkkds ska dksksa daskd kskdks kad ksa kkkds akdkgfkdfksdf kkf dsk kdskakd</p>
    </x-layout>
