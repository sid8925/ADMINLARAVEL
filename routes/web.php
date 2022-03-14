<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



//LOGIN

Route::get('/',[LoginController::class,'index']);

Route::post('/adminlogin', function (Request $request) {
    $request->input();
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        // 'device_name' => 'required',
    ]);
       $data = $request->input();
   if (!Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role' => '1'])) {
          // return response(['message'=>['The provided credentials are incorrect.']],404);
           return redirect('/')->with('flash_message_error', 'Invalid Email Id or Password');
           //ERROR INVALID USER
    }else{
        //USER VALID
        return redirect('dashboard')->with('flash_message_success', 'Login Success');
        //redirect('/dashboard'); s
    }
});

//LOGIN 

//ADMIN ROUTES IN MIDDLEWARE

Route::get('dashboard',[DashboardController::class,'index']);


//ADMIN ROUTES IN MIDDLEWARE