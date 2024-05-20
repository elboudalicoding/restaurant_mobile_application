<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>show the project of BTP</title>
    <style>
 
    </style>
</head>
<body>
<?php 
    include_once 'header.php';
    ?>
    <div class="container">
      <h2>Final Projets Details </h2>
      <?php 
              require_once '../database/db_conn.php';
              $sql= "SELECT * FROM projetfinale";
              $result=$conn->query($sql);
      ?>
       <?php 
         while($row=mysqli_fetch_assoc($result)){
            $id=$row['idPT'];       

        ?>
 <div class="card mb-3" style="max-width: 2900px;">
  <div class="row g-0">
    <div class="col-md-4" style="width:400px; height:400px;">
    <?php echo '<img src="data:image;base64,'.base64_encode($row["image"]).'" alt="image" style="width:350px;height:350px;">';?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <label>Projet Name :</label>
        <h5 class="card-title"><?php echo $row["projet_name"]?></h5>
        <label>Time  :</label>
        <p class="card-text"> <?php echo $row["time"]?></p>
        <label>City :</label>
        <p class="card-text"><small class="text-body-secondary"><?php echo $row["city"]?></small></p>

        <a  class="btn btn-light" href="details.php?Id=<?php  echo $id ?>">click to see more of details</a>
      </div>
    </div>
  </div>
</div>
<?php }?>
<!-- <div class="image">
                <?php echo '<img src="data:image;base64,'.base64_encode($row["image"]).'" alt="image" style="width:100px;height:100px;">';?>
            </div>
<ul class="list-group">
  <li class="list-group-item"><?php echo $row["projet_name"]?></li> 
  <li class="list-group-item"><?php echo $row["time"]?></li>  
  <li class="list-group-item"><?php echo $row["city"]?></li> 
 </ul>
 <a  class="btn btn-light" href="details.php?Id=<?php  echo $id ?>">click to see more of details</a> -->
</body>
</html>