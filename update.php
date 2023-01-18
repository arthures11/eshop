<?php
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');
if(isset($_POST['action']) && $_POST['action'] == 'update-qty')
{
    echo "asd";
    $sessionItem = $_POST['itemID'];
    $sessionItemQty = $_POST['qty'];
    $IDTABLICY;
    //$productSessionPrice = $_SESSION['cart_items'][$sessionItem]['total_price'];
    if(!empty($_SESSION['listaKoszyk'])){
        for($i=0;$i<count($listaProduktow);$i++){
          if($_SESSION['listaKoszyk'][$sessionItem]->id==$listaProduktow[$i]->id){
            $IDTABLICY=$i;
          }
          //if($i==count($_SESSION['listaKoszyk'])-1){
           // goto skip;
          }
        }
    if($sessionItemQty==0){
        $_SESSION['listaKoszyk'][$sessionItem]->sztuk = 9;
        //unset($_SESSION['listaKoszyk'][$sessionItem], $sessionItem);
        //\array_values($_SESSION['listaKoszyk']);
        unset($_SESSION['listaKoszyk'][$sessionItem]);
        $_SESSION['listaKoszyk'] = array_values($_SESSION['listaKoszyk']);
        exit();
    }
    else if($sessionItemQty>$listaProduktow[$IDTABLICY]->sztuki){
        $message = "Nie ma tyle sztuk na stanie!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Refresh:0");
        return;
    }
    else if($sessionItemQty<=$listaProduktow[$IDTABLICY]->sztuki) {
    $_SESSION['listaKoszyk'][$sessionItem]->sztuk = $sessionItemQty;
    }
    //$_SESSION['listaKoszyk'][$sessionItem]['total_price'] = $sessionItemQty * $productSessionPrice;
    
    echo json_encode(['a' => '1']);
    exit();
}
  
?>
