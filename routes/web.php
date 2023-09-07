<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\MailControllar;
use App\Http\Controllers\PostControllar;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FormsControllar;
use App\Http\Controllers\RelationsControllar;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('site1',[SiteController::class,'indexes'])->name('site1');

Route::prefix('site2')->name('site2.')->group(function(){
    Route::get('/', [Site2Controller::class, 'index'])->name('index');
    Route::get('about', [Site2Controller::class, 'about'])->name('about');
    Route::get('contact', [Site2Controller::class, 'contact'])->name('contact');
    Route::get('post', [Site2Controller::class, 'post'])->name('post');
});

Route::prefix('site3')->name('site3.')->group(function () {
    Route::get('/', [Site3Controller::class, 'index'])->name('index');
    Route::get('experience', [Site3Controller::class, 'experience'])->name('experience');
    Route::get('education', [Site3Controller::class, 'education'])->name('education');
    Route::get('skills', [Site3Controller::class, 'skills'])->name('skills');
    Route::get('interests', [Site3Controller::class, 'interests'])->name('interests');
    Route::get('awards', [Site3Controller::class, 'awards'])->name('awards');

});
Route::get('form1',[FormsControllar::class,'form1' ])->name('form1');
Route::post('form1', [FormsControllar::class, 'form1_data'])->name('form1_data');

Route::get('form2', [FormsControllar::class, 'form2'])->name('form2');
Route::post('form2', [FormsControllar::class, 'form2_data'])->name('form2_data');

Route::get('form3', [FormsControllar::class, 'form3'])->name('form3');
Route::post('form3', [FormsControllar::class, 'form3_data'])->name('form3_data');

Route::get('form4', [FormsControllar::class, 'form4'])->name('form4');
Route::post('form4', [FormsControllar::class, 'form4_data'])->name('form4_data');

Route::get('form5', [FormsControllar::class, 'form5'])->name('form5');
Route::post('form5', [FormsControllar::class, 'form5_data'])->name('form5_data');
Route::get('send-mail', [MailControllar::class,'send'])->name('send');

Route::get('posts', [PostControllar::class, 'index'])->name('posts.index');
Route::get('posts/trash', [PostControllar::class, 'trash'])->name('posts.trash');



Route::get('posts/{id}/restore', [PostControllar::class, 'restore'])->name('posts.restore');
Route::get('posts/{id}/forcedelete', [PostControllar::class, 'forcedelete'])->name('posts.forcedelete');



Route::get('posts/restore-all', [PostControllar::class, 'restore_all'])->name('posts.restore_all');
Route::get('posts/delete-all', [PostControllar::class, 'delete_all'])->name('posts.delete_all');


// Route::get('posts/create', [PostControllar::class, 'create'])->name('posts.create');
// Route::post('posts/store', [PostControllar::class, 'store'])->name('posts.store');

// Route::get('posts/{id}', [PostControllar::class, 'show'])->name('posts.show');
// Route::delete('posts/{id}',[PostControllar::class, 'destroy'])->name('posts.destroy');


// Route::get('posts/{id}/edit', [PostControllar::class, 'edit'])->name('posts.edit');
// Route::put('posts/{id}/update', [PostControllar::class, 'update'])->name('posts.update');
Route::resource('posts',PostControllar::class);


//Relation routes
Route::get('one-to-one',[RelationsControllar::class, 'one_to_one'])->name('one-to-one');
Route::get('my-posts/{id}', [RelationsControllar::class, 'one_to_many'])->name('my-posts');
Route::post('one-to-many', [RelationsControllar::class, 'one_to_many_data'])->name('one_to_many_data');
