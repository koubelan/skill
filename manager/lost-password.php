<?php include "../includes/header.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
    <title>Lost Password - <?php echo $_SESSION["role"]; ?></title>
</head>
<!-- Corps de la page -->
<body>
    <?php echo $menu; ?>
    <main>
        <!--Insertion d'image slide-->
        <div class="corps">
            <div class="logout"><a href="../common/logout.php">Log out</a></div>
            <div class="upcoming">
                <span>Hello </span><?php echo $_SESSION["role"]; ?>
                <hr>
                <br>
            </div>
            <div>
                <h2>Here are you options :</h2>
                <!--Insertion formulaire d'envoie de mail création de nouvequ compte-->
                <form method="get" action="../common/send-email.php">
                    <div class="input-group mb-3 input-group">
                        <input type="email" name="email" class="form-control" placeholder="Votre adresse email" aria-label="Recipient's email" aria-describedby="button-addon2">
                        <input type="hidden" id="type" name="emailType" value="lostPassword">
                        <input name="soumettre" class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!--Insertion Pied de page-->
    <?php include "../includes/footer.php" ?>
</body>
</html>