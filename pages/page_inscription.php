<?php

/* Connection à la base de données */

$bdd = new PDO('mysql:host=localhost;dbname=imiesphere;charset=utf8', 'root', '');

if (isset($_POST["imiesphere"])) {
		$prenom= htmlspecialchars($_POST["prenom"]);
		$nom= htmlspecialchars($_POST["nom"]);
		$mail= htmlspecialchars($_POST["mail"]);
		$confirm_mail= htmlspecialchars($_POST["confirm_mail"]);
		$pwd= sha1($_POST["pwd"]);
		$confirm_pwd= sha1($_POST["confirm_pwd"]);
		$linkedin= htmlspecialchars($_POST["linkedin"]);


		$prenomleght = strlen($prenom);
		$nomleght = strlen($nom);

	if (!empty($_POST["prenom"]) AND !empty($_POST["nom"]) AND !empty($_POST["mail"]) AND !empty($_POST["confirm_mail"]) AND !empty($_POST["pwd"])AND !empty($_POST["confirm_pwd"])) {
	/* C'est plus sécurisé de passer les reponses en variable HP */

		/* TEST LONGUEUR PSEUDO */
		if ($prenomleght<=255) 
		{$reqprenom= $bdd->prepare("SELECT * From espace_membre WHERE prenom = ?");
		$reqprenom ->execute(array($prenom));
		$prenomexist = $reqprenom ->rowCount();

			if ($nomleght<=255) 
				{$reqnom= $bdd->prepare("SELECT * From espace_membre WHERE nom = ?");
				$reqnom ->execute(array($nom));
				$nomexist = $reqnom ->rowCount();
				/* TEST MEME ADRESSE MAIL */
				if ($mail==$confirm_mail)  
				{
					/* TEST FORMAT ADRESSE EMAIL */
					if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
						# code...
						/* TEST SI ADRESSE EXISTE DEJA */
						$reqmail= $bdd->prepare("SELECT * From espace_membre WHERE mail = ?");
						$reqmail ->execute(array($mail));
						$mailexist = $reqmail ->rowCount();
						if ($mailexist ==0) {
							# code...
						
								/* TEST DES 2 MOTS DE PASSES */
								if ($pwd==$confirm_pwd) 
								{
									$sql = $bdd->prepare("INSERT INTO espace_membre(prenom, nom, mail, motdepasse, linkedin) VALUES (?, ?, ?, ?, ?)");
									$sql->execute(array(
									    $prenom, $nom, $mail, $pwd, $linkedin));
									$erreur = "Votre compte a bien été créé !";
									header("Location: ./page_connexion.php");

									}

									else
									{$erreur = "Vos mots de passe ne correspondent pas !";}
							}
							
							else
							{$erreur = "Adresse mail deja utilisée ! ";}
						}
						
						else
						{$erreur = "Votre adresse mail n'est pas valide";}
					}

					
					else
					{$erreur = "Vos 2 Emails ne correspondent pas !";}
			}

			else
			{
				$erreur = "Votre nom ne doit pas depasser 255 caractères";}
			}
		
		else
		{$erreur = "Votre prenom ne doit pas depasser 255 caractères";}
		}
	
	/* TEST SI TOUT LES CHAMPS SONT COMPLETES */
	else
	{
		$erreur = "Tout les champs doivent être completés !";
	}
	;}


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"></meta>
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />
    <link rel="stylesheet" href="../style/cssinscription.css" />
<link rel="stylesheet" href="../style/slider.css" /> 
<center><img id="logoIMIE" src="../images/LogoIMIE.png"></center>
<title>IMIE-Blog</title>

</head>
	
<body>

<a href="../index.php" style="color:#FFFFFF;"><button id="retour" .style.display='block' style="width:auto;">Retourner à l'accueil</button></a>
	<p align="center"><font size="5">Créez Votre Compte</font></p>
	<hr width="50%" align="center">
	<div id="cadre">
	<form action="" method="POST">
	<table id="table">
		
		<tr><td class="txt">*Prénom : <input type="text" name="prenom" placeholder="Prénom" maxlength="30"></td></tr>
		<tr><td class="txt">*Nom : <input type="text" name="nom" placeholder="Nom" maxlength="30"></td></tr>
		<tr><td class="txt">*Mot de Passe : <input type="password" name="pwd" placeholder="Mot de Passe" maxlength="20"></td></tr>
		<tr><td class="txt">*Confirmation du mot de passe : <input type="password" name="confirm_pwd" placeholder="Mot de Passe" maxlength="20"></td></tr>
		<tr><td class="txt">*Adresse Email : <input type="email" name="mail" placeholder="@imie.fr"></td></tr>
		<tr><td class="txt">*Confirmation de l'Adresse Email : <input type="email" name="confirm_mail" placeholder="@imie.fr"></td></tr>
        <tr><td class="txt"> Linkedin : <input type="text" name="linkedin" placeholder="inserez le lien"></td></tr>




		<tr><td class="txt"><i><h6>*Champs obligatoires</h6></i></td></tr>
		<tr>
			
		<tr><td align="center"></td></tr>


		</table><center>
		
			<br>
			<input type="submit" value="Confirmer l'inscription" name="imiesphere"><br><br>

			<a href="./page_connexion.php">
			<input type="button" value="Déjà inscrit? Connectez-vous" >
			</a>	
		 
				
	
	</form>
	</div>
	
</body>
</html>

<?php
if (isset($erreur)) {
	echo $erreur;
	# code...
}
?>


