<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
</head>
<body>
  <h3>Solicita Oferta si Informatii</h3>
  <div class="container">
    <form action="modif.php">
      <label for="name"></label>
      <input type="text" id="name" name="name" placeholder="Nume si prenume">

      <label for="email"></label>
      <input type="text" id="email" name="email" placeholder="Email">
      <label for="telefon"></label>
      <input type="text" id="telefon" name="telefon" placeholder="Numar de telefon">

      <label for="adresa"></label>
      <input type="text" id="adresa" / placeholder="Localitate Sediu Firma">
      <input type="radio" name="demo" value="modif" id="modif-radio" class="form-radio" checked><label for="radio-one">Modificare Firma</label>
      <input type="radio" name="demo" value="infiin" id="infi-radio" class="form-radio" checked><label for="radio-one">Infiintare Fiintare</label>

      <br><br>
      <button id="submit-btn">Solicita Oferta</button>
    </form>
  </div>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3XfuMJJGzaU8TUItQM7XWD4esZdbpgtA&libraries=places"></script>
  <script>
    var input = document.getElementById('adresa');
    var autocomplete = new google.maps.places.Autocomplete(input);
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<script>
document.getElementById("submit-btn").addEventListener("click", function(event){
  event.preventDefault();

  var rad1 = document.getElementById('modif-radio');
  var rad2 = document.getElementById('infi-radio');
  
  if(rad1.checked === true)
    window.location.href = "modif.php?name="+ document.getElementById('name').value + "&email="+ document.getElementById('email').value +"&telefon="+document.getElementById('telefon').value+"&adresa="+document.getElementById('adresa').value;
  else if(rad2.checked === true)
    window.location.href = "infin.php?name="+ document.getElementById('name').value + "&email="+ document.getElementById('email').value +"&telefon="+document.getElementById('telefon').value+"&adresa="+document.getElementById('adresa').value;
});
</script>
</html>