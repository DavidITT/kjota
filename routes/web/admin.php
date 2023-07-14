<?php

use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('login');

    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->middleware('can:admin.dashboard.index')
        ->name('dashboard');

    Route::get('/products', function () {
        return view('admin.products.index');
    })->middleware('can:admin.products.index')
        ->name('products.index');

    Route::get('/orders', function () {
        return view('admin.orders.index');
    })->middleware('can:admin.orders.index')
        ->name('orders.index');

    Route::get('/sales', function () {
        return view('admin.sales.index');
    })->middleware('can:admin.sales.index')
        ->name('sales.index');

    /*
    |--------------------------------------------------------------------------
    | Contact
    |--------------------------------------------------------------------------
    */

    Route::get('/contact', [ContactController::class, 'index'])
        ->middleware('can:admin.contact.index')
        ->name('contact.index');

    Route::get('/contact_emails/{type}', [ContactController::class, 'getContactEmails'])
        ->middleware('can:admin.contact.get');

    Route::prefix('contact')->group(function () {
        Route::post('/mark_as_favorite/{type}', [ContactController::class, 'markAsFavorite']);
        Route::post('/mark_as_important/{type}', [ContactController::class, 'markAsImportant']);
        Route::post('/mark_all/read', [ContactController::class, 'markAllAsRead']);
        Route::post('/mark_all/unread', [ContactController::class, 'markAllAsUnread']);
        Route::post('/mark_all/favorite', [ContactController::class, 'markAllAsFavorite']);
        Route::post('/mark_all/remove_favorite', [ContactController::class, 'removeFromFavorite']);
        Route::post('/mark_all/important', [ContactController::class, 'markAllAsImportant']);
        Route::post('/mark_all/remove_important', [ContactController::class, 'removeFromImportant']);
        Route::post('/mark_all/delete', [ContactController::class, 'deleteEmails']);
        Route::post('/send/email', [ContactController::class, 'sendEmail']);
        Route::post('/reply/email', [ContactController::class, 'replyEmail']);
    });

    /*
   |--------------------------------------------------------------------------
   | Content
   |--------------------------------------------------------------------------
   */

    Route::prefix('content')->group(function () {
        //Branchs
        Route::get('/get_branches', [BranchController::class, 'getBranchs']);
        Route::get('/branchs', [BranchController::class, 'index'])->name('branchs.index');
        Route::post('branch/delete/{id}', [BranchController::class, 'deleteBranch']);
        Route::post('branch/create', [BranchController::class, 'createBranch']);
        Route::post('branch/update/{id}', [BranchController::class, 'updateBranch']);
    });

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */
    Route::get('/categories', [CategoryController::class, 'index'])
        ->middleware('can:admin.categories.index')
        ->name('categories.index');

    Route::prefix('category')->group(function () {
        Route::get('/get_categories/{type}', [CategoryController::class, 'getCategories']);
        Route::post('/create', [CategoryController::class, 'createCategory']);
        Route::get('/get_parent_categories', [CategoryController::class, 'getParentCategories']);
    });






});


