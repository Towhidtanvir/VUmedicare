    <?php
    include ("db_connection.php");
    
    session_start();
    $stdname = $studentId = $department = $bloodgroup = $pwd = $address = $cell = $name = "";
$image = "sample.png";
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
</form>     </div>
      <div class="col-sm-4" style="text-align: right;">
        <a href="login.php" style=" text-decoration: none; color: #f2f2f2;">login</a>&ensp;
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
      
      <div class="col-sm-10" style="margin: auto;">
        <div class="row">
      
               <?php        if (!isset($_GET['search']))
      {?>
       <form action="edit.php" method="post" enctype='multipart/form-data' >
        <h3 align="center">Edit Account</h3>
        <h5 align="center" style="color: red;">(Must Fill up all the fields )</h5>
        <table style="text-align: left;margin: auto;width: 400px; ">
          <tr style="height: 40px;">
            <td><strong>Name<sup>*</sup></strong></td>
            <td><input type="text" name="name" required></td>
          </tr> 
          <tr style="height: 40px;">
            <td><strong>Student Id<sup>*</sup></strong></td>
            <td><input type="text" name="studentId" required></td>
          </tr>          
          <tr style="height: 40px;">
            <td><strong>Department<sup>*</sup></strong></td>
            <td><select name="department" required>
                    <option> Select a department</option>   
                    
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="BBA">BBA</option>
                  </select>
            </td>
          </tr> 
                    <tr style="height: 40px;">
            <td><strong>Blood Group<sup>*</sup></strong></td>
            <td><select name="bgroup" required>
                    <option> Select</option>   
                    
                    <option value="A POSITIVE">A+</option>
                    <option value="A NEGATIVE">A-</option>
                    <option value="B POSITIVE">B+</option>
                    <option value="B NEGATIVE">B-</option>
                    <option value="O POSITIVE">O+</option>
                    <option value="O NEGATIVE">O-</option>
                    <option value="AB POSITIVE">AB+</option>
                    <option value="AB NEGATIVE">AB-</option>                                     
                  </select>
            </td>
          </tr>
           <tr style="height: 40px;">
            <td><strong>Cell No<sup>*</sup></strong></td>
            <td><input type="text" name="cell" required></td>
          </tr>                            
          <tr style="height: 40px;">
            <td><strong>Password<sup>*</sup></strong></td>
            <td><input type="Password" name="password" required></td>
          </tr>
          <tr style="height: 40px;">
            <td><strong>Address</strong></td>
            <td><input type="text" name="address"></td>
          </tr>
          <tr style="height: 40px;">
            <td><strong>Image</strong></td>
            <td><input class="btn btn-primary" type="file" name="file" value="upload" ></td>
          </tr>          
          <tr><td colspan="2"><input class="btn btn-primary" type="submit" class="btn btn-primary" name="update" value="update"></td><td></td></tr>
        </table>  
       </form> 
      </div>
 <?php } ; ?>

      <br>
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
    if(isset($_POST['update'])){
    if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $stdname=$_POST['name'];
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
        $insert="insert into donors(name, studentId, department, bloodGroup, cell, password,address,image) values('$stdname', '$studentId', '$department',   '$bloodgroup', '$cell', '$pwd', '$address', '".$name."')";
        

    $insert = "update donors set name = '$stdname', studentId = '$studentId', department = '$department', bloodGroup = '$bloodgroup', cell = '$cell', password = '$pwd', address = '$address', image = '$name' where email= '$email'";
//for registration confirmation alert
        $run_cust=mysqli_query($connect, $insert);
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

        
// to display registration done msg only       
       if($run_cust){
           echo "<script> alert ('Successfully update account.') </script>";
           echo "<script> window.open('myaccount.php', '_self') </script>";  

        }
      }
      }
    }
?>
    
