<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;
    public $categories_id;
    public $categories;
    public $name;
    public $description;
    public $price;
    public $photo;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.product-form');
    }
    public function store(){
        $validated = $this->validate([
            'categories_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|image',
        ]);
        // upload foto
        $validated['photo'] = $this->photo->store('image','public');
        //convert string to slug
        $validated['slug'] = Str::slug($validated['name']);
        product::create($validated);

        $this->categories_id = NULL;
        $this->name = NULL;
        $this->description = NULL;
        $this->price = NULL;
        $this->photo = NULL;
        $this->emit('ProductCreate');
    }
}
