window.onload = function() {
    edycja();
  };

  function edycja(){
      let dur = window.location.hash.toString();
      dur=dur.replace('#','');
      dur = parseInt(dur);
      if(isInt(dur)){
        document.getElementById("tytul").innerHTML = "Edytujesz :" + produktList[dur-1].name;
      }
}
 function dad(){
    const lol = document.getElementById("typeNumber").value;
    window.location.replace("edycja.php"+"#"+lol);
    console.log("ASDAS");
}