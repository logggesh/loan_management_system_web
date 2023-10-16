<?php
    $hostname="127.0.0.1";
    $username="root";
    $password="";
    $dbname="loandetails";
    $con=mysqli_connect($hostname,$username,$password,$dbname);
    if(isset($_GET['loan'])){
    $loannumber=$_GET['loan'];
    $query="delete from loandetails where loan=$loannumber";
    $runnit=mysqli_query($con,$query);
    }
    if($runnit){
        echo "<script>alert('Record Deleted')</script>";
        
    }
    else{
        echo "<script>alert('Record Not Deleted')</script>";
    }
    header('Location:loan-view.php');
?>