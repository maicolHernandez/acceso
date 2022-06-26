<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube</title>

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
            <a class="nav-link" href="index.php?page=views/sign_up.php">Registrarse</a>
        </li>
            
        </div>
      </nav>

      <section class="container">
      <div style="display: flex; flex-wrap: wrap;" class="mt-5 row">
        <div>  <iframe width="560" height="315" src="https://www.youtube.com/embed/kNo9fZC1Isw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>
      <div> <iframe width="560" height="315" src="https://www.youtube.com/embed/TC8bT7zTdoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div>  <iframe width="560" height="315" src="https://www.youtube.com/embed/-4gj0MjRnFY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </section>
      <!-- JavaScript Bundle with Popper -->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>