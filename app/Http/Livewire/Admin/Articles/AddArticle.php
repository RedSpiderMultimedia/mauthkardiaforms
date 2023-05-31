<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddArticle extends Component
{

    use WithFileUploads;

    public $categories;
    public $title;
    public $slug;
    public $category_id;
    public $body;
    public $image_path;
    public $is_published = true;

    protected $rules = [
        'title' => 'required|min:3|max:255|unique:articles',
        'category_id' => 'required',
        'image_path' => 'required|image|max:2048',
        'body' => 'required',
        'is_published' => 'nullable',
    ];

    public function mount(){
        $this->categories = Category::all();
    }

    public function save(){


        $this->validate();
        if (! is_null($this->image_path)) {
            $filename = $this->image_path->store('uploads', 'public');
            $this->image_path = $filename;
        }
        Article::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'category_id' => $this->category_id,
            'image_path' => $filename,
            'body' => $this->body,
            'is_published' => $this->is_published,
        ]);

        return redirect()->to('/admin/articles/show-articles');
    }

    public function render()
    {
        return view('livewire.admin.articles.add-article');
    }
}
