<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Add</title>
    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.form-control {
    background:#F0EFCF;
    width: 80vw;
    justify-items:center;
    
}
.form-group{
    margin-left:120px;
}

</style>
</head>
<body>
   <div id="container">
   <img src="" alt="">
       <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
           <h2 align="center">Add a card</h2>

           <p class="col-lg-5"><a href="Accueil.php" class="btn btn-warning submit">Back</a></p>
           
           <form>


           <?php
                if(isset($_POST['addcard']))
                {
                    
                    $id=$_POST['id'];
                 
                   
                    $reqAdd="INSERT INTO addcard (`ID_PRODUIT``) 
                    VALUES ('$id')";
               
              $resultat=mysqli_query($mybd,$reqAdd);
              if($resultat){
                echo "<label style='text-align: center; color:#00F834;'>Add is successfully done!</label>";
                            }else{
                echo "<label style='text-align: center; color:#FF1301;'>Add failed!</label>";              }

  
                     
                }
                ?>

  <div class="form-group">
    <label for="inputsm">id :</label>
    <input class="form-control col-lg input-lg" name="id" placeholder="coiffeur Name" id="inputsm" type="text" required>
  </div>

  <div class="form-group">
    
    <input class="btn btn-warning " type="submit" name="addcard" value="save" class="submit">
  </div>

           
       </form>
   </div> 
</body>
</html>