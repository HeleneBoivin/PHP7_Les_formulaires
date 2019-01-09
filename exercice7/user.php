<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice7</title>
  <h1>PHP - Partie 7 - Exercice 7</h1>
</head>
<body>
  <p>Bonjour <?php echo htmlspecialchars ($_POST['choix'] . ' ' . $_POST['prénom'] . ' ' . $_POST['nom']) ; ?></p>
  <?php
  if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)

  {

    // Testons si le fichier n'est pas trop gros

    if ($_FILES['monfichier']['size'] <= 1000000)

    {

      // Testons si l'extension est autorisée

      $infosfichier = pathinfo($_FILES['monfichier']['name']);

      $extension_upload = $infosfichier['extension'];

      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

      if (in_array($extension_upload, $extensions_autorisees))

      {

        // On peut valider le fichier et le stocker définitivement

        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));

        echo 'L\'envoi a bien été effectué !';

      }

    }

  }
  ?>
  </html>
