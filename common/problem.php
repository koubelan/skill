<?php include "../includes/header.php";
// Récupération de valeur titre, nom, prénoms, et rôle  par méthode post
if (isset($_POST['titre']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['role'])) {
    $titre = ($_POST["titre"]);
    $firstname = ($_POST["firstname"]);
    $lastname = ($_POST["lastname"]);
    $role = ($_POST["role"]);
} else {
    header('Location: ../index.php');
    exit();
}
// En fonction du lien on génère les liens appropriés
$link_work = "<a href='isnt-working.php'>My computer isn't working</a>";
if ($role == 'Admin') {
    $_SESSION["role"] = "Admin";
    $link = "<a href='../admin/new-account.php'>Create New Account</a>";
} else if ($role == 'Manager') {
    $_SESSION["role"] = "Manager";
    $link = "<a href='../manager/lost-password.php'>Lost Password</a>";
}
  else if ($role == 'CEO') {
    $_SESSION["role"] = "CE0";
    $link = "<a href='../ceo/need-help.php'>Need Help</a>";
}
else {
    header('Location: ../index.php');
    exit();
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
    <title>Page <?php echo $_SESSION["role"]; ?></title>
</head>
<!-- Corps de la page -->
<body>
    <?php echo $menu; ?>
    <main>
        
        <div class="corps">
            <div class="logout"><a href="logout.php">Log out</a></div>
            <div class="upcoming">
                <h1>Hello <?php echo $_SESSION["role"]; ?></h1>
                <hr>
                <br>
            </div>
            <div>
                <h2>Here are you options :</h2>
                <?php echo $link_work; ?><br /><br />
                <?php echo $link; ?>
            </div>
        </div>
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>