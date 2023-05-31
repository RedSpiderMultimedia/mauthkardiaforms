<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AddCategory extends Component
{
    public $name;

    public function mount() {
        $this->categories = Category::all()->sortByDesc('created_at');
    }

    protected $rules = [
        'name' => 'required|min:5|unique:categories'
    ];

    public function save() {
        $this->validate();
        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        return redirect()->to('/admin/categories/add-category');
    }

    public function destroy($id){
        $category = Category::where('id', $id);
        $category->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.admin.categories.add-category');
    }
}
