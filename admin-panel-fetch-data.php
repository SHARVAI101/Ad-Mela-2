<?php
	
	session_start();

	include 'dbh.php';

	// print_r($_POST['filter']);

	$filter=mysqli_real_escape_string($conn,$_POST['filter']);

	$sql="SELECT id, faculty_name, email, date_of_joining, department, faculty, hod, committee, principal, admin FROM faculty_table ORDER BY ".$filter." ASC";
	$result=mysqli_query($conn,$sql);
	echo $sql;
	$counter=1;

	while($row=mysqli_fetch_assoc($result))
	{

		$id=$row['id'];
		$faculty_name=$row['faculty_name'];
		$email=$row['email'];
		$date_of_joining=$row['date_of_joining'];
		$department=$row['department'];
		$faculty=$row['faculty'];
		$hod=$row['hod'];
		$committee=$row['committee'];
		$principal=$row['principal'];
		$admin=$row['admin'];

		?>
	    <tr id="user<?php echo $id; ?>">
	      	<th scope="row"><?php echo $counter; ?></th>
	      	<td><?php echo $faculty_name; ?></td>
	      	<td><?php echo $email; ?></td>
	      	<td><?php echo $department; ?></td>
	      	<td><?php echo $date_of_joining; ?></td>					      	

		    <?php
			$now = time();
			$your_date = strtotime($date_of_joining);
			$datediff = $now - $your_date;
			$years = floor($datediff / (365*60*60*24));
		    // echo $years;
		    if($years>=5)
		    {
		    	?>
		    	<td>Eligible</td>	
		    	<?php
		    }
		    else
		    {
		    	?>
		    	<td>Not Eligible</td>
		    	<?php
		    }

		    ?>
	      	<form class="update-rights-form" id="update-rights-form-<?php echo $id; ?>" action="" method="POST">
	      		<td class="table-center">
						<?php

						if($faculty==1)
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="faculty" id="faculty<?php echo $id; ?>" value="faculty" checked>
							<?php
						}
						else
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="faculty" id="faculty<?php echo $id; ?>" value="faculty">
							<?php
						}

						?>							      		
					</td>

	      		<td class="table-center">
	      			<?php

	      			if($hod==1)
	      			{
	      				?>
	      				<input type="checkbox" class="admin-table-checkbox" name="hod" id="hod<?php echo $id; ?>" value="hod" checked>
	      				<?php
	      			}
	      			else
	      			{
	      				?>
	      				<input type="checkbox" class="admin-table-checkbox" name="hod" id="hod<?php echo $id; ?>" value="hod">
	      				<?php
	      			}

	      			?>							      		
					</td>
					<td class="table-center">
						<?php

						if($committee==1)
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="committee" id="committee<?php echo $id; ?>" value="committee" checked>
							<?php
						}
						else
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="committee" id="committee<?php echo $id; ?>" value="committee">
							<?php
						}

						?>							      		
					</td>
					<td class="table-center">
						<?php

						if($principal==1)
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="principal" id="principal<?php echo $id; ?>" value="principal" checked>
							<?php
						}
						else
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="principal"id="principal<?php echo $id; ?>"  value="principal">
							<?php
						}

						?>							      		
					</td>
					<td class="table-center">
						<?php

						if($admin==1)
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="admin" id="admin<?php echo $id; ?>" value="admin" checked>
							<?php
						}
						else
						{
							?>
							<input type="checkbox" class="admin-table-checkbox" name="admin" id="admin<?php echo $id; ?>" value="admin">
							<?php
						}

						?>							      		
					</td>
					<td class="table-center">
						<input type="hidden" name="userId" value="<?php echo $id; ?>">
						<button type="submit" name="submit" class="btn btn-default" id="update<?php echo $id; ?>" disabled>Update</button>
					</td>	  							

	      	</form>

	      	<form class="delete-user-form" action="" method="POST">
	      		<td class="table-center">
						<input type="hidden" name="userId" value="<?php echo $id; ?>">
						<button type="submit" name="submit" class="btn btn-primary" id="delete<?php echo $id; ?>">Delete</button>
					</td>
	      	</form>
	      	
	    </tr>	    
    <?php
    $counter+=1;
}