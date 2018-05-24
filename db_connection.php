<?php

 $connect = mysqli_connect("localhost", "root", "", "vumedicare");  

if(mysqli_connect_errno()){
    echo "The connection was not established: ".mysqli_connect_error();
}

?>