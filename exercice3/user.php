<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3</title>
  <h1>PHP - Partie 7 - Exercice 3</h1>
</head>
<body>
  <p>Bonjour <?php echo htmlspecialchars ($_GET['prénom']) . ' ' . $_GET['nom'] ; ?></p>
  <!-- htmlspecialchars protège contre la faille XSS, code HTML qque l'on peut recevoir via les formulaires.  -->
  </html>
