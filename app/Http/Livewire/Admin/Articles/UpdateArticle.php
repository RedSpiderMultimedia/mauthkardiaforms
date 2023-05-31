<?php

namespace App\Http\Livewire\Admin\Articles;

use File;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UpdateArticle extends Component
{
    use WithFileUploads;

    public $article;
    public $categories;
    public $title;
    public $slug;
    public $category_id;
    public $body;
    public $image_path;
    public $is_published;
    public $filename;
    public $current_image;


    protected $rules = [
        'title' => 'required|max:55',
        'slug' => 'required',
        'category_id' => 'required',
        'image_path' => 'nullable|image|max:2048',
        'body' => 'required',
        'is_published' => 'nullable',
    ];


    public function mount($id) {

        $this->categories = Category::all();

        $article = Article::find($id);
       // dd($article);
        $this->article_id = $article->id;
        $this->title = $article->title;
        $this->slug = $article->slug;
        $this->category_id = $article->category_id;
        $this->current_image = $article->image_path;
        $this->body = $article->body;
        $this->is_published = $article->is_published;



    }

    public function update() {

        //dd(public_path($this->current_image));

        $this->validate();
        if ($this->image_path) {
            $filename = $this->image_path->store('uploads', 'public');
            $this->image_path = $filename;

        $article = Article::find($this->article_id);
        $article->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'image_path' => $filename,
            'body' => $this->body,
            'is_published' => $this->is_published,
        ]);


        //unlink(public_path('uploads/' . $this->current_image));

    } else {
        $article = Article::find($this->article_id);
        $article->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => $this->body,
            'is_published' => $this->is_published,
        ]);
    }

        return redirect()->route('show-articles');

    }
    public function render()
    {
        return view('livewire.admin.articles.update-article');
    }
}
