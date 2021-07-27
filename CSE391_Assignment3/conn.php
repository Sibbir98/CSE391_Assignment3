<?php

$con = mysqli_connect('localhost','root','','webpage');

if($con){
    echo "connected";
}else{
    echo "Not connected";
}
?>