<?php
$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=imiesphere', 'root', '');

if (isset($_POST["contact"])) {
    $titre = htmlspecialchars($_POST["titre"]);
    $campus = htmlspecialchars($_POST["campus"]);
    $image = htmlspecialchars($_POST["image"]);
		$description = htmlspecialchars($_POST["description"]);

$requete_evenement = $bdd->prepare("INSERT INTO evenement(titre, campus, image, description) VALUES (?, ?, ?, ?)");
$requete_evenement->execute(array($titre, $campus, $image, $description));
header("Location: ../pages/page_evenement.php");
}

?>
<!-- TEMPLATE : https://nathangracia863.wixsite.com/imieblog -->
<?php

session_start();

?>
<!DOCTYPE html>
<html>
<script>
	windows.location.assign("Inscription.html")
</script>
<head>
	<meta charset="UTF-8"/>	
	<title>Evenement</title>
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />
	<link rel="stylesheet" href="../style/pagecss.css" /> <!--pour la page en général-->
	<link rel="stylesheet" href="../style/slider.css" /> <!-- pour les slides-->
	<link rel="stylesheet" href="../style/co.css" /> <!-- pour connexion -->
	<link rel="stylesheet" href="../style/theme.css">
	<link rel="stylesheet" href="../style/contact.css">
	<script src="../ckeditor/ckeditor.js"></script>
</head>

<body>
	

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- fin bouton connexion-->
<?php 
if (!empty ($_SESSION['prenom'])){ 
	echo '<ul id="menu-accordeon">
	<li><a>';echo $_SESSION["prenom"]; echo '</a>
		 <ul>
		 <li><a href="./page_profil.php">Espace Membre</a></li>
				<li><a href="page_deconnexion.php">Deconnexion</a></li>
		 </ul>
</ul><br><br><br><br>'
;


}
else  
	echo '	<h4 id="insco"> 
	
	<a href="./page_inscription.php" style="color:#FFFFFF;"><button .style.display="block" style="width:auto;"> Inscription </button> </a>
	<!-- Bouton connexion -->
<a href=" ./page_connexion.php"><button onclick="document.getElementById("id01").style.display="block"" style="width:auto;">Connexion</button></a>
	</h4>';

 ?>


	 <h1 id="titre"> IMIE-blog </h1>
	 <a href="../index.php"> <img id="logoIMIE" src="../images/LogoIMIE.png"> </a>
<!-- menu hamburger-->
<div><center><ul id="nav">
    <li id="nav-home"><a href="../index.php">Accueil</a>
    </li>
    <li id="nav-it_start"><a href="page_itstart">IT START</a></li>
    <li id="nav-dev"><a href="page_dev.php">DEV</a></li>
    <li id="nav-ops"><a href="page_ops.php">OPS</a></li>
    <li id="nav-digi"><a href="page_digi.php">DIGI</a></li>
    <li id="nav-contact"><a href="page_contact.php">Contact</a></li>
</ul>
</div>
</center></br></br></br>

  <!-- <h3> NEWS </h3></br>	-->
	<div id="cadre">
	<table class="table">
	<tr>
	<th class="textcadre" id="nep"> Actualités : </th>
	</tr>
	<tr>
	<td> <a href="../pages/page_campus.php" title="#"> Campus </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="../pages/page_evenement.php" title="#"> Evenement </a>
	</td>
	</tr>	
	
	</table>
	</div>
		

	<!-- <h3> Recherche et developpement </h3></br>	-->
	<div id="cadre">
	<table class="table">
	<tr>
	<th class="textcadre"> Contacts : </th>
	</tr>
	<tr>
	<td> <a href="../pages/page_partenaire.php" title="#"> Partenaires </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="https://www.linkedin.com/school/imie/" title="#"> LinkedIn </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="https://twitter.com/EcoleIMIE" title="#"> Twitter </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="https://www.facebook.com/EcolesIMIE/" title="#"> Facebook </a>
	</td>
	</tr>
	</table>
	</div>

<!-- barre de recherche-->	 
<?php include("../portion/menu_smartphone_pages.html"); ?>


	
		 
			</form>
    </div>
    <div id="creation_article">
   <center><h1> Proposer un évenement </a></h1></center> 
</br></br>


</a>
<form method="POST" action="">
        <label for="titre">Titre de l'évènement</label>
				<input type="text" name="titre" placeholder="Titre" maxlength="30"> <br>
				
        <input type="radio" name="campus" value="nantes"> <label for="nantes"> Nantes </label> <br>
        <input type="radio" name="campus" value="St Nazaire"> <label for="St Nazaire"> Saint Nazaire </label> <br>
        <input type="radio" name="campus" value="Angers"> <label for="Angers"> Angers </label> <br> 
        <input type="radio" name="campus" value="Paris"> <label for="Paris"> Paris </label> <br> 
        <input type="radio" name="campus" value="Rennes"> <label for="Rennes"> Rennes </label>  <br> 
				<input type="radio" name="campus" value="Caen"> <label for="Caen"> Caen </label> <br><br>
				
        <label for="image">Image</label>
				<input type="texte" name="image" placeholder="http://..."><br><br>
				
				<label for="description">Description de l'évènement</label>
				<textarea type="texte" style="width: 200px; height: 100px" name="description" placeholder="Veuillez rédigez votre message" id="description_evenement"></textarea><br><br>
				<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'description_evenement' );
            </script>
        <input type="submit" value="envoyer" name="contact">
</div>
<?php
    if (isset($erreur)) {
	echo $erreur;
	# code...
}
?>
  


	
	
<!-- Pied de page-->
<footer id="foot_evenement">
		<div id="pied_de_page">
			<center>
				<p> - <a href="./page_mention_legale.php" >Mention légale</a> - <a href="./page_cgu.php" >CGU</a> - </p>
				<img src="../images/logo2.png" alt="Logo Imiesphere" id="logem"></p>
			</center>
  		</div>
    </footer>
	
	
</body>

</html>


















