<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GalleryBoard extends Component
{
    public int $life;
    public string $text;
    public string $name;
    public string $image;

    /**
     * Create a new component instance.
     */
    public function __construct(int $life, string $text, string $name, string $image)
    {
        $this->life = $life;
        $this->text = $text;
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gallery-board');
    }
}
