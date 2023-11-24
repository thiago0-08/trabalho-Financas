<!DOCTYPE html>
<html lang="en">

<head>
  
  <link rel="stylesheet" href="graficos.css">
  <link rel="stylesheet" href="quadrados.css">
  <link rel="stylesheet" href="barralateral.css">
  <link rel="stylesheet" href="stylemenu.css">
  <link rel="stylesheet" href="formulario.css">
  <link rel="stylesheet" href="dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">NOME USUARIO</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="index2.html">Sair</a>
      </div>
    </div> 
  </header>
  
  <div class="container-fluid" style="font-family: 'Montserrat', sans-serif">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <div>
            <img src="https://cdn-icons-png.flaticon.com/512/3106/3106921.png" class="img-fluid" alt="">
          </div>
          <ul class="nav flex-column">
            <li class="nav-item"  style="padding-bottom:30px;padding-top:40%;">
              <a class="nav-link" href="cartao.html">
                <span data-feather="file"></span>
                Cartao de Credito
              </a>
            </li>
            <li class="nav-item"  style="padding-bottom:30px;">
              <a class="nav-link" href="extrato.php">
                <span data-feather="file"></span>
                Extrato
              </a>
            </li>
            <li class="nav-item"  style="padding-bottom:30px;">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Opcoes
              </a>
            </li>
            <li class="nav-item"  style="padding-bottom:30px;">
              <a class="nav-link" href="perfil.php">
                <span data-feather="users"></span>
                Perfil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.html">
                <span data-feather="bar-chart-2"></span>
                Sair
              </a>
            </li>
          </ul>
        </div>
      </nav>
  


            
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="font-family: 'Montserrat', sans-serif">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Cartao Cadastrado</h4>
                  </div>
                  <div class="card-body" style="font-family: 'Montserrat', sans-serif">                    
                    <div class="Ncartao"><h2 style="color: rgb(7, 7, 7)">Numero do Cartao: </h2> <h2><span id="exibNumeroCartao"></span></h2></div>
                    <div class="nome_cartao"><h2>Nome do Titular: <span id="exibNomeTitular"></span></h2></div>
                    <div class="data_vali"><h2>Data de Validade: <span id="exibDataValidade"></span></h2></div>
                  </div>
                </div>
              </div>
              <div class="col">

                <div class="card mb-4 rounded-3 shadow-sm"  style="font-family: 'Montserrat', sans-serif">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Total Gasto</h4>
                  </div>
                  <div class="card-body">                    
                    <div class="">
                      <div class="">
                        <canvas id="grafico" width="400" height="350"></canvas>
                      </div>
                      </div>
                  </div>
                </div>


                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" style="font-family: 'Montserrat', sans-serif"  >
                  <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                      <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Incluir Gasto</h4>
                      </div>
                      <div class="card-body">                    
                        <form id="formulario" class="row g-3">
                         <div class="col-md-12">
                            <label for="alimentacao">Alimentacao:</label>
                            <input type="number" class="form-control form-control-sm" id="alimentacao" name="alimentacao" min="0">
                         </div>
                         <div class="col-md-12">
                            <label for="transporte">Transporte:</label>
                            <input type="number" class="form-control" id="transporte" name="transporte" min="0">
                         </div>
                         <div class="col-md-12">
                          <label for="lazer">Lazer:</label>
                          <input type="number" class="form-control" id="lazer" name="lazer" min="0">
                         </div>
                         <div class="col-md-12">
                            <label for="outros">Outros:</label>
                            <input type="number"class="form-control" id="outros" name="outros" min="0">
                         </div>
                          <button type="button" onclick="atualizarGrafico1()" class="botao_form">Atualizar Grafico</button>
                          <button type="button" onclick="zerarGrafico()" class="botao_zera">Zerar Grafico</button>
                        </form>
                      </div>
                      </div>
                  </div>

                  <div class="col" >
                    <div class="card mb-4 rounded-3 shadow-sm">
                      <div class="card-header py-3">
                        <h4 class="my-0 fw-normal" style="font-family: 'Montserrat', sans-serif">Gasto/mes</h4>
                      </div>
                      <div class="card-body">                    
                        <div class="">
                          <div class="">
                            <canvas id="myChart" width="400" height="400"></canvas>                      
                          </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" style="font-family: 'Montserrat', sans-serif" >
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Gasto no Mes</h4>
                  </div>
                  <div class="card-body">                    
                    <form id="expenseForm">
                      <label for="expenseAmount">Insira o valor gasto no mes:</label>
                      <input type="number" id="expenseAmount" name="expenseAmount" required>
                      <br>
                      <br>
                      <button type="submit" class="botao_form"> Registrar Despesa</button>
                      <br>
                      <br>
                      <button onclick="limparGrafico()" class="botao_zera">Limpar Gráfico</button>

                    </form>
                  </div>
                  </div>
              </div>
  
              
              </div>
        </div>
    
      </main>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

  <script src="gastomensal.js"></script>
  <script src="graficodespesas.js"></script>

  
  <script>
    // Obter os dados do LocalStorage
    const numeroCartao = localStorage.getItem("numeroCartao") || 'N/A';
    const nomeTitular = localStorage.getItem("nomeTitular") || 'N/A';
    const dataValidade = localStorage.getItem("dataValidade") || 'N/A';

    // Exibir os dados
    document.getElementById("exibNumeroCartao").textContent = numeroCartao;
    document.getElementById("exibNomeTitular").textContent = nomeTitular;
    document.getElementById("exibDataValidade").textContent = dataValidade;

    // Limpar os dados do LocalStorage
    localStorage.removeItem("numeroCartao");
    localStorage.removeItem("nomeTitular");
    localStorage.removeItem("dataValidade");
</script>
  
</body>

</html>
