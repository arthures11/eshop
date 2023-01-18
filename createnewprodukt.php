<?php
include_once('connectaddshopitems.php');
 
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
        $nazwa = test_input($_POST["nazwa"]);
        $param_nazwa = test_input($_POST["nazwa"]);
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
    
    if(empty(test_input($_POST["cena"]))){
        $password_err = "Please enter a cena.";     
    } elseif(strlen(test_input($_POST["cena"])) < 1){
        $password_err = "cena must have atleast 3 characters.";
    } else{
        $cena = test_input($_POST["cena"]);
        $param_cena = test_input($_POST["cena"]);
    }

    if(empty(test_input($_POST["ilosc"]))){
        $password_err = "Please enter a ilosc.";     
    } elseif(strlen(test_input($_POST["ilosc"])) < 1){
        $password_err = "ilosc must have atleast 3 characters.";
    } else{
        $ilosc = test_input($_POST["ilosc"]);
        $param_ilosc = test_input($_POST["ilosc"]);
    }

    if(empty(test_input($_POST["opis"]))){
        $opis = "Please enter a opis.";     
    } elseif(strlen(test_input($_POST["opis"])) < 1){
        $opis = "opis must have atleast 3 characters.";
    } else{
        $opis = test_input($_POST["opis"]);
        $param_opis = test_input($_POST["opis"]);
    }

    if(empty(test_input($_POST["kategoria"]))){
        $kategoria = "Please enter a kategoria.";     
    } elseif(strlen(test_input($_POST["kategoria"])) < 1){
        $kategoria = "kategoria must have atleast 3 characters.";
    } else{
        $kategoria = test_input($_POST["kategoria"]);
        $param_kategoria = test_input($_POST["kategoria"]);
    }
    $kategoria = test_input($_POST["kategoria"]);
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $sql = "INSERT INTO produkty (nazwa, cena, ilosc, opis, kategoria) VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $param_nazwa,$param_cena,$param_ilosc,$param_opis,$param_kategoria);
            
            $param_nazwa = $nazwa;
            $param_cena = $cena;
            $param_ilosc = $ilosc;
            $param_opis = $opis; 
            $param_kategoria = $kategoria;
            if(mysqli_stmt_execute($stmt)){
                header("location: edycja.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>