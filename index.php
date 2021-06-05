<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snak con Array</title>
</head>
<body>
  <h2>
  team:
  <?php
  $team = [
    [
      'squadraCasa' => 'Fortitudo',
      'squadraOspite' => 'Vanoli Basket Cremona',
      'puntiSquadraCasa' => 70,
      'puntiSquadraOspite' => 60,
      
     ],
      [
      'squadraCasa' => 'Germani Brescia',
      'squadraOspite' => 'vitrus Bologna',
       'puntiSquadraCasa' => 70,
      'puntiSquadraOspite' => 60,
          
      ],
      [
      'squadraCasa' => 'Carpegna Prosciutto Pesaro',
      'squadraOspite' => 'Allianz Pallacanestro Trieste',
       'puntiSquadraCasa' => 70,
      'puntiSquadraOspite' => 60,
          
      ],
     
   
   
   
  ]
 ?> 
 </h2>
 <ul>
    <?php
    foreach ($team as $teams) {
    ?>
    <li>
    <?php
      echo $teams['squadraCasa'];
      
      
    

    ?>
    -
     <?php
      echo $teams['squadraOspite'];
      
    

    ?>
    ---punti: ----
     <?php
      echo $teams['puntiSquadraCasa'];
      
    

    ?>
    - 
     <?php
      echo $teams['puntiSquadraOspite'];
      
    

    ?>


    </li>
    <?php
    }
    ?>
  </ul> 

      

     
     
  

  

      
   
   

 
  
  


  

  

  


 



</body>
</html>