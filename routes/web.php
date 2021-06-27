<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

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

/*Route::get('/', function () {
    return view('welcome');
});

// route to users 
 Route::get('/users', function(){
     return 'welcome to the users page';
 });
//route json object 

Route::get('/users', function(){
    return response()->json([
        'name'=>'ash',
        'last name' => 'tahmasbi'
    ]);
    
});
// route to users 
Route::get('/users', function() {
    return redirect('/');
});


Route::get('/', function(){
    return view('home');
});

*/

//returining controller 

Route::get('/products', [productsController::class, 'index']);