<?php

//Nesta linha criamos uma vari�vel para o nosso arquivo contador.txt
//$arquivo = "contador.txt";
$arquivo = $_POST["caminho"]; 
//Abrimos ent�o nosso arquivo(contador.txt) no modo "r" (READ) ou seja, somente leitura
$abrir = fopen($arquivo, "r");
 
//� feito a leitura do arquivo(contador.txt) e armazenado o valor na vari�vel $total
// Exemplo ele ir� ler e armazenar o valor j� existente (2 por exemplo)
$total = fread($abrir, filesize($arquivo));
 
//Fechamos o arquivo
fclose($abrir);
 
// Abrimos novamente o arquivo(contador.txt) no modo "w" (WRITE) ou seja, no mode de escrita
$abrir = fopen($arquivo, "w");
 
// Somamos +1 em nossa vari�vel $total, como no exemplo 2 + 1 = 3
$total = $total + 1;
 
// Gravamos ent�o no arquivo(contador.txt) o total de visitas somando +1
// Em nosso exemplo ficaria a vari�vel $total tendo o valor de 3
$salva = fwrite($abrir, $total);
 
// Fechamos novamente o nosso arquivo(contador.txt)
fclose($abrir);
 
//Agora mostraremos quantas visitas temos at� o momento
//echo $total;
?>