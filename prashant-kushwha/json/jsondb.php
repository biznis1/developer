<?php
    //connect to mysql db
    $con = mysqli_connect("localhost","root","root","employee") or die('Could not connect: ');
/*     //connect to the employee database
    mysqli_select_db("employee", $con); */

    //read the json file contents
    $jsondata = file_get_contents('empdetails.json');
    
    //convert json object to php associative array
    $data = json_decode($jsondata, true);
    
	echo "<pre>";
print_r($data);
echo "</pre>";
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
    if( mysqli_query($con,"insert into tbl_emp (empid,name,gender,age,streetaddress,city,state,postalcode,designation,department) values('$id','$name','$gender','$age','$streetaddress','$city','$state','$postalcode','$designation','$department')"))
	{
		echo "success";
	}
	else{
		echo "error";
	}
	
    
?>