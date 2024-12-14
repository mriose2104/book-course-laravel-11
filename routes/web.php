<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return  view("Welcome");
});



































// Route::get('/contact', function () {
//    //return redirect()->route('contact2');
//     // return redirect('/contact2');
//   return  view('contact', ['name' => 'manuel']);
// })->name('contact');


// Route::get('/contact2', function () {
//     return  view("contact2");
// })->name('contact2');

// Route::get('/test',function(){
//     return "Welcome";
// }
// );

// Route::get('/test',function(){
//     return view('test');
// }
// );

// Route::get('/crud',function(){
//     return view('crud/index');
// }
// );
// Route::get('/crud',function(){
    
//     $age = 33;
//     $data = ['name' => 'Manuel','age' => $age];

//     return view('crud/index',$data);
// }
// )->name('crud');
