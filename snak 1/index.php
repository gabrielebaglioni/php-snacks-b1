<?php
 $games = [
      [
         "homeTeam" => "Denver",
         "teamHomePoints" => "60",
         "aweyTeam" => "Portland",
         "teamAweyPoints" => "55",
      ],
      [
         "homeTeam" => "lakers",
         "teamHomePoints" => "60",
         "aweyTeam" => "boston",
         "teamAweyPoints" => "55",
      ],
     
 ];
//  echo $games[0]['homeTeam'];
//  echo $games[0]['teamHomePoints'] 
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
   <div>
    <h1>RISULTATI</h1>
    <span><?= $games[0]['homeTeam'] . ' ' . $games[0]['teamHomePoints']  ?></span>
    <span> vs </span>
    <span><?= $games[0]['aweyTeam'] . ' ' . $games[0]['teamAweyPoints']  ?></span>
     <h3>Denver win</h3>
   </div>
   <div>
      <span><?= $games[1]['homeTeam'] . ' ' . $games[1]['teamHomePoints']  ?></span>
      <span> vs </span>
      <span><?= $games[1]['aweyTeam'] . ' ' . $games[1]['teamAweyPoints']  ?></span>
      <h3>lakers win</h3>
   </div>
</body>
</html>