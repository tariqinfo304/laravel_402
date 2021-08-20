@extends("./layout.layout")


@section("title")
	Child Page
@endsection


@section("header")
		
	@parent
	<h1>Child Header</h1>

@endsection


@section("footer")
	
	<h1>Child Footer</h1>
@endsection