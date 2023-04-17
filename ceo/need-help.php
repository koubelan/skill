<?php include "../includes/header.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
        <title>Need Help - <?php echo $_SESSION["role"]; ?></title>
</head>
<!-- Corps de la page -->
<body>
        <?php echo $menu; ?>
        <main>
                
                <div class="corps">
                        <div class="logout"><a href="../common/logout.php">Log out</a></div>
                        <div class="upcoming">
                        <span>Hello </span><?php echo $_SESSION["role"]; ?>
                        <hr>
                        <br>
                        </div>
                        <h3>Contact Helpdesk ?> est :</h3> <label>>+1 677 987 0000</label>
                </div>
        </main>
        </main>
          <!--Insertion Pied de page-->
        <?php include "../includes/footer.php" ?>
</body>
</html>