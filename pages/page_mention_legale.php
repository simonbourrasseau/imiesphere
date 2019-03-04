
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
<div id="mention_legale">
Nos mentions légales <br>

Merci de lire attentivement les présentes modalités d'utilisation du présent site avant de le parcourir. En vous connectant sur ce site, vous acceptez sans réserve les présentes modalités.
<br><br>Editeur du site<br>
IMIE-Blog<br>
par ImieSphère<br>
213 Route de Rennes<br>
44700 Orvault<br>
France<br><br>

ImieSphère est une société d'auto-entrepreneurs au capital de 0€<br>
<br>
Conditions d'utilisation<br>
Le site accessible par les url suivants : x est exploité dans le respect de la législation française. L'utilisation de ce site est régie par les présentes conditions générales. En utilisant le site, vous reconnaissez avoir pris connaissance de ces conditions et les avoir acceptées. Celles-ci pourront êtres modifiées à tout moment et sans préavis par la société ImieSphère.
ImieSphère ne saurait être tenu pour responsable en aucune manière d’une mauvaise utilisation du service.<br><br>
Responsable éditorial<br>
Nicolas Pouivet<br>
Site Internet Qualité<br>
par ImieSphère<br>
213 Route de Rennes <br>
44700 Orvault<br>
France<br><br>

Limitation de responsabilité<br>
Les informations contenues sur ce site sont aussi précises que possibles et le site est périodiquement remis à jour, mais peut toutefois contenir des inexactitudes, des omissions ou des lacunes. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email en décrivant le problème de la manière la plus précise possible (page posant problème, action déclenchante, type d’ordinateur et de navigateur utilisé, …).
<br>
Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ImieSphère ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement.   
<br>
Les photos sont non contractuelles.
<br>
Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de ImieSphère.
<br><br>
Litiges<br>
Les présentes conditions sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société ImieSphère. La langue de référence, pour le règlement de contentieux éventuels, est le français.
<br><br>
Déclaration à la CNIL<br>
Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, le site a fait l'objet d'une déclaration auprès de la Commission nationale de l'informatique et des libertés (www.cnil.fr). 
<br><br>
Droit d'accès<br>
En application de cette loi, les internautes disposent d’un droit d’accès, de rectification, de modification et de suppression concernant les données qui les concernent personnellement. Ce droit peut être exercé par voie postale auprès de ImieSphère 213 Route de Rennes 44700 Orvault ou par voie électronique à l’adresse email suivante : nicolas.pouivet@imie.fr.
Les informations personnelles collectées ne sont en aucun cas confiées à des tiers hormis pour l’éventuelle bonne exécution de la prestation commandée par l’internaute.
<br><br>
Confidentialité<br>
Vos données personnelles sont confidentielles et ne seront en aucun cas communiquées à des tiers hormis pour la bonne exécution de la prestation.
<br><br>
Propriété intellectuelle<br>
Tout le contenu du présent site, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société ImieSphère à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.
Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de ImieSphère. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.3335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.
<br>
ImieSphère est identiquement propriétaire des "droits des producteurs de bases de données" visés au Livre III, Titre IV, du Code de la Propriété Intellectuelle (loi n° 98-536 du 1er juillet 1998) relative aux droits d'auteur et aux bases de données. 
<br>
Les utilisateurs et visiteurs du site internet peuvent mettre en place un hyperlien en direction de ce site, mais uniquement en direction de la page d’accueil, accessible à l’URL suivante : www.site-internet-qualite.fr, à condition que ce lien s’ouvre dans une nouvelle fenêtre. En particulier un lien vers une sous page (« lien profond ») est interdit, ainsi que l’ouverture du présent site au sein d’un cadre (« framing »), sauf l'autorisation expresse et préalable de ImieSphère.
<br>
Pour toute demande d'autorisation ou d'information, veuillez nous contacter par email : nicolas.pouivet@imie.fr. Des conditions spécifiques sont prévues pour la presse.
<br>
Par ailleurs, la mise en forme de ce site a nécessité le recours à des sources externes dont nous avons acquis les droits ou dont les droits d'utilisation sont ouverts : Pioneer - Multi-Purpose HTML 5 / CSS 3 Corporate Template.   
<br><br>
 
Créé le : 14/01/2019<br>
Auteur : MD<br>
E-mail de l'auteur : margaux.dechaud@imie.fr<br>
<br>
Hébergeur
<br><br>

Plateforme de gestion et création de sites internet

<br><br>
Conditions de service<br>
Ce site est proposé en langages HTML5 et CSS3, pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Safari, Firefox, Chrome,...
<br><br>
Informations et exclusion<br>
ImieSphère met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de ImieSphère, et signaler toutes modifications du site qu'il jugerait utile. ImieSphère n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.
<br><br>
Cookies<br>
Pour des besoins de statistiques et d'affichage, le présent site utilise des cookies. Il s'agit de petits fichiers textes stockés sur votre disque dur afin d'enregistrer des données techniques sur votre navigation. Certaines parties de ce site ne peuvent être fonctionnelle sans l’acceptation de cookies.
<br><br>
Liens hypertextes<br>
Les sites internet de ImieSphère peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet.
<br>
ImieSphère ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ImieSphère ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.
<br>
Les utilisateurs, les abonnés et les visiteurs des sites internet de ImieSphère ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de ImieSphère.
<br>
Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de ImieSphère, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. ImieSphère se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.
<br><br>Recherche<br>
En outre, le renvoi sur un site internet pour compléter une information recherchée ne signifie en aucune façon que ImieSphère reconnaît ou accepte quelque responsabilité quant à la teneur ou à l'utilisation dudit site.
Précautions d'usage<br>
Il vous incombe par conséquent de prendre les précautions d'usage nécessaires pour vous assurer que ce que vous choisissez d'utiliser ne soit pas entaché d'erreurs voire d'éléments de nature destructrice tels que virus, trojans, etc....
<br><br>Responsabilité<br>
Aucune autre garantie n'est accordée au client, auquel incombe l'obligation de formuler clairement ses besoins et le devoir de s'informer. Si des informations fournies par ImieSphère apparaissent inexactes, il appartiendra au client de procéder lui-même à toutes vérifications de la cohérence ou de la vraisemblance des résultats obtenus. ImieSphère ne sera en aucune façon responsable vis à vis des tiers de l'utilisation par le client des informations ou de leur absence contenues dans ses produits y compris un de ses sites Internet.   
<br><br>Contactez-nous<br>
ImieSphère est à votre disposition pour tous vos commentaires ou suggestions. Vous pouvez nous écrire en français par courrier électronique à : nicolas.pouivet@imie.fr.

</div><br>
<!-- barre de recherche-->	 
<?php include("../portion/menu_smartphone_pages.html"); ?>


		 
			</form>
	</div>
  
  
	</table>
	</div>
	
	<!-- Pied de page-->
	<footer id="foot">
	
		<center>
			<p> - <a href="page_mention_legale.php" >Mention légale</a> - <a href="page_cgu.php" >CGU</a> - </p>
			<img src="../images/logo2.png" alt="Logo Imiesphere" id="logem"></p>
		</center>
 
    </footer>
	
</body>

</html>


     