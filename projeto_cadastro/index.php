<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    
    <link rel="stylesheet" href="index.css">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>Cabeçalho</h1>
    </header>

    <section>
  <form id="form">
  <div class="modal-content">
    
    <div class="container-fluid">
      <div class="col"></div>
          <div id="abacate" style="text-align: center">
              
            

              <label for="nome"><b>Nome:</b></label><br>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui!"><br><br>

              <label for="data_nascimento"><b>Data de Nascimento:</b></label><br>
              <input type="date" id="data_nascimento" name="data_nascimento"><br><br>

              <button id="btn_cadastrar" type="button">Cadastrar</button>
          </div>
    </div>
</form>
</section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="index.js"></script>
</html>
