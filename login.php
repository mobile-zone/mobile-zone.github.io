<?php
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location: dashboard.php");
      exit();
  }
  // Include database connectivity
    
  include_once("connexion.php");
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";

      $username = $con->real_escape_string($_POST['username']);
      $password = $con->real_escape_string($_POST['password']);
      
  if (!empty($username) AND !empty($password)) {
        $query  = "SELECT * FROM admins WHERE username = '$username'";
        $query2  = "SELECT * FROM admins WHERE `password` = '$password'";
        $result = $con->query($query);
        $result2 = $con->query($query2);
        if($result->num_rows ==1 AND $result2->num_rows ==1){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            header("Location: dashboard.php");
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page de connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<div class="card text-center" style="padding:20px;">
  <h3>Page de connexion admins</h3>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
        <form action="" method="POST">
          <div class="form-group">  
            <label for="username">Nom d'utilisateur:</label> 
            <input type="text" class="form-control" name="username" placeholder="Entrer votre nom d'utilisateur" >
          </div>
          <div class="form-group">  
            <label for="password">Mot de Passe:</label> 
            <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe">
          </div>
          <div class="form-group">
            <p>Mot de passe oublié ? <a href="index.php"> Cliquez ici</a></p>
            <input type="submit" name="submit" class="btn btn-success" value="Connexion"> 
          </div>
        </form>
      </div>
  </div>
</div>
</body>
</html>