<!DOCTYPE html> 
<html>
	<head>
		<title>{{$title or 'Laravel'}}</title>
	</head>	
	<body>
		
		@yield('content')	

		@stack('scripts')
	</body>
</html>	
