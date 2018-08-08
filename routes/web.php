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

Route::get('new_page1', function () {
    return view('new_page1');
})->name('new_page1');
////////////////////////////
Route::get('new_page2', function () {
    return view('new_page2');
})->name('new_page2');
////////////////////////////
Route::get('new_page3', function () {
    return view('new_page3');
})->name('new_page3');
////////////////////////////
Route::get('/shout/{text}', function ($text) {
    return view('shout', array('text' => $text));
});
/////////////////
//Route::get('/pass/{new_pass}', function ($new_pass) {
  //  return view('pass', array('new_pass' => $new_pass));
//});
////////////CONSTANT////////////////
Route::get('constant', function () {
    return view('constant');
})->name('constant');
//////////////////
Route::get('pass', function () {
    return view('pass');
})->name('pass');
/////////////////


///////////////
Route::get('hello','HelloController@index');

Route::get('pass','NewPassController@pass')
->name('pass');



Route::get('/foo',function(){
	return view('foo');
})->name('foo');

Route::get('/bar',function(){
	return view('bar');
})->name('bar');


Route::get('/basic-arithmetic/{operator?}/{n1?}/{n2?}', function($operator=null,$n1=null,$n2=null){
	

	return view('/basic-arithmetic',

					array(

							'n1' => $n1,
							'n2' => $n2,
							'operator' => $operator,

						 )
			  );


	
})->name('basic-arithmetic');

Route::get('/tttt',function(){
	return view('tttt');
})->name('totot');


Route::get('/middleware/{age}', function ($age)
   {
   	return view ('age', array('age'=>$age));
   })->middleware('age');

Route::get('/pages/contact','PagesController@contactPage');

Route::get('/pages/middleware/{age}',
            'PagesController@middlewareAgePage');

Route::get('/shout/middleware/{age}/{text}', function ($text) {
    return view('shout', array('text' => $text));
});

Route::get('/crushes', 'CrushesController@index');

Route::get('/crushes/create','CrushesController@create')->name('crushes.create');

Route::post('/crushes/store', 'CrushesController@store')->name('crushes.store');

Route::get('/crushes', 'CrushesController@index')->name('crushes.index');

Route::get('/crushes/{id}/edit', 'CrushesController@edit')->name('crushes.id.edit');

Route::post('/crushes/{id}/update', 'CrushesController@update')->name('crushes.id.update');

Route::get('/crushes/{id}/destroy', 'CrushesController@destroy')->name('crushes.id.destroy');

Route::get('/crushes/{id}/show', 'CrushesController@show')->name('crushes.id.show');