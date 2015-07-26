<?php

class UserController extends \BaseController {

	public function loginView() {
		return View::make('layouts.login');
	}

	public function login(){
		$auth = array('username' => Input::get('username'),
					  'password' => Input::get('password'));

		$rule = array('username' => 'required',
			          'password' => 'required');

		$validator = Validator::make($auth, $rule);

		if($validator->passes()){
			if(Auth::attempt($auth)){
				return Redirect::to('/');
			}
			else {
				\Session::flash('err_message', 'Thong tin dang nhap khong dung');
				return Redirect::back()->withInput();
			}
		}
		else {
			\Session::flash('err_message', 'Thieu thong tin dang nhap');
			return Redirect::back()->withInput();
		}
	}

	public function logout(){
		if(Auth::check())
			Auth::logout();
		return Redirect::to('/');
	}

}