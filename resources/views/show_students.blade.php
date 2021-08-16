<h1>{{ $name }}</h1>
{{--
<table border="2">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Class</th>
		</tr>
	</thead>
	<tbody>
		@foreach($student as $std)
			<tr>
				<td>{{ $std["name"] }}</td>
				<td>{{ $std["age"] }}</td>
				<td>{{ $std["class"] }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
--}}
<table border="2">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Class</th>
		</tr>
	</thead>
	<tbody>
		@forelse($student as $std)
			<tr>
				<td>{{ $std["name"] }}</td>
				<td>{{ $std["age"] }}</td>
				<td>{{ $std["class"] }}</td>
			</tr>
		@empty
			<tr><td colspan="3">Data not Found</td></tr>
		@endforelse
	</tbody>
</table>