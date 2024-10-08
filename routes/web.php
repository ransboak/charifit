<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;
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
    $activities = DB::table('activities')->orderBy('created_at', 'desc')->take(3)->get();
    return view('frontend.pages.index', compact('activities'));
});

Route::get('/home', [PageController::class, 'index'])->name('home');

Route::get('/blog', [PageController::class, 'blogPage'])->name('blog');

Route::get('/about', [PageController::class, 'aboutPage'])->name('about');

Route::get('/donations', [PageController::class, 'donationsPage'])->name('donations');

Route::get('/donationss', [PageController::class, 'donationPage'])->name('donationss');

Route::get('donation/{id}', [PageController::class, 'singleDonationPage'])->name('donation');

Route::get('donationn/{id}', [PageController::class, 'singleDonationnPage'])->name('donationn');

Route::get('blog-single/{id}', [PageController::class, 'singleBlogPage'])->name('single-blog');

Route::get('/projects', [PageController::class, 'projectsPage'])->name('projects');

Route::get('/project', [PageController::class, 'singleProjectPage'])->name('project');

Route::get('/events', [PageController::class, 'eventsPage'])->name('events');

Route::get('/event', [PageController::class, 'singleEventPage'])->name('event');

Route::get('/mission', [PageController::class, 'missionPage'])->name('mission');

Route::get('/team', [PageController::class, 'teamPage'])->name('team');

Route::get('/faqs', [PageController::class, 'faqsPage'])->name('faqs');

Route::post('/donate', [DonationController::class, 'donate'])->name('donate');





Route::get('/dashboard', function () {
    return view('backend.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboardblogs', [PageController::class, 'dashBlogsPage'])->name('dashBlogsPage');
    Route::get('/dashboardDonations', [PageController::class, 'dashDonationsPage'])->name('dashDonationsPage');
    Route::post('/addBlog', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/addActivity', [ActivityController::class, 'addActivity'])->name('addActivity');
});

require __DIR__.'/auth.php';
