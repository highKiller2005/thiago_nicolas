<div class="home">
  <div>
    <div class="paginacao">
      <span>Página 1</span>
      <button class="ativo">Anterior</button>
      <button class="inativo">Próximo</button>
    </div>

    <div class="criar">
      <a href="criar.php?tipo=aula" class="button criar">
        Adicionar Aula
      </a>
      <a href="criar.php?tipo=aula" class="button criar">
        Adicionar Professor
      </a>
    </div>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Materia</th>
      <th>Salário</th>
      <th>Ações</th>
    </tr>
    <tr>
      <td>12</td>
      <td>Thiago Luciano</td>
      <td>Filosofia</td>
      <td>R$ 12.300,00</td>
      <td>
        <div>
          <a href="visualizar.php" class="button ver">
            Visualizar
          </a>
          <a href="deletar.php" class="button deletar">
            Deletar
          </a>
        </div>
      </td>
    </tr>
  </table>
</div>