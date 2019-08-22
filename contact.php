<?php require_once 'layout/header.php';?>

<h1> Contactez-nous</h1>
<form action="contact_process.php" method="POST">
    <label for ="nom">Nom :</label>
    <input type="text" name="nom" id="nom" />
    <label for ="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" />
    <label for ="email">Email :</label>
    <input type="email" name="email" id="email" />
    <label for ="subject">Subject :</label>
    <input type="text" name="subject" id="subject " />
    <label for ="message">Message :</label>
    <textarea type="text" name="message" id="message" cols="30" rows="10"></textarea>
    <input type="submit" value="Envoyer"/>
</form>
<?php require_once 'layout/footer.php';?>
    
    
    