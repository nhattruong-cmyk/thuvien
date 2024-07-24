<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Header extends Component
{
    public $categories;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Lấy danh sách danh mục
        $this->categories = Category::orderBy('name', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
