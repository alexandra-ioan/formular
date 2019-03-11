<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <?php
    $name = filter_input(INPUT_GET, 'name');
    echo $name;
    $email = filter_input(INPUT_GET, 'email');
    echo $email;
    $telefon = filter_input(INPUT_GET, 'telefon');
    echo $telefon;
    $adresa = filter_input(INPUT_GET, 'adresa');
    echo $adresa;
    $demo = filter_input(INPUT_GET, 'demo');
    echo $demo;
  ?>
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
        <button>Modificare S.R.L.</button>
        <button>Modificare S.R.L.-D</button>
        <button>Modificare S.N.C.</button>
    </div>
    <div class="col-sm-6">
        <button>Modificare P.F.A.</button>
        <button>Modificare I.I.</button>
        <button>Modificare I.F.</button>
    </div>

 

</body>

<script>

  var name = <?php
    $name = filter_input(INPUT_GET, 'name');
    echo json_encode($name);
  ?>;

  console.log(name);

</script>
</html>