<?php include "../includes/header.php";
// Récupération de valeur emailType et adresse email par méthode get
if (isset($_GET['email']) && isset($_GET['emailType'])) {
    $email = ($_GET["email"]);
    $emailType = ($_GET["emailType"]);
    if ($emailType == "newAccount") {
        $message = "Votre nouveau compte sera crée avec cette adresse : " . $email;
    } else if ($emailType == "lostPassword") {
        $message = "Votre nouveau mot de passe sera envoyé à cette adresse : " . $email;
    } else {
        $message = "Merci de renseigner normalement vos informations. ";
    }
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
    <title>Send Email - <?php echo $_SESSION["role"]; ?></title>
</head>
<!-- Corps de la page -->
<body>
    <?php echo $menu; ?>
    <main>
        
        <div class="corps">
            <div class="logout"><a href="logout.php">Log out</a></div>
            <div class="upcoming">
                <span>Hello </span><?php echo $_SESSION["role"]; ?>
                <hr>
                <br>
            </div>
            <div>
                <h2>Message :</h2>
                <h3><?php echo $message; ?></h3>
            </div>
        </div>
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>