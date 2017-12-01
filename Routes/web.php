<?php

Route::get('/setlocale/{locale}', function ($locale) {
    request()->session()->put('locale',$locale);
    return redirect()->back();
});
