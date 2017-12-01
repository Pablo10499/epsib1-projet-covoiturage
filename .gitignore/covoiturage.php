<!DOCTYPE htlm>


<?php

$bdd= new PDO('mysql:host=localhost;dbname=espace_membre', 'root',''); 

if(isset($_POST['forminscription']))
{
	if(!empty($_POST['monnom']) AND !empty($_POST['monprenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['Tel']))
	{
		echo"ok";
	}
	else
	{
		$erreur ="Tous les champs doivent être complétés !";
		
		echo $_POST['monnom'];
		echo $_POST['monprenom'];
		echo $_POST['mail'];
		echo $_POST['mdp'];
		echo $_POST['mdp2'];
		echo $_POST['Tel'];		
	}
}
{
	if($_POST['mdp']=$_POST['mdp2'])
	{
	
	}
	else
	{
		$erreur = "Vos mots de passes ne correspondent pas !";
		
		
		
		echo $_POST['mdp'];
		echo $_POST['mdp2'];
	}
}









?>


<html>
     <head>
	      <meta charset="utf-8">
		   <link rel="stylesheet" href="covoiturage.css" />
	 </head>
	 <body>
	 <div>
	 <form method="post">
<h1> Inscription</h1>
		<table border=1>
		<td>Nom : </td>
				<td>
					<input type="text" name="monnom" placeholder="Votre nom" id="nom"  value="<?php if (isset($_POST["monnom"])) echo $_POST["monnom"]; ?>"/>
				</td>
			</tr>
			
			<tr>
				<td>Prénom : </td>
				<td>
					<input type="text" name="monprenom" placeholder="Votre prenom" id="prenom" value="<?php if (isset($_POST["monprenom"])) echo $_POST["monprenom"]; ?>"/>
				</td>
			</tr>
			
			<tr>
				<td>Mail</td>
				<td>
					<input type="email" placeholder="Votre mail" id="Mail" name="mail">
					
				
					
					
				</td>
			</tr>
			<tr> 				<td>Mot de passe : </td>
				<td>
					<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp">
				</td>
			</tr>
			
			</tr>
			<tr> 				<td>Confirmation mdp:</td>
				<td>
					<input type="password" placeholder="Confirmer votre mdp" id="mdp2" name="mdp2">
				</td>
			</tr>
			
			<tr>
				<td>Tèl : </td>
				<td>
					<input type="text" placeholder="Votre numéro" id="Tel" name="Tel">
				</td>
			</tr>
				
				
				
				
				
				
				
				
				
			
			</table>
			</br>
				<input type="submit" name="forminscription" value="Je m'inscrit" /> 
				
				
		</form>
		<?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur."</font>";
			
		}
		?>
		</br>
		
		<table border=1>
		
		<a href="url">Deja un compte? Connecter vous!</a>

		</div>
		
		
	  </body>
	 </html>
