<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DownloadsBoard extends Component
{
    public string $link;
    public string $version;
    public string $description;
    public int $key;
    /**
     * Create a new component instance.
     */
    public function __construct(string $link, string $version, string $description, int $key)
    {
        $this->link = $link;
        $this->version = $version;
        $this->description = $description;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.downloads-board');
    }
}
