<?php 

  if (!isset($_SESSION)) {
    session_start();
  }

  $dataAtual = new DateTime();
  $_SESSION['dataAtual'] = $dataAtual->format('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <script src='../dist/index.global.js'></script>
    <title>fullCalendar</title>
</head>
<body>

    <div id="calendar"></div>


    <div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="visualizarModalLabel">Confirmação</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-3">Título:</dt>
                    <dd class="col-sm-9" id="visualizarTitle"></dd>
                    <dt class="col-sm-3">Início:</dt>
                    <dd class="col-sm-9" id="visualizarInicio"></dd>
                    <dt class="col-sm-3">Fim:</dt>
                    <dd class="col-sm-9" id="visualizarFim"></dd>
                </dl>
                <br>
              <p>Deseja marcar presença?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
              <button type="button" class="btn btn-primary">Sim</button>
            </div>
          </div>
        </div>
      </div>




      <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="cadastrarModalLabel">Agendar aula</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="formCadEvento" method="post">

                    <div class="row mb-3">
                        <label for="cad_title" class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cad_title" id="cad_title" placeholder="Nome da aula">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cad_start" class="col-sm-2 col-form-label">Data Início</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" class="form-control" name="cad_start" id="cad_start">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cad_end" class="col-sm-2 col-form-label">Data Fim</label>
                        <div class="col-sm-10">
                          <input type="datetime-local" class="form-control" name="cad_end" id="cad_end">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cad_end" class="col-sm-2 col-form-label">Cor</label>
                        <div class="col-sm-10">
                            <select name="cad_color" id="cad_color" class="form-control">
                                <option value="">Escolha uma cor</option>
                                <option style="color: #0071c5;" value="#0071c5">Azul Turquesa</option>
                                <option style="color: #FF4500;" value="#FF4500">Laranja</option>
                                <option style="color: #8B4513;" value="#8B4513">Marrom</option>
                                <option style="color: #1C1C1C;" value="#1C1C1C">Preto</option>
                                <option style="color: #436EEE;" value="#436EEE">Azul Marinho</option>
                                <option style="color: #A020F0;" value="#A020F0">Roxo</option>
                                <option style="color: #40E0DB;" value="#40E0DB">Turquesa</option>
                                <option style="color: #228B22;" value="#228B22">Verde</option>
                                <option style="color: #8B0000;" value="#8B0000">Vermelho</option>
                                <option style="color: #FFD700;" value="#FFD700">Amarelo</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" name="btnCadEvent" id="btnCadEvent">Cadastrar</button>

                </form>

            </div>
          </div>
        </div>
      </div>

    <!-- script -->
    <script src="../javascript/script.js" type="module"></script>
    <script src="../javascript/jquery-3.7.1.min.js"></script>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <script src="
    https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js
    "></script>
    <script src="../javascript/index.global.min.js"></script>
    <script src="../javascript/bootstrap5/index.global.min.js"></script>
    <script src="../javascript/core/locales-all.global.min.js"></script>
    
</body>
</html>