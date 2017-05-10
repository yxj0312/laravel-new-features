 <?php

/*Features 10 - Object based event

Old way before 5.4*/
// Event::listen('eloquent.created: App\Post',function(){
// 	var_dump('We caught a post was created');
// });

// Features 8 - realtime facades :
// generate facade in realtime, if u just put 'Facades\' in front of it
use Facades\App\Services\Twitter;
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
    return view('welcome');
});
// New Features 1-Sanitzing-Middleware

Route::get('facade',function(){
	Twitter::publish('Here is my status');

	// When u use it this way, u can still test it
	// i.e.
	// Twitter::shouldReceive('publish')->with();
});

Route::get('form',function() {
	return view('form');
});

Route::post('form',function() {
	return request()->all();
});

//Feature 4: Fluent Routing
Route::name('dashboard')
	->middleware('auth')
	->get('/dashboard',function(){

	});