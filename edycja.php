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
        <script src="edycja.js"></script>
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
                          <a class="nav-link active" aria-current="page">EDYTUJESZ</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
                <div class="col-4 offset-2">
                    <label class="form-label" for="customFile">Zdjęcie produktu</label>
                    <input type="file" class="form-control" id="customFile" />
                </div>
                <div class="col-2">
                          <label for="inputPassword6" class="col-form-label">Cena:</label>
                          <input type="number" id="cena" class="form-control">
                </div>
                <div class="col-2">
                    <label for="inputPassword6" class="col-form-label">Ilość:</label>
                    <input type="number" id="ilosc" class="form-control">
                 </div>
                </div>
                 <div class="row">
              <div class="col-4 offset-2">
                <label for="inputPassword6" class="col-form-label">Nazwa:</label>
                <input type="text" id="tytul" class="form-control">
              </div>
              <div class="col-4">
                <label for="exampleFormControlTextarea1" class="form-label">Opis:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
                </div>
                <div class="row">
                  <div class="col-4 offset-6">
                  <label for="inputPassword6" class="col-form-label">Kategoria:</label>
                  <select id="status" name="status">
                             <option value="wydechy">wydechy</option>
                              <option value="zlczki">złączki</option>
                              <option value="poduszki">poduszki</option>
                              </select>

                  </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-6 offset-2">

                    </div>
                    <div class="col-2 nav justify-content-end">
                        <input class="btn btn-primary" type="submit" value="OK">
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item w-100">
                          <a class="nav-link active" aria-current="page">DODAWANIE PRODUKTOW</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="row">
              <div class="col-8 offset-2">
              <table class="table table-bordered border-danger">
                    <thead>
                      <tr>
                        <th scope="col">nazwa</th>
                        <th scope="col">cena</th>
                        <th scope="col">ilość</th>
                        <th scope="col">opis</th>
                        <th scope="col">kategoria</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
              <tbody>
                      <tr>
              <form action="createnewprodukt.php" id="form" method="post">
                        <td><input type='text' id='nazwa' name='nazwa' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td><input type='number' id='cena' name='cena' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td><input type='number' id='ilosc' name='ilosc' class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"></td>
                        <td><textarea rows="4" cols="50" name="opis" form="form"></textarea></td>
                        <td> 
                        <select id="kategoria" name="kategoria">
                             <option value="wydechy">wydechy</option>
                              <option value="zlczki">złączki</option>
                              <option value="poduszki">poduszki</option>
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
              </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item w-100">
                          <a class="nav-link active" aria-current="page">EDYCJA PRODUKTOW</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="row">
              <div class="col-8 offset-2">
            <table class="table table-bordered border-danger">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">nazwa</th>
                        <th scope="col">cena</th>
                        <th scope="col">ilość</th>
                        <th scope="col">opis</th>
                        <th scope="col">kategoria</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("bazaproduktow.php");
                              if(is_array($fetchData)){      
                                foreach($fetchData as $data){
                        echo"                      <tr>
                        <th scope='row'>". $data['id']. "</th>
                        <td>                                <form id ='". $data['id']. "' method='post'>
                        <input type='text'  id='nazwa" .$data['id']. "' name='nazwa' value='{$data['nazwa'] }' onchange='updatenazwa(" . $data['id']. ")
                        '>
                            
                            </form></td>
                            <td>                                <form id ='". $data['id']. "' method='post'>
                            <input type='number' style='width:5em'  id='cena" .$data['id']. "' name='cena' value='{$data['cena'] }' onchange='updatecena(" . $data['id']. ")
                            '>
                                
                                </form>
                                </td>
                                <td>                                <form id ='". $data['id']. "' method='post'>
                                <input type='number' style='width:5em'  id='ilosc" .$data['id']. "' name='ilosc' value='{$data['ilosc'] }' onchange='updateilosc(" . $data['id']. ")
                                '>
                                   
                                    </form>
                                   
                                </td>
                                <td>                                <form id ='". $data['id']. "' method='post'>
                                <textarea id='opis" .$data['id']. "' name='opis' value='{$data['opis'] }' onchange='updateopis(" . $data['id']. ")
                                '>{$data['opis'] }</textarea>
                                    
                                    </form>
                              
                                    </td>
                                    <td>                                <form id ='". $data['id']. "' method='post'>
                                    <select name='kategoria' id='kategoria" .$data['id']. "'  onchange='updatekategoria(" . $data['id']. ")'> 
                                    <option value='{$data['kategoria']}'>{$data['kategoria']}</option>
                                    <option value='wydechy'>wydechy</option>
                                    <option value='zlaczki'>złączki</option>
                                    <option value='poduszki'>poduszki</option>
                                    <option value='USUN'>USUŃ</option>
                                    
                                    </select>
                                       
                                        </form></td>



                        </tr>";}}?>
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

    <script>

function updatenazwa(id){
 let kox = id;
 let qty = document.getElementById("nazwa"+kox).value;
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateitem.php",
        data: {action:'update-nazwa', id: kox, nazwa:qty},
        success: async function(data) {
          window.location.href='edycja.php';
                
    }
  });
  
};

function updatecena(id){
 let kox = id;
 let qty = document.getElementById("cena"+kox).value;
 console.log(qty);
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateitem.php",
        data: {action:'update-cena', id: kox, cena:qty},
        success: async function(data) {
          window.location.href='edycja.php';
                
    }
  });
  
};

function updateilosc(id){
 let kox = id;
 let qty = document.getElementById("ilosc"+kox).value;
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateitem.php",
        data: {action:'update-ilosc', id: kox, ilosc:qty},
        success: async function(data) {
          window.location.href='edycja.php';
                
    }
  });
  
};
function updateopis(id){
 let kox = id;
 let qty = document.getElementById("opis"+kox).value;
 
 if(!qty){
   return;
 }
 
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "updateitem.php",
        data: {action:'update-opis', id: kox, opis:qty},
        success: async function(data) {
          window.location.href='edycja.php';
                
    }
  });
  
};
function updatekategoria(id){
 let kox = id;
 let qty = document.getElementById("kategoria"+kox).value;
 
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
        url: "updateitem.php",
        data: {action:'update-kategoria', id: kox, kategoria:qty},
        success: async function(data) {
          window.location.href='edycja.php';
                
    }
  });
  
};


</script>
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