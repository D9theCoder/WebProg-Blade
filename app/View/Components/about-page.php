<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AboutUsPage extends Component
{
    public array $team;

    /**
     * Create a new component instance.
     *
     * @param array $team
     */
    public function __construct(array $team = [])
    {
        $this->team = $team;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aboutus-page');
    }
}