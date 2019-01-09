<!DOCTYPE HTML> 
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice7</title>
  <h1>PHP - Partie 7 - Exercice 7</h1>
</head>
<body>
  <b style="font-size:15px">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</b>
  <?php
  if (empty ($_POST['prénom']) || empty ($_POST['nom'])){
    ?>
    <p><form action="index.php" method="POST" enctype="multipart/form-data">
      <select name="choix">
        <option value="">--Choisir votre civilité--</option>
        <option value="Mme">Mme</option>
        <option value="Mr">Mr</option>
      </select>
      <p><label>Prénom : <input type="text" name="prénom" placeholder="Prénom"/></label></p>
      <p><label>Nom : <input type="text" name="nom" placeholder="Nom"/></label></p>
      <p><input type="file" name="monfichier"/></p>
      <input type="submit" name="valider" value="Valider">
    </form>
    <?php
  }
  else
  {
    ?>

    <p>Bonjour <?php echo htmlspecialchars ($_POST['choix'] . ' ' . $_POST['prénom'] . ' ' . $_POST['nom']);?></p>
    <?php
    $ext = new SplFileInfo($_POST['monfichier']); //Sert à récupérer les informations d'un fichier envoyé
    $extension = $ext -> getExtension(); //Permet de récupérer uniquement l'extension du fichier envoyé
    $filename = $ext -> getBasename(".$extension"); //Permet de récupérer le nom du fichier, en précisant .$extension je dis que je souhaite avoir uniquement le nom du fichier sans son extension
    ?>
    <p><?= 'L\'extension de votre fichier est : ' . $extension?></p>
    <p><?= 'Le nom du fichier envoyé est : ' . $filename?></p>
    <?php
  }
  ?>
</body>
</html>
