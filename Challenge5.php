
// François Massiot (Exercie 1,2,3,4 - Niveau 2)




// Exercice 1: Un algo pour créer un tableau associatif à partir de deux autres tableaux.

		<?php
		function associative($commandes){
		$viandes = ["Poulet", "Boeuf", "Mouton"];
		$cuissons = ["à point", "saignant", "bleu", "bien cuit"];
		$commandes = [];

		// Je stocke l'ensemble des valeurs de mon tableau "viandes" dans la variable "$ItemsV"    
		foreach ($viandes as $ItemsV){

		// Je stocke l'ensemble des valeurs de mon tableau "cuissons" dans la variable "$ItemsC" :ok
		foreach ($cuissons as $ItemsC){
		    
		// Le tableau "commandes" est la résultante de la concaténation des chaînes de caractères "$ItemsV" et "$ItemsC" 
		$commandes[] = $ItemsV." ".$ItemsC;
		    
		}
		}

		// J'affiche le tableau "commandes"
		print_r($commandes);

		return $commandes;		
		}
		
		?>




//Exercice 2: Un algo pour transformer une chaine de caractères en tableau: 


		// Exercice 2: Un algo pour transformer une chaine de caractères en tableau

		// Fonction "explode"

		<?php
		function stringarray($tags){
		$genres = "horreur fantastique action western thriller comédie drame romance historique";
		$tags = [];

		// je coupe ma chaine de caractères en différents segments que j'intègre dans le tableau tags : 
		$tags = explode (" " , $genres);


		// Visualiser la variable tags :
		print_r($tags);

		return $tags;
		}
		
		?>



// Exercice 3: Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau

		<?php

		function supvaleurs($fruits_favoris){
		$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
		$fruits_favoris = [];
		
		//Pour sortir mes deux dernières valeurs je conserve les 6 premières (je n'ai pas mieux pour le moment :-(
		array_splice($fruits, 6);
		$fruits_favoris = $fruits;
		print_r($fruits_favoris);
		
		return $fruits_favoris;
		}
		
		?>


  


 // Exercie 4 : Un algo pour supprimer la valeur "milieu" d'un tableau


		<?php

		function supmilieu($prenoms){
		$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
		
		// Je compte tous les éléments de mon tableau 		
		$result = count($prenoms);

		// Je divise par 2 le nb d'éléments de mon tableau 	
		$result2 = $result/2;

		// J'arrondis à l'entier supérieur (-1 pour gérer l'index=0)
		$result3 = ceil($result2)-1;

		// Je supprime la valeur milieu 
		unset($prenoms[$result3]);
		print_r($prenoms);

		return $prenoms;
		}
		
		?>