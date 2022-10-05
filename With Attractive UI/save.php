<!DOCTYPE html>
<html>
<head>
</head>

<body style="background-color:#282828; color: darkorange;">

<?php

$con=mysqli_Connect("localhost","root","","emp_db");

    if(isset($_POST['ADD']))
        {
            $Emp_id=$_POST['Emp_id'];
            $DoB=$_POST['DoB'];
            $First_name=$_POST['First_name'];
            $Last_name=$_POST['Last_name'];
            $Gender=$_POST['Gender'];
            $App_date=$_POST['App_date'];

            $query= "insert into employees(Emp_id,DoB,First_name,Last_name,Gender,App_date)
            values('$Emp_id','$DoB','$First_name','$Last_name','$Gender','$App_date')";

        
            if (mysqli_query($con,$query))
                {
                    echo "<center>RECORD ADDED SUCCESSFULLY</center>";
                }
            else
                {
                    echo"<center>MISSING FILEDS PLEASE FILL ALL FIELDS</center>";
                }
        }


$Emp_id=$_REQUEST['Emp_id'];

if(isset($_POST['SEARCH']))
    {
    
        if($Emp_id!=="")
            {
                       
                $query = "SELECT * FROM employees where Emp_id='$Emp_id'";
                $result = mysqli_query($con,$query);
         
                echo 
                "<center><table border='1' width='70%'>
                <tr>

                <th width='5%'>Emp_id</th>  
                <th width='10%'>DoB</th>
                <th width='20%'>First_name</th>
                <th width='20%'>Last_name</th>
                <th width='20%'>Gender</th>
                <th width='10%'>App_date</th>

                </tr>";

    
                while($row = mysqli_fetch_array($result)) 
                {
                
                    echo "<tr>"; 
                    echo "<th width='5%'>".$row['Emp_id']."</th>";
                    echo "<th width='10%'>".$row['DoB']."</th>";
                    echo " <th width='10%'>".$row['First_name']."</th>";
                    echo "<th width='10%'>".$row['Last_name']."</th>";
                    echo " <th width='10%'>".$row['Gender']."</th>";
                    echo " <th width='10%'>".$row['App_date']."</th>";
                    echo "</tr>"; 
                }
                echo "</table></center>";     
            }
            else
            {
                echo "<center>NO RECORD FOUND !</center>";
            }
    }



?>

</body>
</html>