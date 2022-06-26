<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles/sign_in.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Owasp Mutillidae II</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?page=views/home_index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=views/html/use.php">Instrucciones de Uso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=views/html/vulnerabilities.php">Vulnerabilidades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=views/html/youtube.php">Youtube</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=views/sign_in.php">Iniciar sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=views/sign_up.php">Registarse</a>
            </li>
            
            
        </div>
      </nav>
    <div class="wrapper">
        <div class="logo"> <img src="sources/logo.png" alt=""> </div>
        <div class="text-center mt-4 name"> Bienvenido al registro </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                 <span class="far fa-user"></span> 
                 <input type="text" name="userName" id="userName" placeholder="Usuario">
            </div>
            <div class="form-field d-flex align-items-center"> 
                <span class="fas fa-key"></span>
                 <input type="password" name="password" id="pwd" placeholder="contraseña">
             </div>
             <div class="form-field d-flex align-items-center"> 
                <span class="fas fa-key"></span>
                 <input type="password" name="password" id="pwd" placeholder="Confirmar contraseña">
             </div>
             <div class="form-field d-flex align-items-center">
                 <textarea name="" id="" cols="30" rows="5" placeholder="Firma"></textarea>
             </div>
            <a href="index.php?page=views/sign_in.php" class="btn mt-3">Registrarse</a>
        </form>        
    </div>
    

    <!-- JavaScript Bundle with Popper -->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>