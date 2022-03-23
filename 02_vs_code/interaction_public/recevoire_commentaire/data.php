<?php
require_once 'connexion.php';
$bdd = getBdd();
$requette = $bdd->prepare('SELECT Contenu FROM commentaire');
$executeIsOk = $requette->execute();
$commentaires = $requette->fetchAll();
?>
<?php foreach ($commentaires as $commentaire): ?>
<p class='commentaire'><?= $commentaire['Contenu'] ?></p>
<?php endforeach; ?>
<script src="script.js"></script>