<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Hello2</title>
</head>
    <body>
    <h1>Hello2</h1>
    
	<h1>{{$class}}.{{$name}}</h1>
	{!! "<h1>".$class .".".$name."</h1>" !!}
	@if (count($dssv) > 0) 
		<h1>DSSV có bản ghi</h1>
		@foreach ($dssv as $value)
		<!-- các value có key là số lẻ thì background màu đỏ, ngược lại màu xanh -->
			<h2>{{$value}}</h2>
		@endforeach
	@else
		<h1>DSSV có bản ghi</h1>
	@endif
    </body>
</html>