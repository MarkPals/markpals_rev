<!DOCTYPE HTML>
<html lang="nl">
<HEAD>
<meta http-equiv="Content-Type"
    content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="" type="text/css">
    </HEAD>
<body>
<h1>Dikke Moi!</h1>
<br>
Vul hier je naam en je favoriete kleur in!
<br>
<form action="" method="post">
<br>Naam:<br>
<input type="text" size="20" maxlength="40" name="naam">
<br><br>Kleur:<br>
<input type="text" size="20" maxlength="40" name="kleur">
<br>
<br>
<input type="submit" name="submit" value="Verzenden">
<br>
<br>
   </form>
<?php
 if(isset($_POST['submit'])){
 $naam = $_POST['naam'];
 $kleur = $_POST['kleur'];

echo "<div style='color: ". $kleur . "'>" . $naam . " ". $kleur ."</div>";
}

?>
</body>
</html>

