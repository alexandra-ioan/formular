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
  <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ioanalexandra13@yahoo.com";
    $email_subject = "Un nou formular a fost completat";
 
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
   
     
 
    $nume = $_POST['name']; // required
    $email = $_POST['telefon']; // required
    $telefon = $_POST['telefon']; // required
    //$adresa = $_POST['adresa']; // not required
    $demo = $_POST['demo']; // required
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 

    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nume)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Nume: ".clean_string($nume)."\n";
    $email_message .= "Adresa: ".clean_string($adresa)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telefon: ".clean_string($telefon)."\n";
    $email_message .= "Optiune: ".clean_string($demo)."\n";
 
// create email headers
$headers = 'From: '.$nume."\r\n".
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<?php
 
}
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

 
<SCRIPT>
  var name = <?php
    $name = filter_input(INPUT_GET, 'name');
    echo json_encode($name);
  ?>;

  console.log(name);

</script>
</html>