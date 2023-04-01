<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryTable extends Component
{
    protected $listeners = ['CategoryCreate' => 'render'];
    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.category-table');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('success','Category berhasil terhapus');
    }
}
