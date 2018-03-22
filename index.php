<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6. práce</title>
  </head>
  <body>
    <h1>6. práce: podmínky</h1>

    <?php
    $plnoletost=17;
    $obcanka=15;

    if ($plnoletost >=18) {
     echo "Na zdraví!";
     ?>
     <img src="kvas.jpg" alt="alcohol">

     <?php
      }elseif ($plnoletost >= 15) {
       echo "Jakože občanku máš jako, ale musíš jakože ještě mít narozky 3 krát";
       
      ?>

     <?php
     }else {
      ?>
    <?php echo "Sorry kámo. Ještě nemáš ani 15!";  ?> <img src="kys.jpg" alt="No_Chlast"> <?php  } ?>








  </body>
</html>
