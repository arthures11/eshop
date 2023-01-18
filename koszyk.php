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
                          <?php
                          require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');
                          if(!isset($_SESSION["status"])){
                            $_SESSION["status"]="gosc";
                            $_SESSION["loggedin"] = false;
                          }
                          if(empty($_SESSION['listaKoszyk'])){
                            echo "<a href='koszyk.php'><button class='btn btn-outline-primary me-4 border border tra bg-dark bg-gradient' type='button'>KOSZYK(0)</button></a>";
                          }
                          else{
                          echo"
                          <a href='koszyk.php'><button class='btn btn-outline-primary me-4 border border tra bg-dark bg-gradient' type='button'>KOSZYK(" .count((array)$_SESSION['listaKoszyk']). ")</button></a>";}
                          ?>
                          <a href="logowanie.php"><button class="btn btn-outline-primary me-4 border border tra bg-dark bg-gradient" type="button"><?php  if($_SESSION["status"]!="gosc"){
                            echo "WYLOGUJ";
                          }
                          else{echo "LOGOWANIE";} ?></button></a>
                          <?php
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
                          <a class="nav-link active" aria-current="page">KOSZYK</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><br></div>
            </div>
            <?php
            $wartosc=0;
            require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');
           

            //echo $listaProduktow[8]->name;

           echo '<div class="row">
                <div class="col-lg-5 offset-lg-2 col-sm-12">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Cena za szt</th>
                                <th scope="col">Ilość</th>
                                <th scope="col">Wartość</th>
                              </tr>
                        </thead>';
                        if(empty($_SESSION['listaKoszyk'])){echo "KOSZYK PUSTY";}
                        else{
                        for($i=0;$i<count($listaProduktow);$i++){
                          for($j=0;$j<count($_SESSION['listaKoszyk']);$j++){
                          if($listaProduktow[$i]->id==$_SESSION['listaKoszyk'][$j]->id){
                            $wartosc+= $listaProduktow[$_SESSION['listaKoszyk'][$j]->id-1]->cena * $_SESSION['listaKoszyk'][$j]->sztuk;
                        echo "<tbody>
                            <tr>
                                <th scope='row'> <a href='opis.php?id=". $listaProduktow[$i]->id ."'><img src='sklep/". $listaProduktow[$i]->id .".jpg' style='width:75px;height:75px'</a> </th>
                                <td>", $listaProduktow[$_SESSION['listaKoszyk'][$j]->id-1]->name ,"</td>
                                <td>{$listaProduktow[$_SESSION['listaKoszyk'][$j]->id-1]->cena} pln</td>
                                <td>
                                <form id ='" .$_SESSION['listaKoszyk'][$j]->id. "' method='post'>
                                <input type='number' style='width: 3.5em' id='sztuki" .$j. "' name='sztuki' min='0' value='{$_SESSION['listaKoszyk'][$j]->sztuk}' onchange'updcart(" .$j. ")
                                onkeyup='updcart(" .$j. ")''>
                                    </td>
                                    </form>
                                <td>".$listaProduktow[$_SESSION['listaKoszyk'][$j]->id-1]->cena * $_SESSION['listaKoszyk'][$j]->sztuk ." pln</td>
                              </tr>
                        </tbody>";
                        }
                      }
                      }
                    }
                      echo "</table>
                </div>
            
                <div class='col-3 item-align-center'>
                    <table class='table'>
                        <thead class='table-dark'>
                            <tr>
                                <th class='text-center' scope='col'>Do zapłaty:</th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class='text-center' scope='row'>Wartość produktów:<br><b>$wartosc pln</b></td>
                              </tr>
                              <tr>
                                <td class='text-center' scope='row'>Przesyłka:<br><b>123pln</b></td>
                              </tr>
                              <tr>
                                <td class='text-center' scope='row'>Suma:<br><b>" .$wartosc+123  . " pln</b></td>
                              </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-2 offset-lg-2 col-sm-12'>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>

                          Paczkomat
                        </label>
                      </div>
                      <div class='form-check'>
                        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>
                      
                          Firma Kurierska
                        </label>
                      </div>
                      <div class='form-check'>
                        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>
                          Odbiór osobisty
                        </label>
                      </div>
                    </div>
                    <div class='col-lg-3 col-sm-12'>
                        <div class='form-check'>
                            <input class='form-check-input' type='radio' name='flexRadioDefault2' id='flexRadioDefault1'>
    
                              Przelew-przedpłata(tradycyjny)
                            </label>
                          </div>
                          <div class='form-check'>
                            <input class='form-check-input' type='radio' name='flexRadioDefault2' id='flexRadioDefault1'>
                          
                              Szybki przelew-przedpłata(BLIK, karta itp.)
                            </label>
                          </div>
                        
                        </div>
                        <div class='col-lg-3 col-sm-12'>
                            <button type='button' class='btn btn-danger btn-block h-15'>Realizuj zamówienie</button>
                        </div>
                    </div>
                </div>
           <div class='row fixed-bottom'>
            <div class='col-6 nav justify-content-start text-white bg-dark'> COPYRIGHT © 2022 ARTURITO</div>
               <div class='col-6 nav justify-content-end text-white bg-dark'>autor: Bryja Artur</div>
            </div>
    </div>";
    ?>

    <script>

function updcart(id){
 var obj = <?php echo json_encode($_SESSION['listaKoszyk']); ?>;
 let kox = id;
 let qty = document.getElementById("sztuki"+kox).value;
 
 if(!qty){
   return;
 }
 //console.log(qty);
 //console.log(document.getElementById("sztuki"+kox).value);
  $.ajax({
    type: "POST",
        url: "update.php",
        data: {action:'update-qty', itemID: kox, qty:qty},
        success: async function(data) {
          await new Promise(r => setTimeout(r, 1100));
          window.location.href='koszyk.php';
                
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