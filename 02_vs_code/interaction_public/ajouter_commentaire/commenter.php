<?php
require_once ('connexion.php');
function filterwords($filtre){
    $motFiltrer = array('vagina','fuck','fucker','fuckoff','fck','bitch','ass','boobs','ching','chong','twit','tabarnak','tbnk','esti','conne','connasse','pute','shit','sheesh','calice','fag','faggot ','dyke','criss','penis','dick','dickhead','crisse','asshole','twat','cul','enculé','en cule','ntm','nique ta mère','enfoiré','cunt ','chienne','piece of shit','titties','tits','nazi','pétasse','connard','merde','pd','pédé','stupide','stupid','dumb','dumbass','twink','gosh','darn','damn','shitty','bitchass','bitch','bitchy','hoe','whore','slut','horny ','hell','die','dead','death','enfer','mourir','meurt','tue','suicider','suicide','kill','disgusting','kill yourself','kys','kms','ugly','disease','maladie','malade mentale','prostituée','prostitué','sick','dumb','dumbass','sexe','pute','salope','bite','femme facile','seins','nichons','fesses','niquer','baiser','suck','sucer','troncher','défoncer','tringler','violer','sodomiser','pédophilie','drugs','droguer','drogue','pendre','va te pendre','hang','hang yourself','cut','self harm','porno','porn','sex','booty','weed','high','terrorist ','weiner','vagin','nigger','nigga','sand nigger');
    for ($i = 0; $i < sizeof($motFiltrer); $i++) {
     $filtre = preg_replace_callback('/\b' . $motFiltrer[$i] . '\b/i', function($matches){return str_repeat('*', strlen($matches[0]));}, $filtre);
    }
    return $filtre;
   }

$bdd = getBdd();
$commenter = $bdd->prepare( "INSERT INTO commentaire(Contenu) VALUES(?)");	  
$commenter->execute(array(filterwords($_POST['commentaire'])));
header("Location: index.php");
?>