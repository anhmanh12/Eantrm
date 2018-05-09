<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use Illuminate\Support\MessageBag;

use Validator;

class UserController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function postLogin(Request $request) {
		// var_dump($request->all());
		// die;
		$rules = [
			'email'    => 'required|email',
			'password' => 'required'
		];
		$messages = [
			'email.email'       => 'Email không đúng định dạng.',
			'email.required'    => 'Email là trường bắt buộc.',
			'password.required' => 'Mật khẩu là trường bắt buộc.'
		];
		$validator = validator::make($request->all(), $rules, $messages);

		if ($validator    ->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		} else {
			$email    = $request->input('email');
			$password = $request->input('password');

			if (Auth::attempt(['email' => $email, 'password' => $password])) {
				return redirect()->intended('admin');
			} else {
				$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không chính xác.']);
				return redirect()->back()->withInput()->withErrors($errors);
			}

		}
	}
	public function getlogin() {
		return view('auth.Login');
	}

	public function getLogout() {
		Auth::logout();
		return redirect()->intended('login');
	}
	public function getadmin() {
		return view('admin.master');
	}

	public function getinstallSuccessfully() {
		return view('admin.installSuccessfully');
	}

	public function getinstallFailed() {
		return view('admin.installFailed');
	}

	public function getnotActivated() {
		return view('admin.notActivated');
	}

	public function getpackages() {
		return view('admin.packages');
	}
}
