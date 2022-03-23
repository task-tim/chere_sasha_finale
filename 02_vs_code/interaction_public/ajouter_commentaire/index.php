<?php
require_once 'connexion.php';
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/uly2xdd.css">
</head>
<body>
    <div class="boite_message">
    <h1>chère sasha</h1>
    <div class="bulle">
    <img src="media/message_bubble.png" alt="bulle message" class="bulleMessage">
    <p class="texteInvitation">Après avoir entendu l’histoire de Sasha, nous pouvons constater que
ça n’a pas été facile pour elle. Malheureusement, ce genre de situation est
plus fréquent que l’on pense. Si Sasha était quelqu’un de ton
entourage, qu’aimerais-tu lui dire?</p>
 </div>
 <form action="commenter.php" method="POST">
<input type='text' id='espaceCommentaire' class="espaceCommentaire" rows = "5" cols = "25" name = "commentaire" placeholder="Écrivez un message à Sasha …">
<input class="btnEnvoyer" type="submit" name="commenter" value="Envoyer"/>
</input><br>

</form>
</div>  
<script>
document.getElementById('espaceCommentaire').focus();
</script>
</body>
</html> 