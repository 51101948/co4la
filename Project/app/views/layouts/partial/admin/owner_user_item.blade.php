<div class="user-item col-xs-12 col-sm-12 col-md-12">
	<div class="user-id col-xs-2 col-sm-2 col-md-2" style="padding: 0px 2px 0px 2px;">
		<label for="id">ID</label><br>
		<span name="id" id="id">{{$user->id}}</span>
	</div>
	<div class="user-name col-xs-4 col-sm-4 col-md-4">
		<label for="name">Tên</label><br>
		<span name="name" id="name">{{$user->username}}</span>
	</div>
	<div class="user-role col-xs-4 col-sm-4 col-md-4">
		<label for="role">Quyền</label><br>
		<span name="role" id="role">{{$user->role_name}}</span>
	</div>
	<div class="delete-category col-xs-12 col-sm-2 col-md-2" style="text-align: center; color: white;">
		<a href="/admin/delete/user/{{$user->id}}" class="btn my-btn glyphicon glyphicon-trash" style="color: white; margin-right: 2px;"></a>
	</div>
</div>