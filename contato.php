<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kider - Escola Bilingue</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    

    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 <!--CSS DA PÁG -->
    <link rel="stylesheet" href="css\contato.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>
<body>
    <!--background-image: url('../img/classes-1.jpg') ;--->


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
                    <a href="contato.php" class="nav-item nav-link">Contato</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Crie sua conta<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
<!-- FORMS CONTATO-->
        <div class="wrapper">
            <form  action="/conexao_bd_contato.php" method="post">
                <h1>Faça um contato com a escola</h1>
    <div class=" input-box">
       <input id= "tXtNomePais" type="text" placeholder="Nome dos Pais e/ou Responsáveis">
             </div>
    <div class="input-box">
        <input id= "tXtNome" type="text" placeholder="Nome Completo">
             </div>
    <div class=" input-box">
        <input id="tXtEmail" type="text" placeholder="Email para contato">
        <i class='bx bx-user'></i>
            </div>
    <div class=" input-box">
        <input id="tXtIdade" type="text" placeholder="Idade">
            </div>
    <div class="input-box">
        <input id="tXtMensagem" type="text" placeholder="Mensagem">
        <i class='bx bxs-comment-dots'></i>
            </div>

<!--CHECKBOX-->
    <div class="remember-forget">
        <label><input type="checkbox"> Confiro os dados enviados </label>
    </div>
        
<!--BOTÃO-->
     <button  type="submit" class="btn" > Enviar </button>

        </form>
        </div>


</body>
</html>