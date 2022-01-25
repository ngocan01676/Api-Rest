<?php

use Illuminate\Support\Facades\Route;
use App\Models\RoomClasses;
use App\Models\Students;
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

Route::get('/getRoomClasses', function () {
    $rows = RoomClasses::all();
    $student = RoomClasses::find(1)->students;

    $a = Students::find(1)->room;
    dd($a);
    //dd($rows;
    // foreach($rows as $row) {
    //     echo "<br/>";
    //     echo $row->name;
    //     echo "<br>";
    //     echo "------------------------";
    //     foreach($row->getAllStudent as $t) {
    //         echo "<br/>";
    //         echo $t->name;
    //         echo "<br/>";
    //     }
    //     echo "------------------------";
    // }
});

//Route::get('api/v1/students', 'App\Http\Controllers\StudentsController@index');

Route::resource('api/v1/students', 'App\Http\Controllers\StudentsController');
Route::resource('api/v1/roomclasses', 'App\Http\Controllers\RoomClassesController');
Route::resource('api/v1/users', 'App\Http\Controllers\UsersController');

// Route::get('students', 'ApiController@getAllStudents');
// Route::get('students/{id}', 'ApiController@getStudent');
//Route::post('api/v1/users', 'App\Http\Controllers\UsersController@store');
// Route::put('students/{id}', 'ApiController@updateStudent');
// Route::delete('students/{id}','ApiController@deleteStudent');

Route::get('/generate/csrf-token', function () {
    echo csrf_token(); 
});
