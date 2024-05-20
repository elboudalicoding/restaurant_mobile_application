<?php 
require_once '../database/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add addProjectAccomplis</title>
    <style>
        body{
            background-color: lightblue;
        }
        input{
            width: 50%;
            height: 5%;
            border: 1px;
            border-radius: 6px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
            font-weight: bold;
        }
        .large-textarea {
    width: 70%; /* Use percentage for responsive width */
    height: 190px; /* Set a fixed height */
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin: 10px 0;
}
    
    </style>
</head>
<body>
    <center>
        <h1>
                            Enter the informations about your project
        </h1>
        <form action="" method="post" enctype="multipart/form-data">
               <label>Choose an Project Image :</label><br>
               <input type="file" name="image" id="image"/><br>

               <label>Enter Project Name:</label><br>
               <input type="text" name="projectName" placeholder="Project_Name" /><br>

               <label>Enter the whole time that Project took:</label><br>
               <input type="text" name="time" placeholder=" Time"/><br>

               <label>Enter the Place of Project :</label><br>
               <input type="text" name="city" placeholder="City"/><br>
               <textarea name="details" class="large-textarea" placeholder="Enter project details here..."></textarea>
               <input type="submit"  name="upload" value="ADD"/><br>
                


        </form>
    </center>
</body>
</html>
<?php 
if(isset($_POST['upload'])){
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $projectName=$_POST['projectName'];
    $time=$_POST['time'];
    $city=$_POST['city'];
    $detail=$_POST['details'];
  $query="INSERT INTO projetfinale(projet_name,time,city,image,details) VALUES ('$projectName','$time','$city','$file','$detail')";
   $query_run=mysqli_query($conn,$query);
   if($query_run){
    echo '<script type="text/javascript">alert("the informations has been added successfully")</script>';
   }else{
    echo '<script type="text/javascript">alert(" Error! =>the informations has not been added successfully")</script>';

   }
}
?>