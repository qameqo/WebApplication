<h3>Title</h3>

<a href="<?php echo base_url()?>index.php/robot/create" class="btn btn-info">ADD</a>

<table class="table table-bordered" style="margin-top:10px">
	<tr class="active">
		<th>ชื่อ</th>
		<th>นามสกุล</th>
		<th width="10%">Edit</th>
		<th width="10%">Delete</th>
	</tr>
	<?php
		foreach($result as $r){
			echo "<tr>";
				echo "<td>".$r->firstName."</td>";
				
				echo "<td>".$r->lastName."</td>";
				
				echo "<td><a href='".base_url()."index.php/robot/update/".$r->empID."' class='btn btn-warning'>Edit</a></td>";
				
				echo "<td><a href='".base_url()."index.php/robot/delete/".$r->empID."' onclick='return confirm(\"Confirm Delete Item\")' class='btn btn-danger'>Delete</a></td>";
				
			echo "</tr>";
		}
	?>
</table>