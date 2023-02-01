<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">Exercice Ninja Factorial Of A Number Using Recursive</h1>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer un Nombre</label>
                <input type="number" name="num" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
            function Factorial($number)
            {
                ///initialisation
                $factorial = 1;

                ///la boucle pour For pour les operation
            for ($i = 1; $i <= $number; $i++)

                {
                $factorial = $factorial * $i;
                }
            return $factorial;
            }
            ///verification du coté formular
            if(isset($_POST['submit']))
            {
            $n = $_POST['num'];///// je declare une variable pour stocker les donnée du formulaire dedand

            $x = Factorial($n);

            echo "Le factoriel du nombre ". $n . " est: " .$x;

            return 0;
            }
                    
        ?>
    </div>
</body>
</html>