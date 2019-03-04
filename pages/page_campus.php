<?php

session_start();

?>
<!-- TEMPLATE : https://nathangracia863.wixsite.com/imieblog -->

<!DOCTYPE html>
<html>
<script>
	windows.location.assign("Inscription.html")
</script>
<head>
	<meta charset="UTF-8"/>	
	<title>Campus</title>
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />
	<link rel="stylesheet" href="../style/pagecss.css" /> <!--pour la page en général-->
	<link rel="stylesheet" href="../style/slider.css" /> <!-- pour les slides-->
	<link rel="stylesheet" href="../style/co.css" /> <!-- pour connexion -->
	<link rel="stylesheet" href="../style/theme.css">
    <link rel="stylesheet" href="../style/contact.css">
    <link rel="stylesheet" href="../style/campus.css">
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
<br>
<br>
<!-- barre de recherche-->	 
<?php include("../portion/menu_smartphone_pages.html"); ?>





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
</div>


<div class="grand">
    <table id="grand">
    <tr><td><div class="nantes">
        <h1 align="center"><a href="https://numerique.imie.fr/campus/nantes/">Nantes</a></h1>
        <p>Coordonnées<br>
            213 route de Rennes – 44700 ORVAULT <br>
            02 28 01 37 54 / nantes@imie.fr</p>
        <p>Le campus de Nantes en bref : <br>
            14 salles <br>
            1 espace coworking <br>
            Accès 24h/24 <br>
            Fibre 300 Mbs <br>
            Salle serveur dédiée formation</p>
    </div></td>


    <td><div class="angers">
        <h1 align="center"><a href="https://numerique.imie.fr/campus/angers/">Angers</a></h1>
        <p>Coordonnées<br>
            Centre Pierre Cointreau – 132 Avenue de Lattre de Tassigny – 49000 Angers<br>
            02 41 66 67 66 / angers@imie.fr</p>
        <p> Le campus d’Angers en bref<br>
            11 salles de cours<br>
            Espace dédié à la réalité virtuelle<br>
            Salle serveur<br>
            Salle de repos et babyfoot</p>
    </div></td>


    <td><div class="caen">
        <h1 align="center"><a href="https://numerique.imie.fr/campus/caen/">Caen</a></h1>
        <p>Coordonnées<br>
            10 Place François Mitterrand – 14200 Hérouville-St-Clair<br>
            02 53 35 74 20 / caen@imie.fr</p>
        <p> Le campus de Caen en bref<br>
            6 salles de cours<br>
            2 espaces de vie<br>
            1 espace de coworking</p>
    </div></td>
    </tr>


    <tr><td><div class="paris">
        <h1 align="center"><a href="https://numerique.imie.fr/campus/paris/">Paris</a></h1>
        <p>Coordonnées<br>
            70 rue Marius Aufan 92300 Levallois-Perret<br>
            01 41 05 73 80 / paris@imie.fr </p>
        <p> Le campus de Paris en bref :
            10 salles de cours<br>
            1 Open Space connecté<br>
            1 Cafétéria et de nombreux commerces à proximité</p>
    </div></td>


    <td><div class="st_naze">
        <h1 align="center"><a href="https://numerique.imie.fr/campus/saint-nazaire/">St Nazaire</a></h1>
        <p> Coordonnées<br>
            89 Avenue de la République – 44600 Saint-Nazaire<br>
            02 28 01 37 54 / saint-nazaire@imie.fr<br>
        </p>
        <p> Le campus de Saint-Nazaire en bref :<br>
            3 salles<br>
            1 espace coworking<br>
            Accès 24h/24<br>
            Fibre </p>
    </div></td>


    <td><div class="rennes">
        <h1 align="center"><a href="https://numerique.imie.fr/campus/rennes/">Rennes</a></h1>
        <p> Coordonnées<br>
            Campus de Ker Lann – Rue de Maupertuis – 35170 BRUZ<br>
            02 23 44 69 00 / rennes@imie.fr<br>
        </p>
        <p> Le campus de Rennes en bref :<br>
            11 salles de cours<br>
            Amphithéâtre<br>
            Espace dédié à la réalité virtuelle<br>
            Salle de détente et Babyfoot</p><br>
    </div></td></tr>
    </table>
    
