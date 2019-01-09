<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice8</title>
  <h1>PHP - Partie 7 - Exercice 8</h1>
</head>
<body>
  <b style="font-size:15px">Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</b>
  <?php
  if (empty ($_GET['prénom']) || empty ($_GET['nom'])){
    ?>
    <form action="index.php" method="GET">
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
    $ext = new SplFileInfo($_GET['monfichier']); //Sert à récupérer les informations d'un fichier envoyé
    $extension = $ext -> getExtension(); //Permet de récupérer uniquement l'extension du fichier envoyé
    $filename = $ext -> getBasename(".$extension"); //Permet de récupérer le nom du fichier, en précisant .$extension je dis que je souhaite avoir uniquement le nom du fichier sans son extension
    if ($extension == 'pdf') {
      ?>
      <p><?= 'L\'extension du fichier est bien .pdf';?></p>
      <p>Bonjour <?php echo htmlspecialchars ($_GET['choix'] . ' ' . $_GET['prénom'] . ' ' . $_GET['nom']);?></p>
      <?php
    } else {
      ?>
      <p style="color:red;"><?= 'L\'extension de votre fichier doit être .pdf, vous avez envoyé un fichier en : ' . $extension . ', ' . 'Veuillez remplir à nouveau le formulaire avec un fichier comportant la bonne extension'?></strong></p>
      <form action="index.php" method="GET">
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
  }
  ?>
</body>
</html>
