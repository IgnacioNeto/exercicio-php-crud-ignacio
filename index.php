<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css-bootstrap/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
<div class="container-fluid bg-primary mt-5 text-white">

<div class="containerb">
    <h1 class="text-center">Exercício - CRUD com PHP e MySQL</h1>
    <hr>
    <h2 class="text-center">Gerenciamento de alunos, notas, médias e aprovação/reprovação</h2>
    <hr>
    <ul class="text-center">
        <li><a class="text-white" href="visualizar.php">Visualizar Alunos</a></li>
        <li><a class="text-white" href="inserir.php">Inserir novo aluno</a></li>
    </ul>
</div>

<!-- _______________________________________________________________________ -->
<!-- Footer -->
<!-- 'container-fluid' (Para ocupar tela inteira-largura). "mt-5" (margin-top 5) -->

  <footer class="py-5">
    <div class="row">
      <!-- Como são 12 Grids colocando "col-6" e offset-3 ele centraliza no Mobile que não precisa declarar fica só col -->
      <div class="col-6 offset-3 col-md-5 offset-md-1 mb-3">
        <h2>Cadastro escolar</h2>
        <p class="small">O melhor gerenciamento do brasil.</p>
        <p>Telefone: 11 2345-6789 <br>
          WhatsApp: 11 2345-6789 <br>
          Endereço: Av. Paulista,500 <br>
          São Paulo - SP.
        </p>

      </div>
      <!--  Com "col-4" ele coloca as 3 próximas juntas pois 4 x 3 = 12 Grids-->
      <div class="col-4 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-4 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-4 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>


    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

<!-- _______________________________________________________________________ -->
<!-- Bootstrap JS -->
<script src="js-bootstrap/bootstrap.bundle.js"></script>  

</body>
</html>