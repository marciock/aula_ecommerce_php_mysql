<?php
require_once __DIR__."/../core/database.php";

$id=$_GET['id'];
$listImagem=$pdo->query("SELECT * FROM imagens  WHERE id_produto={$id}");

$listImagem->execute();

$fetchImagem=$listImagem->fetchAll();

$listProduto=$pdo->query("SELECT p.id_produto,
p.produto,
p.id_marca,
p.descricao,
p.preco,
p.img,
m.id_marca,
m.marca  FROM  produtos  AS p
INNER JOIN marcas  AS m
ON p.id_marca=m.id_marca
 WHERE p.id_produto={$id}");

$listProduto->execute();

$fetchProduto=$listProduto->fetch();


//$json=json_encode($fetchImagem);


require_once __DIR__."/../views/car.php";
//$json=json_encode($fetchProduto);



