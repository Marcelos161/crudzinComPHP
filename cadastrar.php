<?php 
        include("config.php");
        $nome = $_GET["nome"];

        $sql = "INSERT INTO foods (nome) VALUES ('{$nome}')";

        $res = $conexao->query($sql);
    

    if($res) {
        print "<script>alert('cadastrado com sucesso')</script>";
        print "<script>location.href='index.php';</script>";
    } 

    ?>