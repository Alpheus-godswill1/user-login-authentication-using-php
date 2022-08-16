<?php session_start();?>
<?php
if(isset($_SESSION['user']) || $_SESSION['user'] = true){
    echo "<script>alert('SESSION SET')</script>";
 }
 else{
        header("Location: ../login.php?login_to_access_admin_panel.");
 }
?>