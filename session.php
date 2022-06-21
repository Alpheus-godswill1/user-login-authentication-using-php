<?php session_start();?>
<?php
if(!isset($_SESSION['user']) || $_SESSION['user'] != true){
    header("Location: ../login.php?login_to_access_your_panel.");
}

?>