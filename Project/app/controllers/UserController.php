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

	public function listUsers(){
		if(!Auth::check())
			return Redirect::to('/login');
		$users;
		if((int) Auth::user()->role_id == 1 ){
			$users = User::all();
			foreach ($users as $user) {
				$role = Roles::where('id', $user->role_id)->first();//->name;
				$user->role_name = $role->name; 
			}
			return View::make('layouts.partial.admin.owner_list_users', compact('users'));
		}
		else {
			$users = null;
			return View::make('layouts.partial.admin.owner_list_users', compact('users'));
		}
	}

	public function addManagerView(){
		if(!Auth::check())
			return Redirect::to('/login');
		$isOwner = false;
		if ((int) Auth::user()->role_id==1)
			$isOwner = true;
		return View::make('layouts.partial.admin.owner_add_user', compact('isOwner'));
	}

	public function addManager(){
		if(Session::has('message'))
			Session::forget('message');
		$username = Input::get('username');
		$password = Input::get('password');
		$repassword = Input::get('re-password');
		$role = Input::get('role');
		$role_id = (int) Roles::where('name', $role)->first()->id;
		if ($password != $repassword){
			Session::flash('err_message', 'Mật khẩu không giống nhau');
			return Redirect::back()->withInput();
		}
		else {
			$rules = ['username' => 'required', 'password' => 'required', 'role_id' => 'required'];
			$user = array('username' => $username, 'password' => Hash::make($password), 'role_id' => $role_id);
			$validator = Validator::make($user, $rules);
			if($validator->passes()){
				Session::flash('message', 'Tạo quản lý thành công');
				User::create($user);
				return Redirect::back();
			}
			else{
				Session::flash('err_message', 'Thiếu thông tin người quản lý');
				return Redirect::back()->withInput();
			}
		}
	}

}