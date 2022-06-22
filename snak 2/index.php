<?php
  $email = $_GET['email'];
  $name = $_GET['name'];
  $age = $_GET['età'];
 var_dump($_GET);

 if (strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)){
   echo "Accesso riuscito";
 }else{
    echo 'acceso negato';
 }
  
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

</body>
</html>