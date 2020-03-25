<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<?php
    if (isset($_GET["message"]))    {
    $message = $_GET["message"];
    }
    else {
    $message = "";
    }
    if (isset($_GET["page"]))    {
    $page = "vous etes sur la page n° ".$_GET["page"];
    }
    else{
    $page = "";
    }
    if (isset($_GET["bonjour"]))    {
        $bonjour = $_GET["bonjour"];
    }
    else {
    $bonjour = "";
    }
?>
<a href="hello.php?message=Hello">Afficher Hello</a>
<a href="hello.php?page=1">Afficher l'index</a>
<a href="hello.php?bonjour=bonjour">Afficher bonjour</a>
<?php
echo $message;
echo $page;
echo $bonjour
?>

</body>
</html>
