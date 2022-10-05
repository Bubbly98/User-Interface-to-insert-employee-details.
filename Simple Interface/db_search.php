<?php
$con=mysqli_connect("localhost","root","","EMP_DB");
//mysql_select_db("form",$con);

	$query = "SELECT * FROM employees";
	$result = mysqli_query($con,$query);
	
	
	// row order
echo "<table border='1' width='100%'>
	<tr>
	<th width='5%'>Emp_ID</th>  
	<th width='25%'>DoB</th>
	<th width='20%'>First_name</th>
	<th width='20%'>Last_name</th>
	<th width='10%'>Gender</th>
	<th width='5%'>App_date</th>

	</tr>";
	
	// database coloum name 

	while($row = mysqli_fetch_array($result)) {
	
		echo "<tr>"; 
		echo "<td width='5%'>".$row['Emp_id']."</td>";
		echo "<td width='25%'>".$row['DoB']."</td>";
		echo "<td width='20%'>".$row['First_name']."</td>";
        echo "<td width='20%'>".$row['Last_name']."</td>";
		echo "<td width='20%'>".$row['Gender']."</td>";
		echo "<td width='20%'>".$row['App_date']."</td>";
		echo "</tr>"; 					
	}
echo "</table>";



"<form method='get' action=''>
<input type ='submit' value='search'/>
<input type ='text' name='Emp_id'/>
</form>";

?>