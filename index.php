
    <?php
    include ("db_connection.php");
    
    session_start();
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="csss/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="csss/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="csss/pro.css">
  <link rel="stylesheet" type="text/css" href="csss/style.css">

</head>
<body>
<div class="container-fluid top_bar top">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="index.php" style="text-decoration: none; color: #f2f2f2;"><img src="images/blood1.png" width="45" height="35">VUmedicare</a>
        
			</div>
			<div class="col-sm-4" style="text-align:center; ">
<form>
  <input id="sear"  type="text" name="user_query" placeholder="Search.."><button id="butt_sear" type="submit" name="search" value="search"><i class="fa fa-search" aria-hidden="true"></i></button>
</form> 		</div>

			<div class="col-sm-4" style="text-align: right;">
			              <?php 
                    if(isset($_SESSION['email'])){
                      $as=$_SESSION['email'];
                          global $connect;
    $query = "SELECT * FROM request where receiver='$as'";
    $run_query = mysqli_query ($connect, $query);

    while ($req = mysqli_fetch_array ($run_query)){
    
    $get_s = $req ['sender'];
     ?><a href="index.php?delete=<?php echo $_SESSION['email']; ?>" style="text-decoration:none; "><?php      echo "request from ".$get_s.'<br>' ; ?></a><?php 
                    } 
                    echo "<a href='logout.php' style='color:#f2f2f2; text-decoration:none;'>Logout</a>";
                    


                    }
                    
                    else{
                        
                    echo "<a href='login.php' style='color:#f2f2f2; text-decoration:none;'>Login</a>";
                        
                    }
                
                    ?>&ensp;
				<a href="registration.php" style=" text-decoration: none;color: #f2f2f2;">sign up</a>
			</div>						
		</div>
	</div>
	
</div> <br><br>
    <div class="slider">
  <img class="mySlides" src="images/1.jpg" style="width: 100%; height: 300px;" >
  <img class="mySlides" src="images/2.jpg"  style="width: 100%; height: 300px;">
  <img class="mySlides" src="images/3.jpg"  style="width: 100%; height: 300px;">
    </div> 
        <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item cont">
        <a class="nav-link im" href="index.php" id="link">Home</a>
      </li>&ensp;
      <li class="nav-item cont">
        <a class="nav-link im" href="demo.php" id="link">Campaign</a>
      </li>&ensp;            
      <li class="nav-item cont">
        <a class="nav-link im" href="chat.php" id="link">Go to Chat</a> 
      </li>&ensp;
      <li class="nav-item cont">
              <?php 
                if(isset($_SESSION['email'])){
              ?>
                  <a class="nav-link im" href="myaccount.php" id="link">My account</a>
              <?php 
                }
              ?>
      </li>    
    </ul>
  </div>  
</nav>
<div class="contant">
  <div class="left_contant">
    <h5 style="text-align: center;color: #f2f2f2;">Blood Category</h5>
  <ul class="nav flex-column">
<?php      
    global $connect;
    $query = "SELECT * FROM bloodtype";
    $run_query = mysqli_query ($connect, $query);

    while ($btype = mysqli_fetch_array ($run_query)){
    
    $get_id = $btype ['id'];
    $get_title = $btype ['bloodGroup'];
?>

    <li class="nav-item cont" id="list">
      <a class="nav-link im" href="index.php?category=<?php echo $get_title; ?>" id="lista"><?php echo $get_title; ?></a>
    </li>
      <?php } ; ?>
  </ul> 

  </div>
  <div class="right_contant">
