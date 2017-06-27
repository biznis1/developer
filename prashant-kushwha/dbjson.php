<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","root","employee") or die('Could not connect: ' . mysql_error());
    //fetch table rows from mysql db
    $result = mysqli_query($connection,"select * from tbl_emp") or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    //write to json file
    $fp = fopen('empdata.json', 'w+');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

   /*  echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection); */
?>
