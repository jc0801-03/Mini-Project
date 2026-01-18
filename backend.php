<?php
  
  //database connection
   $servername="localhost";
   $fullname="root";
   $password="";
   $dbname="sri_lanka_tourism";
   $port=3309;

   //create connection
     $con = mysqli_connect($servername,$fullname,$password,$dbname,$port);

     //check connection
      if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
      }
        echo "Connected successfully";

    //get data
      $fulln =$_POST['fulln'];
      $email =$_POST['email'];
      $pno =$_POST['pno'];
      $pckg =$_POST['pckg'];
      $msg =$_POST['msg'];

      $sql="INSERT INTO enquiry (Full_name, Email_Address, Phone_Number, Preffered_Packages, Message) VALUES ('$fulln','$email','$pno','$pckg','$msg')";
    if($con->query($sql)){
   echo("enterd");
}else{
  echo"error".$sql.$con->error;
}
      
?>