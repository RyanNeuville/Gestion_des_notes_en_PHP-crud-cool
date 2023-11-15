<?php
    include_once "connect.php";

    if (isset($_POST["ajouter"])) {
        if ($_POST['nom'] != '' && $_POST['prenom'] != '' && $_POST['classe'] != '' && $_POST['test_psy'] != '' && $_POST['maths'] != '' && $_POST['anglais'] != '' && $_POST['infos'] != '' && $_POST['moy_sco'] != '' && $_POST['moy_gen'] != '' && $_POST['telephone'] != '') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $classe = $_POST['classe'];
            $test_psy = $_POST['test_psy'];
            $maths = $_POST['maths'];
            $anglais = $_POST['anglais'];
            $infos = $_POST['infos'];
            $moy_sco = $_POST['moy_sco'];
            $moy_gen = $_POST['moy_gen'];
            $telephone = $_POST['telephone'];

            $sql = "INSERT INTO `eleves`(`nom`, `prenom`, `classe`, `test_psy`, `maths`, `anglais`, `infos`, `moy_sco`, `moy_gen`, `telephone`) VALUES ('$nom','$prenom','$classe','$test_psy','$maths','$anglais','$infos','$moy_sco','$moy_gen','$telephone')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: index.php?msg=Eleves Ajouter Avec Succes");
            } else {
                echo "Failed: " . mysqli_error($conn);
            } 

        }else {
            header("location:ajouter.php?message=RemplisserLesChamps");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png">
    <title>OrizonItech | Ajouter Un Eleves</title>
</head>
<body>
    <center>
        <div class="loader"></div>
        <form action="" method="post">
            <h1><div><img src="img/favicon.png"><span>Orizon</span>Itech<img src="img/favicon.png"></div></h1>
            <h2>Gestion D'eleves Bobongo</h2>
            
            <h2>Ajouter un eleve</h2>
                <label for="nom">
                    <input type="text" placeholder="NOM" name="nom">
                </label>
                <label for="prenom">
                    <input type="text" placeholder="PRENOM" name="prenom">
                </label>
                <label for="classe">
                    <input type="text" placeholder="CLASSE" name="classe">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="TEST DE RAISONEMENT" name="test_psy">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="MATHEMATIQUES" name="maths">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="ANGLAIS" name="anglais">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="INFORMATIQUES" name="infos">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="MOYENES SCLOLARISE" name="moy_gen">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="MOYENNES GENERAL" name="moy_sco">
                </label>
                <label for="test_psy">
                    <input type="number" placeholder="NUMERO DE TELEPHONE" name="telephone">
                </label>
                    <p> <strong>Vous doutez </strong> ? <a href="index.php">ANNULER</a></p>
                <p>
                    <input type="submit" value="AJOUTER" name="ajouter">
                </p>
        </form>
        <div class="social-media">
                <p><i class="fab fa-google"></i></p>
                <p><i class="fab fa-facebook-f"></i></p>
                <p><i class="fab fa-youtube"></i></p>
                <p><i class="fab fa-instagram"></i></p>
                <p><i class="fab fa-github"></i></p>
            </div>
    </center>
</body>
</html>
<style>
.social-media p:hover{
    color: whitesmoke;
    background-color: rgba(0, 202, 253, 0.482);
    border: #004a8f solid 1px;
    transition: all  1s ease;
}
</style>