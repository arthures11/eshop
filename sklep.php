<!DOCTYPE html>
<html>
<style>
</style>
<?php
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');
if(!isset($_SESSION["status"])){
  $_SESSION["status"]="gosc";
  $_SESSION["loggedin"] = false;
}
echo"
    <head>
        <meta charset='utf-8'>
        <title></title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor' crossorigin='anonymous'>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='style.css'>
        <script src='code.js'></script>
    </head>
    <body>
        <style>
        </style>

        <div class='container-fluid'>
            <div class='row bg-dark'>
                <div class='col-2 mt-5'><a href='index.php'><img src='logo.png' class='img-thumbnail' alt='...'></a></div>
                <div class='col-10'>
                    <ul class='nav justify-content-end'>
                        <li class='nav-item'>
                          <a class='nav-link text-secondary' href='#'>Regulamin</a>
                        </li>
                        <li class='nav-item'>
                          <a class='nav-link text-secondary' href='#'>Wysyłka/Zwroty</a>
                        </li>
                        <li class='nav-item'>
                          <a class='nav-link text-secondary' href='#'>Polityka Prywatności</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class='row'>
              <div class='col-12 bg-dark'><br></div>
            </div>
            <div class='row'>
                <div class='col-12 bg-dark'>
                    <nav class='navbar'>
                        <form class='container-fluid justify-content-center'>
                          <a href='index.php'><button class='btn btn-outline-primary bg-dark bg-gradient
                            me-4 border border tra' type='button'>HOME</button></a>
                          <div class='dropdown' >
                            <button class='btn btn-outline-primary dropdown-toggle bg-dark bg-gradient me-4 border border tra' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' >
                              SKLEP
                            </button>
                            <div class='dropdown-menu' aria-labelledby='dropdownMenuButton' onclick='gg()'>
                                <a class='dropdown-item' href='#wydechy' onclick='gg()'>Wydechy</a>
                                <a class='dropdown-item' href='#poduszki' onclick='gg()'>Poduszki</a>
                                <a class='dropdown-item' href='#zlaczki' onclick='gg()'>Złączki</a>
                            </div>
                          </div>
                         
                          
                          ";
                          if(empty($_SESSION['listaKoszyk'])){
                            echo "<a href='koszyk.php'><button class='btn btn-outline-primary me-4 border border tra bg-dark bg-gradient' type='button'>KOSZYK(0)</button></a>";
                          }
                          else{
                          echo"
                          <a href='koszyk.php'><button class='btn btn-outline-primary me-4 border border tra bg-dark bg-gradient' type='button'>KOSZYK(" .count((array)$_SESSION['listaKoszyk']). ")</button></a>";}
                          echo "
                          <a href='logowanie.php'><button class='btn btn-outline-primary me-4 border border tra bg-dark bg-gradient' type='button'>"?><?php require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');  if($_SESSION["status"]!="gosc"){
                            echo "WYLOGUJ";
                          }
                          else{echo "LOGOWANIE";} ?><?php echo "</button></a>  
                          ";
                          if($_SESSION["status"] == "pracownik" || $_SESSION["status"] == "admin"){
                            echo " <a href='pracownik.php'><button class='btn btn-outline-danger me-4 border border tra bg-dark bg-gradient' type='button'>PANEL</button></a>";}

                         

          echo " 
                             
                            </form>
                </div>
            </div>
            <div class='row'>
                <div class='col-12'><br></div>
            </div>
          
            <div class='row'>
                <div class='col-lg-3 offset-lg-2 col-sm-12'>
                    <ul class='nav nav-pills'>
                        <li class='nav-item w-100'>
                          <a class='nav-link active text-center' aria-current='page'>KATEGORIE</a>
                        </li>
                      </ul>
                </div>
                <div class='col-5'>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-3 offset-lg-2 col-sm-12'>
                    <div class='d-flex align-items-start'>
                        <div class='nav flex-column nav-pills me-3 w-100' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
                          <button class='nav-link' id='v-pills-home-tab' data-bs-toggle='pill' data-bs-target='#v-pills-home' type='button' role='tab' aria-controls='v-pills-home' aria-selected='false'>Wydechy</button>
                          <button class='nav-link' id='v-pills-profile-tab' data-bs-toggle='pill' data-bs-target='#v-pills-profile' type='button' role='tab' aria-controls='v-pills-profile' aria-selected='false'>Poduszki</button>
                          <button class='nav-link' id='v-pills-disabled-tab' data-bs-toggle='pill' data-bs-target='#v-pills-disabled' type='button' role='tab' aria-controls='v-pills-disabled' aria-selected='false'>Złączki</button>
                        </div>
                      </div>
                </div>
                <div class='col-5'>
                    <div class='tab-content' id='v-pills-tabContent'>
                        <div class='tab-pane fade' id='v-pills-home' role='tabpanel' aria-labelledby='v-pills-home-tab' tabindex='0'>
                         <div class='row row-cols-1 row-cols-md-3 g-4'> <!-- START -->
                         
                         ";
                         for($i=0;$i<count($listaProduktow);$i++){
                           if($listaProduktow[$i]->kategoria=="wydechy"){
                         echo"
                            <div class='col-4'>
                              <div class='card h-100'>
                                <a href='opis.php?id=". $listaProduktow[$i]->id ."'><img src='sklep/". $listaProduktow[$i]->id .".jpg' class='card-img-top produkty' alt='...' data-bs-toggle='modal' data-bs-target='#staticBackdrop'></a>
                                <div class='card-body'>
                                  <h5 class='card-title'>". $listaProduktow[$i]->name . "</h5>
                                  <p class='card-text'>". $listaProduktow[$i]->cena . " zł</p>
                                </div>
                                <div class='card-footer'>
                                  <small class='text-muted'>pozostało: ". $listaProduktow[$i]->sztuki ."</small>
                                </div>
                              </div>
                            </div>
                         ";}
                        }
                         echo"
                          </div>
                    </div>
                    
                 <!-- KONIEC -->
                        <div class='tab-pane fade' id='v-pills-profile' role='tabpanel' aria-labelledby='v-pills-profile-tab' tabindex='0'>
                            <div class='row row-cols-1 row-cols-md-3 g-4'> <!-- START -->";
                            for($i=0;$i<count($listaProduktow);$i++){
                              if($listaProduktow[$i]->kategoria=="poduszki"){
                            echo"
                               <div class='col-4'>
                                 <div class='card h-100'>
                                   <a href='opis.php?id=". $listaProduktow[$i]->id ."'><img src='sklep/". $listaProduktow[$i]->id .".jpg' class='card-img-top produkty' alt='...' data-bs-toggle='modal' data-bs-target='#staticBackdrop'></a>
                                   <div class='card-body'>
                                     <h5 class='card-title'>". $listaProduktow[$i]->name . "</h5>
                                     <p class='card-text'>". $listaProduktow[$i]->cena . " zł</p>
                                   </div>
                                   <div class='card-footer'>
                                     <small class='text-muted'>pozostało: ". $listaProduktow[$i]->sztuki ."</small>
                                   </div>
                                 </div>
                               </div>
                            ";}
                           }
                            echo"
                              </div>
                        </div>
                        ";
                        echo "</div> <!-- KONIEC -->
                        <div class='tab-pane fade' id='v-pills-disabled' role='tabpanel' aria-labelledby='v-pills-disabled-tab' tabindex='0'>                          
                         <div class='row row-cols-1 row-cols-md-3 g-4'> <!-- START -->";
                         for($i=0;$i<count($listaProduktow);$i++){
                          if($listaProduktow[$i]->kategoria=="zlaczki"){
                        echo"
                           <div class='col-4'>
                             <div class='card h-100'>
                               <a href='opis.php?id=". $listaProduktow[$i]->id ."'><img src='sklep/". $listaProduktow[$i]->id .".jpg' class='card-img-top produkty' alt='...' data-bs-toggle='modal' data-bs-target='#staticBackdrop'></a>
                               <div class='card-body'>
                                 <h5 class='card-title'>". $listaProduktow[$i]->name . "</h5>
                                 <p class='card-text'>". $listaProduktow[$i]->cena . " zł</p>
                               </div>
                               <div class='card-footer'>
                                 <small class='text-muted'>pozostało: ". $listaProduktow[$i]->sztuki ."</small>
                               </div>
                             </div>
                           </div>
                        ";}
                       }
                        echo"
                          </div>
                    </div>
                    </div> <!-- KONIEC -->";
                    ?>
                      </div>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">zamknij</button>
      </div>
    </div>
  </div>
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