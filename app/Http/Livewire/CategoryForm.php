<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CategoryForm extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $icon;
    public function render()
    {
        return view('livewire.category-form');
    }
    public function store()
    {
        $validated = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required|image',
        ]);
        // upload foto
        $validated['icon'] = $this->icon->store('image','public');
        //convert string to slug
        $validated['slug'] = Str::slug($validated['name']);
        Category::create($validated);

        $this->name = NULL;
        $this->description = NULL;
        $this->icon = NULL;
    }


}
