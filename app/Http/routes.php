<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// HOME
Route::get('/', 'WelcomeController@index');

// ARTICLE
get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

// FORM : http://tutov5.dev/users
//get('users', 'UsersController@getInfos');
//post('users', 'UsersController@postInfos');
// FORM (ou plus simple) : http://tutov5.dev/users/infos
Route::controller('users', 'UsersController');

// FORM : http://tutov5.dev/contact/form
Route::controller('contact', 'ContactController');

// PHOTO : http://tutov5.dev/photo/form
Route::controller('photo', 'PhotoController');

// AUTRES EXEMPLES :
/*
// RACINE : http://tutov5.dev/
get('/', function(){
	return view('welcome');
});

// RACINE : http://tutov5.dev/
get( '/', ['as' => 'home', function(){
	return 'Je suis la page d\'accueil !';
}]);

// VIEW : vue1 
get( '/', function(){
	return view('vue1');
});
	
// http://tutov5.dev/1
get('{n}', function($n) {
	return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');

// sans blade
get('article2/{n}', function($n) {
	return view('article2')->with('numero', $n);
})->where('n', '[0-9]+');

// avec blade
get('article/{n}', function($n) {
	return view('article')->with('numero', $n);
})->where('n', '[0-9]+');
get('facture/{n}', function($n) {
	return view('facture')->withNumero($n);
})->where('id', '[0-9]+');
*/




Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