<?php 
    if (!isset($_GET['profile']))
     if (!isset($_GET['category']))
       if (!isset($_GET['search']))
       	 if (isset($_GET['request']))
      {{{{?>
      
      <div class="col-sm-10">
        <div class="row" >
  
  
        <div class="col-sm-12 cont">
          



      </div>
      

      
      </div>
    </div>
    <?php }}}}?>

    <?php 
    if (!isset($_GET['profile']))
     if (!isset($_GET['category']))
       if (!isset($_GET['search']))
      {{{?>
      
      <div class="col-sm-10">
        <div class="row" >
        <div class="col-sm-4 cont">
      <a href="demo.php" class="im" style="text-decoration: none;"><h3>Why donate blood?</h3><br>
       <img src="images/4.jpg" class="img-responsive " style="width: 100%;height: 70%; ">
        <br> <p>click to continue reading</p>
        </a> 
      </div>
        <div class="col-sm-4 cont">
      <a href="demo.php" class="im" style="text-decoration: none;"><h3>Mission</h3><br>
       <img src="images/1.jpg" class="img-responsive " style="width: 100%;height: 70%; ">
        <br> <p>click to continue reading</p>
        </a> 
      </div>
        <div class="col-sm-4 cont">
      <a href="demo.php" class="im" style="text-decoration: none;"><h3>Our Vision</h3><br>
       <img src="images/5.jpg" class="img-responsive " style="width: 100%;height: 70%; ">
        <br> <p>click to continue reading</p>
        </a> 
      </div>
      

      
      </div>
    </div>
    <?php }}}?>

    <?php 
     if (isset($_GET['category'])) {
      $bldtype= $_GET['category'];
      
     $query = "SELECT * FROM donors where bloodGroup='$bldtype'";
     $run_query = mysqli_query($connect, $query);
    
     while($row = mysqli_fetch_array($run_query)){
    
     $student_id = $row['studentId'];
     $name = $row['name'];
     $email = $row['email'];
     $image = $row['image'];
     $blood_group = $row['bloodGroup'];
     $department = $row['department'];
     $cell = $row['cell'];
     $address = $row['address'];
      ?>
   
        <div  style="width: 100%;">

              <div  style="float: left; width: 30%; margin-right: 5px;margin-top: 8px;"> 

<div class="card">
  <img src="donors/<?php echo $image ?>"  style="width:100%;height: 250px;">
  <h1><?php echo $name; ?></h1>
  <p class="title"><?php echo $student_id; ?></p>
  <p>Blood Group:<?php echo $blood_group; ?></p>

 <p><a href="index.php?profile=<?php echo $email; ?>"><button class="buttonclass">View details</button></a></p>
</div>
      </div>
  
      </div>
    <?php }} ?>

