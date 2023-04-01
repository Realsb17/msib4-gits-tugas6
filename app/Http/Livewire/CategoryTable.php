<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryTable extends Component
{

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.category-table');
    }
}
