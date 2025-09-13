<!-- P
Para iniciar o servidor PHP, execute o comando: php -S localhost:8000
na pasta onde está o arquivo index.php
-->

<form action="processa.php" method="POST">
  Senha do operador: <input type="text" name="senha" required><br><br>

  <h4>Produtos:</h4>
  
  <label>Produto 01</label>
  <select name="produto1">
    <option value="arroz">Arroz</option>
    <option value="feijao">Feijão</option>
    <option value="oleo">Óleo</option>
  </select>
  <label>Quantidade:</label>
  <input type="number" name="qtd1"><br><br>

  <label>Produto 02</label>
  <select name="produto2">
    <option value="arroz">Arroz</option>
    <option value="feijao">Feijão</option>
    <option value="oleo">Óleo</option>
  </select>
  <label>Quantidade:</label>
  <input type="number" name="qtd2"><br><br>

  <label>Produto 03</label>
  <select name="produto3">
    <option value="arroz">Arroz</option>
    <option value="feijao">Feijão</option>
    <option value="oleo">Óleo</option>
  </select>
  <label>Quantidade:</label>
  <input type="number" name="qtd3"><br><br>

  <!-- Repetir para produto2 e produto3 -->

  <h5>Forma de pagamento:</h5>
  <input type="radio" name="pagamento" value="pix"> Pix
  <input type="radio" name="pagamento" value="dinheiro"> Dinheiro
  <input type="radio" name="pagamento" value="cartao"> Cartão<br><br>

  <input type="submit" value="Enviar">
</form>
