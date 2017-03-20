<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    // --------------- EXERCICE 1
    echo '<h2>Exercice 1</h2>';
    echo'<p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **paramUrl.php?nom=Nemare&prenom=Jean**</p>';

    echo "paste : 'paramUrl.php?nom=Nemare&prenom=Jean' to the URL <br>";
    echo $_GET['nom'].' '.$_GET['prenom'];

    echo '<br><br><hr>';


   // ----------------- EXERCICE 2
    echo '<h2>Exercice 2</h2>';
    echo "<p>Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **paramUrl.php?nom=Nemare&prenom=Jean**</p>";


 if($_GET["age"] === null) {
    echo $_GET['nom'].' '.$_GET['prenom'].'<br>';
    echo "Age is null\n";
 }

 if(isset($_GET["age"])) {
    echo $_GET['nom'].' '.$_GET['prenom'].' '.$_GET['age'].' ans.';
 }

 echo '<hr>';

// ------------------ EXERCICE 3

echo '<h2>Exercice 3</h2>';
echo '<p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **parmUrl.php?dateDebut=2/05/2016&dateFin=27/11/2016**</p><br>';

    echo 'dateDebut : '.$_GET['dateDebut'].' <br> dateFin : '.$_GET['dateFin'];

echo '<hr>';

// ---------------- EXERCICE 4

echo '<h2>Exercice 4</h2>';
echo "<p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **paramUrl.php?langage=PHP&serveur=LAMP**</p><br>";

echo 'langage : '.$_GET['langage'].' <br> serveur : '.$_GET['serveur'];

echo '<hr>';

// ----------------------- EXERCICE 5

echo 'Exercice 5';
echo '<p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **paramUrl.php?semaine=12**</p>';

echo 'semaine : '.$_GET['semaine'];

echo '<hr>';

// ------------------ EXERCICE 6

echo '<h2>Exercice 6</h2>';
echo '<p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **paramUrl.php?batiment=12&salle=101**</p>';

echo 'bâtiment : '.$_GET['batiment'].' <br> salle : '.$_GET['salle'];

?>

</body>
</html>