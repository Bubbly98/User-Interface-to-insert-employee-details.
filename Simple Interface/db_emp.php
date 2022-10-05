<?php
    $con = mysqli_connect("localhost","root","","EMP_DB");

    if(!$con){
        die('Could not connect'.mysql_error());
    }else{
        echo 'Connection Established Successfully.....';
        echo nl2br("\n");

        $sql = "INSERT INTO employee(Emp_id,DoB,First_Name,Last_Name,Gender,App_date)
        VALUES 
        ('$_POST[Emp_id]',
        '$_POST[DoB]',
        '$_POST[First_Name]',
        '$_POST[Last_Name]',
        '$_POST[Gender]',
        '$_POST[App_date]')";
    }
    if(!mysqli_query($con,$sql)){
        die('Error'.mysql_error());
    }else{
        echo 'your record added successfully...';
    }
    mysqli_close($con);

    if(isset($_POST['SEARCH']))
    {
    
        $Emp_id=$_REQUEST['Emp_id'];

        if($Emp_id!=="")
            {
                
                $query = "SELECT * FROM employees where Emp_id='$Emp_id'";
	            $result = mysqli_query($con,$query);
	
                $row = mysqli_fetch_array($result);

                $Emp_id=$row['Emp_id'];
                $DoB=$row['DoB'];
                $First_name=$row['First_name'];
                $Last_name=$row['Last_name'];
                $Gender=$row['Gender'];
                $App_date=$row['App_date'];
                
            }
    
        $r=array("$DoB","$First_name","$Last_name","$Gender","$App_date");

        $myJSON=json_encode($r);
        echo $myJSON;
    }

?>