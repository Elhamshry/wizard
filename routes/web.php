<?php

use Illuminate\Support\Facades\Route;
Route::get('', function () {
    return view('zeropage');
});
Auth::routes();


Route::get('/index', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {

//    Route::resource('courses', 'CoursesController');
    Route::resource('web_development', 'WebDevelopmentController');
    Route::resource('mobile_app', 'MobilAppController');
    Route::resource('cyber_security', 'CyberSecurityController');//end of Route Cyber Security
    Route::resource('data_base', 'DataBaseController');

    Route::resource('AddCourse', 'AddCourseController');//end of Route add Material

    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/courses', function () {
        return view('pages.courses');
    });

    Route::get('/centers', function () {
        return view('pages.centers');
    });

    Route::get('/educational_org', function () {
        return view('pages.educational_org');
    });

    Route::get('/careers', function () {
        return view('pages.careers');
    });

});
