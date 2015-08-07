@extends('homepage')
@section('main')
<div class="cate-info col-xs-12 col-sm-12 col-md-12" style="padding:3px; margin-bottom: 9px;">
@foreach($categories as $category)
	@include('layouts.partial.admin.category_manager_item', compact('category'))
@endforeach
</div>
<div class="add-cate col-xs-12 col-sm-12 col-md-12" style="padding:3px; margin-bottom: 9px;">
	<form class="col-xs-12 col-sm-12 col-md-12" style="padding: 0px;" action="/admin/new-category" method="post">
		<label for="category-name">Tên danh mục</label><br>
		<input type="text" class="form-control col-xs-8 col-sm-8 col-md-8" name="category-name" id="category-name" style="width: 70%; float: left;">
		<button type="submit" class="col-xs-1 col-xs-offset-1 col-sm-1 col-sm-offset-1 col-md-1 col-md-offset-1 btn my-btn glyphicon glyphicon-plus" style="width: 20%; float: right; color: white;"></button>
	</form>
</div>
@stop