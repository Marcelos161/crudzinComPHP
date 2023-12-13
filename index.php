<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pequeno crud</h1>
    <form action="cadastrar.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="cadastrar">
    </form>
        <h1><strong>Lista de ids e Nomes registrados</strong></h1>
        <?php 
        include("config.php");
           
        $sql = "SELECT * FROM foods";
           
        $res = $conexao->query($sql);

        $qtd = $res -> num_rows;

        if($qtd > 0) {
            print "<table>";
            while($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>".$row -> ID."</td>";
                print "<td>".$row -> Nome. "</td>";
                print "</tr>";
            }
            print "</table>";
        } else {
            print"<p> Nao existem resultados na base de dados <p>";
        }
        ?>


</body>
</html>