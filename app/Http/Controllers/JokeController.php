<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use App\Models\AvailableCategory;
use App\Http\Controllers\Controller;

class JokeController extends Controller
{
    // index returns all of the paginated jokes
    public function index()
    {
        return view('jokes/index', ['jokes' => Joke::latest()->paginate(10)]);
    }

    // create displays the create form
    public function create()
    {
        return view('jokes/create', ['categories' => AvailableCategory::pluck('category')]);
    }

    // store processes the create form, validates it and enters it into the model
    public function store(Request $request)
    {
        // dd($request->all());
        $vdata = $request->validate([
            'title' => 'required',
            'joke' => 'required',
            'categories' => 'required',
            'graphics' => 'image|max:2048',
            'author_link' => 'url',
            'author_photo' => 'image|max:2048'
        ]);

        // add the url prepend to the beginning as it is not supplied through the form due to a prepend in the form field
        $request->author_photo = "http://www." .$request->author_photo;

        if($request->hasFile('graphics')){
            $graphics = $request->file('graphics')->store('public');
        }

        if($request->hasFile('author_photo')){
            $author_photo = $request->file('author_photo')->store('public');
        }
    }

    // show displays one selected joke from the database
    public function show(Joke $joke)
    {
        return view('jokes/show', ['joke' => $joke]);
    }

    // edit displays the edit form
    public function edit()
    {

    }

    // update processes the edit form, validates it and enters the updated entry into the model
    public function update()
    {

    }

    // destroy deletes the selected joke in the model
    public function destroy()
    {

    }
}
