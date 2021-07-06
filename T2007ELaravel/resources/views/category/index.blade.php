@extends('admin_layout.template')
	@section('content')
    	<h1>Danh sách category</h1>
    	<a class="btn btn-danger" href="{{ url('/category/create') }}">Thêm mới</a>
    	
		@if (session()->has('message'))
			<div class="alert alert-success">
				{{session()->get('message')}}
			</div>
		@endif
		@csrf
    	<!-- HIển thị table danh sách category -->
    	<table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ma cn</th>
              <th scope="col">Ten cn</th>
              <th scope="col">Thao tac</th>
            </tr>
          </thead>
          <tbody>
          	@php 
          		$stt = 0;
          	@endphp
          	@foreach ($list as $item)
            <tr>
              <th scope="row">{{ ++$stt }}</th>
              <td>{{ $item->code }}</td>
              <td>{{ $item->name }}</td>
              <td>
              	@php
              		$url_edit = "/category/".$item->id."/edit";
              	@endphp
              	<a href="{{ url($url_edit) }}" class="btn btn-primary">Sửa</a>
              	<a href="#" class="btn btn-danger" onclick="deleteRecord({{ $item->id }})">Xóa</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
	<script type="text/javascript">
		function deleteRecord(id){
			if (confirm("Bạn có chắc chắn muốn xóa hay không?")){
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
    						alert("Xóa thành công");
    						location.reload();
    					} else {
    						alert("Xóa thất bại");
    					}
    				}
    			});
			}
		}
	</script>
	@endsection