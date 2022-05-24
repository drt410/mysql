<?php
$db='base_pdo';
$host='localhost';
$user='root';
$mdp='12345';
$dsn="mysql:dbname=$db;host=$host";
try
{
$dbase=new PDO($dsn, $user,$mdp);
$dbase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
die('Erreur de connexion à la bdd : '.$ex->getMessage());
}

if($dbase)
{
/*     $requete=$dbase->exec('INSERT INTO users (login,mail,tel) VALUES ("Camille","camille@gmail.fr","06.05.02.03.01")');
    echo "un user ajouté : ".$requete; */
/*     $requete=$dbase->exec('INSERT INTO users (login,mail,tel) VALUES ("Camille","camille@gmail.fr","06.05.02.03.01")');
    echo "un user ajouté : ".$requete;
    $requete=$dbase->exec('INSERT INTO users (login,mail,tel) VALUES ("Sebastien","sebastien@gmail.fr","06.05.02.03.02")');
    echo "un user ajouté : ".$requete;
    $requete=$dbase->exec('INSERT INTO users (login,mail,tel) VALUES ("Carole","carole@gmail.fr","06.05.02.03.03")');
    echo "un user ajouté : ".$requete;
    $requete=$dbase->exec('INSERT INTO users (login,mail,tel) VALUES ("Thierry","thierry@gmail.fr","06.05.02.03.04")');
    echo "un user ajouté : ".$requete;
    $requete=$dbase->exec('INSERT INTO users (login,mail,tel) VALUES ("Thierry","thierry@ldnr.fr","06.05.02.03.05")');
    echo "un user ajouté : ".$requete; */

/*  $requete=$dbase->query('SELECT login, COUNT(login) AS nb_Login From users where login = "Thierry"');
    $res=$requete->fetchall(PDO::FETCH_ASSOC);
    foreach($res as $resultat)
    {
    echo "<pre>";
    var_dump($res);
    echo "</pre>"; 
    echo "<br>".$resultat['login'].' est apparut '.count($resultat).' fois';
    } */

/*     $requete=$dbase->exec('UPDATE users SET tel="06.05.02.03.55" WHERE login="Carole"');
    echo "nb user modifié = ".$requete; */

    $requete=$dbase->query('SELECT login, mail FROM `users` login ORDER BY login ASC, mail asc');
    $res=$requete->fetchall(PDO::FETCH_ASSOC);

    for($i=0;$i<count($res);$i++)
    {
    echo "<br> ".$i."-".$res[$i]['login'];
    } 
    echo "<br>nb users ".count($res);
}
/*     echo "Instance créée, connexion valide";
    $requete=$dbase->query('SELECT login,mail,tel FROM users');
    $res=$requete->fetchall(PDO::FETCH_ASSOC);
    foreach($res as $resultat)
    {
    //echo "<br>".$ligne[0];
    echo "<pre>";
    var_dump($res);
    echo "</pre>";
    //echo "<br>".$ligne['login'].' - '.$ligne['mail']." - ".$ligne['telephone'];
    echo "<br>".$resultat['login'].' - '.$resultat['mail']." - ".$resultat['tel'];
    } */
//echo "<pre>";
//print_r($requete);
//echo "</pre>";
//$resultat=$requete->fetchall(PDO::FETCH_ASSOC);
/*
foreach($resultat as $cle)
{
foreach($cle as $cle2=>$valeur2)
echo "<br>".$cle2." -> ".$valeur2; // Affiche stephane@ldnr.fr
}
*/

/* $i=0;
while($resultat=$requete->fetch())
{ */
//echo "<pre>";
//var_dump($resultat);
//echo "</pre>";
//for($l=0;$l<count($resultat);$l++)
// echo "<br>".$resultat[$l]['login']." - ".$resultat[$l]['mail']." - ".$resultat[$l]['telephone'];
/* echo "<br>".$resultat['login']." - ".$resultat['mail']; // Affiche que "Laurent"
}
}  */

/*     $requete=$dbase->exec('INSERT INTO technos (techno) VALUES ("PGSQL")');
    echo "un articles ajouté : ".$requete;
    $requete=$dbase->exec('INSERT INTO technos (techno) VALUES ("Java")');
    echo "un articles ajouté : ".$requete; 
    $requete=$dbase->exec('INSERT INTO technos (techno) VALUES ("Java_Erreur")');
    echo "un articles ajouté : ".$requete;
    $requete=$dbase->exec('DELETE FROM technos WHERE techno =("Java_Erreur")');
    echo "Nombre de techno effacés : ".$requete; 
     */


/*     echo "Instance créée, connexion valide";
    $requete='SELECT login,mail,tel FROM users';
    foreach($dbase->query($requete) as $ligne)
    {
    //echo "<br>".$ligne[0];
    echo "<pre>";
    var_dump($ligne);
    echo "</pre>";
    //echo "<br>".$ligne['login'].' - '.$ligne['mail']." - ".$ligne['telephone'];
    echo "<br>".$ligne[0].' - '.$ligne[1]." - ".$ligne[2];
    } */
/*  $requete='SELECT login, mail, tel FROM users';
 Foreach($dbase->query($requete) as $ligne)
 echo $ligne['nom'].' – '.$ligne['telephone'].' – '.$ligne['email'];  */
 
