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
            'lastName' => 'marco',
            'surName' => 'serenello',
            'voti' => [5,7,8,6,8,],
          ],
          [
            'lastName' => 'serena',
            'surName' => 'verdi',
            'voti' => [5,7,8,4,7,9],
          ],
          [
            'lastName' => 'sara',
            'surName' => 'brambilla',
            'voti' => [5,7,8,4,7,9],
          ],
          [
            'lastName' => 'franco ',
            'surName' => 'franchi',
            'voti' => [5,7,8,4,7,9],
          ],
          
          
        ];
        // var_dump($students)

?>
<ul>
<?php foreach ($students as $studenti) {?>

  <li>
  <?php echo $studenti['lastName'] . ' ' . $studenti['surName']  ?>
  
  
  </li>

  <ul>
  <li>
  voti: <?php print_r($studenti['voti'])?>
  </li>
    
  </ul>
  
  


<?php } ?>
</ul>



  
</body>
</html>
