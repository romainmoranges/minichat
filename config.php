<?php try{
	
	//Déclaration de $DB, notre objet PDO
    $bdd = new PDO('mysql:host=localhost;
                    dbname=minichat;
                    charset=utf8',
                    'root',
                     ''
                    );

	
	//Définition du mode d'erreur, qui influence sur la "tolérence" des erreurs à montrer
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {

	//En cas d'erreur, on peu effectuer des actions
    echo 'La base de donnée n\'est malheureusement pas disponnible pour le moment. Réessayez plus tard.';
    
}



?>