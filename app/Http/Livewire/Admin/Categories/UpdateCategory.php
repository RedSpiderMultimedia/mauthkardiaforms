<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class UpdateCategory extends Component
{
    public $category;
    public $name;
    public $category_id;

    public function mount($id) {

        $category = Category::find($id);
        $this->category_id = $category->id;
        $this->name = $category->name;
    }

    public function update() {
        $this->validate([
            'category_id' => 'required',
            'name' => 'required|min:3|max:55|unique:categories',
        ]);
        $category = Category::find($this->category_id);
        $category->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        return redirect()->route('show-categories');

    }
    public function render()
    {
        return view('livewire.admin.categories.update-category');
    }
}
