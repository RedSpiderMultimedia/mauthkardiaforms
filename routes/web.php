<?php

use App\Http\Livewire\Admin\Forms;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;
use App\Http\Livewire\Forms\AddAssessment;
use App\Http\Livewire\Forms\AddDisclosure;
use App\Http\Livewire\Forms\ViewAssessment;
use App\Http\Livewire\Forms\ViewDisclosure;
use App\Http\Livewire\Admin\Articles\AddArticle;
use App\Http\Livewire\Admin\Contacts\AddContact;
use App\Http\Livewire\Admin\Contacts\ViewContact;
use App\Http\Livewire\Admin\Articles\ShowArticles;
use App\Http\Livewire\Admin\Contacts\ShowContacts;
use App\Http\Livewire\Admin\Articles\UpdateArticle;
use App\Http\Livewire\Admin\Categories\AddCategory;
use App\Http\Livewire\Admin\Categories\ShowCategories;
use App\Http\Livewire\Admin\Categories\UpdateCategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/contact', AddContact::class)->name('contact');

Route::get('/add-disclosure', AddDisclosure::class)->name('add-disclosure');
Route::get('/add-assessment', AddAssessment::class)->name('add-assesment');


Route::group(['middleware' => 'is_admin'], function () {

Route::get('/admin/articles/add-article', AddArticle::class)->name('add-article')->middleware('is_admin');
Route::get('/admin/articles/show-articles', ShowArticles::class)->name('show-articles')->middleware('is_admin');
Route::get('/admin/articles/update-article/{id}', UpdateArticle::class)->name('update-article')->middleware('is_admin');

Route::get('/admin/categories/add-category', AddCategory::class)->name('add-category')->middleware('is_admin');
Route::get('/admin/categories/show-categories', ShowCategories::class)->name('show-categories')->middleware('is_admin');
Route::get('/admin/categories/update-category/{id}', UpdateCategory::class)->name('update-category')->middleware('is_admin');

Route::get('/admin/contacts/show-contacts', ShowContacts::class)->name('show-contacts')->middleware('is_admin');
Route::get('/admin/contacts/view-contact/{id}', ViewContact::class)->name('view-contact');

Route::get('/admin/forms', Forms::class)->name('forms')->middleware('is_admin');

Route::get('/view-disclosure/{id}', ViewDisclosure::class)->name('view-disclosure')->middleware('is_admin');

Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');


Route::get('/view-assessment/{id}', ViewAssessment::class)->name('view-assessment')->middleware('is_admin');

 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin-home')->middleware('is_admin');

