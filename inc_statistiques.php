<?php
include_once('modele/connexion_db.php');
?>

<h1 class='conteneurForm'>La Collection </h1>

<div class='conteneurForm'>
<?php
$req= $bdd->query('SELECT COUNT(piece_id) AS nb_pieces FROM eric.collection ');

$donnees= $req->fetch();

$req= $bdd->query('SELECT COUNT(DISTINCT piece_paysorg) AS nb_pays FROM eric.collection ');

$donnees2= $req->fetch();

$req= $bdd->query('SELECT MIN(piece_datebasse) AS min_datebasse FROM eric.collection ');

$donnees3= $req->fetch();


$req= $bdd->query('SELECT MAX(piece_datehaute) AS max_datehaute FROM eric.collection ');

$donnees4= $req->fetch();

echo 'La collection est composée de ' . $donnees['nb_pieces'] . ' pièces provenant de ' . $donnees2['nb_pays'] . ' pays différents, datant de ' . $donnees3['min_datebasse'] . ' à  ' . $donnees4['max_datehaute'] . '.';

?>
</div>

