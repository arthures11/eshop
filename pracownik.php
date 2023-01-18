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
                          <a href="logowanie.php"><button class="btn btn-outline-primary me-4 border border tra bg-dark bg-gradient" type="button"><?php require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');  if($_SESSION["status"]!="gosc"){
                            echo "WYLOGUJ";
                          }
                          else{echo "LOGOWANIE";} ?></button></a> 
                          <?php
                          require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');
                          if($_SESSION["status"] == "pracownik" || $_SESSION["status"] == "admin"){
                            echo " <a href='pracownik.php'><button class='btn btn-outline-danger me-4 border border tra bg-dark bg-gradient' type='button'>PANEL</button></a>";}?>

                         

                             
                            </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><br></div>
            </div>
        
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-block" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Edytowanie produktu</button>
                        <a href="zamowienia.php"><button class="btn btn-primary btn-block" type="button">Zamówienia</button></a>
                        <?php
                        if( $_SESSION["status"] == "admin"){
                          echo"
                        <a href='uzytkownicy.php'><button class='btn btn-primary btn-block' type='button'>Użytkownicy</button></a>";}?>
                      </div>
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edycja produktu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="number" id="typeNumber" class="form-control" />
                <label class="form-label" for="typeNumber">Wprowadź ID produktu</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button onclick="dad()" type="button" class="btn btn-primary">OK</button>
            </div>
          </div>
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