<?php
use App\Profile;
use App\User;
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

Route::get('/', function () {
    $posts = App\Post::latest()->paginate(3);
    
            return view('welcome',compact('posts'));
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/freelancer','FreelancerController@index')->name('freelancer');

Route::get('/employer','EmployerController@index')->middleware('rolee')->name('employer');
Route::resource('posts','PostController')->middleware('rolee');

/**admin routes */

Route::get('/admin', 'AdminController@index')->middleware('is_admin')->name('admin');
Route::get('/admin/posts','PadminController@index')->middleware('is_admin')->name('manageposts');
Route::get('/admin/posts/edit','PadminController@edit')->middleware('is_admin')->name('admin.posts.edit');
Route::post('/admin/posts/store','PadminController@store')->middleware('is_admin')->name('admin.posts.store');
Route::get('/admin/posts/show','PadminController@show')->middleware('is_admin')->name('admin.posts.show');
Route::put('/admin/posts/update','PadminController@update')->middleware('is_admin')->name('admin.posts.update');
Route::post('/admin/posts/destroy','PadminController@destroy')->middleware('is_admin')->name('admin.posts.destroy');
Route::get('/admin/posts/create','PadminController@create')->middleware('is_admin')->name('admin.posts.create');

Route::get('/admin/freelancer','Fadmincontroller@index')->name('admin.freelancer');
Route::get('/admin/employer','EadminController@index')->name('admin.employer');
Route::delete('/admin/employer/destroy','EadminController@destroy')->name('admin.employer.destroy');
Route::get('/admin/employer/show','EadminController@show')->name('admin.employer.show');



/**profile routes */

Route::get('/profile','ProfileController@index')->name('profile');
Route::get('/profile/create','ProfileController@create')->name('profile.create');
Route::get('/profile/edit','ProfileController@edit')->name('profile.edit');
Route::put('/profile/update','ProfileController@update')->name('profile.update');
Route::get('/profile/destroy','ProfileController@destroy')->name('profile.destroy');
Route::post('/profile/store','ProfileController@store')->name('profile.store');
/**routes for portfolio */

Route::get('/portfolio/create','PortfolioController@create')->name('portfolio.create');
Route::post('/portfolio/store','PortfolioController@store')->name('portfolio.store');

/**routes for certificate */

Route::get('/certificate/create','CertificateController@create')->name('certificate.create');
Route::post('/certificate/store','CertificateController@store')->name('certificate.store');

/**routes for apply */

Route::get('/apply','ApplyController@index')->name('apply');
Route::get('/apply/create','ApplyController@create')->name('apply.create');
Route::post('/apply/store','ApplyController@store')->name('apply.store');
Route::get('/apply/destroy','ApplyController@destroy')->name('apply.destroy');
Route::get('/apply/edit','ApplyController@edit')->name('apply.edit');
Route::put('/apply/update','ApplyController@update')->name('apply.update');
Route::get('/apply/show','ApplyController@show')->name('apply.show');

Route::get('/jobs','JobsController@index')->name('jobs');
Route::get('/all-emp','AdminController@show');





