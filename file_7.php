
<?php
include 'con.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST["name"];
     $id=$_POST['id'];
     $sid=$_POST['sid'];
     $course=$_POST['cy'];
     $cast=$_POST['cast'];     
    $tid=$_POST['tid'];
    $password=$_POST['password'];
    $jvd=$_POST['jvd'];
    $amount=$_POST['amount'];
    $email = $_POST['email'];
    $image=$_FILES['file'];
    $imagefilename=$image['name'];
    $imagefiletemp=$image["tmp_name"];
   
    $filename_seperate=explode('.',$imagefilename);
    $file_extension=strtolower($filename_seperate[1]);
    //print_r($file_extension);
    //echo "<br>";
    $extensions=array('jpeg','jpg','png');
    if(in_array($file_extension,$extensions)){
        $upload_image=$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `sai` values('$sid','$id','$name','$email','$course','$jvd','$amount','$tid','$upload_image',0,'$cast')";
        if ($con->query($sql) === TRUE) {
           echo "reciept submitted successfully";
       
        } else {
            if ($con->errno == 1062) {
                echo "Error: Duplicate entry! This data already exists in the database.";
            } else {
                echo "Error: " . $con->error;
            }
        }
}}
?>
