
 <?php
 include_once 'home.php';
  require_once '../database/db_conn.php';
$idFromURL = $_GET['Id'];
$req = "SELECT details FROM projetfinale WHERE idPT = ?";
$stmt = mysqli_prepare($conn, $req);

// Bind the parameter
mysqli_stmt_bind_param($stmt, "i", $idFromURL);

// Execute the query
mysqli_stmt_execute($stmt);

// Get the result
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $details = $row["details"];
        echo "$details";
    }
} else {
    echo "No results found.";
}

 
?>  
 <?php
require_once '../database/db_conn.php';
$idFromURL = $_GET['Id'];
if (isset($_POST['submit'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $nom = validate($_POST['nom']);
    $email = validate($_POST['email']);
    $message = validate($_POST['message']);

    if (!empty($nom) && !empty($email) && !empty($message)) {
        // Préparez la requête avec des paramètres
        $req2 = 'INSERT INTO comments(nom, email, messages, date,idProjet) VALUES (?, ?, ?, NOW(),?)';
        $stmt = mysqli_prepare($conn, $req2);

        // Liez les valeurs aux paramètres
        mysqli_stmt_bind_param($stmt, 'ssss', $nom, $email, $message,$idFromURL);

        // Exécutez la requête
        $result2 = mysqli_stmt_execute($stmt);

        if ($result2) {
          
            echo '<script type="text/javascript">alert("the informations has been added successfully")</script>';

        } else {
            

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Page de details </title> 
    <style type="text/css">
        section {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        span {
            font-size: 13px;
            color: #777;

        }
    </style>
</head>
<body>
     <section>
         
        <h2>  Commentaires </h2>
        <form method="post" action="">
            <input type="text" name="nom" placeholder="Nom" required="" class="form form-control"><br>
            <input type="text" name="email" placeholder="Email"  required="" class="form form-control"><br>
            <textarea name="message" placeholder="message"  required="" class="form form-control"></textarea><br>
            <input type="submit" name="submit" value="Poster" class="btn btn-primary">
           
        </form>
        <h3>  Commentaires postes </h3><br>
       
            <?php 
            $idFromURL = $_GET['Id'];
               $req = "SELECT * FROM comments WHERE idProjet=?";
               $stmt = mysqli_prepare($conn, $req);

            // Bind the parameter
            mysqli_stmt_bind_param($stmt, "i", $idFromURL);

            // Execute the query
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                    $nom = $row["nom"];
                    $email = $row["email"];
                    $message = $row["messages"];
                    $date = $row["date"];
                    ?>
                    <p>
                      <span>Poster par  <?php  echo $nom; ?> le <?php  echo $date; ?> </span>  <br>  
                    <?php  echo $message; ?><br>
                      <a href="repondre.php?Id=<?php echo $row['idC'] ?>">Repondre</a>
                     
                    </p> 
                    <?php 
                    
                }
            
            ?>
     
     </section>
</body>
</html>