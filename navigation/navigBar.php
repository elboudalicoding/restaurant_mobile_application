<?php
// Define your navigation items
$navItems = [
    'portfolio' => 'portfolio.php',
    'projet accomplis' => '../projAcc/projets_accomplis.php',
    'projet en cours' => '../projEnc/projets_en_cours.php',
    'TP de Php' => '../TP_de_php/tp_php.php'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Navigation Bar</title>
    <link rel="stylesheet" href="accuille.css">

    <style>
        
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        
        .topnav a {
             
            position: relative;
padding: 10px 20px;
text-decoration: none;
color: #fff;
font-size: 16px;
 
        }
        .topnav a::after{
    content:'';
    background: #ffa400;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 38%;
    height: 3px;
    transform: translate(-50%,-5px);
}

        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
<div class="topnav">
    <?php foreach ($navItems as $name => $link): ?>
        <a href="<?= htmlspecialchars($link) ?>"><?= htmlspecialchars($name) ?></a>
    <?php endforeach; ?>
</div>

 
 </div>
</body>
</html>
