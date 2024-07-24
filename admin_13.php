<html>
    <head>
        <title>Saibaba</title>
        <style>
          main{
            background-color:ivory;

             height:200%;

            }
            table{
                margin-top: 5%;
                margin-left: 5%;
                border:2px;
                background-color:pink;
               
            }
            tr{
                border:2px solid blue;
            }
            </style>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <center>
        <table border="1" cellpadding="0" cellspacing="0">
    <thead>
            <tr>
                <th>Scholorship ID</th>
                <th>ID No</th>
                <th>Student Name</th>
                <th>Jvd/Vasathi</th>
                <th>Amount</th>
                <th>TransacionID</td>
                <th>Reciept</th>
                <td>Status</th>
                <th>Approval</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include  "con.php";
        session_start();
        $sql="select * from `sai` where status in(0,2)";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){ 
            $sid=$row['ScholorshipID'];
            $id=$row['ID'];
            $name=$row['Name'];
            $jvd=$row['JvdVasathi'];
            $amount=$row['Amount'];
            $tid=$row['TransactionId'];
            $_SESSION['tid']=$tid;
            $rec=$row['profile_picture'];?>
            <td><?php echo $sid ?></td>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $jvd ?></td>
            <td><?php echo $amount ?></td>
            <td><?php echo $tid ?></td>
                <td><img src="<?php echo $rec;?>" alt="image not displayed" width="100" height="100"></td>
                <td>
                    <?php 
                    if($row['status']==1){
                        echo 'accept';
                    } 
                    if($row['status']==2){
                        echo 'reject';
                    }
                    if($row['status']==0){
                        echo  'pending';
                    }?>
                    </td>
  <td> <select class="section" onchange="sai(this.options[this.selectedIndex].value,'<?php echo $_SESSION['tid']?>')">
              <option value="0">pending</option>
              <option value="1">approved</option>
              <option value="2">Reject</option>
                </select>
                </td>
                </tr>
               <?php } ?>
        </tbody>
    </table>
        </center>
        <script>
            function sai(value,id){
                //alert(id);
                let url="http://localhost/PHP/Scholorship/admin_13.php";
                window.location.href=url+"?id="+id+"&status="+value;
                <?php
if(isset($_GET['id']) && isset($_GET['status'])){
    $id=$_GET['id'];
    $status=$_GET['status'];
    $result=mysqli_query($con,"update `sai` set status='$status' where TransactionId='$id'");
    if($result){
    header('location:trail.php');}
    else{
        echo "error";
    }
}   

?>
            }
            </script>
           
</body>
</html>