<?php include "includes/header.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
  <title>Home Page</title>
</head>
<!-- Corps de la page -->
<body>
  <!-- Insertion du menu inclus dans la page header.php -->
  <?php echo $menu; ?>
  <main>
    
    <div class="corps">
      <div class="logout"><a href="common/logout.php">Log out</a></div>
      <div class="formulaire">
      <h2>Welcome To Your IT Support System</h2>
      <form method="post" action="common/problem.php">
      <div class="row">
          <div class="input-group mb-3 input-group">
            <div class="col-1">
            <select name="titre" class="form-select" id="inputGroupSelect01" required >
              <option selected value="">Titre</option>
              <option value="mr">Mr</option>
              <option value="mme">Mme</option>
              <option value="miss">Miss</option>
            </select>
            </div>
            <div class="col-4">
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required col-4>
            </div>
            <div class="col-4">
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" required col-4>
            </div>
            <div class="col-2">
            <select name="role" class="form-select" id="inputGroupSelect01" required>
              <option selected value="">Rôle</option>
              <option value="Admin">Admin</option>
              <option value="Manager">Manager</option>
              <option value="CEO">CEO</option>
            </select>
            </div>
            <div class="col-1">
            <input name="soumettre" class="btn btn-primary" type="submit" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!--Insertion Pied de page-->
  <?php include "includes/footer.php" ?>
</body>
</html>