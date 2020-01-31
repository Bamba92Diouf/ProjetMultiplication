<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>etape1</title>
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
<h1  class="text-center"> Bienvenue à l'étape 1</h1>
<div class="row">
<div class="col-4">
	   </div>
	   <div class="col-6">
	   <p class="animated infinite bounce delay-2s"> 
<a class="btn btn-primary" href="#" role="button">Etap1</a>
<a class="btn btn-primary" href="../n2/tableMulti.php" role="button">Etap2</a>
<a class="btn btn-primary" href="../n3/index.php" role="button">Etap3</a>
<a class="btn btn-primary" href="../n4/index.php" role="button">Etap4</a>
       </p>
</div>
<div class="col-2">
	   </div>
</div>

       <div class="row">
	   <div class="col-3">
	   </div>
	   
	             <div class="col-6">
				 <h3 class="text-center">Merci de sélectionner la table que vous voulez consulter:</h3>
<form action="" onsubmit="return valider()" method="POST">

   <section class="p-3 mb-2 bg-primary text-white">
		
			
			<select name="table" class="form-control">
				<option value="0">Table de 0</option>
				<option value="1">Table de 1</option>
				<option value="2">Table de 2</option>
				<option value="3">Table de 3</option>
				<option value="4">Table de 4</option>
				<option value="5">Table de 5</option>
				<option value="6">Table de 6</option>
				<option value="7">Table de 7</option>
				<option value="8">Table de 8</option>
				<option value="9">Table de 9</option>
				<option value="10">Table de 10</option>
			</select>
		<br><br>
			<button class="btn btn-secondary" type="submit">voire la table</button>
			<button type="reset" class="btn btn-danger">Annuler</button>
	
	

   </section>

</form>
           </div>
		   </div>
		   <div class="col-3"></div>
		  
        <div class="row">
		<div class="col-5"></div>
		<div class="col-2"><br><br>
		<div class="p-3 mb-2 bg-secondary text-white">
<?php
if(isset($_POST['table']))
{
    for($i =1 ; $i <= 10 ; $i++)
    {
        echo $i." X ".$_POST['table']." = ".$i*$_POST['table']."<br />";
    }
}
 ?>
       </div>
	   <div class="col-5"></div>
         </div>
        
       
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>