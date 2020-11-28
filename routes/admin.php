<?php

Route::group([
    'namespace' => 'Backend',
], function () {
    Route::get('', 'LoginController@showLoginForm')->name('admin');
    Route::match(['get','post'],'login', 'LoginController@login')->name('admin.login');
    Route::get('register', 'LoginController@getRegister')->name('admin.register');
    Route::post('getadmin', 'LoginController@register')->name('admin.postregister');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');

    Route::group([
        'middleware' => ['auth:admin']
    ], function () {
        Route::get('home', 'Home\HomeController@index')->name('admin.home');

        Route::group([
            'prefix' => 'profile'
        ], function () {
            Route::get('','Profile\AdminProfileController@index')->name('admin.profile');
            /**
             * đang update
             */
            Route::post('update/{slug}', 'Profile\AdminProfileController@update')->name('admin.profile.update');
        });


        Route::any('school/{action_name?}', ['as' => 'MngSchool', 'uses' => 'School\SchoolController@index']);
        Route::any('user/{action_name?}', ['as' => 'MngUser', 'uses' => 'User\UserController@index']);
    });
});