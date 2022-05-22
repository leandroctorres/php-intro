<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 15;

//var_dump($nome);
//var_dump($idade);

if($idade >=0 && $idade <=12)
{
	for($i = 0; $i <= count($categorias)-1; $i++)
	{
		if($categorias[$i] == 'infantil')
			echo 'O nadador ',$nome, ' compete na categoria infantil';
	}
}
else if($idade >= 13 && $idade <=18)
{
	for($i = 0; $i <= count($categorias)-1; $i++)
	{
		if($categorias[$i] == 'adolescente')
			echo 'O nadador ',$nome, ' compete na categoria adolescente';
	}
}
else
{
	echo 'adulto';
}
