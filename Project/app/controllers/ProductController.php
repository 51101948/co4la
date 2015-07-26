<?php

class ProductController extends \BaseController {

	public function addProductView(){
		if(!Auth::check())
			return Redirect::to('/login');
		return View::make('layouts.partial.admin.addproduct');
	}

	public function addProduct(){
		$success="Upload succeeded";
		$missingImgs="Missing images";
		$missingProInfo="Missing product infomation";
		$imgType="Images must in jpg, jpge, png";
		if(Input::hasFile('images')){
			$cate_slug = Input::get('category');
			$category = Cate::where('slug', $cate_slug)->first();
			$category_id = $category->id;
			$product_name = Input::get('name');
			$product_price = Input::get('price');
			$product_imgs = Input::File('images');
			/*add product*/

			$data=array('name' => $product_name, 'price' => $product_price, 'category_id' => $category_id);
			$validator = Validator::make($data, Products::getRules());
			if($validator->passes()){
				$product = Products::create($data);
				$slug = CommonController::makeSlug("$product->id "."$product->name");
				$product->slug = str_replace(' ', '-', $slug);
				$product->save();

				$img_dir="image/";
				/*upload file and save to db*/
				$isOK=false;
				foreach ($product_imgs as $image) {
					$extension = $image->getClientOriginalExtension();
					if(in_array($extension, array('jpg','png','jpge'))){
						if($isOK==false)
							$isOK=true;
						$usable=false;
						do {
							$name=CommonController::genName(30);
							$path=$img_dir.$name.".".$extension;
							$abs_path = "/".$path;
							if($this->imgUsableName($abs_path)){
								Images::create(array('product_id' => $product->id, 'path' => $abs_path));
								$usable=true;
								$image->move("/".$img_dir, $name.".".$extension);
							}
						} while(!$usable);
					}
				}
				if(!$isOK){
					$product->delete();
					\Session::flash('message', $imgType);
					return Redirect::back()->withInput();
				}
				\Session::flash('message', $success);
				return Redirect::back()->withInput();
			}
			else {
				\Session::flash('message', $missingProInfo);
				return Redirect::back()->withInput();
			}
		}
		else {
			\Session::flash('message', $missingImgs);
			return Redirect::back()->withInput();
		}
	}

	private function imgUsableName($path){
		$row = Images::where('path', $path)->count();
		if ($row==0) {
			return true;
		}
		return false;
	}

	public function getByCategory($slug){
		$category = Cate::where('slug', $slug)->first();
		$id = $category->id;
		$products = Products::where('category_id',$id)->paginate(12);
		foreach ($products as $product) {
			$img = Images::where('product_id', $product->id)->first();
			$product->path = $img->path;
		}
		return View::make('gridproduct', compact('products'));
	}

	public function getAllProduct(){
		$products = Products::paginate(12);
		foreach ($products as $product) {
			$img = Images::where('product_id', $product->id)->first();
			$product->path = $img->path;
		}
		return View::make('gridproduct', compact('products'));
	}

	public function getByQuery(){
		$str = Input::get('query');
		$products = Products::where('name', 'LIKE', "%$str%")->paginate(12);
		foreach ($products as $product) {
			$img = Images::where('product_id', $product->id)->first();
			$product->path = $img->path;
		}
		return View::make('gridproduct', compact('products'));
	}
}