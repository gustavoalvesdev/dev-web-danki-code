<form method="GET" action="resultado.php">
    <label>Primeiro Número:</label><br>
    <input type="number" name="num1"><br><br>
    <label>Segundo Número:</label><br>
    <input type="number" name="num2"><br><br>
    <label>Operação:</label><br>
    <select name="operacao">
        <option value="1">Soma</option>
        <option value="2">Subtração</option>
        <option value="3">Multiplicação</option>
        <option value="4">Divisão</option>
        <option value="5">Resto da Divisão</option>
    </select><br><br>
    <input type="submit" name="acao" value="Calcular">

</form>