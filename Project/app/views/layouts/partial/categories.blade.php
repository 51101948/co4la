<?php
	$categories = Cate::all();
?>
<div class="categories-label">
	<span>Danh Muc</span>
</div>
<ul class="cate-list">
	@foreach($categories as $category)
	<li>
		<a href="/categories/{{$category->slug}}">
			<span>{{$category->name}}</span>
		</a>
	</li>
	@endforeach
</ul>