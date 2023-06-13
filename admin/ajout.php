<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row">
            
            <?php
                
            if (!isset($_POST['libelle'])) {
            ?>
            <div class="col-1">

</div>
                <div class="col-8">
                    <h1>
Ajout De produit
                    </h1>

                    <form method="post" action="" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Libelle du produit</label>
                            <input type="text" name="libelle" class="form-control" id="exampleInputEmail1" aria-describedby="Libelle" placeholder="Entre le libelle du produit" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Prix</label>
                            <input type="number" name="prix_unitaire" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prix du produit" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Charger une image" required>
                        </div>

                        <div class="col text-center">
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>

                        </div>
                    </form>
                </div>
            <?php
            } else { ?>

<?php
            // Database configuration
            $host = 'localhost';
            $dbName = 'bd_commerce';
            $user = 'root';
            $password = '';

            $libelle =$_POST['libelle']; 
            $prix =$_POST['prix_unitaire']; 
            $image =""; 
            $image_url ="-"; 



            try {
                // Create a new PDO instance
                $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

                // Set PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepare and execute the query
                $stmt = $pdo->prepare("INSERT INTO produits (`libelle`, `prix_unitaire`, `image`, `image_url`)
                 VALUES ('".$libelle."',".$prix.", '".$image."','".$image_url."');");
                $stmt->execute();

                // Fetch all the rows as associative arrays
                echo 'Produit ajouté !  ';
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }

            
            } ?>






        </div>
    </div>

</body>

</html>