<!DOCTYPE html>
<html>
<body>

<h2>Cadastro do Piloto</h2>

<form action="acao.php" method="post">
    <input type="hidden" name="tipo" value="piloto">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="text" name="idade"><br><br>
    Nacionalidade: <input type="text" name="nacionalidade"><br><br>

    <input type="submit" value="Enviar">
</form>

<h2>Cadastro do Piloto Veterano</h2>

<form action="acao.php" method="post">
    <input type="hidden" name="tipo" value="veterano">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="text" name="idade"><br><br>
    Nacionalidade: <input type="text" name="nacionalidade"><br><br>
    Títulos: <input type="text" name="titulos"><br><br>
    Anos de Carreira: <input type="text" name="anosCarreira"><br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
