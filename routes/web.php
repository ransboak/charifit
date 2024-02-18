<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.pages.index');
});

Route::get('/home', [PageController::class, 'index'])->name('home');

Route::get('/blog', [PageController::class, 'blogPage'])->name('blog');

Route::get('/about', [PageController::class, 'aboutPage'])->name('about');

Route::get('/donations', [PageController::class, 'donationsPage'])->name('donations');

Route::get('/donation', [PageController::class, 'singleDonationPage'])->name('donation');

Route::get('/blog-single', [PageController::class, 'singleBlogPage'])->name('single-blog');

Route::get('/projects', [PageController::class, 'projectsPage'])->name('projects');

Route::get('/project', [PageController::class, 'singleProjectPage'])->name('project');

Route::get('/events', [PageController::class, 'eventsPage'])->name('events');

Route::get('/event', [PageController::class, 'singleEventPage'])->name('event');

Route::get('/mission', [PageController::class, 'missionPage'])->name('mission');

Route::get('/team', [PageController::class, 'teamPage'])->name('team');

Route::get('/faqs', [PageController::class, 'faqsPage'])->name('faqs');




Route::get('/dashboard', function () {
    return view('backend.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
