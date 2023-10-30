<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $fontClass;
    public $available_locales;

    public function __construct($fontClass = 'color--white')
    {
        $this->fontClass = $fontClass;
        $this->available_locales=config('app.localesNames');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation');
    }
}
