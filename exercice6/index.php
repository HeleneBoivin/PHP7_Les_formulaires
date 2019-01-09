<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Exercice6</title>
  <h1>PHP - Partie 7 - Exercice 6</h1>
</head>
<body>
  <b style="font-size:15px">Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
    Utiliser qu'une seule page.</b>
    <?php
    $verifInput = '#[A-Z]{1}[a-z]+$#';
    if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && preg_match($verifInput, $_POST['lastname']) && preg_match($verifInput, $_POST['firstname'])){
      $lastName = htmlspecialchars($_POST['lastname']);
      $firstName = htmlspecialchars($_POST['firstname']);
      echo $_POST['choice'] . ' ' . $lastName . ' ' . $firstName;
    }else{
      ?>
      <div class="jumbotron">
        <form method="post">
          <select name="choice">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
          </select>
          <p><label>Nom :</label>
            <input type="text" name="lastname" class="form-control"/> </p>
            <p><label>Prénom :</label>
              <input type="text" name="firstname" class="form-control"/> </p>
              <input type="submit" name="submit" value="OK" class="btn btn-primary"/>
            </form>
          </div>
          <?php
          }
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
      </html>
