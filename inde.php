<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Resultado</title>
</head>
<body>
  <?php
   require_once'imc.php';
   $da1=new imc;
   $nome1=$_GET["nome"];
   $peso1=$_GET["peso"];
   $altura1=$_GET["altura"];
   
   $IMC=$da1->Calcual_imc($peso1,$altura1);

   echo $da1->nome=$nome1." Seu Indice de massa Corporal é ".number_format($IMC,1)."<br>";

  ?>
</body>
</html>