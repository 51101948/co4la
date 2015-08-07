<div class="category-item col-xs-12 col-sm-12 col-md-12">
	<div class="category-id col-xs-2 col-sm-2 col-md-2" style="padding: 0px 2px 0px 2px;">
		<label for="name">ID</label><br>
		<span name="name" id="name">{{$category->id}}</span>
	</div>
	<div class="category-name col-xs-4 col-sm-4 col-md-4">
		<label for="name">Tên</label><br>
		<span name="name" id="name">{{$category->name}}</span>
	</div>
	<div class="category-slug col-xs-4 col-sm-4 col-md-4">
		<label for="name">Slug</label><br>
		<span name="name" id="name">{{$category->slug}}</span>
	</div>
	<div class="delete-category col-xs-12 col-sm-2 col-md-2" style="text-align: center; color: white;">
		<a href="/admin/delete/category/{{$category->id}}" class="btn my-btn glyphicon glyphicon-trash" style="color: white; margin-right: 2px;"></a>
	</div>
</div>
	

<!-- array('files'=>true, 'url' => '/admin/categories', 'method' => 'POST' -->
<!-- name slug -->
<!-- <span class="btn my-btn glyphicon glyphicon-trash"></span> -->