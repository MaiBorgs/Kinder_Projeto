<!DOCTYPE html>
<html lang="en">
<head>
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kider - Escola Bilingue</title>

 <!-- Customized Bootstrap Stylesheet -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="css\cadastro_professores.css">

</head>
<body>
    

<!-- Navbar Start- Cabeçalho -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link active">Início</a>
                    <a href="" class="nav-item nav-link">Sobre nós</a>
                    <a href="" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="" class="dropdown-item">Nosso programa</a>
                            <a href="" class="dropdown-item">Nossos professores</a>
                            <a href="" class="dropdown-item">Seja um professor</a>
                            <a href="" class="dropdown-item">Depoimentos</a>
                            
                        </div>
                    </div>
                    <a href="contato.php "class="nav-item nav-link">Contato</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Crie sua conta<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>


<!-- FORMS DE CADASTRO -->

        <form id="formCadastroProfessor" class="row g-3 ">
 

   <div class="container "> 
  <div class="col-md-4">
  <div class="mb-1 mt-2">
    <label for="tXtNomeProfessor" class="form-label">Nome Completo</label>
    <input type="text" style="width:400px; height:40px;" class="form-control" id="tXtNomeProfessor">
  </div>
</div>

  <div class="col-md-4">
  <div class="mb-1 mt-2">
    <label for="tXtFormacao" class="form-label">Formação</label>
    <input type="text" style="width:400px; height:40px;" class="form-control" id="tXtFormacao">
  </div>
</div>

  <div class="col-4">
  <div class="mb-1 mt-2">
    <label for="tXtExperiencia" class="form-label">Tempo de experiência</label>
    <input type="text" style="width:400px; height:40px;" class="form-control" id="tXtExperiencia" placeholder="Exercendo a profissão">
  </div>
</div>

  <div class="col-4">
  <div class="mb-1 mt-2">
    <label for="tXtEscolaAnterior" class="form-label">Escola Anterior</label>
    <input type="text" style="width:400px; height:40px;" class="form-control" id="tXtEscolaAnterior" placeholder="Nome e período">
  </div>
</div>

  <div class="col-md-2">
    <div class="mb-1 mt-2">
    <label for="tXtTurno" class="form-label">Turno Disponível</label>
    <select id="tXtTurno"" class="form-select">
      <option selected>Selecione</option>
      <option>Matutino</option>
      <option>Vespertino</option>
      <option>Noturno</option>
      </select>
      <div/>
  </div>

  <div class="remember-forget">
        <label><input type="checkbox"> Confiro os dados enviados </label>
    </div>
    
    
  


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>
  </div> 
</form>

</body>
</html>