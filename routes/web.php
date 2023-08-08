<?php


use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Front\FrontLandingController;
use App\Http\Controllers\Front\FrontPostController;
use App\Http\Controllers\Front\FrontMenuController;
use App\Http\Controllers\Front\FrontContactController;


use App\Http\Controllers\UserController;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontLandingController::class, 'index'])->name('landing');

Route::get('/post', [FrontPostController::class, 'index'])->name('post');
Route::get('/frontpost/{id}', [FrontPostController::class, 'show'])->name('frontpost');



Route::get('/menu', [FrontMenuController::class, 'index'])->name('menu');
Route::get('/frontmenu/{id}', [FrontMenuController::class, 'show'])->name('frontmenu');

Route::get('/contact', [FrontContactController::class, 'index'])->name('contact');




Route::group(['middleware' => 'auth'], function () {

	// Route::get('/', [HomeController::class, 'home']);
	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

	#admin
	#posts
	Route::get('/posts', [PostController::class, 'index'])->name('posts');
	Route::get('/detailposts/{id}', [PostController::class, 'detailticket'])->name('detailposts');
	Route::get('/createposts', [PostController::class, 'create'])->name('createposts');
	Route::post('/insertposts', [PostController::class, 'store'])->name('insertposts');
	Route::get('/showposts/{id}', [PostController::class, 'show'])->name('showposts');
	Route::post('/updateposts/{id}', [PostController::class, 'update'])->name('updateposts');
	Route::get('/destroyposts/{id}', [PostController::class, 'destroy'])->name('destroyposts');
	// Route::resource('posts', TicketController::class);

	Route::get('/createmenu', [MenuController::class, 'index'])->name('createmenu');
	Route::get('/buatmenu', [MenuController::class, 'create'])->name('buatmenu');
	Route::post('/insertmenu', [MenuController::class, 'store'])->name('insertemenu');
	Route::get('/detailmenu/{id}', [MenuController::class, 'detailmenu'])->name('detailmenu');
	Route::get('/showmenu/{id}', [MenuController::class, 'show'])->name('showmenu');
	Route::post('/updatemenu/{id}', [MenuController::class, 'update'])->name('updatemenu');
	Route::get('/destroy/{id}', [MenuController::class, 'destroy'])->name('destroymenu');
	// Route::resource('menu', MenuController::class);






	#tutorial
	Route::get('/tutorial', [TutorialController::class, 'index'])->name('tutorial');
	Route::get('/createtutorial', [TutorialController::class, 'create'])->name('createtutorial');


	#User-Management
	Route::get('/user-management', [UserController::class, 'index'])->name('user-management');
	Route::get('/createusers', [UserController::class, 'create'])->name('createusers');
	Route::post('/insertusers', [UserController::class, 'store'])->name('insertusers');
	Route::get('/showusers{id}', [UserController::class, 'show'])->name('showusers');
	Route::post('/updateusers{id}', [UserController::class, 'update'])->name('updateusers');
	Route::get('/destroyusers{id}', [UserController::class, 'destroy'])->name('destroyusers');




	Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

	Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

	Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

	Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');
