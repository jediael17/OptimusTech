<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Abertura de Chamado</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
    form { background: #fff; padding: 20px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    label { display: block; margin-top: 10px; font-weight: bold; }
    input, select { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; }
    button { margin-top: 15px; padding: 10px; width: 100%; border: none; background: #007bff; color: #fff; border-radius: 5px; cursor: pointer; }
    button:hover { background: #0056b3; }
  </style>
</head>
<body>

  <h2>Abertura de Chamado</h2>
  <form action="salvar_chamado.php" method="POST">
    <label>Chamado:</label>
    <input type="text" name="chamado" required>

    <label>Patrimônio:</label>
    <input type="text" name="patrimonio" required>

    <label>RQ:</label>
    <input type="text" name="rq" required>

    <label>Modelo do Equipamento:</label>
    <input type="text" name="modelo_equipamento" required>

    <label>Nome do Colaborador:</label>
    <input type="text" name="nome_colaborador" required>

    <label>CR:</label>
    <input type="text" name="cr" required>

    <label>Data:</label>
    <input type="date" name="data" required>

    <label>Tipo de Chamado:</label>
    <select name="tipo_chamado" required>
      <option value="Suporte">Suporte</option>
      <option value="Manutenção">Manutenção</option>
      <option value="Instalação">Instalação</option>
    </select>

    <label>Status:</label>
    <select name="status" required>
      <option value="Aberto">Aberto</option>
      <option value="Em andamento">Em andamento</option>
      <option value="Fechado">Fechado</option>
    </select>

    <button type="submit">Salvar Chamado</button>
  </form>

</body>
</html>
