<?php
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
	$slides = App\Slides::all();

	return view('demo', ['slides' => $slides]);
});


Route::get('/submit', function () {
	return view('submit');
});


use Illuminate\Http\Request;
Route::post('/submit', function (Request $request) {
	$data = $request->validate([
		'title' => 'required|max:255',
		'url' => 'required|url|max:255',
		'description' => 'required|max:255',
	]);

	$link = tap(new App\Link($data))->save();

	return redirect('/');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');