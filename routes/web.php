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

\L::LangNonymous();
Route::group(['middleware'=>'Lang'],function(){
Route::get('/','WebController@index');
Route::get('/archiv/{archiv}','WebController@show'); //الارئيسية
Route::get('/archiv/rele/{rele}','WebController@rele');// الشعبة
Route::get('/rele/{rele}','WebController@rele');// الشعبة
Route::get('/batch/{batch}','WebController@batch');// الشعبة
Route::post('/search','WebController@search'); // البحث
// من نحن
Route::get('/archiv/about', function () {
    return view('readit.about');
});// من نحن
Route::get('/about', function () {
    return view('readit.about');
});// اضافة ارشيف
// Route::get('/arcreate', function () {
//     return view('readit.createAR');
// });
// // اضافة الاقسام
// Route::get('/secreate', function () {
//     return view('readit.createSEC');
// });// اضافة الشعب
// Route::get('/relecreate', function () {
//     return view('readit.createREL');
// });// اضافة الدفعة
// // Route::get('/batches', function () {
// //     return view('readit.createBAT');
// // });// اضافة المشرفين
// Route::get('/createSupe', function () {
//     return view('readit.createSUP');
// });
// //Route::post('/batches','WebController@createBat');//الدفعة 
// Route::post('/archives','WebController@createAr');//ا  الارشيف
// Route::post('/sections','WebController@createSec'); // الاقسام
// Route::post('/supervisores','WebController@createSupe'); //الامشرفين على المشروع
// Route::post('/relevantdepartments','WebController@createRele'); // الشعبة
// Route::get('editar/{editar}','WebController@editar');
// Route::get('deletar/{deletar}','WebController@deletar');
// Route::put('updatear/{updatear}', 'WebController@updatear');
// Route::resource('ajax-crud', 'AjaxCrudController');
// Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');
// Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');

Route::resource('dash_sections','sections'); 
Route::get('dash_sections/destroy/{destroy}','sections@destroy')->name('sections.destroy'); 
Route::resource('dash_relevantdepartments','RelevantDepartments'); 
Route::get('dash_relevantdepartments/destroy/{destroy}','RelevantDepartments@destroy')->name('RelevantDepartments.destroy'); 
Route::resource('dash_batches','Batches'); 
Route::get('dash_batches/destroy/{destroy}','Batches@destroy')->name('Batches.destroy'); 
Route::resource('dash_supervisores','Supervisores'); 
Route::get('dash_supervisores/destroy/{destroy}','Supervisores@destroy')->name('Supervisores.destroy'); 
Route::resource('dash_archives','Archives'); 
Route::get('dash_archives/destroy/{destroy}','Archives@destroy')->name('Archives.destroy'); 












});