<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Models\SubCategorie;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//======user routes======== 
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//=======end==========//


//========= admin routes ============//

Route::group(['prefix'=>'admin','middleware'=>'redirectAdmiin'],function () {
  Route::get('/login',[AdminAuthController::class,'showLoginForm'])->name('admin.login');
  Route::post('/login',[AdminAuthController::class,'login'])->name('admin.login.post');
  Route::post('/logout',[AdminAuthController::class,'logout'])->name('admin.logout');
});

Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function (){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard.index');

    //========category routes=========/
    Route::get('/category/index',[Category::class,'index'])->name('admin.category.index');
    Route::get('/add/category/form',[Category::class,'add_category_form'])->name('admin.add.category.form');
    Route::post('/add/category',[Category::class,'add_category'])->name('admin.add.category');
    Route::get('/edit/category/form/{category_id}',[Category::class,'edit_category_form'])->name('admin.edit.category.form');
    Route::put('/update/category/{category_id}',[Category::class,'update_category'])->name('admin.update.category');
    Route::delete('/delete/category/{category_id}',[Category::class,'delete_category'])->name('admin.delete.category');

    //=======sub category rutes=====//
    Route::get('/subcategory/index',[SubCategoryController::class,'index'])->name('admin.subcategory.index');
    Route::get('/subcategory/addForm',[SubCategoryController::class,'addSubCategoryForm'])->name('admin.add.subcategory.form');
    Route::post('/subcateory/add',[SubCategoryController::class,'addSubCategory'])->name('admin.add.subcategory');
    Route::get('/subcategory/edit/form/{subcategory_id}',[SubCategoryController::class,'editSubcategoryForm'])->name('admin.edit.subcategory.form');
    Route::put('/update/subcategory/{subcategory_id}',[SubCategoryController::class,'updateSubCategory'])->name('admin.update.subcategory');
    Route::delete('/subcategory/delete/{subcategory_id}',[SubCategoryController::class,'deleteSubCategory'])->name('admin.delete.subcategory');
});

//============end==========//





require __DIR__.'/auth.php';
