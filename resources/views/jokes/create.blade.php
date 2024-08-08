<x-layout title="Submit your joke">
<form method="post" action="/jokes/store">
@csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new Joke:</h2>
      {{-- <p class="mt-1 text-sm leading-6 text-gray-600">Subheading text</p> --}}

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Joke Title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
              <input typve="text" name="title" id="title" value="{{ old('title') }}" placeholder="eg. Snowmen" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
            </div>
            @error('title')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror
          </div>
        </div>

        <div class="col-span-full">
          <label for="joke" class="block text-sm font-medium leading-6 text-gray-900">The Main Text of your Joke</label>
          <div class="mt-2">
            <textarea id="joke" name="joke" rows="3" placeholder="Two snowmen standing in the snow, one turns to the other and says...." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('joke') }}</textarea>
            @error('joke')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">(Remember, if your joke has a punchline, please put it in the punchline field below.)</p>
        </div>

        <div class="sm:col-span-4">
          <label for="punchline" class="block text-sm font-medium leading-6 text-gray-900">Punchline</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="punchline" id="punchlline" value="{{ old('punchline') }}" placeholder="Can you smell carrots?" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
            </div>
            @error('punchline')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="Category" class="block text-sm font-medium leading-6 text-gray-900">Joke Category</label>
          <div class="mt-2">
          {{--
            TODO: add a livewire component that allows the user to soft-add a catagory to the AvailableCatagories model
            the admin will then confirm the catagory or reject the catagory with a more appropriate catagory selected which
            will be then set to the users joke.
          --}}
            <select id="category" name="category"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option value="">Please Choose...</option>

            @foreach($categories as $category)
                @if ($category === old('category') )
                    <option value="{{ $category }}" selected>{{ $category }}</option>
                @else
                    <option value="{{ $category }}">{{ $category }}</option>
                @endif
            @endforeach

            </select>
          </div>
            @error('category')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror

        </div>


        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover illustration</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="file-upload" name="graphics" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
            @error('graphics')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="author_name" class="block text-sm font-medium leading-6 text-gray-900">Author Name</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="author_name" id="author_name" placeholder="Fred Bloggs" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Author Photo</label>
          <div class="mt-2 flex items-center gap-x-3">
            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
            </svg>
            <input type="file" name="author_photo" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</input>
          </div>
            @error('author_photo')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror
        </div>

        <div class="sm:col-span-4">
          <label for="author_link" class="block text-sm font-medium leading-6 text-gray-900">Author attribution link</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">http:://www.</span>
              <input type="text" name="author_link" id="author_link" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="comedystore.com">
            </div>
          </div>
            @error('author_link')<div class="text-red-500 text-xs font-semibold"> {{ $message }} </div>@enderror
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</x-layout>

