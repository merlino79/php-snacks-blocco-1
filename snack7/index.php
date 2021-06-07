<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack7</title>
</head>
<body>
<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<h1>snack7</h1>

<?php

  $students = [
    [
      'nome' => "sem",
      'cognome' => "Verdi",
      'voti' => [4,5,7,8,9] 
    ],
    [
      'nome' => "tey",
      'cognome' => "brambilla",
      'voti' => [8,6,2,3,4] 
    ],
    [
      'nome' => "marina",
      'cognome' => "serenella",
      'voti' => [8,5,7,10,6] 
    ],
  ];
    var_dump($students)
?>
  
</body>
</html>