<?php  
    if(isset($_GET['search'])){
       $search_queries = $_GET['user_query'];
    global $connect;
            $query = "SELECT * FROM donors where (name LIKE '%$search_queries%') or (department like '%$search_queries%') or (studentId like '%$search_queries%')or (bloodGroup like '%$search_queries%')";
 
                $result = mysqli_query($connect, $query);  
 
     while($row = mysqli_fetch_array($result)){ 

     $student_id = $row['studentId'];
     $name = $row['name'];
     $email = $row['email'];
     $image = $row['image'];
     $blood_group = $row['bloodGroup'];
     $department = $row['department'];
     $cell = $row['cell'];
     $address = $row['address'];
      ?>
            <?php      
    global $connect;
    $query = "SELECT * FROM donors where email='$email'";
    $run_query = mysqli_query ($connect, $query);

    while ($atype = mysqli_fetch_array ($run_query)){
    
    $get_value = $atype ['status'];

}
?>  
      
        <div  style="width: 100%;">

              <div  style="float: left; width: 30%; margin-right: 5px;margin-top: 8px;">

      <?php
     if ($get_value=="available"){ ?>
           
           <h2 style="text-align: center;height: 40px;line-height: 40px; background-color:green;"> <?php echo $get_value; ?> </h2>

     <?php  }  else{ ?>
<h2 style=" text-align: center;height: 40px;line-height: 40px; background-color: red;"><?php echo $get_value; ?> </h2>

    <?php    }   ?> 

<div class="card">
  <img src="donors/<?php echo $image ?>"  style="width:100%;height: 250px;">
  <h1><?php echo $name; ?></h1>
  <p class="title"><?php echo $student_id; ?></p>
  <p>Blood Group:<?php echo $blood_group; ?></p>

 <p><a href="index.php?profile=<?php echo $email; ?>"><button class="buttonclass">View details</button></a></p>
</div>
      </div>
  
      </div>
    <?php }} ?>



     <?php 
    if(isset($_GET['profile'])){
     if (!isset($_GET['category']))
       if (!isset($_GET['search']))
      {{?>
      
      <div class="col-sm-10" style="margin: auto;margin-top: 30px;margin-bottom: 30px; ">
        <div class="row">
      <?php 
                $getemail= $_GET['profile'];
        

     $query = "SELECT * FROM donors where email='$getemail'";
     $run_query = mysqli_query($connect, $query);
    
     while($row = mysqli_fetch_array($run_query)){
    
     $student_id = $row['studentId'];
     $name = $row['name'];
     $email = $row['email'];
     $image = $row['image'];
     $blood_group = $row['bloodGroup'];
     $department = $row['department'];
     $cell = $row['cell'];
     $address = $row['address'];
}

 ?> 
 <?php      
    global $connect;
    $query = "SELECT * FROM donors where email='$email' ";
    $run_query = mysqli_query ($connect, $query);

    while ($atype = mysqli_fetch_array ($run_query)){
    
    $get_value = $atype ['status'];

}

?>

 <table id="customers">
    <tr>
    <td style="width: 35%;" colspan="2">
      

    <?php
     if ($get_value=="available"){ ?>
           
           <h4 style=" width: 100%;height: 100%; text-align: center; background-color:green; "><?php echo $name; ?> is currently <?php echo $get_value; ?> </h4>

     <?php  }  else{ ?>
<h4 style=" width: 100%;height: 100%;text-align: center;background-color: red;"><?php echo $name; ?> is currently <?php echo $get_value; ?> </h4>

    <?php    }   ?>
    </td>
    <td style="width: 65%;">
 

    </td>
  </tr>
  <tr>
    <td colspan="2" style="width: 35%;text-align: center;"><img src="donors/<?php echo $image ?>" style="width: 30%; height:200px; "></td>
    <td style="width: 65%;"></td>
  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">Name</strong></td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $name; ?></p></td>
  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">id</strong></td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $student_id; ?></p></td>
  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">Email</strong> </td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $email; ?></p></td>
  </tr>
  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">Blood Group</strong> </td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $blood_group; ?></p></td>
  </tr>  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">Department</strong> </td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $department; ?></p></td>
  </tr>  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">Mobile</strong> </td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $cell; ?></p></td>
  </tr>
  <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;">Address</strong> </td>
    <td style="width: 65%;"><p style="margin-left: 5px;"><?php echo $address; ?></p></td>
  </tr>
    <tr>
    <td style="width: 35%;"><strong style="margin-left: 5px;"></strong> </td>
    <td style="width: 65%;">
 <p><a href="index.php?req=<?php echo $email; ?>"><button class="btn btn-primary">send request</button></a></p>
    </td>
  </tr>
</table>   
      </div>
    </div>
    <?php } } }?>
  </div>  
</div>

<?php   include ("function.php");
 footer();
 ?>		

<?php

    if(isset($_GET['req'])){ 
        if(isset($_SESSION['email'])){
         $receiver= $_GET['req'];
         $sender= $_SESSION['email'];
         echo $receiver;
         echo $sender;
       $insert="insert into request(sender,receiver) values('$sender', '$receiver')";
        
//for registration confirmation alert
        mysqli_query($connect, $insert);
    }}
?>
  
</body>
</html>

<?php 
if (isset($_GET['delete'])) 
if(isset($_SESSION['email'])){{
    $as=$_SESSION['email'];
    global $connect;
    $query = "delete FROM request where receiver='$as'";
    $run_query = mysqli_query ($connect, $query);
}}


 ?>