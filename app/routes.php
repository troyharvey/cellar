<?php

Route::get('/', array(
    'as' => 'home',
    function () {
        return View::make('home');
    }
));

Route::post('/formulae', 'FormulaController@store');
