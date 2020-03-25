<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>le monde parfait</title>
    </head>
    <body>
          <form method="GET">
            <label for="size">Size : </label>
            <input type="number" value="" name="size" id="size" required>
            <label for="couleur">couleur : </label>
            <input type="color" value="" name="couleur" id="couleur"required>
            <label for="message">message : </label>
            <input type="text" value="" name="text" id="text"required>
            <input type="submit" value="Valider">
          </form>

          <?php
          if(isset($_GET['size']) && isset($_GET['couleur']) && isset($_GET['text'])){
            $size=$_GET['size'];
            $couleur=$_GET['couleur'];
            $msg=$_GET['text'];
          }

          echo "<div style='font-size: {$size}px;color:{$couleur};'>$msg</div>";
          ?>
    </body>
</html>
