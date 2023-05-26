<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $variabele1 = 10;
    $variabele2 =10;
    if($variabele1 == $variabele2){
    echo "De twee waarden zijn gelijk";
    }
    else{
        echo "De twee waarden zijn ongelijk";
    }
    ?><br>
    <?php
    $variabele1 = 10;
    $variabele2 = 12;
    if($variabele1 != $variabele2){
        echo "De twee waarden zijn ongelijk";
    }
    ?><br>
    <?php
    $variabele1 = 10;
    $variabele2 =10;
    if($variabele1 == $variabele2){
    echo "De twee waarden zijn gelijk";
    }
    if($variabele1 != $variabele2){
        echo "De twee waarden zijn ongelijk";
    }
    ?><br>
    <form method="POST">
  <label for="Uname">Username</label>
  <input type="text" id="Uname" name="Uname"><br><br>
  <label for="pass">Password</label>
  <input type="text" id="pass" name="pass"><br><br>
  <input type="submit" name="Knopje">
  </form>
  <?php
  if(isset($_POST['Uname']) && isset($_POST['pass'])){
    $username= $_POST['Uname'];
    $password=$_POST['pass'];
    echo $username;
    echo $password;
  }
?>
</body>
</html>
