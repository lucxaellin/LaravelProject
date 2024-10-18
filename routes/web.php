<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {
    return view('CheckUser'); 
})->name('CheckUser');


Route::get('/unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized');


Route::post('/set-role', function (Request $request) {
    $request->validate(['role' => 'required|in:teacher,student,anonymous']);
    
    session(['user_role' => $request->input('role')]);
    

    Log::info('Session data after setting role: ', session()->all());

    
    if ($request->input('role') === 'teacher') {
        return redirect()->route('username_form');
    } elseif ($request->input('role') === 'student') {
        return redirect()->route('student_dashboard'); 
    } else {
        return redirect()->route('unauthorized'); 
    }
})->name('set.role');


Route::middleware([CheckUserRole::class])->group(function () {
    Route::get('/username_form', function () {
        return view('username_form'); 
    })->name('username_form');

    Route::get('/student_dashboard', function () {
        return view('student_dashboard'); 
    })->name('student_dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/about', function () {
    $username = session('username', 'Guest');
    return view('about', ['username' => $username]);
})->name('about');

Route::get('/content', function () {
    $username = session('username', 'Guest');
    return view('content', ['username' => $username]);
})->name('content');

Route::get('/Lab1', function () {
    $username = session('username', 'Guest');
    return view('Lab1', ['username' => $username]);
})->name('Lab1');

Route::get('/Lab2', function () {
    $username = session('username', 'Guest');
    return view('Lab2', ['username' => $username]);
})->name('Lab2');

Route::get('/Lab3', function () {
    $username = session('username', 'Guest');
    return view('Lab3', ['username' => $username]);
})->name('Lab3');

Route::get('/Lab4', function () {
    $username = session('username', 'Guest');
    return view('Lab4', ['username' => $username]);
})->name('Lab4');

Route::get('/resume', function () {
    $username = session('username', 'Guest');
    return view('resume', ['username' => $username]);
})->name('resume');

Route::get('/contactus', function () {
    $username = session('username', 'Guest');
    return view('contactus', ['username' => $username]);
})->name('contactus');

Route::get('/username_form', function () {
    return view('username_form');
})->name('username_form');

Route::get('/user', function () {
    $username = request()->query('username', 'Guest');
    session(['username' => $username]);
    return redirect()->route('user.welcome', ['username' => $username]); 
})->name('user');

Route::get('/homepage', function () {
    $username = session('username', 'Guest');
    return view('homepage', ['username' => $username]);
})->name('homepage');

Route::get('/aboutus', function () {
    $username = session('username', 'Guest');
    return view('about', ['username' => $username]);
})->name('aboutus');

Route::get('/content', function () {
    $username = session('username', 'Guest');
    return view('content', ['username' => $username]);
})->name('content');

Route::get('/Lab1', function () {
    $username = session('username', 'Guest');
    return view('Lab1', ['username' => $username]);
})->name('Lab1');

Route::get('/Lab2', function () {
    $username = session('username', 'Guest');
    return view('Lab2', ['username' => $username]);
})->name('Lab2');

Route::get('/Lab3', function () {
    $username = session('username', 'Guest');
    return view('Lab3', ['username' => $username]);
})->name('Lab3');

Route::get('/Lab4', function () {
    $username = session('username', 'Guest');
    return view('Lab4', ['username' => $username]);
})->name('Lab4');

Route::get('/user/{username}', function ($username) {
    session(['username' => $username]);
    return view('homepage', ['username' => $username]);
})->name('user.welcome');

//Layout routes
Route::get('/Layout', function () {
    return view('../components/Layout');
});

// Route::group(['middleware' => 'CheckAge'], function () {
//     Route::get('/', function () {
//         return view('homepage');
//     })->name('homepage');

//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });