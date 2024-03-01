<?php

namespace App\View\Components\jokes;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class JokeText extends Component
{
    private $text; // the main text of the joke
    private $length; // the number of letters to limit the joke to
    private $append; // the string to append to the end of the joke text to denote there is more. Default "..."
    private $link; // the url to follow when a user click on the append link
    public $jokeText; // the formatted string to be returned
    /**
     * Create a new component instance.
     */
    public function __construct($text, $length = null, $append = " ...", $link = null)
    {
        $this->text = $text;
        $this->length = $length;
        $this->append = $append;
        $this->link = $link;

        if(isset($this->link)){
            $this->append = "<a href='". $this->link ."'>". $this->append ."</a>";
        }
        $this->length ? $this->jokeText = Str::limit($this->text, $this->length, $this->append) : $this->jokeText = $this->text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.jokes.joke-text');
    }
}
