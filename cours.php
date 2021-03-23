
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets PHP</title>
</head>
<body>
    <?php
        require "classes/utilisateur.class.php";

        $pierre = new Utilisateur();
        $mathilde = new Utilisateur();
        
        $pierre->setNom('Pierre');
        $pierre->setPasse('abcdef');
        
        $mathilde->setNom('Math');
        $mathilde->setPasse(123456);
        
        echo $pierre->getNom(). '<br>';
        echo $mathilde->getNom(). '<br>';
    ?>
</body>
</html>