</div>
<div class="foot">
<footer id="foot">
	<div id="pied_de_page">
		<center>
			<p> - <a href="page_mention_legale.php" >Mention légale</a> - <a href="page_cgu.php" >CGU</a> - </p>
			<img src="../images/logo2.png" alt="Logo Imiesphere" id="logem"></p>
		</center>
  </div>
    </footer>
</div>
<div class="petit">
    <div class="nantes2">
                <h1 align="center"><a href="https://numerique.imie.fr/campus/nantes/">Nantes</a></h1>
                <p>Coordonnées<br>
                    213 route de Rennes – 44700 ORVAULT <br>
                    02 28 01 37 54 / nantes@imie.fr</p>
                <p>Le campus de Nantes en bref : <br>
                    14 salles <br>
                    1 espace coworking <br>
                    Accès 24h/24 <br>
                    Fibre 300 Mbs <br>
                    Salle serveur dédiée formation</p>
            </div>


        <div class="angers2">
                <h1 align="center"><a href="https://numerique.imie.fr/campus/angers/">Angers</a></h1>
                <p>Coordonnées<br>
                    Centre Pierre Cointreau – 132 Avenue de Lattre de Tassigny – 49000 Angers<br>
                    02 41 66 67 66 / angers@imie.fr</p>
                <p> Le campus d’Angers en bref<br>
                    11 salles de cours<br>
                    Espace dédié à la réalité virtuelle<br>
                    Salle serveur<br>
                    Salle de repos et babyfoot</p>
            </div>


        <div class="caen2">
                <h1 align="center"><a href="https://numerique.imie.fr/campus/caen/">Caen</a></h1>
                <p>Coordonnées<br>
                    10 Place François Mitterrand – 14200 Hérouville-St-Clair<br>
                    02 53 35 74 20 / caen@imie.fr</p>
                <p> Le campus de Caen en bref<br>
                    6 salles de cours<br>
                    2 espaces de vie<br>
                    1 espace de coworking</p>
            </div>



    <div class="paris2">
                <h1 align="center"><a href="https://numerique.imie.fr/campus/paris/">Paris</a></h1>
                <p>Coordonnées<br>
                    70 rue Marius Aufan 92300 Levallois-Perret<br>
                    01 41 05 73 80 / paris@imie.fr </p>
                <p> Le campus de Paris en bref :
                    10 salles de cours<br>
                    1 Open Space connecté<br>
                    1 Cafétéria et de nombreux commerces à proximité</p>
            </div>


        <div class="st_naze2">
                <h1 align="center"><a href="https://numerique.imie.fr/campus/saint-nazaire/">St Nazaire</a></h1>
                <p> Coordonnées<br>
                    89 Avenue de la République – 44600 Saint-Nazaire<br>
                    02 28 01 37 54 / saint-nazaire@imie.fr<br>
                </p>
                <p> Le campus de Saint-Nazaire en bref :<br>
                    3 salles<br>
                    1 espace coworking<br>
                    Accès 24h/24<br>
                    Fibre </p>
            </div>


        <div class="rennes2">
                <h1 align="center"><a href="https://numerique.imie.fr/campus/rennes/">Rennes</a></h1>
                <p> Coordonnées<br>
                    Campus de Ker Lann – Rue de Maupertuis – 35170 BRUZ<br>
                    02 23 44 69 00 / rennes@imie.fr<br>
                </p>
                <p> Le campus de Rennes en bref :<br>
                    11 salles de cours<br>
                    Amphithéâtre<br>
                    Espace dédié à la réalité virtuelle<br>
                    Salle de détente et Babyfoot</p><br>
            </div>

	
	<!-- Pied de page-->
<footer id="foot">
	<div id="pied_de_page">
		<center>
			<p> - <a href="page_mention_legale.php" >Mention légale</a> - <a href="page_cgu.php" >CGU</a> - </p>
			<img src="../images/logo2.png" alt="Logo Imiesphere" id="logem"></p>
		</center>
  </div>
    </footer>
</div>
</body>

</html>






















