<?php

class ProductController extends \BaseController {

	public function addProductView(){
		if(!Auth::check())
			return Redirect::to('/login');
		return View::make('layouts.partial.admin.addproduct');
	}

	public function addProduct(){
		if(!Auth::check())
			return Redirect::to('/login');
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
				$product->slug = str_replace('/', '-', $product->slug);
				$product->save();

				$img_dir="images/";
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
							$name = $name.".".$extension;
							$path=$img_dir.$name/*.".".$extension*/;
							$abs_path = "/".$path;
							if($this->imgUsableName($abs_path)){
								Images::create(array('product_id' => $product->id, 'path' => $abs_path));
								$usable=true;
								$image->move($img_dir, $name);
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

	public function getBySlug($slug){
		if(Auth::check())
			return Redirect::to("/admin/edit/$slug");
		$product = Products::where('slug', $slug)->first();
		$img = Images::where('product_id', $product->id)->first();
		$product->path = $img->path;
		return View::make('productdetail', compact('product'));
	}
	
	public function editProductView($slug){
		$product = Products::where('slug', $slug)->first();
		$img = Images::where('product_id', $product->id)->first();
		$product->path = $img->path;
		return View::make('layouts.partial.admin.product_detail', compact('product'));
	}

	public function editProduct($slug){
		if(!Auth::check())
			return Redirect::to('/login');
		$product = Products::where('slug', $slug)->first();
		$cate_slug = Input::get('category');
		$category = Cate::where('slug', $cate_slug)->first();
		if(!Input::has('name') && !Input::has('price') && $product->category_id == $category->id){
			\Session::flash('message', 'Không có dữ liệu được cập nhật');
			return Redirect::back();
		}
		$product->category_id = $category->id;
		$product->save();
		if(Input::has('name')){
			$newName = Input::get('name');
			$product->name = $newName;
			$newSlug = CommonController::makeSlug("$product->id "."$product->name");
			$product->slug = str_replace(' ', '-', $newSlug);
		}
		if(Input::has('price')){
			$product->price = (int) Input::get('price');
		}
		$product->save();
		\Session::flash('message', 'Thông tin sản phẩm đã được cập nhật');
		return Redirect::to("/admin/edit/$product->slug");
	}

	public function deleteProduct($id){
		if(!Auth::check())
			return Redirect::to('/login');
		$product = Products::where('id', $id)->first();
		$product->delete();
		return Redirect::to('/');
	}
}