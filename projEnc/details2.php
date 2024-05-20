<?php
  require_once '../database/db_conn.php';
$idFromURL = $_GET['Id'];
$req = "SELECT details FROM projetencours WHERE idPEC = ?";
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