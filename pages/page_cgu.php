
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
	<title>Fillière OPS</title>
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />
	<link rel="stylesheet" href="../style/pagecss.css" /> <!--pour la page en général-->
	<link rel="stylesheet" href="../style/slider.css" /> <!-- pour les slides-->
	<link rel="stylesheet" href="../style/co.css" /> <!-- pour connexion -->
	<link rel="stylesheet" href="../style/theme.css">
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
	<img id="logoIMIE" src="../images/LogoIMIE.png">
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

<div id="cgu">
<p>Conditions générales d'utilisation du site [URL]
    ARTICLE 1 : Objet

    Les présentes « conditions générales d'utilisation » ont pour objet l'encadrement juridique des modalités de mise à disposition des services du site [Nom du site] et leur utilisation par « l'Utilisateur ».

    Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur souhaitant accéder au site. Elles constituent le contrat entre le site et l'Utilisateur. L’accès au site par l’Utilisateur signifie son acceptation des présentes conditions générales d’utilisation.

    Éventuellement :

    En cas de non-acceptation des conditions générales d'utilisation stipulées dans le présent contrat, l'Utilisateur se doit de renoncer à l'accès des services proposés par le site.

    Blog IMIE se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes conditions générales d'utilisation.</p><br>
<p>ARTICLE 2 : Mentions légales

    L'édition du site Blog IMIE est assurée par la Société IIMISPHERE  au capital de 0 € dont le siège social est situé au 213 route de rennes.

    Le Directeur de la publication est Monsieur Poivet Nicolas.</p><br>
<p>ARTICLE 3 : Définitions

    La présente clause a pour objet de définir les différents termes essentiels du contrat :

    Utilisateur : ce terme désigne toute personne qui utilise le site ou l'un des services proposés par le site.

    Contenu utilisateur : ce sont les données transmises par l'Utilisateur au sein du site.

    Membre : l'Utilisateur devient membre lorsqu'il est identifié sur le site.

    Identifiant et mot de passe : c'est l'ensemble des informations nécessaires à l'identification d'un Utilisateur sur le site. L'identifiant et le mot de passe permettent à l'Utilisateur d'accéder à des services réservés aux membres du site. Le mot de passe est confidentiel.</p><br>
<p>ARTICLE 4 : accès aux services

    Le site permet à l'Utilisateur un accès gratuit aux services suivants :

    articles d’information ;


    publication de commentaires ;

    Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.

    Selon le cas :

    L’Utilisateur non membre n'a pas accès aux services réservés aux membres. Pour cela, il doit s'identifier à l'aide de son identifiant et de son mot de passe.

    Le site met en œuvre tous les moyens mis à sa disposition pour assurer un accès de qualité à ses services. L'obligation étant de moyens, le site ne s'engage pas à atteindre ce résultat.

    Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du réseau ou du serveur n'engage pas la responsabilité de [Nom du site].

    L'accès aux services du site peut à tout moment faire l'objet d'une interruption, d'une suspension, d'une modification sans préavis pour une maintenance ou pour tout autre cas. L'Utilisateur s'oblige à ne réclamer aucune indemnisation suite à l'interruption, à la suspension ou à la modification du présent contrat.

    L'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse [contact@nomdusite.com].</p><br>
<p>ARTICLE 5 : Propriété intellectuelle

    Les marques, logos, signes et tout autre contenu du site font l'objet d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.

    L'Utilisateur sollicite l'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus.

    L'Utilisateur s'engage à une utilisation des contenus du site dans un cadre strictement privé. Une utilisation des contenus à des fins commerciales est strictement interdite.

    Tout contenu mis en ligne par l'Utilisateur est de sa seule responsabilité. L'Utilisateur s'engage à ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le site sera pris en charge par l'Utilisateur.

    Le contenu de l'Utilisateur peut être à tout moment et pour n'importe quelle raison supprimé ou modifié par le site. L'Utilisateur ne reçoit aucune justification et notification préalablement à la suppression ou à la modification du contenu Utilisateur.</p><br>
<p>ARTICLE 6 : Données personnelles

    Les informations demandées à l’inscription au site sont nécessaires et obligatoires pour la création du compte de l'Utilisateur. En particulier, l'adresse électronique pourra être utilisée par le site pour l'administration, la gestion et l'animation du service.

    Le site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro [numéro].

    En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l'Utilisateur dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur exerce ce droit via :

    son espace personnel ;

    un formulaire de contact ;

    par mail à [adresse mail] ;

    par voie postale au [adresse].</p><br>
<p>ARTICLE 7 : Responsabilité et force majeure

    Les sources des informations diffusées sur le site sont réputées fiables. Toutefois, le site se réserve la faculté d'une non-garantie de la fiabilité des sources. Les informations données sur le site le sont à titre purement informatif. Ainsi, l'Utilisateur assume seul l'entière responsabilité de l'utilisation des informations et contenus du présent site.

    L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite.

    L'Utilisateur assume les risques liés à l'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.

    Tout usage du service par l'Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l'objet d'une indemnisation au profit du site.

    Une garantie optimale de la sécurité et de la confidentialité des données transmises n'est pas assurée par le site. Toutefois, le site s'engage à mettre en œuvre tous les moyens nécessaires afin de garantir au mieux la sécurité et la confidentialité des données.

    La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d'un tiers.</p><br>
<p>ARTICLE 8 : Liens hypertextes

    De nombreux liens hypertextes sortants sont présents sur le site, cependant les pages web où mènent ces liens n'engagent en rien la responsabilité de Blog IMIE qui n'a pas le contrôle de ces liens.

    L'Utilisateur s'interdit donc à engager la responsabilité du site concernant le contenu et les ressources relatives à ces liens hypertextes sortants.</p><br>
<p>ARTICLE 9 : Évolution du contrat

    Le site se réserve à tout moment le droit de modifier les clauses stipulées dans le présent contrat.</p><br>
<p>ARTICLE 10 : Durée

    La durée du présent contrat est indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter de l'utilisation du service.</p><br>
<p>ARTICLE 11 : Droit applicable et juridiction compétente

    La législation française s'applique au présent contrat. En cas d'absence de résolution amiable d'un litige né entre les parties, seuls les tribunaux [du ressort de la Cour d'appel de / de la ville de] [Ville] sont compétents.

    Éventuellement</p><br>
<p>ARTICLE 12 : Publication par l’Utilisateur

    Le site permet aux membres de publier [des commentaires / des œuvres personnelles].

    Dans ses publications, le membre s’engage à respecter les règles de la Netiquette et les règles de droit en vigueur.

    Le site exerce une modération a priori sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’en justifier auprès du membre.

    Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur le site, il cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la durée de la propriété intellectuelle. Le Membre cède notamment le droit d'utiliser sa publication sur internet et sur les réseaux de téléphonie mobile.

    La société éditrice s'engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication.</p>
    </div>
</div>
<!-- barre de recherche-->	 
<?php include("../portion/menu_smartphone_pages.html"); ?>



	</table>
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
	
</body>

</html>
