<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <Style>
header {
    background-color: #ff0000; /* Couleur de fond rouge */
    padding: 10px; /* Espacement intérieur pour l'en-tête */
}

 .back-button {
    background-color: #ffffff; /* Couleur de fond blanche */
    color: #ff0000; /* Couleur du texte rouge */
    border: 2px solid #ff0000; /* Bordure rouge */
    border-radius: 10px; /* Coins arrondis */
    padding: 5px 10px; /* Espacement intérieur du bouton */
    text-decoration: none; /* Supprime le soulignement du lien */
}
  </style>
</head>
<body>
<?php
$previous_page = 'projets_accomplis.php'; // Remplacez par l'URL réelle de la page précédente
?>

 <header>
    <a href="<?php echo $previous_page; ?>" class="back-button">Retour</a>
</header>

</body>
</html>