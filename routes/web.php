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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('a-propos', 'HomeController@apropos')->name('apropos');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('archivements', 'HomeController@archivements')->name('archivements');


Route::post('contact/sendMail', 'HomeController@senMailToMe')->name('senMailToMe');




/*Route::get('chambres', function ($id) {
    return view('chambre/chambres');
});*/
/*Route::get('sms', function () {
   $basic  = new \Nexmo\Client\Credentials\Basic('181ff0f9', 'aXiX73JU5OfJvvtg');
	$client = new \Nexmo\Client($basic);

	$message = $client->message()->send([
	    'to' => '237697344096',
	    'from' => 'Dakotel',
	    'text' => 'Vous venez d\'effectuer une reservation de la chambre7842. Nous vous attendons.'
	]);

	dd($message);
});
*/
//Auth::routes();

//Route::get('/admin', 'Admin\HomeAdminController@indexAdmin')->name('homeAdmin');

/*Route::resources([
    'admin/manager_chambres' => 'Admin\AdminChambreController'
]);*/

