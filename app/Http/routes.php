<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', function () {
        $news = \App\News::all();
        return view('news.index', ['news' => $news,]);
    })->name('news.list');

    Route::get('/create', function () {
        return view('news.create');
    })->name('news.create');

    Route::post('/', function (\Illuminate\Http\Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'text' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('news.create'))
                ->withErrors($validator)
                ->withInput();
        }

        \App\News::create([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return (redirect(route('news.list')));
    })->name('news.store');
});
