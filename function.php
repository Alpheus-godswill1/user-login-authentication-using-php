<?php include "../backend_admin/include/connect.php";?>
<?php 
function registerField(){
    global $connect;
    if(isset($_POST['registerbtn'])){//Checking Whether the button is clicked

        //Getting the data from the form
        $name = mysqli_real_escape_string($connect, $_POST['cus_name']);
        $email = mysqli_real_escape_string($connect, $_POST['cus_email']);
        $Address = mysqli_real_escape_string($connect, $_POST['cus_address']) ;
        $City = mysqli_real_escape_string($connect, $_POST['cus_city']);
        $Country = mysqli_real_escape_string($connect,  $_POST['cus_country']);
        $Zip = mysqli_real_escape_string($connect,  $_POST['cus_zip']);
        $pass = mysqli_real_escape_string($connect, $_POST['cus_pass']);
        $confirm_pass = mysqli_real_escape_string($connect, $_POST['confirm_pass']);

        if ($name != '' && $email != '' && $Address != '' && $City != '' &&  $Country != '' && $Zip != '' && $pass != '' && $confirm_pass != '') {

        //SQL statements
        $sql = "INSERT INTO register_form(reg_name,reg_email,reg_address,reg_city,reg_country,reg_zip,reg_pass,reg_pass_confirm) VALUES('$name','$email','$Address','$City','$Country','$Zip','$pass','$confirm_pass')";

        //Making a query connection 
        $result = mysqli_query($connect,$sql);
        header("location: ./login.php?login_to_access_account.");
        if(!$result){
            die("could not_login_your_data_due_to --> " . mysqli_error($connect));
        }

    }
    else {
        header("Location : ./register.php?Please_fill_the_form_properly.");
    }
    }
}
registerField();

function fetch_login(){
    if (isset($_POST['login_in'])) {//Checking Whether the button is clicked.
        global $connect;

        //Getting Data From Form.
        $name = mysqli_real_escape_string($connect, $_POST['cus_name']);
        $pass = mysqli_real_escape_string($connect, $_POST['cus_pass']);
        $remind = mysqli_real_escape_string($connect, $_POST['remind']);

        if(isset($remind)){
            setcookie('UName', $name , time()+60*60*24*30, "/");
            setcookie('passIN', $pass , time()+60*60*24*30, "/");

        }
        
        if ($name != '' && $pass != ''){//Validating the fields 
        //SQL statements
        $sql = "SELECT * FROM register_form WHERE reg_name = '$name' && reg_pass ='$pass'";

         //Making a query connection 
         $result = mysqli_query($connect,$sql);
         $count= mysqli_num_rows($result);//checking the number of rows filled at the database.
         if ($count > 0) {
             $_SESSION['user'] = $name ;
            header("Location: ./backend_admin/index.php?logged_in_successfully.");
         }else {
            header("Location: ./login.php?No_data_in_database.");
         }
         if(!$result){
             die("could not_login_your_data_due_to --> " . mysqli_error($connect));
         }
        }
        else {//Validation else statement
            header("location: ./login.php?Please_fill_form.");
        }
    }
    
}
fetch_login();

?>