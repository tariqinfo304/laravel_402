<html>
	<head>
		<title>@yield("title","Web Layout Default")</title>
	</head>
	<body>
		
		@section("header")
			<h1>Parent Header Section</h1>
		@show

		@section("menu")
			<h1>Menu in Parent</h1>
		@show

		@section("main_content")
			<h1>Main Body Content</h1>
		@show

		@section("footer")
			<h1>Parent Footer</h1>
		@show

	</body>
</html>