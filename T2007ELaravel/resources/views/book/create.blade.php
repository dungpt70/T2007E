<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Insert title here</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
    	<h1>Thêm mới sách</h1>
    	<form action = "{{ route ('book.store')}}" method = "post">
    		@csrf
    		<div class="form-group">
    			<label>Tên sách:</label>
    			<input type="text" class="form-control" name="tensach"/>
    		</div>
    		<div class="form-group">
    			<label>Tác giả:</label>
    			<input type="text" class="form-control" name="author"/>
    		</div>
    		<div class="form-group">
    			<label>Title:</label>
    			<input type="text" class="form-control" name="title"/>
    		</div>
    		<div class="form-group">
    			<label>Giá:</label>
    			<input type="number" class="form-control" name="price"/>
    		</div>
    		<div class="form-group">
    			<label>Ngày publish:</label>
    			<input type="date" class="form-control" name="publish"/>
    		</div>
    		<div class="form-group">
    			<label>Chuyên ngành:</label>
    			<select class="form-control" name="category_id">
    				@foreach($categories as $cate)
    					<option value="{{$cate->id}}">{{$cate->name}}</option>
    				@endforeach
    			</select>
    		</div>
    		<button type="submit" class="btn btn-primary">Them moi</button>
    		<button type="reset" class="btn btn-danger">Lam trang</button>
    	</form>
    </div>
    </body>
</html>