<?php

class CategoryController extends \BaseController {

	public function addCategory(){
		if(!Auth::check())
			return Redirect::to('/login');
		$name = Input::get('category-name');
		$slug = CommonController::makeSlug($name);
		$slug = str_replace(' ', '-', $slug);
		Cate::create(array('name' => $name, 'slug' => $slug));
		return Redirect::back();
	}

	public function listCategories(){
		if(!Auth::check())
			return Redirect::to('/login');
		$categories = Cate::all();
		return View::make('layouts.partial.admin.category_manager', compact('categories'));
	}

	public function deleteCategory($id){
		if(!Auth::check())
			return Redirect::to('/login');
		$category = Cate::where('id', $id)->first();
		$category->delete();
		/*$categores = Cate::all();
		echo '<pre>';
		print_r($category);
		echo '</pre>';*/
		return Redirect::back();
	}

}