<?php
session_start();
class produkty{
    public $id;
    public $name;
    public $cena;
    public $sztuki;
    public $opis;
    public $kategoria;

    function __construct($id, $name, $cena, $sztuki, $opis, $kategoria) {
      $this->id = $id;
      $this->name = $name;
      $this->cena = $cena;
      $this->sztuki = $sztuki;
      $this->opis = $opis;
      $this->kategoria = $kategoria;
    }
  }

     class koszyk{
      public $id;
      public $sztuk;

      function __construct($id, $sztuk) {
          $this->id = $id;
          $this->sztuk = $sztuk;
  }
  function set_sztuk($ile){
    $sztuk = $ile;
}


}
  $_SERVER['listaKoszyk'] = [];
  //$listaKoszyk[]= new koszyk(1,44);
  $listaProduktow = [];
  $listaProduktow[]= new produkty(1,"Poduszka Rubena 130/3 z pierścieniem", 22, 5, "Wyspa zaworowa do sterowania osiami 2x1/4 (wyspa nie zawiera złączek).", "poduszki");
  $listaProduktow[]= new produkty(2,"Carbon Cover", 553, 11, "Carbonowa nakładka na fotel Recaro CS Classic Carbon Fiber", "poduszki");
  $listaProduktow[]= new produkty(3,"Końcówka wydechu", 23, 55, "końcówa", "poduszki");
  $listaProduktow[]= new produkty(4,"Wyspa Zaworowa", 999, 1, "Wyspa zaworowa do sterowania osiami 2x1/4 (wyspa nie zawiera złączek).", "wydechy");
  $listaProduktow[]= new produkty(5,"Zestaw Air Ride", 17, 51, "AIR RIDE", "wydechy");
  $listaProduktow[]= new produkty(6,"Custom Embel", 111, 3, "Stylowa naklejka.", "wydechy");
  $listaProduktow[]= new produkty(7,"Złączka z wężem", 345, 55, "Redukcja, w kształcie węża.", "zlaczki");
  $listaProduktow[]= new produkty(8,"Złączka M22", 395, 141, "Klasyfikacja M22, bardzo trwała.", "zlaczki");
  $listaProduktow[]= new produkty(9,"Złączka z gwintem wew. skręconym", 33, 11, "Złączka skręcona wewnętrznie, bardzo trwała.", "zlaczki");
  $listaProduktow[]= new produkty(10,"Kox", 111, 3, "Kox.", "wydechy");
?>