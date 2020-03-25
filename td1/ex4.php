<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>un petit monde pour l'exo 4!!!!</title>
    </head>
    <body>
        <a href="ex4.php?nblignes=2&nbColonnes=2">tableau 2x2</a>
        <a href="ex4.php?nblignes=5&nbColonnes=5">tableau 5x5</a>
        <a href="ex4.php?nblignes=10&nbColonnes=8">tableau 10x8</a>
        <a href="ex4.php?nblignes=20&nbColonnes=20">tableau 20x20</a>
        <a href="ex4.php?nblignes=40&nbColonnes=40">tableau 40x40</a>
        <br>
        <?php
          $nblignes=$_GET['nblignes'];
          $nbcolonnes=$_GET['nbColonnes'];
          echo "hooooo un joli tableau tout moche !!!";
          echo "<table border='1'>";

          for ($i=1; $i<=$nblignes; $i++){
            echo '<tr>';
            for ($j=1; $j<=$nbcolonnes; $j++){
              echo '<td>';
              echo "$i - $j";
              echo '</td>';
            }
            echo '</tr>';
          }

          echo '</table>';
        ?>
    </body>
</html>
