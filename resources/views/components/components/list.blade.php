<table class="table table-bordered table-striped dataTable">
	<tr>
		<?php
		foreach($data['fields'] as $r){
			echo "<th>".$r['title']."</th>";
		}
		?>
	</tr>
		<?php
		foreach($data['data'] as $d){
			foreach($data['fields'] as $r){
				echo "<tr><td>".$d[$r['name']]."</tr></td>";
			}
		}
		?>
</table>
{{ $slot }}
