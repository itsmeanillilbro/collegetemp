<?php

use App\Filament\Admin\Resources\BanneResource;
use App\Http\Controllers\admin\AcademicController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\ImagesController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\admin\SSRController;
use App\Http\Controllers\admin\TeamsController;
use App\Http\Controllers\admin\TimelineController;
use App\Http\Controllers\admin\TopbannerController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\PopupController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admindashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('adminprofile');
    // Route::get('/admin/about', [AdminController::class, 'about'])->name('adminabout');
    Route::get('/admin/edit', [AdminController::class, 'edit'])->name('adminedit');
    Route::get('/admin/publish', [AdminController::class, 'publish'])->name('adminpublish');
    Route::get('/admin/news', [AdminController::class, 'news'])->name('adminnews');
    Route::get('/admin/newspublish', [AdminController::class, 'newspublish'])->name('adminnewspublish');
    Route::get('/admin/editnews', [AdminController::class, 'editnews'])->name('adminnewsedit');
    Route::get('/admin/adduser', [AdminController::class, 'adduser'])->name('adminadduser');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('adminusers');

    Route::prefix('admin')->group(function () {
    Route::resource('news', NewsController::class)->only([
        'index','create','store','edit', 'update', 'destroy','show'
    ]);
    Route::post('/admin/news/publish/{news}', [NewsController::class, 'publish'])->name('news.publish');
});

    Route::prefix('admin')->group(function () {
        Route::resource('about', AboutController::class)->only([
          'index','create','store','edit', 'update', 'destroy','publish'
        ]);
        Route::post('/admin/about/publish/{about}', [AboutController::class, 'publish'])->name('about.publish');
});

Route::prefix('admin')->group(function () {
    Route::resource('testimonial', TestimonialController::class)->only([
      'index','create','store','edit', 'update', 'destroy','show',
    ]);
    Route::post('/admin/testimonial/publish/{testimonial}', [TestimonialController::class, 'publish'])->name('testimonial.publish');

  });

Route::prefix('admin')->group(function(){
    Route::resource('academic',AcademicController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/academic/publish/{id}', [AcademicController::class, 'publish'])->name('academic.publish');
});
Route::prefix('admin')->group(function(){
    Route::resource('popup',PopupController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/popup/publish/{id}', [PopupController::class, 'publish'])->name('popup.publish');
});

Route::prefix('admin')->group(function(){
    Route::resource('banner',BannerController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/banner/publish/{id}', [BannerController::class, 'publish'])->name('banner.publish');
});

Route::prefix('admin')->group(function(){
    Route::resource('notice',NoticeController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/notice/publish/{id}', [NoticeController::class, 'publish'])->name('notice.publish');
});

Route::prefix('admin')->group(function(){
    Route::resource('timeline',TimelineController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/timeline/publish/{id}', [TimelineController::class, 'publish'])->name('timeline.publish');
});

Route::prefix('admin')->group(function(){
    Route::resource('gallery',GalleryController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/gallery/publish/{id}', [GalleryController::class, 'publish'])->name('gallery.publish');
});

Route::prefix('admin')->group(function(){
    Route::resource('images',ImagesController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::get('/images/{gallery_id}', [ImagesController::class,'list'])->name('images.list');



});

Route::prefix('admin')->group(function(){
    Route::resource('ssr',SSRController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/ssr/publish/{id}', [SSRController::class, 'publish'])->name('ssr.publish');
});
Route::prefix('admin')->group(function(){
    Route::resource('teams',TeamsController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/teams/publish/{id}', [TeamsController::class, 'publish'])->name('teams.publish');

});
Route::prefix('admin')->group(function(){
    Route::resource('topbanner',TopbannerController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/topbanner/publish/{id}', [TopbannerController::class, 'publish'])->name('topbanner.publish');
});

Route::prefix('admin')->group(function(){
    Route::resource('menu',MenuController::class)->only([
        'index', 'create', 'store', 'edit', 'update', 'destroy'
    ]);
    Route::post('/admin/menu/publish/{id}', [MenuController::class, 'publish'])->name('menu.publish');
});


});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/download', [HomeController::class, 'download'])->name('download');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/academics', [HomeController::class, 'academics'])->name('academics');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/alumni', [HomeController::class, 'alumni'])->name('alumni');
Route::get('/dropdown', [HomeController::class, 'dropdown'])->name('dropdown');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/newsdetails/{id}', [HomeController::class, 'newsdetails'])->name('news_details');
Route::get('/academicdetails', [HomeController::class, 'academicdetails'])->name('academicdetails');
Route::get('/teams', [HomeController::class, 'teams'])->name('teams');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/images', [HomeController::class, 'images'])->name('images');



require __DIR__.'/auth.php';
