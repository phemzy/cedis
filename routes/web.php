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

Route::get('/', function () {
    return view('welcome');
});
Route::name('subscribe')->post('subscribe', function(){
	$validator = Validator::make(request()->all(), [
		'email' => 'required|email',
	]);

	if ($validator->fails()) {
        return redirect('/')
        	->withErrors($validator)
            ->withInput();
    }

	$sub = new App\Subscriber;
	$sub->email = request('email');
	$sub->save();
	session()->flash('success', 'Thanks For Subscribing');

	return back();
});
