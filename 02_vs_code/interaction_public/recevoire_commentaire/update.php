<?php
require_once 'connexion.php';
$bdd = getBdd();
$requette = $bdd->prepare('SELECT Contenu FROM commentaire');
$executeIsOk = $requette->execute();
$commentaires = $requette->fetchAll();
?>
<html>

<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="wordcloud/jquery.wordcloud.js"></script>
    <link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
<script>
    $(document).ready(function(){
        function getData(){
            $.ajax({
                type: 'POST',
                url: 'data.php',
                success: function(data){
                    $('#output').html(data);
                }
            });
        }
        getData();
        setInterval(function () {
            getData(); 
        }, 3000);  // it will refresh your data every 1 sec

    });
</script>
</head>

<body>
    
    <div class="click">
        <div id="refresh">
        <div ></div>
            <div class="container" id="output">
            </div>
        </div>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <script src="script.js"></script>


</body>

</html>

