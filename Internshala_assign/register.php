<?php

 require_once 'dbconfig.php';

 if($_POST)
 {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $user_email = $_POST['user_email'];
  $phone = $_POST['phone'];
  $user_password = $_POST['password'];
 
  $stmt=0;
  
  try
  { 
  
   $stmt= $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $count = $stmt->rowCount();
   
   if($count==0){
    
   $stmt = $db_con->prepare("INSERT INTO tbl_users(first_name,last_name,user_email,phone,user_password) VALUES(:fname,:lname,:email,:phone,:pass)");
   $stmt->bindParam(":fname",$first_name);
   $stmt->bindParam(":lname",$last_name);
   $stmt->bindParam(":email",$user_email);
  $stmt->bindParam(":phone",$phone);
  $stmt->bindParam(":pass",$user_password);
  
     
    if($stmt->execute())
    {
     echo "Thank you for signing up,Please check your inbox for a confirmation mail.";
    }
    else
    {
     echo "Query could not execute !";
    }
   
   }
   else{
    
    echo "1"; //  not available
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>