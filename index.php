<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="icon" href="img/favicon.png">
    <title>OrizonItech | Liste Des Eleves</title>
</head>
<body>
        
    <div class="loader"></div>
        <div class="ajouter">
            <a href="ajouter.php"><i class="fa fa-add"></i> Ajouter Un Eleves</a>
        </div>
    <center>
        <table>
            <thead>
                <tr>
                    <th colspan="12">Liste Des Eleves Du Lycee Bilingue De Bobongo Petit Paris</th>
                </tr>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Classe</th>
                    <th>Test </th>
                    <th>Maths</th>
                    <th>Anglais</th>
                    <th>Infos</th>
                    <th>Moy_sco</th>
                    <th>Moy_gen</th>
                    <th>Telephone</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once "connect.php";
                    $sql = "SELECT * FROM `eleves`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="trbody">
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['classe']?></td>
                    <td><?=$row['test_psy']?></td>
                    <td><?=$row['maths']?></td>
                    <td><?=$row['anglais']?></td>
                    <td><?=$row['infos']?></td>
                    <td><?=$row['moy_sco']?></td>
                    <td><?=$row['moy_gen']?></td>
                    <td><?=$row['telephone']?></td>
                    <td class="modifier"><a href="modifier.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i> Modifier</a></td>
                    <td class="supprimer"><a href="supprimer.php?id=<?=$row['id']?>"><i class="fa fa-x"></i> Supprimer</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </center>
</body>
</html>
<style>
    
    body{
    justify-content: center;
    align-items: center;
    background-image: url(img/mac.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-style: oblique;
    
    }
    .ajouter{
        width:250px;
        margin-left:50px;
        margin-bottom:20px;
    }
    .ajouter a{
        padding:10px;
        background-color: rgba(0, 0, 255, 0.859);
        border-radius: 5px;
        text-decoration: none;
        color: whitesmoke;
    }
    .loader{
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    border: 16px solid #bdc3c7;
    width: 100px;
    height: 100px;
    border-top-color: #1abc9c;
    border-bottom-color: #3449db;
    border-radius: 50%;
    animation: chargeur 2s linear infinite;
} 
@keyframes chargeur {
    0%{
        transform: rotate(0deg) scale(1); 
        border-top-color: red;
        border-bottom-color: red;
    }
    25%{ 
        border-top-color: blue;
        border-bottom-color: blue;
    }
    50%{
       transform: rotate(360deg) scale(1.15); 
       border-top-color: red;
       border-bottom-color: red;
    }
    75%{
        border-top-color: green;
        border-bottom-color: green;
    }
    100%{
        transform: rotate(720deg) scale(1); 
        border-top-color: red;
        border-bottom-color: red;
    }
}
    table{
        background-color: rgba(255, 255, 255, 0.597);
        border-radius: 10px;
        padding: 10px;
        border-color: #a8a8a8;
        border: 1px solid #a8a8a8;

    }
    th{
        margin: 23px;
        background-color: rgba(44, 44, 44, 0.303);
        padding: 5px;
        border-radius: 5px;
        color: whitesmoke;
    }
    .modifier{
        background-color: rgba(0, 0, 255, 0.859);
        padding: 5px;
        border-radius: 5px;
    }
    .supprimer{
        background-color: red;
        padding: 5px;
        border-radius: 5px;

    }
    td a{
        text-decoration: none;
        color: whitesmoke;

    }
    td{
        border: 1px solid #787878;
    }
    .trbody td{
        border-radius: 5px;
        text-align: center;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>