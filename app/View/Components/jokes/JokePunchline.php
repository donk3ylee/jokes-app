<?php

namespace App\View\Components\jokes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JokePunchline extends Component
{
    private $hide;
    private $openTag;
    public $punchline;
    /**
     * Create a new component instance.
     */
    public function __construct($punchline, $hide = false, $openTag = "show punchline...")
    {
        //
        $this->hide = $hide;
        $this->openTag = $openTag;
        $this->punchline = $punchline;

        if ($this->hide == true) {
            $this->punchline = <<<end
                <div x-data="{ open: false }" x-cloak>
                    <button x-on:click="open = ! open" x-bind:class=" open ? 'hidden' : ''" >$this->openTag</button>
                    <div x-show="open">$this->punchline</div>
                <div>
            end;
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.jokes.joke-punchline');
    }
}
