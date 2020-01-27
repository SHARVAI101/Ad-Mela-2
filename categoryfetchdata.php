<?php

session_start();

include 'dbh.php';

// print_r($_POST['filterdata']);

$filterdata=$_POST['filterdata'];

$wbtype	=	$filterdata['wbtype'];
$adtype	=	$filterdata['adtype'];
$height	=	$filterdata['height'];
$width	=	$filterdata['width'];
$cost	=	$filterdata['cost'];

$sql="SELECT * FROM ads";

if($wbtype!=0)
{
	$sql.=" WHERE websiteType='$wbtype'";
}

if($adtype!=0)
{
	if($wbtype!=0)
	{
		$sql.=" AND type='$adtype'";
	}
	else
	{
		$sql.=" WHERE type='$adtype'";
	}	
}

if($wbtype!=0 || $adtype!=0)
{
	$sql.=" AND height >= '$height'";
}
else
{
	$sql.=" WHERE height >= '$height'";
}

$sql.=" AND width >= '$width' AND cost >= '$cost' ORDER BY aid DESC";

// echo $sql;

$result=mysqli_query($conn,$sql);

$count=1;

while($row=mysqli_fetch_assoc($result))
{
	$websiteId=$row['websiteId'];

	$sql1="SELECT * FROM websites WHERE wid='$websiteId'";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);

	if($count%3==1)
	{
		?>
		<div class="row">
		<?php
	}
	?>
		<div class="col-md-4">
			<a href="adlisting.php?ad_Id=<?php echo $row['aid']; ?>">
				<div class="category-box" style="background-image: url('<?php echo $row["imgdst1"]; ?>');background-size: 100% 100%;">
					<p style="font-size:20px"><?php echo $row1['websiteName']; ?></p>
				</div>
			</a>
		</div>
	<?php	
	if($count%3==0)
	{
		?>
		</div>	
		<?php
	}
	$count+=1;
}
?>
</div>	
