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
  <link rel="stylesheet" type="text/css" href="csss/style.css">
  <link rel="stylesheet" type="text/css" href="csss/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
</form>      </div>
      <div class="col-sm-4" style="text-align: right;">
                    <?php 
                    if(isset($_SESSION['email'])){
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
     if (!isset($_GET['category']))
       if (!isset($_GET['search']))
      {{?>
      
      <div class="col-sm-10">
        <div class="row">
       
       
             <?php 
                if(isset($_SESSION['email'])){
                $user= $_SESSION['email'];
              ?>
        
    <div id="shouts">
      <ul>
        <?php 
        $query="SELECT *  FROM shouts order by id desc limit 10;";
        $shouts=mysqli_query($connect,$query);
        ?>
        <?php while($row=mysqli_fetch_assoc($shouts)) : ?>
        <li class="shout"><span><?php echo $row['time'] ?><strong></span> <?php echo $row['user'] ?>: </strong><?php echo $row['message'] ?></li>
      <?php endwhile; ?>
      </ul>
    </div>
        <div id="input">
      <?php  if(isset($_GET['error'])) : ?>
                    <div class="error"> <?php echo $_GET['error']; ?></div>
                 <?php endif ;  ?>
             <form method="post" action="process.php">
                Comment Here:<input type="text" name="message" placeholder="message" />
             </br>
                 <input class="shout-btn" type="submit" name="submit" value="submit"/> 
              </form>
    </div>

              <?php 
                }
                else{?>
                 <div style="width: 50%;margin: auto;background-color: #a4a4a4;text-align: center;">
                  <h3>Please <a href="login.php">login</a> to continue chat</h3> 
                  <h4>or</h4><h3>Please <a href="registration.php">get registered</a></h3> 
                   <br><br><br>
                 </div>
              <?php  }
              ?>

      
      </div>
    </div>
    <?php } }?>


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
  </div>  
</div>

<?php   include ("function.php");
 footer();
 ?>       

</body>
</html>


<?php
    if(isset($_POST['submit'])){       
        $stdname=$_POST['name'];
        $email=$_POST['email'];
        $studentId=$_POST['studentId'];
        $department=$_POST['department'];
        $bloodgroup=$_POST['bgroup'];
        $pwd=$_POST['password'];
        $cell=$_POST['cell'];
        $address=$_POST['address'];
        $name = $_FILES['file']['name'];
        $target_dir = "donors/";
        $target_file = $target_dir . basename($name);

 // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
    
        if( in_array($imageFileType,$extensions_arr) ){
        $insert="insert into donors(name,email, studentId, department, bloodGroup, cell, password,address,image) values('$stdname', '$email', '$studentId', '$department',   '$bloodgroup', '$cell', '$pwd', '$address', '".$name."')";
        
//for registration confirmation alert
        $run_cust=mysqli_query($connect, $insert);
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

        
// to display registration done msg only       
       if($run_cust){
           echo "<script> alert ('Successfully registered.') </script>";
           echo "<script> window.open('login.php', '_self') </script>";  

        }
      }
      }
?>
    