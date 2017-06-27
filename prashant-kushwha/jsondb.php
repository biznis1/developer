<?php
    //connect to mysql db
    $con = mysqli_connect("localhost","root","root","employee") or die('Could not connect: ' . mysql_error());
   
    //read the json file contents
    $jsondata = file_get_contents('empdetails.json');
    
    //convert json object to php associative array
    $data = json_decode($jsondata, true);
    
    //get the employee details
    $id = $data['empid'];
    $name = $data['personal']['name'];
    $gender = $data['personal']['gender'];
    $age = $data['personal']['age'];
    $streetaddress = $data['personal']['address']['streetaddress'];
    $city = $data['personal']['address']['city'];
    $state = $data['personal']['address']['state'];
    $postalcode = $data['personal']['address']['postalcode'];
    $designation = $data['profile']['designation'];
    $department = $data['profile']['department'];
    
    //insert into mysql table
    if(mysqli_query($con,"INSERT INTO tbl_emp(empid,name,gender,age,streetaddress,city,state,postalcode,designation,department)
    VALUES('$id','$name','$gender','$age','$streetaddress','$city','$state','$postalcode','$designation','$department')"))
	{
		echo "<script>alert('success');</script>";
	}
	else
	{
		echo "<script>alert('Error in storing data to DB.');</script>";
	}
   
?>