<html>
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Home Page')</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@include('master.header', ['title' => 'First Page'])
	@yield('content')
	@include('master.footer', ['title' => 'First Page'])
    <script src="{{ asset('master/masterjs.js') }}"></script>
</body>
</html>