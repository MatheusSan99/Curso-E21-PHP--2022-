<?php $titulo = 'Edição'; require_once 'header.php';?>
<body class="gradient-custom">
<form method="POST" autocomplete="off" class="vh-100 overflow-hidden">
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-2 pb-5">

              <h2 class="fw-bold">Formulário</h2>

              <div class="form-outline form-white mb-1">
                <input type="text" name="nome" id="typeEmailX" class="form-control form-control-lg text-center my-4" value="" placeholder="Insira o Nome" />

                <input type="number" name="idade" id="typePasswordX" class="form-control form-control-lg my-4 text-center"  placeholder="Insira a Idade" />
                <input type="text" name="cep" class="form-control form-control-lg my-4 text-center" placeholder="Insira o Cep" />
                <input type="number" name="saldo" class="form-control form-control-lg my-4 text-center" placeholder="Insira o Saldo" />
              </div>

              <input class="btn btn-outline-light btn-lg px-2 " type="submit" name="home" value="Tela Inicial"/>
              <input class="btn btn-outline-light btn-lg px-3 " type="submit" name="excluir" value="Excluir"/>
              <input class="btn btn-outline-light btn-lg px-3" type="submit" name="concluir" value="Finalizar Edição"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
