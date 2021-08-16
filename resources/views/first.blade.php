<h1>{{ $name }}</h1>


{{-- Show Array data --}}
<hr/>
<h2>Foreach</h2>

<ul>
	@foreach($list as $row)
		<li> {{ $row }} </li>
	@endforeach
</ul>

<hr/>

<h2>For</h2>

<ul>
	@for($i=0;$i<count($list);$i++)

		<li> {{ $list[$i] }} </li>

	@endfor
</ul>

<hr/>

<h2>While</h2>

<ul>
	@php($i=0)

	@while($i<count($list))

		<li> {{ $list[$i] }} </li>

		@php($i++)

	@endwhile
</ul>


<hr/>

<h2>IF -else</h2>


@if($is_show == true)

	<h1>Show Data</h1>

@else

	<h1>No Show Data</h1>

@endif


<hr/>

<h2>Nested If else</h2>

@if($value == 10)
	<h2>==10</h2>
@elseif($value >= 10 )
	<h2> >= 10 </h2>
@elseif($value <= 10 )
	<h2> <= 10 </h2>
@endif

<hr/>

<h2>Component Base Loading</h2>

@include("show_students",["name" => "Student List"])


<hr/>

@include("list")
