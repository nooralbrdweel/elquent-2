<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App \ Models \ Task ;
use App \ Models \ Flight ;



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

Route::get('tasks', function () {
    $tasks = DB::table('tasks')-> get();
    //dd($tasks);
    return view('tasks' , compact('tasks'));
});

Route::get('<tasks>/show/{id}', function ($id) {
$task = DB::table('tasks')->where('id' , $id)->first();
return view ('show' , compact('task'));
});


Route::get('todo', function () {
  //  $tasks = DB::table('tasks')->get();
    $tasks = Task::all();

    return view('todo', compact('tasks'));
});

Route::post('store', function (Request $request) {
    $task = new Task;
    $task->title = $request->title;
    $tasks->save();
        return redirect() ->back();

    });

    Route::get('flight/{id}', function ($id) {

        $flight = Flight::Find();
        $flight->delete;
        });

