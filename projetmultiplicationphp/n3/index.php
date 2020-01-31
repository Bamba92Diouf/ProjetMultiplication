<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Initiation PHP - Étape 2</title>
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
   <div class="container">
   <h1 class="text-center">Bienvenue à l'étape 3</h1>
   <div class="row">
<div class="col-4">
	   </div>
	   <div class="col-6">
	   <p class="animated infinite bounce delay-2s"> 
<a class="btn btn-primary" href="../n1/selection.php" role="button">Etap1</a>
<a class="btn btn-primary" href="../n2/tableMulti.php" role="button">Etap2</a>
<a class="btn btn-primary" href="#" role="button">Etap3</a>
<a class="btn btn-primary" href="../n4/index.php" role="button">Etap4</a>
</p>
</div>
<div class="col-2">
	   </div>
</div>

   <div class="row">
   <div class="col-3"></div>
    <div class="col-6">
    <h3 class="text-center">Choisissez une ou plusieurs table et résolvez les opérations proposés</h3>
    <section class="p-3 mb-2 bg-primary text-white">
 
    <form method="POST" action="index.php">
        
                
                   
                    <label><input type="checkbox" name="check[]" value="0" class="checkbox" /> Table de 0</label>
                    <label><input type="checkbox" name="check[]" value="1" class="checkbox" /> Table de 1</label>
                    <label><input type="checkbox" name="check[]" value="2" class="checkbox" /> Table de 2</label>
                    <label><input type="checkbox" name="check[]" value="3" class="checkbox" /> Table de 3</label>
                    <label><input type="checkbox" name="check[]" value="4" class="checkbox" /> Table de 4</label>
                    <label><input type="checkbox" name="check[]" value="5" class="checkbox" /> Table de 5</label>
                    <label><input type="checkbox" name="check[]" value="6" class="checkbox" /> Table de 6</label>
                    <label><input type="checkbox" name="check[]" value="7" class="checkbox" /> Table de 7</label>
                    <label><input type="checkbox" name="check[]" value="8" class="checkbox" /> Table de 8</label>
                    <label><input type="checkbox" name="check[]" value="9" class="checkbox" /> Table de 9</label>
                    <label><input type="checkbox" name="check[]" value="10" class="checkbox" /> Table de 10</label>
                
                    <br><br>
			<button class="btn btn-secondary" type="submit">Questions</button>
			<button type="reset" class="btn btn-danger">Annuler</button>
    </form>
    </section>
    
    <div class="col-3"></div>
    </div>
   </div>
        <div class="row ">
        <div class="col-3"></div>
    
    <div class="col-6 bg-secondary text-white">
       
    <form action="elementCheck.php" method="post">
       
        <?php
        if (!empty($_POST) && isset($_POST['check']))
            foreach ($_POST['check'] as $table) :
                ?>
                <h1>Table de
                    <?php echo $table ?>
                </h1>

                <?php
                for ($i = 0; $i < 1; $i++) :
                    $randnumb = rand(0,10);
                    $result = $table * $randnumb;
                    ?>

                    <p>Combien font <?php echo $table?> x <?php echo $randnumb?> ?</p>
                    <input type="text" name="answer[]">
                    <input type="hidden" name="result[]" value="<?= $result ?>">
                    <input type="hidden" name="question[]" value="Combien font <?php echo $table?> x <?php echo $randnumb?> ?">

                <?php endfor ?>
                <br>
                <br><br>
			<button class="btn btn-primary" type="submit">Réponses</button>
			
              
               

            <?php endforeach ?>
                
    </form>
    </div>
    <div class="col-3"></div>
    </div>
    </div>
     </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>