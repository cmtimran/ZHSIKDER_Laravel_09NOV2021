<?php

/*
use Illuminate\Http\Request;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');*/



Route::get('/admission_form_data', 'Api\GlobalApiController@getAdmissionFormData');