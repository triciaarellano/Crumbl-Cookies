<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php

require_once "dbconnect.php";


$selectsql = "Select * from new_table";

$result = $conn ->query($selectsql);


//check table if there is a record
//num_rows - will return the no of rows inside the table
if ($result->num_rows > 0) {
    //field titles 
    echo "<table class='table table-info'>";
    echo "<tr>";
    echo "<th> User ID </th>";
    echo "<th> Image </th>";
    echo "<th> Last Name </th>";
    echo "<th> First Name </th>";
    echo "<th> Gender </th>";
    echo "<th> Address </th>";
    echo "<th> Email </th>";
    echo "<th> Phone Number </th>";
    echo "<th> Account Type </th>";
    echo "<th> Additional Information </th>";
    echo "</tr>";

    //fetch row data
    //fetch_assoc90 - fetch all record inside table
    while ($pafielddata = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$pafielddata['account_id']."</td>";
        echo "<td><img src='".$pafielddata['img']."'width=100 height=100</td>";
        echo "<td>".$pafielddata['lname']."</td>";
        echo "<td>".$pafielddata['fname']."</td>";
        echo "<td>".$pafielddata['gender']."</td>";
        echo "<td>".$pafielddata['address']."</td>";
        echo "<td>".$pafielddata['email']."</td>";
        echo "<td>".$pafielddata['phone_num']."</td>";
        echo "<td>".$pafielddata['addinfo']."</td>";
        echo "<td>".$pafielddata['account_type']."</td>";
    }


} else {
    echo "No record found!";
}




?>