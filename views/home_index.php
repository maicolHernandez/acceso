<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/index.css">
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

      <section class="container">
          <div class="grid">
                <div class="grid-1">
                    <img src="sources/question-mark-40-61.png" alt="">
                    <h4><a href="index.php?page=views/html/who_init.php">¿Cómo Iniciar?</a></h4>
                </div>
                <div class="grid-2">
                    <img src="sources/information-icon-64-64.png" alt="">
                    <h4><a href="index.php?page=views/html/important.php">Información Importante  </a> </h4>
                </div>
                <div class="grid-3">
                    <img src="sources/siren-48-48.png" alt="">
                    <h4><a href="index.php?page=views/html/vulnerabilities.php"> Advertencias </a></h4>
                </div>
                <div class="grid-4">
                    <img src="sources/help-icon-48-48.png" alt="">
                    <h4><a href="documentation/mutillidae-test-scripts.txt"> Ayuda</a></h4>
                </div>
                <div class="grid-5">
                    <img src="sources/youtube-play-icon-40-40.png" alt="">
                    <h4><a href="index.php?page=views/html/youtube.php">Video Tutoriales</a></h4>
                </div>
                <div class="grid-6">
                    <img src="sources/sql-logo-64-64.png" alt="">
                    <h4><a href="configuration/openldap/mutillidae.ldif">Mutillidae LDIF File</a></h4>
                </div>
          </div>

      </section>
      <footer>Version Propia Html, css, JS</footer>
<!-- JavaScript Bundle with Popper -->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>