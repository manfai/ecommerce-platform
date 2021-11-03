<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $style;
    public $background = 'https://www.ikea.com.hk/dairyfarm/hk/pageImages/page__en_hk_1575441389__0.jpeg';
    public function __construct($style = 'style-1')
    {
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero.'.$this->style);
    }
}
