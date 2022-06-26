<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerabilidades</title>

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
        <div class="accordion mt-5" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Comunes
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Proin urna ligula, dapibus id viverra posuere, pellentesque sed leo. Aenean vel sodales nisi. Aliquam posuere felis ac commodo tempor. Pellentesque sollicitudin laoreet purus, et aliquet quam gravida id. Ut tempus laoreet velit, sit amet tincidunt odio mollis molestie. Mauris euismod erat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed dolor suscipit, porta elit sed, dapibus nulla. Duis facilisis, magna et ornare maximus, metus neque molestie odio, quis blandit orci nibh rhoncus mi. Fusce finibus tellus non eros tristique, vitae euismod sem auctor. Sed vulputate ultrices ultrices. Etiam at semper sem, nec tincidunt nibh. Quisque vitae fermentum enim, quis rhoncus quam. Suspendisse potenti.
                    <br/>
                    Nunc efficitur efficitur lorem sit amet consequat. Nulla et ipsum vel lorem faucibus iaculis a eu tellus. Nulla aliquet pretium facilisis. Aliquam non neque maximus, mattis lacus id, viverra augue. Suspendisse potenti. Mauris iaculis semper ullamcorper. Sed mollis suscipit elit in vehicula. Nunc vitae velit molestie, accumsan sem in, pharetra velit. Nulla at nisl vel diam iaculis auctor. In lorem libero, feugiat vitae porta quis, ultrices a enim. Nulla et finibus lectus. In ac tortor et nisl sagittis dignissim nec imperdiet neque. Morbi feugiat libero nec venenatis gravida.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  No comunes
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Etiam a convallis dui, et placerat lorem. Nullam elementum lorem ut purus ornare sollicitudin. Cras convallis, leo ut volutpat eleifend, ex ex gravida diam, at finibus leo nulla gravida quam. Duis in tristique ligula, et rhoncus elit. Mauris vitae nisi sit amet ex eleifend aliquet. Fusce at vehicula neque. Etiam aliquam tempor odio in tincidunt. Vestibulum elementum tempus nisl, id finibus nunc pharetra vel. Phasellus et sodales magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <br/>
                    Sed tempus, metus a posuere congue, tellus sem rhoncus nulla, faucibus feugiat tellus dolor non ipsum. Praesent malesuada tincidunt egestas. Curabitur dictum orci blandit, tincidunt tortor at, elementum nibh. Phasellus et purus facilisis, scelerisque lacus non, tristique odio. Duis in augue nunc. Praesent luctus nulla vel pharetra elementum. Phasellus aliquet enim non neque iaculis, quis ultrices diam dapibus. Aenean massa sapien, pellentesque eu ligula vitae, accumsan gravida dui. Aenean quis risus vel sem tempus porta. Aliquam sed tortor elementum, cursus mi luctus, fringilla velit. Nullam fermentum, nibh at dapibus euismod, est dui egestas sapien, eu maximus nulla nulla sed velit. Nulla dignissim a ligula ornare volutpat.
                  </p>
                </div>
              </div>
            </div>
            
        </div>
      </section>

      <!-- JavaScript Bundle with Popper -->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>