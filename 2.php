<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style> 
table{
    margin-top: 10%;
    margin-left: 10%;
}
</style>
</head>
<body>
<table border="1">
    <thead>
            <tr>
                <th>ScholorshipID</th>
                <th>Email</th>
                <th>CAST</th>
                <th>Total Amount</th>
                <th>Total Paid</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
<?php
include "con.php";
// Prepare and execute the query
$sql = "SELECT Name,ScholorshipID,email,cast,SUM(Amount) AS total_amount FROM `sai` GROUP BY email";
$result = $con->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        session_start();
        $sid=$row['ScholorshipID'];
        $name=$row['Name'];
        $email=$row['email'];
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $cast=$row['cast'];
        $TotalPaid=$row['total_amount'];
      
     
        ?>
       <tr> 
       <td><?php echo $sid ?></td> 
       <td><?php echo $email ?></td>
        <td><?php echo $cast ?></td>
          <td>
                <?php 
                if($row['cast']=='BC-A'){
                    echo '56000';
                } 
                if($row['cast']=='SC'){
                    echo '67500';
                }
                if($row['cast']=='OC'){
                    echo  '65000';
                }?>
                </td>
                <td><?php echo $TotalPaid ?></td>
                <td>
                <?php 
                if($row['cast']=='SC' && $row['total_amount']=='67500'){
                    echo 'Completed';
                }
                
                else if($row['cast']=='BC-A' && $row['total_amount']=='56000'){
                    echo 'Completed';
                }
               
                else if($row['cast']=='OC' && $row['total_amount']=='65000'){
                    echo 'Completed';
                }
               else{echo "pending";}
                ?>
                </td>
                <td><button type="button" onclick="window.location.href='certificate.php'">Generate Certificate</button></td>
            </tr>
    <?php }}?>
</tbody>
            </table>
            </body>
</html>
