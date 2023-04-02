<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $description;
    public $photo;
    public $price;

    public function mount($product)
    {
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->photo = $product->photo;
        $this->price = $product->price;
    }

    public function render()
    {
        return view('livewire.product-edit');
    }
    public function update()
    {
        $validated = $this->validate([
            'name' => 'required|string|min:3',
            'description' => 'required',
            'photo' => 'required|image',
            'price' => 'required|integer',
        ]);
        // upload foto
        $validated['photo'] = $this->photo->store('image','public');
        //convert string to slug
        $validated['slug'] = Str::slug($validated['name']);

        Product::where('id',$this->product_id)->update($validated);

        $this->name = NULL;
        $this->description = NULL;
        $this->photo = NULL;
        $this->price = NULL;

        redirect()->route('dashboard.product')->with('success','Category Berhasil di Update');
    }
}
