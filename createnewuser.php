<?php
include_once('connection.php');
 
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  //  if(empty(test_input($_POST["email"]))){
   //     $username_err = "Please enter a email.";
  //  } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', test_input($_POST["email"]))){
  //      $username_err = "Email can only contain letters, numbers, and underscores.";
   // } else{
        $email = test_input($_POST["email"]);
        $param_email = test_input($_POST["email"]);
      //  $sql = "SELECT id FROM user WHERE email = ?";
        
       // if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        //    mysqli_stmt_bind_param($stmt, "i", $param_email);
            
         //   $param_email = test_input($_POST["email"]);
          //  $email = test_input($_POST["email"]);
            
            //if(mysqli_stmt_execute($stmt)){
                /* store result */
              //  mysqli_stmt_store_result($stmt);
                
               // if(mysqli_stmt_num_rows($stmt) == 1){
                //    $username_err = "This email is already taken.";
                //} else{
                 //   $username = test_input($_POST["email"]);
                //}
           // } else{
           //     echo "Oops! Something went wrong. Please try again later.";
           // }
          //  mysqli_stmt_close($stmt);
       // }
    //}
    
    if(empty(test_input($_POST["imie"]))){
        $passwimieord_err = "Please enter a imie.";     
    } elseif(strlen(test_input($_POST["imie"])) < 3){
        $password_err = "imie must have atleast 3 characters.";
    } else{
        $imie = test_input($_POST["imie"]);
        $param_imie = test_input($_POST["imie"]);
    }

    if(empty(test_input($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(test_input($_POST["password"])) < 3){
        $password_err = "password must have atleast 3 characters.";
    } else{
        $password = test_input($_POST["password"]);
        $param_password = test_input($_POST["password"]);
    }

    if(empty(test_input($_POST["nazwisko"]))){
        $nazwisko = "Please enter a nazwisko.";     
    } elseif(strlen(test_input($_POST["nazwisko"])) < 3){
        $nazwisko = "nazwisko must have atleast 3 characters.";
    } else{
        $nazwisko = test_input($_POST["nazwisko"]);
        $param_nazwisko = test_input($_POST["nazwisko"]);
    }

    if(empty(test_input($_POST["status"]))){
        $status = "Please enter a status.";     
    } elseif(strlen(test_input($_POST["status"])) < 3){
        $status = "status must have atleast 3 characters.";
    } else{
        $status = test_input($_POST["status"]);
        $param_status = test_input($_POST["status"]);
    }
    $status = test_input($_POST["status"]);
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $sql = "INSERT INTO user (imie, nazwisko, email, password, status) VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $param_imie,$param_nazwisko,$param_email,$param_password,$param_status);
            
            $param_imie = $imie;
            $param_nazwisko = $nazwisko;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            $param_status = $status;
            if(mysqli_stmt_execute($stmt)){
                header("location: uzytkownicy.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>