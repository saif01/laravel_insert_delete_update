<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return view('about');
});

Route::get(md5('/saif'), function(){
	return view('pages.laracast');
})->name('laracast');

Route::get('/allcontact','AboutController@Contact')->name('contact');
Route::get('/insert-data','AboutController@Insert');
Route::get('/delete-contact/{id}','AboutController@Delete');
Route::get('/edit-contact/{id}','AboutController@Edit');
Route::get('/view-contact/{id}','AboutController@View');

Route::post('/data-added','AboutController@InsertData');
Route::post('/data-update/{id}','AboutController@UpdateData');
