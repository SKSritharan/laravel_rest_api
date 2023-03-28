<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setup', function () {
    $credintials = [
        'email' => 'admin@admin.com',
        'password' => 'password'
    ];

    if (!Auth::attempt($credintials)) {
        $user = new \App\Models\User();

        $user->name = 'Admin';
        $user->email = $credintials['email'];
        $user->password = Hash::make($credintials['password']);

        $user->save();

        
        if (Auth::attempt($credintials)) {
            $user = Auth::user();

            $adminToken = $user->createToken('admin-token', ['create' , 'update' , 'delete']);
            $updateToken = $user->createToken('update-token', ['create' , 'update']);
            $basicToken = $user->createToken('basic-token');

            return [
                'admin' => $adminToken->plainTextToken,
                'update' => $updateToken->plainTextToken,
                'basic' => $basicToken->plainTextToken,
            ];
        }
    }
});