<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=imiesphere;charset=utf8', 'root', '');

if (isset($_POST["formarticle"])) {
		$titre= htmlspecialchars($_POST["titre"]);
		$intro= htmlspecialchars($_POST["intro"]);
		$categorie= htmlspecialchars($_POST["categorie"]);
		$corptexte= ($_POST["corptexte"]);
		$image= ($_POST["image"]);
		$id = $_SESSION["id"];

		$titreleght = strlen($titre);

	if (!empty($_POST["titre"]) AND !empty($_POST["intro"] )AND !empty($_POST["categorie"] )AND !empty($_POST["corptexte"] )) {
		/* C'est plus sécurisé de passer les reponses en variable HP */

		/* TEST LONGUEUR PSEUDO */
		if ($titreleght<=255) 
		{$reqtitre= $bdd->prepare("SELECT * From article WHERE titre = ?");
					$reqtitre ->execute(array($titre));
					$titreexist = $reqtitre ->rowCount();
					if ($titreexist ==0) {
											$sql = $bdd->prepare("INSERT INTO article(titre, introduction, categorie, corps_text, image, id_membre) VALUES (?, ?, ?, ?, ?, ?)");
											$sql->execute(array($titre, $intro, $categorie, $corptexte, $image, $id));
											$erreur = "Votre article a bien été créé !";
										
				}else
				{$erreur = "Titre deja utilisé !";}
		}
		else
		{
			$erreur = "Votre titre ne doit pas depasser 255 caractères";
		}
	}
	/* TEST SI TOUT LES CHAMPS SONT COMPLETES */
	else
	{
		$erreur = "Tout les champs doivent être completés !";
	}

	;}




?>


<!-- TEMPLATE : https://nathangracia863.wixsite.com/imieblog -->



<!DOCTYPE html>
<html>
<script>
	windows.location.assign("Inscription.html")
</script>
<head>
	<meta charset="UTF-8"/>	
	<title>Creation Article</title>
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />
	<link rel="stylesheet" href="../style/pagecss.css" /> <!--pour la page en général-->
	<link rel="stylesheet" href="../style/slider.css" /> <!-- pour les slides-->
	<link rel="stylesheet" href="../style/co.css" /> <!-- pour connexion -->
	<link rel="stylesheet" href="../style/theme.css">
	<script src="../ckeditor/ckeditor.js"></script>	
</head>

<body>


<!--fin bouton connexion-->
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
	
	<a href="./page_inscription.php" style="color:#FFFFFF;"><button .style.display="block" style="width:auto;"> Inscription</button>  </a>
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
<br><br>

<!-- <h3> NEWS </h3></br> -->
<div id="cadre">
    <table class="table">
    <tr>
    <th class="textcadre" id="nep"> Actualités : </th>
</tr>
<tr>
<td> <a href="../pages/page_campus.php" title="Nos Campus"> Campus </a>
    </td>
    </tr>
    <tr>
    <td> <a href="../pages/page_evenement.php" title="Evenements"> Evenement </a>
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
<td> <a href="../pages/page_partenaire.php" title="Nos partenaires"> Partenaires </a>
    </td>
    </tr>
    <tr>
    <td> <a href="https://www.linkedin.com/school/imie/" title="Notre Linkedin"> LinkedIn </a>
    </td>
    </tr>
    <tr>
    <td> <a href="https://twitter.com/EcoleIMIE" title="Notre twitter"> Twitter </a>
    </td>
    </tr>
    <tr>
    <td> <a href="https://www.facebook.com/EcolesIMIE/" title="Notre facebook"> Facebook </a>
    </td>
    </tr>
    </table>
    </div><br><br>

</center></br></br></br>
<?php 
if (!empty ($_SESSION['prenom'])){
	?> 


<form action="" method="post">
 	<center>
		<!-- Elements du formulaire -->
		<!-- Nom obligatoire pour le traitement php -->
		<div id="creation_article"><center>
			<h1>Creation Article</h1></center>
			<table>
			<tr>
				<td>
					<label for="titre">Titre :</label>
				</td>
				<td>
					<input type="texte" name="titre" placeholder="Titre" id="titre" value="<?php if(isset($titre)) {echo $titre; } ?>">
				</td>
				<tr>
				<td>
					<label for="intro">Intro :</label>
				</td>
				<td>
					<input type="texte" name="intro" placeholder="intro" id="intro"value="<?php if(isset($intro)) {echo $intro; } ?>"> 
				</td>
				</tr>


			<tr><td class="txt">Categorie :
			</td>
			<td><select id="categorie" name="categorie">
				<option value="itstart">ItStart</option>
				<option value="dev">Dev</option>
				<option value="ops">Ops</option>
				<option value="digi">Digi</option>
			
			</td></tr>
			<tr>
			<td>
				<label for="image">Image (url) :</label>
			</td>
			<td>    
				<input type="texte" name="image" placeholder="http://..." id="image"value="<?php if(isset($image)) {echo $image; } ?>"> 
			</td>
			</tr>
		<tr><td id="ck"> 
					<label for="corptexte">Votre article :</label>
			</td>
			<td>
				<textarea type="text" name="corptexte" placeholder="Redigez votre article" id="corptexte"value="<?php if(isset($corptexte)) {echo $corptexte;} ?>" ></textarea>
				<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'corptexte' );
   		        </script>
				<br>
				
			<input type="submit" value="Envoyer l'article" name="formarticle">
			
			</table><br><br><br><br>
</div></form>
<?php } 
else{ echo'<div id="creation_article">Vous devez etre connecté !</div>';}?>
			
<?php
if (isset($erreur)) {
	# code...

 echo $erreur;} ?>
		
		


</center>
   </div>
   </a>

<!-- barre de recherche-->	 
<?php include("../portion/menu_smartphone_pages.html"); ?>




	
	
	<!-- Pied de page-->
	<footer id="foot_art">
	<div id="pied_de_page">
		<center>
			<p> - <a href="page_mention_legale.php" >Mention légale</a> - <a href="page_cgu.php" >CGU</a> - </p>
			<img src="../images/logo2.png" alt="Logo Imiesphere" id="logem"></p>
		</center>
  </div>
    </footer>
	
 
</body>

</html>



