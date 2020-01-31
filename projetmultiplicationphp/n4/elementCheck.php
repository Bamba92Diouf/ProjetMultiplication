<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Étape 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
    <style>
body {

background-image:url(bg.jpg );
background-repeat:no-repeat 100%;
background-attachment:fixed;
}
</style>
</head>
<body>
<header>
    
   
</header>
<div class="container">
<h1 class="text-center animated infinite swing delay-60s">Corrections et scores</h1>
<div class="row">
<div class="col-3">
	   </div>


    <div class="col-6">
    
<section class="p-3 mb-2 bg-primary text-white text-center">
<form>   
<?php
            //attribution de valeurs à mes variables
            $score = 0;
            $scoreMax = 0;
            $answer = $_POST['answer'];
            $result = $_POST['result'];
            $question = $_POST['question'];

            // pour chaque reponse, je stock dans round son index et dans answer sa valeur
            foreach ($_POST['answer'] as $round => $answer ) {
            //J'ajoutes 1 à la variable scoreMax
                $scoreMax++;
        ?>
            <!--J'affiche le numéro de la question avec la variable scoreMax-->
                <h2>Question<?php echo $scoreMax ?>:</h2>
            <!--J'affiche la multiplication posé-->
                    <p><?php  echo $question[$round]?></p>
            <!--Jaffiche la réponse donné par le visiteur-->
                <p>votre réponse: <?php echo $answer?> </p>
            <!--Si le résultat attendu correspond à la réponse proposé-->
                <?php if ($result[$round] == $answer) {
            //J'affiche un message positif 
                    echo '<p style="color:green">Bonne réponse !</p><hr>';
//                </div>
            //J'ajoutes 1 à la variable score
                    $score++;
            //Sinon
                } else {
            //J'affiche un message négatif et la réponse qui etait attendue
                    echo '<p class=" animated infinite flash delay-2s" style="color:red">Mauvaise réponse !</p>';
                    echo '<p class=" animated infinite flash delay-2s" style="color:red">La bonne réponse est: '.$result[$round].'</p><hr>'; 
                }    
            } ?><!-- J'affiche le score final + le scoreMax-->
        <h1>Score final : <?php echo $score ?> / <?php echo $scoreMax ?></h1>
</form>
<a class="btn btn-secondary animated infinite bounce delay-2s" href="index.php" role="button">rejouer</a>
</section>
</div>
<div class="col-3">
	   </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
