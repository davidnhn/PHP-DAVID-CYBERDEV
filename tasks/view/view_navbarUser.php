<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Task Manager</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav w-100">
      <li class="nav-item">
        <a class="nav-link active" href="accueil.php">Accueil</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="showTasks.php">Mes tâches</a>
      </li>
     <li class="nav-item">
     <a class="nav-link" href="showTasks.php">Connecté : <?php echo $_SESSION['login'] ?></a>
        
      </li>
      <li class="nav-item ms-auto">
        <a class="nav-link" href="deconnexion.php">DÉCONNEXION</a>
      </li>
    </ul>
  </div>
  </nav>  