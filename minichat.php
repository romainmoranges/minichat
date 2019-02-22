<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minichat !</title>
</head>

<body>

    <h1 style='text-align:center;'>C'est le minichat ! </h1>

    <form action="minichat_post.php" method="post">

        <label for="pseudo"> votre pseudo</label> <input type='text' name="pseudo" id="pseudo">

        <br>
        <br>

        <label for="message"> votre message</label> <input type='textarea' limit='140' name="message" id="message">

<br><br>
        <input type="submit">
    </form>

    <div>



        <?php 
include('config.php');


$requete = $bdd->query('SELECT * FROM minichat');
$minichat = $requete->fetchAll(PDO::FETCH_OBJ);

foreach($minichat as $contenu){
    echo '<p> <i>' .  $contenu->pseudo . '</i> : ' . $contenu->messages . '</p>';
}

?>

    </div>

</body>

</html>