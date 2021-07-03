<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Insert title here</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
    	<h1>Danh sÃ¡ch sách</h1>
    	<a class="btn btn-danger" href="{{ url('/book/create') }}">Thêm mới</a>
    	
		@if (session()->has('message'))
			<div class="alert alert-success">
				{{session()->get('message')}}
			</div>
		@endif
		@csrf
    	<!-- HIá»ƒn thá»‹ table danh sÃ¡ch category -->
    	<table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tên sách</th>
              <th scope="col">Title</th>
              <th scope="col">Tác giả</th>
              <th scope="col">Giá</th>
              <th scope="col">Ngày publish</th>
              <th scope="col">Chuyên ngành</th>
              <th scope="col">Thao tac</th>
            </tr>
          </thead>
          <tbody>
          	@php 
          		$stt = 0;
          	@endphp
          	@foreach ($books as $item)
            <tr>
              <th scope="row">{{ ++$stt }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->title }}</td>
              <td>{{ $item->author }}</td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->publish }}</td>
              <td>{{ $item->ChuyenNganh->name }}</td>
              <td>
              	@php
              		$url_edit = "/book/".$item->id."/edit";
              	@endphp
              	<a href="{{ url($url_edit) }}" class="btn btn-primary">Sửa</a>
              	<a href="#" class="btn btn-danger" onclick="deleteRecord({{ $item->id }})">Xóa</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		function deleteRecord(id){
			if (confirm("Báº¡n cÃ³ cháº¯c cháº¯n muá»‘n xÃ³a hay khÃ´ng?")){
    			$.ajax({
    				url: "{{ route('category.xoa') }}",
    				method: "post",
    				data: {
    					"_token": $("input[name='_token']").val(),
    					"_method" : "delete",
    					"id" : id
    				}, 
    				success: function(result){
    					if(result.indexOf("success") > -1){
    						alert("XÃ³a thÃ nh cÃ´ng");
    						location.reload();
    					} else {
    						alert("XÃ³a tháº¥t báº¡i");
    					}
    				}
    			});
			}
		}
	</script>
    </body>
</html>