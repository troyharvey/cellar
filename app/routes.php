<?php

Route::get('/', array(
    'as' => 'home',
    function () {
        return View::make('home');
    }
));

Route::post('/formulae', array(
    'as'   => 'formulae',
    'uses' => 'FormulaController@store'
));

Route::get('/trending', array(
    'as'   => 'trending',
    'uses' => 'FormulaController@trending'
));
