window.onload = function() {
    gg();
  };

class produkty {
    constructor(id, name,cena,sztuki,opis) {
      this.id = id;
      this.name = name;
      this.cena=cena;
      this.sztuki=sztuki;
      this.opis=opis;
    }
  }
  const produktList = [];
  produktList.push( {
    "id": 1,
    "name": "Poduszka Rubena 130/3 z pierścieniem",
    "cena": 33,
    "sztuki": 11,
    "opis": "Wyspa zaworowa do sterowania osiami 2x1/4 (wyspa nie zawiera złączek)."
   })
   produktList.push( {
    "id": 2,
    "name": "Carbon Cover",
    "cena": 331,
    "sztuki": 55,
    "opis": "Carbonowa nakładka na fotel Recaro CS Classic Carbon Fiber"
   })
   produktList.push( {
    "id": 3,
    "name": "Końcówka wydechu",
    "cena": 3345,
    "sztuki": 1,
    "opis": "końcówa"
   })
   produktList.push( {
    "id": 4,
    "name": "Wyspa Zaworowa",
    "cena": 33,
    "sztuki": 11,
    "opis": "Wyspa zaworowa do sterowania osiami 2x1/4 (wyspa nie zawiera złączek)."
   })
   produktList.push( {
    "id": 5,
    "name": "Zestaw Air Ride",
    "cena": 331,
    "sztuki": 55,
    "opis": "AIR RIDE)."
   })
   produktList.push( {
    "id": 6,
    "name": "Custom Embel",
    "cena": 3345,
    "sztuki": 1,
    "opis": "Stylowa naklejka."
   })
   produktList.push( {
    "id": 7,
    "name": "Złączka z wężem",
    "cena": 3345,
    "sztuki": 1,
    "opis": "Redukcja, w kształcie węża."
   })
   produktList.push( {
    "id": 8,
    "name": "Złączka M22",
    "cena": 3345,
    "sztuki": 1,
    "opis": "Klasyfikacja M22, bardzo trwała."
   })
   produktList.push( {
    "id": 9,
    "name": "Złączka z gwintem wew. skręconym",
    "cena": 3345,
    "sztuki": 1,
    "opis": "Złączka skręcona wewnętrznie, bardzo trwała."
   })
  

function handleChange(){

}

function opcje(){
    const newDiv = document.createElement("div");
    div.classList.add('form-check');

}
function gg(){
    if (window.location.hash === '#wydechy') {
        document.getElementById('v-pills-home-tab').click();
      }
      if (window.location.hash === '#poduszki') {
        document.getElementById('v-pills-profile-tab').click();
      }
      if (window.location.hash === '#zlaczki') {
        document.getElementById('v-pills-disabled-tab').click();
      }
      let dur = window.location.hash.toString();
      dur=dur.replace('#','');
      dur = parseInt(dur);
      if(isInt(dur)){
        console.log(produktList[2]);
        //document["img"].src = produktList[dur].id+".jpg";
        $("#img").attr("src", "sklep/"+produktList[dur-1].id+".jpg");
        document.getElementById("h3").innerHTML = produktList[dur-1].name;
        document.getElementById("dd").innerHTML = produktList[dur-1].opis;
        document.getElementById("sztuk").innerHTML = "Sztuk na stanie: "+produktList[dur-1].sztuki;
        document.getElementById("cena").innerHTML = "Cena za sztukę: "+produktList[dur-1].cena+"pln";

      }
}

function mod(){
    const myModalAlternative = new bootstrap.Modal('#myModal', {
        keyboard: true
    })
    
}

function isInt(value) {
    if (isNaN(value)) {
      return false;
    }
    var x = parseFloat(value);
    return (x | 0) === x;
  }