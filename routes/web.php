<?php

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');


Route::get('/cards','CardsController@index');
Route::get('/cards/details/{card}','CardsController@details');
Route::post('/cards/{card}/notes','NotesController@store');
