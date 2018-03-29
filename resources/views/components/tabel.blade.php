<div class="dataTables_wrapper form-inline dt-bootstrap">
	<div class="row">
		<div class="col-sm-4 col-xs-12">
			<div id="example1_length" class="dataTables_length pull-left"><label>Tampilkan
				<select name="example1_length" aria-controls="example1" class="form-control input-sm">
					<option value="10">10</option>
					<option value="25">25</option>
					<option value="50">50</option>
					<option value="100">100</option>
				</select> Data</label>
			</div>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div id="example1_paginate" class="dataTables_paginate paging_simple_numbers pull-left">
				<div class="pagination pagination-sm no-margin pull-right">
					<a class="btn-nav btn btn-border disabled">
						<i class="glyphicon glyphicon-fast-backward"></i>
					</a> 
					<a class="btn-nav btn btn-border disabled">
						<i class="glyphicon glyphicon-backward"></i>
					</a>
					<a class="btn btn-border btn-primary">1</a>
					<a class="btn btn-border">2</a>
					<a class="btn btn-border">3</a>
					<a class="btn btn-border">4</a>
					<a class="btn btn-border">5</a>
					<a class="btn-nav btn btn-border">
						<i class="glyphicon glyphicon-forward"></i>
					</a>
					<a class="btn-nav btn btn-border">
						<i class="glyphicon glyphicon-fast-forward"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div class="pull-right">
				<div class="input-group"><input type="text" placeholder="Search" class="form-control">
					<div class="input-group-btn"><button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button></div>
					<div class="input-group-btn"><button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i></button></div>
				</div>
			</div>
		</div>
	</div>
	<table class="table table-bordered table-striped dataTable">
		<tr>
			<th>No</th>
			@foreach($fields as $r)
			<th>{{$r['title']}}</th>
			@endforeach
		</tr>
		@foreach($data as $d)
			<tr>
				<td>{{$loop->iteration}}</td>
				@foreach($fields as $r)
				<td>{{$d[$r['name']]}}</td>
				@endforeach
			</tr>
		@endforeach
	</table>
</div>
	
