<head>
  <link rel="stylesheet" href="../styles/visualizarProf.css">
  <link rel="stylesheet" href="../styles/index.css">
</head>
<div id="visualizarProf">
  <a href="index.php" id="voltarProf">Voltar</a>
  <div id="centralizar">
    <div id="informacaoProf">
      <form action="editar.php" method="POST">
        <div id="fotinha">
          <label for="nome">Foto</label>
          <input type="file" name="file">
        </div>
        <div id="infoPessoa">
          <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
          </div>

          <div>
            <label for="nome">Matéria:</label>
            <input type="text" name="materia">
          </div>

          <div>
            <label for="nome">Salário:</label>
            <input type="text" name="salario">
          </div>
          
          <button type="submit">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>