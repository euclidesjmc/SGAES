<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleindex.css">
    <title>Resultados dos Exames de Acesso - SGAES</title>
</head>
<body>
    <center>
        <!-- Banner Start -->
        <div id="banner">
          <h2 id="title">
        SGAES
          </h2>
          <h5 id="subtitle">
             Sistema de Gestão de Acesso ao Ensino Superior
          </h5>
        </div>
        <!-- Banner End -->
        <!-- Body Start -->
        <h3 id="bodymessage1">
          Escola Superior Pedagógica do Bengo
        </h3>

          <h5 id="bodymessage2">
          Consulte Aqui o Resultado do seu Exame de Acesso
          </h5>
          <h2 id="bodymessage2">
      <button id="login">
        Consultar Resultado
          </button>
              <script>
              document.getElementById("login").onclick = function() {
                  window.location.href = "https://candidaturas.binary.ao/candidato/login.php";
              };
          </script>
          &nbsp&nbsp
          <button id="signup">
            Portal da ESPB
          </button> 
              <script>
              document.getElementById("signup").onclick = function() {
                  window.location.href = "https://portal.espbengo.edu.ao";
              };
          </script>
        <!-- Body End -->
        <!-- Footer Start -->
        <div id="footer">
          <h4 id="footertitle">
              DTIC © 2024
            </h4>
          <h4 id="footercontent">
              Departamento de Tecnologias de Informação e Comunicação
              <br><br>
              Questões? Comentários? Contacte através do <a href="mailto:dtic@espbengo.edu.ao"> dtic@espbengo.edu.ao</a>.
          </h4>
        </div>
        <!-- Footer End -->
      </center>
</body>
</html>
