<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice5</title>
  <h1>PHP - Partie 7 - Exercice 5</h1>
</head>
<body>
  <b style="font-size:15px">Créer un formulaire sur la page index.php avec :</b>
  <ul>
    <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
    <li>Un champ texte pour le nom</li>
    <li>Un champ texte pour le prénom</li>
  </ul>
  <p>Ce formulaire doit rediriger vers la page index.php.</p>
  <?php
  if (empty (isset ($_POST['prénom'])) || empty (isset($_POST['nom']))){
    ?>
    <p><form action="index.php" method="POST">
      <select name="choix">
        <option value="">--Choisir votre civilité--</option>
        <option value="Mme">Mme</option>
        <option value="Mr">Mr</option>
      </select>
      <p><label>Prénom : <input type="text" name="prénom" placeholder="Prénom"/></label></p>
      <p><label>Nom : <input type="text" name="nom" placeholder="Nom"/></label></p>
      <input type="submit" name="valider" value="Valider">
    </form>
    <?php
  }
  else
  {
    ?>

    <p>Bonjour <?php echo htmlspecialchars ($_POST['choix'] . ' ' . $_POST['prénom'] . ' ' . $_POST['nom']) ; ?></p>
    <?php
  }
  ?>
</body>
</html>
