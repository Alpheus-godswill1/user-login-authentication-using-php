
<?php include "./config.php";?>
<?php 
function loginBtnFields(){
    global $connect;
    if(isset($_POST['login_in'])){
        $name = mysqli_real_escape_string($connect,$_POST['username']);
        $pass = mysqli_real_escape_string($connect,$_POST['password']);
        $sql = "INSERT INTO login_fields(login_name,login_pass) VALUES('$name','$pass')";
        $result = mysqli_query($connect,$sql);
        header("location: ./index.php?Welcome_to_the_homepage.");
        if(!$result){
            die("could not_login_your_data_due_to --> " . mysqli_error($connect));
        }
    }
    else{
        header("location: ./login.php?could_not_send_data_to_the_database");
    }
}
loginBtnFields();

function registerField(){
    global $connect;
    if(isset($_POST['registerbtn'])){
        $name = mysqli_real_escape_string($connect, $_POST['cus_name']);
        $email = mysqli_real_escape_string($connect, $_POST['cus_email']);
        $Address = mysqli_real_escape_string($connect, $_POST['cus_address']) ;
        $City = mysqli_real_escape_string($connect, $_POST['cus_city']);
        $Country = mysqli_real_escape_string($connect,  $_POST['cus_country']);
        $Zip = mysqli_real_escape_string($connect,  $_POST['cus_zip']);
        $pass = mysqli_real_escape_string($connect, $_POST['cus_pass']);
        $confirm_pass = mysqli_real_escape_string($connect, $_POST['confirm_pass']);
        $sql = "INSERT INTO register_form(reg_name,reg_email,reg_address,reg_city,reg_country,reg_zip,reg_pass,reg_pass_confirm) VALUES('$name','$email','$Address','$City','$Country','$Zip','$pass','$confirm_pass')";
        $result = mysqli_query($connect,$sql);
        header("location: ./login.php?login-to-access-account.");
        if(!$result){
            die("could not_login_your_data_due_to --> " . mysqli_error($connect));
        }
    }
}
registerField();


?>