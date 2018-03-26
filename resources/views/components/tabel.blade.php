<table class="table table-bordered table-striped dataTable">
	<tr>
		@foreach($fields as $r)
			<th>{{$r['title']}}</th>
		@endforeach
	</tr>
		@foreach($data as $d)
			@foreach($fields as $r)
				<tr><td>{{$d[$r['name']]}}</td></tr>
			@endforeach
		@endforeach
</table>
