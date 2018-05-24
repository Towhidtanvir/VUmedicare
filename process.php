    <?php
    include ("db_connection.php");
    
    session_start();
    ?>

<?php 

//check if form is subbmitted
if(isset($_POST['submit'])){
         global $connect;
  
                if(isset($_SESSION['email'])){
                $user= $_SESSION['email'];

     $query = "SELECT * FROM donors where email='$user'";
     $run_query = mysqli_query($connect, $query);
    
     while($row = mysqli_fetch_array($run_query)){
    
     $student_id = $row['studentId'];
     $user = $row['name'];
	$message=mysqli_real_escape_string($connect, $_POST['message']);

//set timezone
	date_default_timezone_set("Asia/Bangkok");
	$time= date("h:i:s A",time());

//valid date input
	if(!isset($user) || $user=="" || !isset($message) || $message==""){
      $error="please fill";
       header("Location: chat.php?error=".urlencode($error));
       exit();
	}else{
       $query="INSERT INTO shouts(user,message,time)
                   VALUES('$user','$message','$time')";

                   if(!mysqli_query($connect, $query)){
                     die('error:'.mysqli_error($connect));
                   }else{
                     header("Location: chat.php");
                     exit(); 
                     
                   }
	}
}}
}

