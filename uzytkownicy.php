<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="code.js"></script>
    </head>
    <body>
        <style>
        </style>

        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col-2 mt-5"><a href="index.php"><img src="logo.png" class="img-thumbnail" alt="..."></a></div>
                <div class="col-10">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Regulamin</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Wysyłka/Zwroty</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Polityka Prywatności</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="row">
              <div class="col-12 bg-dark"><br></div>
            </div>
            <div class="row">
                <div class="col-12 bg-dark">
                    <nav class="navbar">
                        <form class="container-fluid justify-content-center">
                          <a href="index.php"><button class="btn btn-outline-primary bg-dark bg-gradient
                            me-4 border border tra" type="button">HOME</button></a>
                          <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle bg-dark bg-gradient me-4 border border tra" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              SKLEP
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="sklep.php#wydechy">Wydechy</a>
                              <a class="dropdown-item" href="sklep.php#poduszki">Poduszki</a>
                              <a class="dropdown-item" href="sklep.php#zlaczki">Złączki</a>
                            </div>
                          </div>
                          <a href="koszyk.php"><button class="btn btn-outline-primary me-4 border border tra bg-dark bg-gradient" type="button">KOSZYK</button></a>
                          <a href="logowanie.php"><button class="btn btn-outline-primary me-4 border border tra bg-dark bg-gradient" type="button"><?php require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');  if($_SESSION["status"]!="gosc"){
                            echo "WYLOGUJ";
                          }
                          else{echo "LOGOWANIE";} ?></button></a> 
                          <?php
                          require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');
                          if(!isset($_SESSION["status"])){
                            $_SESSION["status"]="gosc";
                            $_SESSION["loggedin"] = false;
                          }
                          if($_SESSION["status"] == "pracownik" || $_SESSION["status"] == "admin"){
                            echo " <a href='pracownik.php'><button class='btn btn-outline-danger me-4 border border tra bg-dark bg-gradient' type='button'>PANEL</button></a>";}?>

                         
                             
                            </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><br></div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item w-100">
                          <a class="nav-link active" aria-current="page">DODAWANIE UZYTKOWNIKA</a>
                        </li>
                      </ul>
                </div>
            </div>
            <br>
           <div class="row">
               <div class="col-8 offset-2">
               <table class="table table-bordered border-danger">
                    <thead>
                      <tr>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Hasło</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <form action="createnewuser.php" method="post">
                        <td><input type='text' id='imie' name='imie' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td><input type='text' id='nazwisko' name='nazwisko' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td><input type='text' id='email' name='email' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td><input type='password' id='password' name='password' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td> 
                            <select id="status" name="status">
                             <option value="uzytkownik">użytkownik</option>
                              <option value="pracownik">pracownik</option>
                              <option value="admin">admin</option>
                              </select>
                              </td>
                        <td class="nav justify-content-center">                   
                        <input type='submit' name='ok' class='btn btn-danger' value='ok'></input>
                        </form>
                      </td>
                      </tr>
                      <tr>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item w-100">
                          <a class="nav-link active" aria-current="page">LISTA USERÓW</a>
                        </li>
                      </ul>
                </div>
            </div>
                  <br>
                <table class="table table-bordered border-danger">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("baza.php");
                              if(is_array($fetchData)){      
                                foreach($fetchData as $data){
                        echo"                      <tr>
                        <th scope='row'>". $data['id']. "</th>
                        <td>                                <form id ='". $data['id']. "' method='post'>
                        <input type='text'  id='imie" .$data['id']. "' name='imie' value='{$data['imie'] }' onchange='updateimie(" . $data['id']. ")
                        '>
                            
                            </form></td>
                            <td>                                <form id ='". $data['id']. "' method='post'>
                            <input type='text'  id='nazwisko" .$data['id']. "' name='nazwisko' value='{$data['nazwisko'] }' onchange='updatenazwisko(" . $data['id']. ")
                            '>
                                
                                </form></td>
                              
                                <td>                                <form id ='". $data['id']. "' method='post'>
                                <input type='text' style='width:21em'  id='email" .$data['id']. "' name='email' value='{$data['email'] }' onchange='updateemail(" . $data['id']. ")
                                '>
                                    
                                    </form></td>
                                    
                                    
                                    <td>                                <form id ='". $data['id']. "' method='post'>
                                    <select name='status' id='status" .$data['id']. "'  onchange='updatestatus(" . $data['id']. ")'> 
                                    <option value='{$data['status']}'>{$data['status']}</option>
                                    <option value='pracownik'>pracownik</option>
                                    <option value='admin'>admin</option>
                                    <option value='uzytkownik'>uzytkownik</option>
                                    <option value='USUN'>USUŃ</option>
                                    
                                    </select>
                                        
                                        </form></td>



                        </tr>";}}
                        ?>
                   
<script>

function updateimie(id){
 let kox = id;
 let qty = document.getElementById("imie"+kox).value;
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateuser.php",
        data: {action:'update-imie', id: kox, imie:qty},
        success: async function(data) {
          window.location.href='uzytkownicy.php';
                
    }
  });
  
};

function updatenazwisko(id){
 let kox = id;
 let qty = document.getElementById("nazwisko"+kox).value;
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateuser.php",
        data: {action:'update-nazwisko', id: kox, nazwisko:qty},
        success: async function(data) {
          window.location.href='uzytkownicy.php';
                
    }
  });
  
};

function updateemail(id){
 let kox = id;
 let qty = document.getElementById("email"+kox).value;
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateuser.php",
        data: {action:'update-email', id: kox, email:qty},
        success: async function(data) {
          window.location.href='uzytkownicy.php';
                
    }
  });
  
};

function updatestatus(id){
 let kox = id;
 let qty = document.getElementById("status"+kox).value;
 
 if(!qty){
   return;
 }

 if(qty=="USUN"){
  if (confirm('Na pewno chcesz usunac?')) {
} else {
  return;
}
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateuser.php",
        data: {action:'update-status', id: kox, status:qty},
        success: async function(data) {
          window.location.href='uzytkownicy.php';
                
    }
  });
  
};


</script>
                    </tbody>
                  </table>
               </div>
           </div>
            <div class="row">
                <div class="col-12"><br></div>
            </div>

           <div class="row fixed-bottom">
            <div class="col-6 nav justify-content-start text-white bg-dark">COPYRIGHT © 2022 ARTURITO</div>
               <div class="col-6 nav justify-content-end text-white bg-dark">autor: Bryja Artur</div>
            </div>
    </div>

    <script></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </body>
</html>