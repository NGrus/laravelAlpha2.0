<?php

use App\Http\Controllers\TopicController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
  return view('test');
});
Route::get('/messages', function () {
  echo "Hello World!";
});
Route::get('/hello', function () {
  echo "sup?";
});
Route::get('/messages', 'MessageController@showAll');
Route::post('/create', 'MessageController@create');
Route::get('/messages/{id}', 'MessageController@view');
Route::delete('/messages/{id}', 'MessageController@delete');
// Route::get('/index', function() {
//   return view('index');
// });
Route::get('/index', 'TopicController@showAll');
Route::get('/topic', 'SingleTopicController@showSingle');
?>
